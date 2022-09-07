<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Uspdev\Replicado\Pessoa;

class UserFactory extends Factory
{
    
    public function definition()
    {

        $codpes = $this->faker->unique()->servidor();

        return [ 
            'codpes' => $codpes,
            'name' => Pessoa::nomeCompleto($codpes),
            'email' => Pessoa::email($codpes),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
