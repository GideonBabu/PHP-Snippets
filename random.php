<?php 
// PHP program to pick n random elements from an array of m elements
$given_array = array('red','blue','green','white','black');
shuffle($given_array);
$pick_ele = 2;
for($i=0;$i<$pick_ele;$i++)
    echo $given_array[$i]."\n";
?>