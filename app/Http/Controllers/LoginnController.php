<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loginn;

class LoginnController extends Controller
{
    public function index(){

        return view('view');

    }

    public function view(){
        return view('login');
    }


    public function stored(Request $request){

        // dd($request->username);

        $data = $request->validate([
            'username' => 'required',
            'password' => 'required | password',
        ]);

        $newLoginn = Loginn::create($data);

        return redirect(route('look'));
        
    }

}
