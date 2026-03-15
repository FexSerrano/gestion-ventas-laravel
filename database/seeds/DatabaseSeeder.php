<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'fserrano',
            'email' => 'fserrano@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123'),
        ]);

        \App\User::create([
            'name' => 'jserrano',
            'email' => 'jserrano@test.com',
            'password' => \Illuminate\Support\Facades\Hash::make('123'),
        ]);
    }
}
