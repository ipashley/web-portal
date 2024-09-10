<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index(){
        $products = Staff::all();
        return view('staff', ['members' => $products]);
    }

    public function update(){
        return view('update');
    }

    public function store(Request $request){
        
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required | numeric',
        ]);

        $newStaff = Staff::create($data);

        return redirect(route('staff'));
    }

    public function edit(Staff $editstaff){

        return view('details', ['editstaff' => $editstaff]);

    }
}
