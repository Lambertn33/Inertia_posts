<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();
        $adminRole = Role::where('role', Role::ADMINISTRATOR)->first();
        User::insert([
            'id' => Str::uuid()->toString(),
            'role_id' => $adminRole->id,
            'names' => 'System Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345')
        ]);
    }
}
