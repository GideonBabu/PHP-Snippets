<?php
/*
* function to print all the files 
*/

function __require_all_php_files($directory, $depth =0){

    $scan = glob($directory."\*");
    foreach($scan as $file){
        if(preg_match('/\.php$/',$file)){
            require_once($file);
        }
    }                
}

$cur_dir = getcwd(); // get the current directory of this file
__require_all_php_files($cur_dir); // function call

?>