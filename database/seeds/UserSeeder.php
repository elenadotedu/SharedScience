<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'first_name' => 'Demo',
            'last_name' => 'User',
            'email' => 'demo@sharedscience.com',
            'password' => bcrypt('demo123'),
        ]);

        $user1->assignRole('guest');
    }
}
