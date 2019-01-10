<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablesSeeder extends Seeder
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
            'name'              => 'Keerati Rukmanee',
            'email'             => 'keeratikinggg@gmail.com',
            'password'          => Hash::make('pass'),
            'remember_token'    => str_random(10),
        ]);
    }
}