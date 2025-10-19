<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        $items = Item::get();

        return view("items/index",[
            "items"=>$items
        ]);
    }
}
