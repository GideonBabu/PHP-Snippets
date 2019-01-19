<?php

$filename = 'cache/' . basename($_SERVER['SCRIPT_NAME']);
$current_time = time();
if(file_exists($filename)){
    $catch_last_modified = filemtime($filename);
    if($current_time < strtotime('+5 mins',$catch_last_modified)){
        require_once($filename);    
    }
}
else{    
        ?>
        <h1>hello world</h1>
<?php
    $fp = fopen($filename,'w');
    fwrite($fp,ob_get_contents());
    fclose($fp);
    ob_end_flush();
}
?>