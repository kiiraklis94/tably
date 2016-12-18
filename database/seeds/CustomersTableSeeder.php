<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=10; $i++){

            DB::table('customers')->insert([
                'u_id'  => 1,
                'name'  => str_random(10) . ' ' . str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'gender'=> 'male',
                'phone_no'=> intval( "0" . rand(1,9). rand(1,9). rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9). rand(0,9). rand(0,9). rand(0,9) ),
                'b_day' => '1994-01-11',
                'vip'   => 0

            ]);
        }

    }
}
