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
            'Email' =>'kagsburg@mail.com',
            'role_id'=> 1,
            'password' =>'$2y$10$/n33BwLCJhE47Vez61GqDeCcftEvKoMWOHC3bEUTbArB/RMUAtEPG'
        ]);
    }
}
