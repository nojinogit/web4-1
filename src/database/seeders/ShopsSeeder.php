<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
        'id' => '1',
        'name' => 'ラーメン屋',
        'telephone_number' => 'ラーメン屋',
        'postcode' => '999-1234',
        'address' => '東京都新宿区',
        'start' => '08:00',
        'end' => '20:00',
        'max_group' => '5',
        'minimum_budget_for_lunch' => '1000',
        'maximum_budget_for_lunch' => '2000',
        'minimum_budget_for_dinner' => '1500',
        'maximum_budget_for_dinner' => '2500',
        'title' => 'ラーメン・ラーメン',
        'overview' => 'ra-men/ra-men',
        'path' => 'storage/sample/ビール.jpg',
        'created_at' => now(),
    ];DB::table('shops')->insert($param);
    }
}
