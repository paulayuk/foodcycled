<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
     
           $role = Role::where('name', 'admin')->firstOrFail();

           $user =  User::create([
                'category'       => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'account_type'   => 'admin',
                'city'           => 'Home',
                'state'          => 'New York',
                'zipcode'        => '3030',
                'address'        => '12 John Doe Avenue',
                'remember_token' => str_random(60),
            ]);

           $user->roles()->attach($role);
    }
    
}
