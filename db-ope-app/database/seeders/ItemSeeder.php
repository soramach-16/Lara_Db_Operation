<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;
use Carbon\Carbon;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'item_name'=>'item1',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Item::create([
            'item_name'=>'item2',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Item::create([
            'item_name'=>'item3',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Item::create([
            'item_name'=>'item4',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Item::create([
            'item_name'=>'item5',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Item::create([
            'item_name'=>'item6',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Item::create([
            'item_name'=>'item7',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Item::create([
            'item_name'=>'item8',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Item::create([
            'item_name'=>'item9',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Item::create([
            'item_name'=>'item10',
            'category'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
    }
}
