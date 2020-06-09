<?php


$name =["Sheikh riyadh","Anik","Polash","najmus"];

$name2 = ["350883"=>"Sheikh riyadh","350913"=>"Anik"];

// in_array function actually show index if array is indexing array 
 $result = in_array("Sheikh riyadh",$name);
echo $result."<br>";

// array_search() function actually show index / key...
// if is indexing array than show index or if is associative array than show key..
echo array_search("Sheikh riyadh",$name2);



?>