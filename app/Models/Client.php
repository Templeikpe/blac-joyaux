<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'password',
        'otp_code',
        'otp_expires_at',
        'phone_verified_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'otp_code',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'email_verified_at' => 'datetime',
            'phone_verified_at' => 'datetime',
            'otp_expires_at' => 'datetime',
        ];
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class)->latest();
    }

    public function telephoneVerifie(): bool
    {
        return !is_null($this->phone_verified_at);
    }

    public function genererOtp(): string
    {
        $code = (string) random_int(100000, 999999);
        $this->update([
            'otp_code' => $code,
            'otp_expires_at' => now()->addMinutes(10),
        ]);
        return $code;
    }
}
