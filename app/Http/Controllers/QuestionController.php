<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function getQuestionary(){
        $questions = DB::select('select id, title from question');
        return view('questionary', ['questions' => $questions]);
    }

    public function submitQuestionary(Request $request){
        return $request;
    }
}
