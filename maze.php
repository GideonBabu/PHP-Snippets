<?php

function solve_maze($x,$y){    
    
    global $maze;    
    if(!isset($maze[$x][$y])) { return false; }
    if($maze[$x][$y] == 9) {return true;}
    if(($maze[$x][$y] != 1) && ($maze[$x][$y]!=3)) {return false;}
            
    $maze[$x][$y]='8';

    if(solve_maze($x,$y+1)) { return true; }// move south
    if(solve_maze($x+1,$y)) { return true; }// move east
    if(solve_maze($x-1,$y)) {return true; }// move west
    if(solve_maze($x,$y-1)) { return true; } // move north            
    
    $maze[$x][$y] = 0;
    return false;
}
$maze = array();
$maze= [
        [3,1,0,0],
        [0,1,0,1],
        [1,1,1,1],
        [0,1,0,9]
        ];
solve_maze(0,0);
$maze[0][0] = "S";
$output = '';
foreach($maze as $line) { $output .= implode('',$line)."\n"; }
echo $output;
?>