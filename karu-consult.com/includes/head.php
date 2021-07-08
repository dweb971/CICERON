


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>karu-consult - <?php  echo ''.$page.'';  ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Syne+Tactile&display=swap" rel="stylesheet"> 
    </head>
    <body>
        
            <header>
                <div>
                    <img src="#" alt="logo de karu-consult.com" width="250" height="100">
                </div>
                <div>
                    <img src="#" alt="icone facebook">
                </div>
            </header>
            <?php
            if ($page !="rendezvous"  && $page != "sans-rendezvous"){
                include("includes/menu.php");

            } else{


            }//fin de condition if


?>