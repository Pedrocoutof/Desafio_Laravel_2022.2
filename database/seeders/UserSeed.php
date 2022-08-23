<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Criando um ADM
        DB::table('users')->insert(
            [
                'name' => 'Pedro',
                'email' => 'pedro@gmail.com',
                'password' => '123',
                'permission' => 'administrator'
            ]
        );

        // Criando um cliente
        DB::table('users')->insert(
            [
                'name' => 'João',
                'email' => 'joao@gmail.com',
                'password' => '123',
            ]
        );
    }
}
