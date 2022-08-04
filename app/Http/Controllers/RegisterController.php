<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(Request $request){
        DB::insert('insert into question (title, correct, weight) values (?, ?, ?)', array( 
            $request['question-title'], 
            filter_var($request['correct-option'], FILTER_VALIDATE_BOOLEAN), 
            $request['weight']));
        return $request;
    }
}
