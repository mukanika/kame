<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => '腕時計',
                'price' => '15000',
                'image' => '',
                'description' => 'スタイリッシュなデザインのメンズ腕時計',
            ],
            [
                'name' => 'HDD',
                'price' => '5000',
                'image' => '',
                'description' => '高速で信頼性の高いハードディスク',
            ],
            [
                'name' => '玉ねぎ3束',
                'price' => '300',
                'image' => '',
                'description' => '新鮮な玉ねぎ3束のセット',
            ],
            [
                'name' => '革靴',
                'price' => '4000',
                'image' => '',
                'description' => 'クラシックなデザインの革靴',
            ],
            [
                'name' => 'ノートPC',
                'price' => '45000',
                'image' => '',
                'description' => '高性能なノートパソコン',
            ],
            [
                'name' => 'マイク',
                'price' => '8000',
                'image' => '',
                'description' => '高音質のレコーディング用マイク',
            ],
            [
                'name' => 'ショルダーバッグ',
                'price' => '3500',
                'image' => '',
                'description' => 'おしゃれなショルダーバッグ',
            ],
            [
                'name' => 'タンブラー',
                'price' => '500',
                'image' => '',
                'description' => '使いやすいタンブラー',
            ],
            [
                'name' => 'コーヒーミル',
                'price' => '4000',
                'image' => '',
                'description' => '手動のコーヒーミル',
            ],
            [
                'name' => 'メイクセット',
                'price' => '2500',
                'image' => '',
                'description' => '便利なメイクアップセット',

            ],

        ]);
    }
}
