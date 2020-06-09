<?php

$x=10;


example();
// if we use globals variable in function than error because we actually never use global
// variable in function but one way to use globals variable in function..

// example :
/*

we use pridefind $GLOBALS variable in this variable except key 

function example(){

    echo $GLOBALS["x"];
}

*/

function example(){
        echo $GLOBALS["x"];
}



?>