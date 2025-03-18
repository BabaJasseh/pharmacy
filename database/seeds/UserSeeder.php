<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Insert some stuff
        DB::table('users')->insert(
            array(
                'id' => 1,
                'firstname' => 'Dawoud',
                'lastname' => 'Colley',
                'username' => 'Dawoud Colley',
                'email' => 'admin@harcent.com',
                'password' => Hash::make('password'),
                'avatar' => 'no_avatar.png',
                'phone' => '2448273',
                'role_id' => 1,
                'statut' => 1,
            )
        );
    }
}
