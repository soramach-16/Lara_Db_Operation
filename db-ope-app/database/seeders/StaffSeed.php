<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use Carbon\Carbon;

class StaffSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'name'=>'staff1',
            'shop_id'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Staff::create([
            'name'=>'staff2',
            'shop_id'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Staff::create([
            'name'=>'staff3',
            'shop_id'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Staff::create([
            'name'=>'staff4',
            'shop_id'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        Staff::create([
            'name'=>'staff5',
            'shop_id'=>null,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
    }
}
