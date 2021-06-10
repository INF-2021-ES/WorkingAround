<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        Permission::create(['name' => 'create-service']); // Worker
        Permission::create(['name' => 'reserve-service']); // Client
        Permission::create(['name' => 'create-category']); // Admin

        $worker = Role::create(['name' => 'worker']);
        $worker->givePermissionTo('create-service');

        $client = Role::create(['name' => 'client']);
        $client->givePermissionTo('reserve-service');

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('create-category');
        
    }
}
