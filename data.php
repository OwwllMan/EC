<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=id6457756_date_recup','','');
$pdoStat = $objetPdo->prepare('INSERT INTO contact VALUES (NULL, :nom, :email)');
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);

// Execution de la requête prep


$insertTrue = $pdoStat->execute();

if($insertTrue){
    $message = 'Contact ajouté';
}
else{
    $message = 'Echec';
}

?>