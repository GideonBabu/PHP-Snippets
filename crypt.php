<?php

if(defined("CRYPT_BLOWFISH") && CRYPT_BLOWFISH){
    echo 'crypt blowfish is enabled';
}else{
    echo 'crypt is not enabled';
}


$hashed_pwd = crypt('gideon','');

if(crypt('gideon',$hashed_pwd)){
    echo 'correct password';
}else{
    echo 'wrong password';
}
