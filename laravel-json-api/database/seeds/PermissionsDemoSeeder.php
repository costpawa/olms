<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;

class PermissionsDemoSeeder extends Seeder
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

        // create books permissions
        Permission::create(['name' => 'list-books']);
        Permission::create(['name' => 'create-book']);
        Permission::create(['name' => 'show-book']);
        Permission::create(['name' => 'update-book']);
        Permission::create(['name' => 'delete-book']);

        // create authors permissions
        Permission::create(['name' => 'list-authors']);
        Permission::create(['name' => 'create-author']);
        Permission::create(['name' => 'show-author']);
        Permission::create(['name' => 'update-author']);
        Permission::create(['name' => 'delete-author']);

        // create members permissions
        Permission::create(['name' => 'list-members']);
        Permission::create(['name' => 'create-member']);
        Permission::create(['name' => 'show-member']);
        Permission::create(['name' => 'update-member']);
        Permission::create(['name' => 'delete-member']);

        // create member-types permissions
        Permission::create(['name' => 'list-member-types']);
        Permission::create(['name' => 'create-member-type']);
        Permission::create(['name' => 'show-member-type']);
        Permission::create(['name' => 'update-member-type']);
        Permission::create(['name' => 'delete-member-type']);

        // create publishers permissions
        Permission::create(['name' => 'list-publishers']);
        Permission::create(['name' => 'create-publisher']);
        Permission::create(['name' => 'show-publisher']);
        Permission::create(['name' => 'update-publisher']);
        Permission::create(['name' => 'delete-publisher']);

        // create genres permissions
        Permission::create(['name' => 'list-genres']);
        Permission::create(['name' => 'create-genre']);
        Permission::create(['name' => 'show-genre']);
        Permission::create(['name' => 'update-genre']);
        Permission::create(['name' => 'delete-genre']);

        // create punishments permissions
        Permission::create(['name' => 'list-punishments']);
        Permission::create(['name' => 'create-punishment']);
        Permission::create(['name' => 'show-punishment']);
        Permission::create(['name' => 'update-punishment']);
        Permission::create(['name' => 'delete-punishment']);

        // create languages permissions
        Permission::create(['name' => 'list-languages']);
        Permission::create(['name' => 'create-language']);
        Permission::create(['name' => 'show-language']);
        Permission::create(['name' => 'update-language']);
        Permission::create(['name' => 'delete-language']);

        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $role0 = Role::create(['name' => 'admin']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'manager']);

        $role1->givePermissionTo('list-books');
        $role1->givePermissionTo('create-book');
        $role1->givePermissionTo('show-book');
        $role1->givePermissionTo('update-book');
        $role1->givePermissionTo('delete-book');

        $role1->givePermissionTo('list-authors');
        $role1->givePermissionTo('create-author');
        $role1->givePermissionTo('show-author');
        $role1->givePermissionTo('update-author');
        $role1->givePermissionTo('delete-author');

        $role1->givePermissionTo('list-members');
        $role1->givePermissionTo('create-member');
        $role1->givePermissionTo('show-member');
        $role1->givePermissionTo('update-member');
        $role1->givePermissionTo('delete-member');

        $role1->givePermissionTo('list-member-types');
        $role1->givePermissionTo('create-member-type');
        $role1->givePermissionTo('show-member-type');
        $role1->givePermissionTo('update-member-type');
        $role1->givePermissionTo('delete-member-type');

        $role1->givePermissionTo('list-publishers');
        $role1->givePermissionTo('create-publisher');
        $role1->givePermissionTo('show-publisher');
        $role1->givePermissionTo('update-publisher');
        $role1->givePermissionTo('delete-publisher');

        $role1->givePermissionTo('list-punishments');
        $role1->givePermissionTo('create-punishment');
        $role1->givePermissionTo('show-punishment');
        $role1->givePermissionTo('update-punishment');
        $role1->givePermissionTo('delete-punishment');

        // ------------------------------------------------

        $role2 = Role::create(['name' => 'editor']);

        $role2->givePermissionTo('list-books');
        $role2->givePermissionTo('create-book');
        $role2->givePermissionTo('show-book');
        $role2->givePermissionTo('update-book');
        $role2->givePermissionTo('delete-book');

        $role2->givePermissionTo('list-authors');
        $role2->givePermissionTo('create-author');
        $role2->givePermissionTo('show-author');
        $role2->givePermissionTo('update-author');
        $role2->givePermissionTo('delete-author');

        $role2->givePermissionTo('list-publishers');
        $role2->givePermissionTo('create-publisher');
        $role2->givePermissionTo('show-publisher');
        $role2->givePermissionTo('update-publisher');
        $role2->givePermissionTo('delete-publisher');

        // create demo users and assign roles
        $user = User::find(1)->first();
        $user->assignRole($role0);

        $user = User::create([
            'name' => 'Manager',
            'email' => 'manager@olms.com',
            'password' => '123456',
        ]);
        $user->assignRole($role1);

        $user = User::create([
            'name' => 'Editor',
            'email' => 'editor@olms.com',
            'password' => '123456',
        ]);
        $user->assignRole($role2);
    }
}
