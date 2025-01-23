<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RolesEnum;
use App\Enums\PermissionsEnum;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Terry',
            'email' => 'terry@gmail.com',
        ])->assignRole(RolesEnum::Admin->value);

        User::factory()->create([
            'name' => 'Vendor',
            'email' => 'vendor@gmail.com',
        ])->assignRole(RolesEnum::Vendor->value);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
        ])->assignRole(RolesEnum::User->value);
    }
}
