<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index(){
        $staffs = Staff::get();

        return view("staffs/index",[
            "staffs"=>$staffs
        ]);
    }
}
