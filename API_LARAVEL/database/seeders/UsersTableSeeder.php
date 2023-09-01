<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 


use function Laravel\Prompts\password;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('password');

        DB::table('users')->insert([
        'name' => 'mxzvrt',
        'email' => 'mxzvrt@sosa.com',
        'password' => Hash::make('12345')
]);

    }
}
