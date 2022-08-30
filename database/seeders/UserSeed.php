<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{

    public function run()
    {
        // Criando um ADM
        User::insert(
            [
                'name' => 'Pedro',
                'email' => 'pedro@gmail.com',
                'password' => '123',
                'permission' => 'administrator'
            ]
        );

        // Criando um cliente
        User::insert(
            [
                'name' => 'João',
                'email' => 'joao@gmail.com',
                'password' => '123',
            ]
        );
    }
}
