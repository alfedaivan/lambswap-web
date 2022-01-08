<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'member',
            'email' => 'member@mail.com',
            'password' => Hash::make('memberPassword'),
            'wallet_address' => 'duhawduauwdghad',
            'username_telegram' => 'dawhidugawugskjbn'
        ]);
    }
}
