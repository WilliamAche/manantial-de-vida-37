<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run()
     {
        $arrayUsers = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role_id' => '1',
                'password' => Hash::make('12345678'),
            ]
        ];
        foreach ($arrayUsers as $users ) {
            User::create($users);
        }
    }
}
