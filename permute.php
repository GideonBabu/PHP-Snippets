<?php 

function swap($str,$x, $y){
    $string_to_arr = str_split($str);
    $temp = $string_to_arr[$x];
    $string_to_arr[$x] = $string_to_arr[$y];
    $string_to_arr[$y] = $temp;
    return implode($string_to_arr);
}

function permute($str, $start, $end) {    
    if($start == $end){
        echo $str."\n";
    }
        
    else{
        for($i=$start;$i<=$end;$i++){
            $str = swap($str, $start, $end);
            permute($str, $start+1, $end);
            $str = swap($str, $start, $i);
        }
    }
}

$str = '1112';
$string_len = strlen($str);
permute($str,0,$string_len-1);
?>