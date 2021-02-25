<?php
include 'classe.php';

$ariel = new Bankaccount('ariel', 1000,1.9,'euros');
echo "bonjour ". $ariel->__getTitulaire($ariel).", vous venez d'ouvrir un compte avec un taux d'intérêt de ". $ariel->__getInterest($ariel)."% et vous y avez déposé un montant de ".$ariel->__getSolde($ariel)." ". $ariel->__getDevise($ariel) ;

$ariel->credit(1250);
echo "<br>";
echo $ariel->__getSolde($ariel);

$ariel->debit(500);
echo "<br>";
echo $ariel->__getSolde($ariel);


?>