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
    function jumpToMin(Request $request) 
    {
        $rules = [
            'array' => ["required",'arra[]'],
        ];
        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()){
            return response()->json($validation->errors(),422);
        }
        else{
                    // Base case: when source and
            // destination are same
            if ($h == $l){
                return 0;
        
        // When nothing is reachable
        // from the given source
        if ($arr[$l] == 0){
            return $h+1;
        
        // Traverse through all the points
        // reachable from arr[l]. Recursively
        // get the minimum number of jumps
        // needed to reach arr[h] from these
        // reachable points.
        $min = 999999;
        
        for ($i = $l+1; $i <= $h &&
                $i <= $l + $arr[$l]; $i++)
        {
            $jumps = minJumps($arr, $i, $h);
            
            if($jumps != 999999 &&
                        $jumps + 1 < $min)
                $min = $jumps + 1;
        }
        
        return $min;
        }

        // Driver program to test above function
        $arr = array(1, 3, 5, 8, 9, 2, 6, 7, 6, 8, 9);
        $n = count($arr);

        echo "Minimum number of jumps to reach "
        . "end is ". minJumps($arr, 0, $n-1);
            }
        }
    }
}
