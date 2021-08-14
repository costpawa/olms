<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(["name" => "List Users"  , "slug" => "list-user"]);
        Permission::create(["name" => "Create User" , "slug" => "create-user"]);
        Permission::create(["name" => "Show User"   , "slug" => "show-user"]);
        Permission::create(["name" => "Update User" , "slug" => "update-user"]);
        Permission::create(["name" => "Delete User" , "slug" => "delete-user"]);
    }
}
