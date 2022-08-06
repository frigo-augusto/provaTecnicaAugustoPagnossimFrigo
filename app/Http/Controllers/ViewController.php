<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function register(){
        return view('register');
    }
    
    public function pontuation($records, $nHits){
        return view('pontuation', ['records' => $records, 'nHits' => $nHits]);
    }

    public function questionary($questions){
        return view('questionary', ['questions' => $questions]);
    }
}
