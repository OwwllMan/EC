<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=id6457756_data','id6457756_root','rootroot');
$pdoStat = $objetPdo->prepare('INSERT INTO contact VALUES (NULL, :nom, :email)');
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':email', $_POST['email'], PDO::PARAM_STR);


    
$insertTrue = $pdoStat->execute();
if($insertTrue){
    $message = 'Contact ajouté';
}
else{
    $message = 'Echec';
}
?>

<html lang="FR">
    <head>
        <meta charset="utf-8">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
        <title>Title</title>
    </head>
    <body>
        <div class="body-main">
            <div class="container">
            
            </div>
        </div>
        <div class="body-second">
            <div class="container">
            
            </div>
        </div>
    </body>
    <footer>
    <div class="footer-container">
            <div class="footer-link-container">
                <a class="footer-link" href="#"><i class="fab fa-twitter"></i></a>
                <a class="footer-link" href="#"><i class="fab fa-twitch"></i></a>
            </div>
            <div class="footer-heart-container">
                <p class="footer-heart">Made with  <i id="heart" class="em em-heart"></i>  in Strasbourg</p>
            </div>
        </div>
    </footer>
</html>
