<?php

function generateHashtag($str) {
  if(empty($str)) return false;
  
  $first_char_capital = ucwords($str);
  $new_str = str_replace(' ','',$first_char_capital);  
  if(empty($new_str)) return false;  
  if(strlen($new_str)<=139){      
    $new_str = '#'.$new_str;    
    return $new_str;
  }
  else {    
      return false;} 
}
generateHashtag(str_repeat("a", 139));

?>