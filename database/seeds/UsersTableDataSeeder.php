<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'       => "Miller Juma",
            'email'      => "officialjuma3538.com",
            'type'       => 'admin',
            'password'   => Hash::make("admin"),
        ]);
    }
}
