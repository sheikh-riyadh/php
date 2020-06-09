<?php



// if we debug this code than we clear recursive function how actually work..

function recursive($n){

    if($n==0){
        return 1;
    }
    else{
        return $n * recursive($n-1);
    }

}

$result = recursive(5);

echo $result





?>