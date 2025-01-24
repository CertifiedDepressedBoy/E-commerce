<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Home , Garden & Tools',
                'slug' => Str::slug('Home , Garden & Tools'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Books and Audible',
                'slug' => Str::slug('Books and Audible'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Health and Beauty',
                'slug' => Str::slug('Health and Beauty'),
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            ];
            DB::table('departments')->insert($departments);
    }
}
