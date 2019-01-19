<?php 

/*
* function to convert number to words
*/
function convert_number_to_words($num){
    $len = strlen($num);

    if($len == 0){
        echo "Given string is empty";
        return;
    }

    if($len > 2){
        echo "Given number is greater than 99 and is not supported";
        return;
    }

    $single_digits = array('','st','two','three','four','five','six','seven','eight','nine');
    $eleven_series = array('ten','eleven','twelve','thirteen','fourteen','fifteen','sixteen','seventeen','eighteen','nineteen');    
    $ten_series = array('ten','twenty','thirty','fourty','fifty','sixty','seventy','eighty','ninety');
    $i=0;
    while($i<$len){
        if($len == 2){           
            if(floor($num/10) == 1){                
                echo $eleven_series[$num%10]." \n";                
                return;                
            }
            else{
                echo $ten_series[($num/10)-1]." ";
                $num = $num%10;
                $i++;
                $len--;                
            }
        }    
        
        if($len ==1){
            echo $single_digits[$num%10]."\n";
            return;
        }
    }    
}

for($j=1;$j<100;$j++) convert_number_to_words($j);
?>