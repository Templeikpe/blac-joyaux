<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Services\SmsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ClientAuthController extends Controller
{

    public function showInscription()
    {
        return view('inscription');
    }


    public function inscrire(Request $request, SmsService $sms)
    {

        $data = $request->validate([
            'nom'       => 'required|string|max:255',
            'email'     => 'required|email|unique:clients,email',
            'telephone' => 'required|string|max:20|unique:clients,telephone',
            'password'  => 'required|string|min:6|confirmed',
        ]);


        $client = Client::create([

            'nom'       => $data['nom'],

            'email'     => $data['email'],

            'telephone' => $data['telephone'],

            'password'  => Hash::make($data['password']),

        ]);



        // Connexion automatique du client
        Auth::guard('client')->login($client);



        // Vérification email Laravel si disponible
        if (method_exists($client, 'sendEmailVerificationNotification')) {

            $client->sendEmailVerificationNotification();

        }



        // Création OTP téléphone
        $code = $client->genererOtp();



        // Envoi SMS
        $sms->envoyer(
            $client->telephone,
            "Blac Joyaux : votre code de vérification est {$code}"
        );



        return redirect()
            ->route('verification.telephone')
            ->with(
                'succes',
                'Un code de vérification a été envoyé.'
            );
    }





    public function showConnexion()
    {
        return view('connexion');
    }





    public function connecter(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
        ]);

        // Trouve le client existant, ou en crée un nouveau automatiquement
        $client = Client::firstOrCreate(
            ['email' => $data['email']],
            ['nom' => explode('@', $data['email'])[0]]
        );

        $code = $client->genererOtp();

        Mail::raw(
            "Bonjour,\n\nVotre code de connexion Blac Joyaux est : {$code}\n\nCe code est valable 10 minutes.\n\nSi vous n'êtes pas à l'origine de cette demande, ignorez cet e-mail.",
            function ($message) use ($client) {
                $message->to($client->email)
                        ->subject('Votre code de connexion — Blac Joyaux');
            }
        );

        $request->session()->put('connexion_client_id', $client->id);

        return redirect()
            ->route('verification.connexion')
            ->with('succes', 'Un code de connexion a été envoyé à ' . $client->email);
    }






    // ===============================
    // CONNEXION PAR CODE E-MAIL
    // ===============================

    public function showVerificationConnexion(Request $request)
    {
        $clientId = $request->session()->get('connexion_client_id');

        if (!$clientId) {
            return redirect()->route('connexion');
        }

        $client = Client::find($clientId);

        if (!$client) {
            $request->session()->forget('connexion_client_id');
            return redirect()->route('connexion');
        }

        return view('verification-connexion', compact('client'));
    }

    public function verifierCodeConnexion(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:6',
        ]);

        $clientId = $request->session()->get('connexion_client_id');

        if (!$clientId) {
            return redirect()->route('connexion');
        }

        $client = Client::find($clientId);

        if (!$client) {
            $request->session()->forget('connexion_client_id');
            return redirect()->route('connexion');
        }

        if (
            $client->otp_code == $request->code
            && $client->otp_expires_at
            && now()->lt($client->otp_expires_at)
        ) {
            $client->update([
                'otp_code' => null,
                'otp_expires_at' => null,
                'email_verified_at' => $client->email_verified_at ?? now(),
            ]);

            Auth::guard('client')->login($client);
            $request->session()->forget('connexion_client_id');
            $request->session()->regenerate();

            return redirect()
                ->route('mon-compte')
                ->with('succes', 'Connexion réussie !');
        }

        return back()->withErrors([
            'code' => 'Code incorrect ou expiré.',
        ]);
    }

    public function renvoyerCodeConnexion(Request $request)
    {
        $clientId = $request->session()->get('connexion_client_id');

        if (!$clientId) {
            return redirect()->route('connexion');
        }

        $client = Client::find($clientId);

        if (!$client) {
            $request->session()->forget('connexion_client_id');
            return redirect()->route('connexion');
        }

        $code = $client->genererOtp();

        Mail::raw(
            "Bonjour,\n\nVotre nouveau code de connexion Blac Joyaux est : {$code}\n\nCe code est valable 10 minutes.",
            function ($message) use ($client) {
                $message->to($client->email)
                        ->subject('Votre nouveau code de connexion — Blac Joyaux');
            }
        );

        return back()->with('succes', 'Un nouveau code a été envoyé à ' . $client->email);
    }


    public function deconnecter(Request $request)
    {

        Auth::guard('client')->logout();


        $request->session()->invalidate();


        $request->session()->regenerateToken();


        return redirect('/');

    }






    public function monCompte()
    {

        $client = Auth::guard('client')->user();



        if (!$client) {

            return redirect()
                ->route('connexion');

        }



        return view(
            'mon-compte',
            compact('client')
        );

    }








    // ===============================
    // VERIFICATION TELEPHONE OTP
    // ===============================



    public function showVerificationTelephone()
    {

        $client = Auth::guard('client')->user();



        if (!$client) {

            return redirect()
                ->route('connexion');

        }



        if ($client->telephoneVerifie()) {

            return redirect()
                ->route('mon-compte');

        }



        return view(
            'verification-telephone',
            compact('client')
        );

    }






    public function verifierOtp(Request $request)
    {

        $request->validate([

            'code' => 'required|string|max:6',

        ]);



        $client = Auth::guard('client')->user();



        if (!$client) {

            return redirect()
                ->route('connexion');

        }




        if (

            $client->otp_code == $request->code

            &&

            $client->otp_expires_at

            &&

            now()->lt($client->otp_expires_at)

        ) {



            $client->update([

                'phone_verified_at' => now(),

                'otp_code' => null,

                'otp_expires_at' => null,

            ]);




            return redirect()

                ->route('mon-compte')

                ->with(

                    'succes',

                    'Votre compte est vérifié avec succès.'

                );

        }




        return back()

            ->withErrors([

                'code' => 'Code incorrect ou expiré.'

            ]);

    }








    public function renvoyerOtp(SmsService $sms)
    {

        $client = Auth::guard('client')->user();



        if (!$client) {

            return redirect()
                ->route('connexion');

        }




        $code = $client->genererOtp();




        $sms->envoyer(

            $client->telephone,

            "Blac Joyaux : votre nouveau code est {$code}"

        );




        return back()

            ->with(

                'succes',

                'Un nouveau code a été envoyé.'

            );

    }

}
