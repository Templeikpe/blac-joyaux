<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class SmsService
{
    public function envoyer(string $telephone, string $message): bool
    {
        // ⚠️ MODE DEV : le SMS est juste écrit dans les logs.
        // Pour un vrai envoi, remplace ce bloc par l'appel à ton fournisseur SMS
        // (Twilio, Orange SMS API CI, etc.) — voir exemple Twilio en commentaire plus bas.

        Log::info("SMS à {$telephone} : {$message}");

        return true;

        /*
        // Exemple avec Twilio (après: composer require twilio/sdk)
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $from = env('TWILIO_FROM');

        $client = new \Twilio\Rest\Client($sid, $token);
        $client->messages->create($telephone, [
            'from' => $from,
            'body' => $message,
        ]);

        return true;
        */
    }
}
