<?php
//Vous devez créer une variable qui contient un nombre aléatroire entre 1 et 12. Ce nombre correspondra à un mois (1 = janvier, 2 = février, etc...). 
//Puis affichez le nombre aléatoire et le mois associé à celui-ci (utilisez un switch !).

//Code à faire ici
$nbr= rand(1,12);

switch ($nbr){
    case 1:
        echo "janvier mois $nbr";
    break;
    
    case 2:
        echo "fevrier mois $nbr";
    break;
    
    case 3:
        echo "mars mois $nbr";
    break;
    
    case 4:
        echo "avril mois $nbr";
    break;
    
    case 5:
        echo "mai mois $nbr";
    break;
    
    case 6:
        echo "juin mois $nbr";
    break;
   
    case 7:
        echo "juillet mois $nbr";
    break;
   
    case 8:
        echo "aout mois $nbr";
    break;
    
    case 9:
        echo "septembre mois $nbr";
    break;
   
    case 10:
        echo "octobre mois $nbr";
    break;
    
    case 11:
        echo "novembre mois $nbr";
    break;
    case 12:
        echo "decembre mois $nbr";
    break;
 
}