<?php

/*

  $name =["Purnam","Dina","Suma","Mim"];
             ^        ^       ^
             !        !       !
$replace=["Najmus","Polash","Anik"];

$result = array_replace($name,$replace);

            output 

            Najmus
            Polash
            Anik
            Mim
*/



$name =["Purnam patuary","Dina","Suma","Mim"];

$replace = ["Polash","Najmus sakib","Anik"];


$result = array_replace($name,$replace);


foreach($result as $value){
    echo $value."<br>";
}

/*
$name2 =    ["a"=>"Anik","p"=>"Polash","n"=>"Najmus"];
              ^           ^  
              !           !
$replace2 = ["a"=>"Atiq","p"=>"Pakhi"];

            output

            Atiq
            Pakhi
            Najmus


*/
$name2 =["a"=>"Anik","p"=>"Polash","n"=>"Najmus"];

$replace2 = ["a"=>"Atiq","p"=>"Pakhi"];




$result2 = array_replace_recursive($name2,$replace2);

foreach($result2 as $key=>$values){
        echo $key." => ".$values."<br>";
}









?>