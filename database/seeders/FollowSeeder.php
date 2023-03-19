<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //yokoyamaがsuzukiをフォローしている
        DB::table('follows')->insert(
            [
                'followers_id'=>1,
                'followees_id'=>2,
            ]);
            
        //takakiがyokoyamaをフォローしている
        DB::table('follows')->insert(
            [
                'followers_id'=>4,
                'followees_id'=>1,
            ]);
            
        //ootaがsuzukiをフォローしている
        DB::table('follows')->insert(
            [
                'followers_id'=>3,
                'followees_id'=>2,
            ]);
    }
}
