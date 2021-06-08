<?php

namespace Database\Seeders;

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
        
        Permission::create(['name' => 'create-service']);
        Permission::create(['name' => 'reserve-service']);
        Permission::create(['name' => 'create-category']);

        $worker = Role::create(['name' => 'worker']);
        $worker->givePermissionTo('create-service');

        $client = Role::create(['name' => 'client']);
        $client->givePermissionTo('reserve-service');

        
    }
}
