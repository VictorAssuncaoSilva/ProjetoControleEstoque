<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = [
            'codpes' => '123456',
            'email' => 'qualquer@usp.br',
            'name' => 'Fulano da Silva',
            'password' => '$2y$10$92IXUNpkj00rOQ5byMi.Ye4oKoEa3Ro9llC/.or/at2.uheWG/igi',
        ];
        User::create($user);
        User::factory(10)->create();
    }
}
