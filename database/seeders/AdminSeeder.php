<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin User
        $user = User::create([
            'name'     => 'Admins',
            'email'         =>  'admins@admin.com',
            'password'      =>  Hash::make('password'),
            'is_admin'       => 1
        ]);
		
		// Create User
		$user = User::create([
            'name'     => 'Users',
            'email'         =>  'user@admin.com',
            'password'      =>  Hash::make('password'),
            'is_admin'       => 0
        ]);
    }
}
