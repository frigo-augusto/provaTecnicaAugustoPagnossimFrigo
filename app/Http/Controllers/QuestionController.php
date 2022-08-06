<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function getQuestionary(){
        $questions = DB::select('select id, title from question');
        return ViewController::questionary($questions);
    }

    private function mountOptionsObject($request){
        $options = array();
        for($i = 1; $i <= 3; $i++) {
            $aux = new \stdclass();
            $aux->id = $request['q'. $i . '-option-id'];
            $aux->option = $request['q'. $i . '-option'];
            $options[$i - 1] = $aux;
        };
        return $options;
    }

    private function registerPontuation($options, $request){
        $points = 0;
        $nHits = 0;
        for($i = 0; $i < 3; $i++) {
            $currentOption = DB::table('question')->where('id', $options[$i]->id)->get();
            if ($currentOption[0]->correct == boolval($options[$i]->option)){
                $points += $currentOption[0]->weight;
                $nHits++;
            }
        }
        
        DB::insert('insert into records (name, pontuation) values (?, ?)', array($request['name'], $points));
        return $nHits;
    }

    public function submitQuestionary(Request $request){
        $nHits = $this->registerPontuation($this->mountOptionsObject($request), $request);
        $records = DB::table('records')->orderby('pontuation', 'DESC')->limit('3')->get();
        return ViewController::pontuation($records, $nHits);
    }
}
