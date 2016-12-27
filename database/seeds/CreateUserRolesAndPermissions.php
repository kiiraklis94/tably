<?php

use Illuminate\Database\Seeder;

class CreateUserRolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Tably Administrator'

        ]);

        DB::table('roles')->insert([
            'name' => 'owner',
            'display_name' => 'Owner'

        ]);

        DB::table('roles')->insert([
            'name' => 'general_manager',
            'display_name' => 'General Manager'

        ]);

        DB::table('roles')->insert([
            'name' => 'maitre_manager',
            'display_name' => 'Maitre Manager'

        ]);

        DB::table('roles')->insert([
            'name' => 'maitre',
            'display_name' => 'Maitre'

        ]);

        DB::table('roles')->insert([
            'name' => 'pr',
            'display_name' => 'PR'

        ]);
    }
}
