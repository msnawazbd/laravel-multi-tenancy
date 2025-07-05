<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::query()->create(['name' => 'admin']);
        Role::query()->create(['name' => 'writer']);
        Role::query()->create(['name' => 'publisher']);
        Role::query()->create(['name' => 'hr']);
    }
}
