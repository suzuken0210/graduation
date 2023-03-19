<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'route' => '経済学部',
            'area'=>'大阪',
            'contact_address1'=>'~電話番号~',
            'hobby'=>'テトリス',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('posts')->insert([
            'user_id' => 2,
            'area'=>'東京',
            'contact_address1'=>'~メールアドレス~',
            'hobby'=>'旅行',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 3,
            'route' => '商学部',
            'hobby'=>'読書',
            'message'=>'ヤッホー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 4,
            'area'=>'アメリカ',
            'contact_address1'=>'~Instagram~',
            'hobby'=>'ピアノ',
            'message'=>'こんばんは',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('posts')->insert([
            'user_id' => 5,
            'route' => '環境系',
            'area'=>'東京',
            'contact_address1'=>'~電話番号~',
            'hobby'=>'色々',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
