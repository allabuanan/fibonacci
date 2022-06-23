<!DOCTYPE html>
<html>
<body>

<?php
function fibonacci($int) {
	$arr = [];
    
	if (20 < $int || $int < 1) {
    	echo "Input is invalid, function can only accept numbers 1-20.";
        return false;
    } 
    
    for($i=0;$i<$int;$i++) {
    	if ($i == 0){
        	array_push($arr, 0);
            echo $arr[$i] . " ";
        } elseif ($i == 1) {
        	array_push($arr, 1);
            echo $arr[$i] . " ";
        }
        if($i > 1) {
          	array_push($arr, ($arr[$i-2] + $arr[$i-1]));
            echo $arr[$i] . " ";
        }
    }
}

fibonacci(6);


?> 

</body>
</html>
