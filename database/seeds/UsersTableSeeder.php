<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            

        DB::table('users')->delete();
        $users = array(
            ['name' => 'misael', 'email' => 'misaeboca@gmail.com', 'password' => Hash::make('123456')],
           
        );
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user) {
            User::create($user);
        }
        
    }
}
