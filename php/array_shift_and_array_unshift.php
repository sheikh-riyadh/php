<?php

$name = ["Polash","Najmus","Anik","Sheikh riyadh"];




/*
array_shift() actually same of array_pop just little different
pop actually remove last value of array index but array_shift()
function remove the first index of first value of array..
*/ 

array_shift($name);
echo "<pre>";
print_r($name);
echo "</pre>";


/*
array_unshift() actually same of array_push function just little change 
array_push actually add new value of from array last index but array_unshift
function actually add new value of from array first index 
*/

array_unshift($name,"Dina","Mim","Suma");
echo "<pre>";
print_r($name);
echo "</pre>"




?>