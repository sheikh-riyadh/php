<?php



for($i=0; $i<=10; $i++) {
    # code...

    if($i==4){
        goto check;
    }
}


check:{
    echo "Got it $i";
}


