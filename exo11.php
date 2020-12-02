<?php
//Créer un nombre aléatoire entre 0 et 30 et qui soit un multiple de 5 puis affichez le ! 

$nbr= rand(0,30);
$nbrok=$nbr;

if (($nbr%5)===0) {
   echo $nbrok; 
}else{
    echo"refresh";
}