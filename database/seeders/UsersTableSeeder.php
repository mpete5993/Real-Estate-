<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //prevent duplicates
        // User::truncate();

        //create roles and attach them to the user
        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $agentRole = Role::where('name', 'agent')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'avatar' => 'users/malcolm-x-icon.png',
            'status' => 'available',
            'password' => bcrypt('admin')
        ]);

        $author = User::create([
            'name' => 'author',
            'email' => 'author@gmail.com',
            'password' => bcrypt('author')
        ]);

        $agent = User::create([
            'name' => 'agent',
            'email' => 'agent@gmail.com',
            'password' => bcrypt('agent')
        ]);


        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $agent->roles()->attach($agentRole);

    }
}
