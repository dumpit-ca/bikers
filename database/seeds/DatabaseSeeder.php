<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => '下の名前　苗字',
            'email' => 'sample@email.com',
            'password' => Hash::make('pass'),
            'phone_number' => '123456789'
          ]);
    }
}
