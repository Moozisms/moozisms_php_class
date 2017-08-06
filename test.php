<?php

// inclure le fichier Moozisms.php
require_once "Moozisms.php";

//instancier la classe en lui mettant en paramètres, l'api key et l'api secret
$smsmanager = new Moozisms("xxxxx", "xxxxxxxxxxxxxxxxxxxx");

// utiliser la méthode sendSMS de la classe en lui donnant en paramètres l'émetteur, le destinataire et le message
$result = $smsmanager->sendSMS("xxxxxxxxxxxxxxx", "xxxxxxxxxxxxxxxxxxxxxxxxx", "xxxxxxxxxxxxxxxxxxxx");

 if($result.report=="delivred"){
 	
 	// do sommething here

 }else{

 // sms not sent
 	
 }

 //print_r($result) ;
