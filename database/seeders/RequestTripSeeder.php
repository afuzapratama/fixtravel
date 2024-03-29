<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RequestTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('request_trips')->insert([
            'user_id' => '2',
            'total_guest' => '5',
            'max_price' => '2000000',
            'trip_plan' => 'jalan-jalan lah pokonya',
            'start_date' => '2023-05-10',
            'end_date' => '2023-05-10',
            'request_date' => now(),
            'province_id' => '1',
            'status_id' => '2'
        ]);
        DB::table('request_trips')->insert([
            'user_id' => '2',
            'total_guest' => '10',
            'max_price' => '1000000',
            'trip_plan' => 'jalan-jalan',
            'start_date' => '2023-08-09',
            'end_date' => '2023-08-10',
            'request_date' => now(),
            'province_id' => '2',
            'status_id' => '3'
        ]);
    }
}
