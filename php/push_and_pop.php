<?php

$names =["Anik","Polash","Najmus","Anwar"];




/*
array_pop() function delete last value from last index 
this function actually work indexing array..
*/

array_pop($names);

echo "<pre>";
print_r($names);
echo "</pre>";

/*
array_push() function against of array_pop() function
array_push () function add new value of last index
*/
array_push($names,"Sheikh Riyadh");

echo "<pre>";
print_r($names);
echo "</pre>";

?>