<?php
$mysqli = new mysqli("localhost", "root", "", "travel");

if ($mysqli->connect_errno) {
    printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}
$consulta= "SELECT posts.id id,posts.title title,posts.date date,countries.name country,destinations.name name,categories.id cat_id,categories.name category FROM posts,destinations,countries,categories WHERE posts.destination_id = countries.destination_id AND destinations.id = posts.destination_id AND destinations.id = countries.destination_id AND countries.id = posts.country_id AND posts.destination_id=destinations.id AND posts.category_id = categories.id  ";
$resultado = $mysqli->query($consulta);
$file = fopen("posts.xml", "w");
$txt = utf8_encode('<?xml version="1.0" encoding="utf-8"?>');
$txt .= utf8_encode('<posts>');
fwrite($file, $txt . PHP_EOL);
while ($registro=$resultado->fetch_assoc())
{
    
    $txt = utf8_encode('<post>');
    $txt .= utf8_encode('<id>'.$registro['id'].'</id>');
    $txt .= utf8_encode('<title>'.$registro['title'].'</title>');
    $txt .= utf8_encode('<date>'.$registro['date'].'</date>');
    $txt .= utf8_encode('<country>'.$registro['country'].'</country>');
    $txt .= utf8_encode('<name>'.$registro['name'].'</name>');
    $txt .= utf8_encode('<category>'.$registro['category'].'</category>');
    $txt .= utf8_encode('</post>');
    fwrite($file, $txt . PHP_EOL);
}
$txt = utf8_encode('</posts>');
fwrite($file, $txt . PHP_EOL);
fclose($file);
?>