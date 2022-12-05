<?php

// https://www.convertcsv.com/csv-to-xml.htm

$xmlDataCardsSoftSkills=simplexml_load_file("inc/cartes/dataCardsSoftSkills.xml") or die("Error: Cannot create object");
$xmlDataCardsCodesEntreprise=simplexml_load_file("inc/cartes/dataCardsCodesEntreprise.xml") or die("Error: Cannot create object");
$xmlDataCardsEnneagramme=simplexml_load_file("inc/cartes/dataCardsEnneagramme.xml") or die("Error: Cannot create object");
?>