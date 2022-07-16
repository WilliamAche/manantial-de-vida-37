<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run()
     {
        $arrayRoles = [
            [
                'id' => 1,
                'name' => 'admin',
            ],
            
            [
                'id' => 2,
                'name' => 'servant',
            ],

            [
                'id' => 3,
                'name' => 'executive',
            ],

        ];
        foreach ($arrayRoles as $roles ) {
            Role::create($roles);
        }
    }
}
