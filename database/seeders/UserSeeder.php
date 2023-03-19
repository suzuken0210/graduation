<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'yokoyama',
            'email' => 'yokoyama@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('users')->insert([
            'name' => 'suzuki',
            'email' => 'suzuki@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('users')->insert([
            'name' => 'oota',
            'email' => 'oota@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('users')->insert([
            'name' => 'takaki',
            'email' => 'takaki@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('users')->insert([
            'name' => 'oono',
            'email' => 'oono@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
