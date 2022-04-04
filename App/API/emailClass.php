<? 


function emailSplit($expression){
    $words = explode(",",$expression);

   for($i=0;$i<wordsCount($expression);$i++){
        ${"input$i"} = $words[$i];
   }
   $secondValue = strlen($input1) > 0 ? eachWordsFirstChars(lastWords($input1)) . lastWords($input1) : $input1;
   
   $removeDot = substr($input3, 0, strpos($input3,"."));

   $value = strtolower(eachWordsFirstChars($input0) . '.' . $secondValue . '@' . $input2 . '.' . $removeDot . '.' . $input4);

   $replaced_once = str_replace(" ", "", $value);
   
   $newExpression = str_replace("-","",$replaced_once);
 
   return json_encode($newExpression);

}

function wordsCount($expression){
    $words = explode(",",$expression);
    return sizeof($words);
}

function eachWordsFirstChars($expression){
    $words = explode(",",$expression);
    $return = "";
    if(str_contains($words[0], "-")){
        $split = explode("-",$words[0]);
        foreach($split as $letters){
            $return .= substr($letters,0,1);
            
        }
        strtolower($return);
        return $return;
    } else {    
        return strtolower(substr($words[0], 0,1));
    }
  
}

function lastWords($expression){
    $words = explode(",",$expression);
    return array_pop($words);
}


echo emailSplit("Jean-Louis,Jean-Charles Mignard,external,peoplesphere.fr,fr");