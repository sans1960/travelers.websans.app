<?php
require '../../config/db.php';
require '../../models/Category.php';


    $name=$_POST['name'];
    
   
    $category = new Category();
    $category->set_category($name);
    header('location:../allCategories.php');

?>