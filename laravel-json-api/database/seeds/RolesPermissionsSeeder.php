<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\UserRole;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Admin role
        // AuthServiceProvider içindeki Gate::before rule; kodu ile tüm permissionlara otomatik erişim sağlar.
        $role1 = UserRole::create(['name' => 'admin']);

        // All permissions
        $permissions = [
            // books permissions
            'list-books',
            'create-book',
            'show-book',
            'update-book',
            'delete-book',

            // authors permissions
            'list-authors',
            'create-author',
            'show-author',
            'update-author',
            'delete-author',

            // members permissions
            'list-members',
            'create-member',
            'show-member',
            'update-member',
            'delete-member',

            // member-types permissions
            'list-member-types',
            'create-member-type',
            'show-member-type',
            'update-member-type',
            'delete-member-type',

            // publishers permissions
            'list-publishers',
            'create-publisher',
            'show-publisher',
            'update-publisher',
            'delete-publisher',

            // genres permissions
            'list-genres',
            'create-genre',
            'show-genre',
            'update-genre',
            'delete-genre',

            // punishments permissions
            'list-punishments',
            'create-punishment',
            'show-punishment',
            'update-punishment',
            'delete-punishment',

            // languages permissions
            'list-languages',
            'create-language',
            'show-language',
            'update-language',
            'delete-language',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $user = User::where('id',1)->first();
        $user->assignRole($role1);

        // -------------------------------------------------------------------------------------------------------------

        // Manager role
        $role2 = UserRole::create(['name' => 'manager']);

        // Manager permissions
        $permissions = [
            // books permissions
            'list-books',
            'create-book',
            'show-book',
            'update-book',
            'delete-book',

            // authors permissions
            'list-authors',
            'create-author',
            'show-author',
            'update-author',
            'delete-author',

            // members permissions
            'list-members',
            'create-member',
            'show-member',
            'update-member',
            'delete-member',

            // member-types permissions
            'list-member-types',
            'create-member-type',
            'show-member-type',
            'update-member-type',
            'delete-member-type',

            // publishers permissions
            'list-publishers',
            'create-publisher',
            'show-publisher',
            'update-publisher',
            'delete-publisher',

            // punishments permissions
            'list-punishments',
            'create-punishment',
            'show-punishment',
            'update-punishment',
            'delete-punishment',
        ];

        foreach ($permissions as $permission) {
            $role2->givePermissionTo($permission);
        }

        $user = User::where('id',2)->first();
        $user->assignRole($role2);

        // -------------------------------------------------------------------------------------------------------------

        // Editor role
        $role3 = UserRole::create(['name' => 'editor']);

        // Editor permissions
        $permissions = [
            // books permissions
            'list-books',
            'create-book',
            'show-book',
            'update-book',
            'delete-book',

            // authors permissions
            'list-authors',
            'create-author',
            'show-author',
            'update-author',
            'delete-author',

            // publishers permissions
            'list-publishers',
            'create-publisher',
            'show-publisher',
            'update-publisher',
            'delete-publisher',
        ];

        foreach ($permissions as $permission) {
            $role3->givePermissionTo($permission);
        }

        $user = User::where('id',3)->first();
        $user->assignRole($role3);
    }
}
