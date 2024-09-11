<?php

namespace App\Http\Controllers;

use App\Models\staffs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class stafsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        $pages = staffs::latest()->paginate(5);
        return view('pages.login',compact('pages'))
              ->with('i',(request()->input('page', 1) -1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function myAdmin()
    {
        return staffs::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'sname'=> 'required',
                'Email' => 'required',
                'Phone' => 'required',
                'Position' => 'required',
            ]);

            staffs::create($request->all());
            $allStaff = staffs::all();
           return view('pages.staff')->with('staff', $allStaff);

    }

    /**
     * Display the specified resource.
     */
    public function show(staffs $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(staffs $staff)
    {
        echo'';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, staffs $staff)
    {
        $request->validate([

        ]);
        $staff->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staffs $id)
    {
        
        $id->delete($id);

        return redirect()->route('pages.myAdmin')
         ->with('success', 'member deleted sucessful');
    }
}
