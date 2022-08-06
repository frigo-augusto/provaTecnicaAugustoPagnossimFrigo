<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{


    public function register(Request $request){
        DB::delete('delete from question');
        for($i = 0; $i < 3; $i++){
            DB::insert('insert into question (title, correct, weight) values (?, ?, ?)', array( 
                $request['question-title'][$i], 
                boolval($request['correct-option'][$i]), 
                $request['question-weight'][$i]));
        }

        return redirect('/see-form');
    }
    
}
