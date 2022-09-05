<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', 'admin')->first();

        User::create([
            'name' => 'Admin',
            'role_id' => $admin->id,
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
