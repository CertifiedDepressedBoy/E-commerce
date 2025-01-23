<?php

namespace Database\Seeders;

use App\Enums\PermissionsEnum;
use App\Enums\RolesEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $userRole = Role::create(['name' => RolesEnum::User->value]);
        $vendorRole = Role::create(['name' => RolesEnum::Vendor->value]);
        $adminRole = Role::create(['name' => RolesEnum::Admin->value]);

        $approveVendor = Permission::create([
            'name' => PermissionsEnum::ApproveVendors->value
        ]);
        $buyProducts = Permission::create([
            'name' => PermissionsEnum::BuyProducts->value
        ]);
        $sellProducts = Permission::create([
            'name' => PermissionsEnum::SellProducts->value
        ]);

        $userRole->syncPermissions([$buyProducts]);
        $vendorRole->syncPermissions([$buyProducts,$sellProducts]);
        $adminRole->syncPermissions([$buyProducts,$sellProducts,$approveVendor]);
    }
}
