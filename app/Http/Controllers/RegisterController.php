<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{


    public function register(Request $request){
        DB::insert('insert into question (title, correct, weight) values (?, ?, ?)', array( 
            $request['question-title'], 
            boolval($request['correct-option']), 
            $request['question-weight']));
        return $request;
    }
    
}
