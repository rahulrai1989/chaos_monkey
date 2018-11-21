<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\StripeController;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('users')->delete();

        $users = [
                    [
                    'name' => 'Rahul Rai',
                    'email' => 'rahulrai@ucreate.co.in',
                    'password' => bcrypt('test@123'),
                    'created_at' => now(),
                    'updated_at' => now(),
                    'email_verified_at' => now()
                    ],
                    [
                        'name' => 'Sandeep Kaur',
                        'email' => 'sandeepkaur@ucreate.co.in',
                        'password' => bcrypt('test@123'),
                        'created_at' => now(),
                        'updated_at' => now(),
                        'email_verified_at' => now()
                    ],
                    [
                        'name' => 'Pintu',
                        'email' => 'pintu@ucreate.co.in',
                        'password' => bcrypt('test@123'),
                        'created_at' => now(),
                        'updated_at' => now(),
                        'email_verified_at' => now()
                    ],
                 ];

        DB::table('users')->insert($users);
    }

    public function down() {
		DB::table('users')->delete();
    }
}
