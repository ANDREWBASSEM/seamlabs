<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;

class LogicController extends Controller
{
    //
    function dont_give_me_five(Request $request) 
    {
        $rules = [
            'start' => ["required","integer"],
            'end' => ["required","integer","gt:start"],
        ];
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()){
            return response()->json($validation->errors(),422);
        }
        else{
            $count = 0;
            for ($x=$request["start"]; $x<=$request["end"];  $x++)
            {
                if (strpos($x, "5") === false){
                    $count++;
            }
            }
            return response()->json(["data"=>["result"=>$count]]);
        }
        
    }

    function stringToIndex(Request $request) 
    {
        $rules = [
            'str' => ["required","string"],
        ];
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()){
            return response()->json($validation->errors(),422);
        }
        else{
           $strMap = range("A","Z");
           $str = array_reverse(str_split(strtoupper($request["str"])));
           $num = 0;
           foreach($str as $key => $s){
               $num += (array_search($s,$strMap) + 1) * pow(26,$key);
           }
           return $num;
        }
        
    }
    

}
