<?php
session_start();
$name = $_POST['name'];
$password = $_POST['password'];
require_once("../../config/db.php");
require_once('../../models/Admin.php');
$con = new Admin();
if ($con->comprobar_admin($name,$password)) {
	header("Location: ../dashboard.php");
}
else
{
	echo "Identificación erronea";
}


?>