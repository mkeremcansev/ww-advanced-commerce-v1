<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super',
            'surname' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
        ])->assignRole('admin');
    }
}
