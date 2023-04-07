<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'Full_name' => 'kaganzi timothy',
            'Email' =>'kagsburg@gmail.com',
            'role_id'=> 1,
            'password' => bcrypt('12345678')
        ]);
    }
}
