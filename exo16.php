<?php
//Créer une fonction qui retourne la chaîne de caractère qui lui est envoyé sans voyelle 
//(a, e, i, o, u, y) et affichez ce mot avant et après le changement !
// Vous pouvez utiliser n'importe qu'elle mot pour cela comme girafe 
//(ce qui donnerait grf) par exemple, peut-importe
$voyelle=["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
$text="bonjour toto et tata";
$sansVoyelle=str_replace($voyelle,"",$text);

echo $sansVoyelle;
function supprVoyelle(){
    $voyelle=["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"];
    $sansVoyelle=str_replace($voyelle,"",$text);
}
