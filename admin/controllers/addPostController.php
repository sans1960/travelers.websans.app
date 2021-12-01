<?php
require('../../config/db.php');
require_once('../../models/Post.php');
$target_dir = "../../img/";
$target_file = $target_dir . basename ($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
$title=$_POST['title'];
$extract=$_POST['extract'];
$destination_id=$_POST['destination_id'];
$country_id=$_POST['country_id'];
$category_id=$_POST['category_id'];
$body=$_POST['body'];
$date=$_POST['date'];
$image=basename ($_FILES['image']['name']);

$post=new Post();
$post->set_post($title,$extract,$body,$image,$destination_id,$country_id,$category_id,$date);
header('location:../allPosts.php');
?>