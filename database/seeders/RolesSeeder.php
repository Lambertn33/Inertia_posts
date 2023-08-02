<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->delete();
        foreach (Role::ROLES as $role) {
            Role::insert([
                'id' => Str::uuid()->toString(),
                'role' => $role,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
