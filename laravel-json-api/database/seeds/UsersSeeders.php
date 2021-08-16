<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'password' => 'secret'
        ]);

        User::create([
            'name' => 'Manager',
            'email' => 'manager@olms.com',
            'password' => '123456',
        ]);

        User::create([
            'name' => 'Editor',
            'email' => 'editor@olms.com',
            'password' => '123456',
        ]);
    }
}
