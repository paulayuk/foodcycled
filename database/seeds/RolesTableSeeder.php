<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user_role = new Role();
        $user_role->name = "user";
        $user_role->description = "This role is for normal users";
        $user_role->save();

        $admin_role = new Role();
        $admin_role->name = "admin";
        $admin_role->description = "This role is for admins";
        $admin_role->save();

        $donors_role = new Role();
        $donors_role->name = "donor";
        $donors_role->description = "This role is for donors";
        $donors_role->save();

        $pantry_role = new Role();
        $pantry_role->name = "pantry";
        $pantry_role->description = "This role is for normal pantries";
        $pantry_role->save();

    }
}
