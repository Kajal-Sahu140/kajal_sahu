<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employ;

class EmployeController extends Controller
{
    

    public function index(){

        return view('employe');
    }

    public function create(Request $request){
        $validation = $request->validate([
            'name'              => 'required',
            'email'             => 'required',
            'pwd'                => 'required',
       ]);
    $emp = new Employ;
    $emp->name = $request->input('name');;
    $emp->email = $request->email;
    $emp->pwd= $request->pwd;

    $emp->save();
    if($emp){
        return redirect()->route('form')->with('success', ' successfully');
    }else{
        return redirect()->back()->with('error','Something went wrong! please try again');
    }
    
    }
}
