<?php
require '../../config/db.php';
require '../../models/Country.php';


    $name=$_POST['name'];
    $destination_id =$_POST['destination_id'];
   
    $country = new Country();
    $country->set_country($name,$destination_id);
    header('location:../allCountries.php');

?>