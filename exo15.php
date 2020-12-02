<?php
//Créer une fonction PHP qui retourne vraie ou faux 
//si un nombre qui lui est passé en paramètre est pair ou impair 
//(respectivement). Vous pouvez tester tout cela facilement.

//génère un nombre aléatoire
$nbr=rand(1,100);

//affiche le nombre aléatoire
echo $nbr;
echo "</br>";

function paireImpaire($nbr){
    if (($nbr%2)===0) {
        echo "Le nombre est paire";
        return true;
    }else{
        echo "Le nombre est impaire";
        return false;
    }
}

echo paireImpaire($nbr);
