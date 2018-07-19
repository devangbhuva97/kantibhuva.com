<?php

use Illuminate\Database\Seeder;
use App\User;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Carbon::now();
        $admin1 = "devangbhuva123@yahoo.com";
        $admin2 = "kantibhuva@ymail.com";
        $user_id1 = sha1($time.$admin1);
        $user_id2 = sha1($time.$admin2);
        
        User::create([
            'user_id' => $user_id1,
            'name' => 'Devang Bhuva',
            'email' => $admin1,
            'password' => bcrypt('Dev@ng64'),
            'role' => 'admin',
        ]);

        User::create([
            'user_id' => $user_id2,
            'name' => 'Kanti Bhuva',
            'email' => $admin2,
            'password' => bcrypt('K@ntiBhuv@'),
            'role' => 'admin',
        ]);

        return true;
    }
}
