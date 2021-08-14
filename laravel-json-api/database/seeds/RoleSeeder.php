<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(["name" => "Admin", "slug" => "admin"]);
        Role::create(["name" => "Creator", "slug" => "creator"]);
    }
}
