<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Luis',
            'email' => 'el.luige94@gmail.com',
            'password' => bcrypt('123456789'),
            'admin' => '1'
        ]);
    }
}
