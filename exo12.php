<?php
//Créer une variable qui contient un nombre aléatoire entre 5 et 20. Puis affichez dans différents paragraphes le résultat de l'addition cumulé du chiffre obtenu avec les entiers qui le précède (sauf 0) ; exemple :
/* Si vous obtenez 5, je veux :
1 : résultat = 5 (5+0)
2 : résultat = 9 (5+4)
3 : résultat = 12 (9+3)
4 : résultat = 14 (12+2)
5 : résultat = 15 (14+1)
*/
//Créer une variable qui contient un nombre aléatoire entre 5 et 20 rand(5,20)
$nbr= rand(5,20);
$nbr2= $nbr-1;
$decrem=$nbr;
// $nbr2= ($nbr+($nbr-1));
// $nbr3= (($nbr+($nbr-1))+($nbr-2));// 5 + 5-1 + 5-2
// $nbr4= ((($nbr+($nbr-1))+($nbr-2))+($nbr-3));
// $nbr5= (((($nbr+($nbr-1))+($nbr-2))+($nbr-3))+($nbr-4));

for ($i=1; $i <= $decrem; $i++) { 
    echo $i . " : résultat = " .$nbr. "<br>";
    $nbr=$nbr+$nbr2;
    $nbr2--;
}