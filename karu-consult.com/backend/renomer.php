<?php
// image locale
$trou="img/trnoir.jpg";

//print_r($trou);


//taille image locale
$size = getimagesize($trou);

$width= $size[0];
$heigth= $size[1];

// print_r($size);

// jpg ou jpeg

$im = @imagecreatefromjpeg($trou); //ressource

// texte dans image


// fond blanc et texte bleu
$bg = imagecolorallocate($im,255,255,255);
$textcolor = imagecolorallocate($im,0,0,255);



// ajoute de la phrase en haut à gauche
imagestring($im, 5, 0, 0, 'bonjour', $textcolor);


// Définit le contenu de l'en-tête - dans ce cas, image/jpeg
header('Content-Type: image/jpeg');

// Affichage de l'image
imagejpeg($im);




















?>