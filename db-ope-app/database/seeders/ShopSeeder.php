<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shop;
use Carbon\Carbon;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shop::create([
            'shop_name'=>'shop1',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Shop::create([
            'shop_name'=>'shop2',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Shop::create([
            'shop_name'=>'shop3',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
    }
}
