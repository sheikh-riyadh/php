<?php


$male1 =["Kabir","Anik","Polash","Najmus","Sheikh riyadh"];
$female1 = ["Suma","Dina","Mim","Purnam","Amnan"];

/*
array_merge() function actually sum multiple arrays if we sum two array then we use 
array_merge() function this function work indexing array..
*/
$newarray1 = array_merge($male1,$female1);

echo "<pre>";
print_r($newarray1);
echo "</pre>";


/*
array_merge-recursive() function actually sum multiple arrays if we sum two associative array then we use 
array_merge_recursive() function this function work associative and indeixing array..
*/

$male2 =[ "k"=>"Kabir",  "p"=>"Polash",  "n"=>"Najmus",  "r"=>"riyadh"];
$female2 = ["s"=>"Suma",  "d"=>"Dina",  "m"=>"Mim"];



$newarray2= array_merge_recursive($male2,$female2);

echo "<pre>";
print_r($newarray2);
echo "</pre>";




?>