<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Laratrust\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Laratrust\Models\LaratrustRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //create super-admin role
        $superAdminRole = Role::create([
            'name' => 'super-admin',
            'display_name' => 'Super Admin', // optional
            'description' => 'User is the Super Admin of a given project', // optional
        ]);

        //create a super admin user and attach super_admin role
        if(env('APP_ENV') == 'local'){
            $superAdmin = User::create([
                'name' => 'super Admin',
                'username' => 'superadmin',
                'email' => 'super@admin.com',
                'password' => Hash::make('Password'),
                'active' => 1,
            ]);

            $superAdmin->addRole($superAdminRole);
        }

    }
}
