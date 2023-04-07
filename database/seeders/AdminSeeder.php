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
            'password' => '$2y$10$0mK5UcIKrL8.tL26QRgRVuMblo6Ku4gZunHdO.C8n.01l1LhkrHni',
        ]);
    }
}
