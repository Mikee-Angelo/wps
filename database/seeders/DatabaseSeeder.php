<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // Create some default roles
        $sa = Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Student']);
        
        // Create super admin password
        $user = User::create(['name' => 'Administrator', 'email' => 'admin@admin.com', 'password' => bcrypt('1234567890')]);

        $user->assignRole($sa);
        // \App\Models\User::factory(10)->create();

    }
}
