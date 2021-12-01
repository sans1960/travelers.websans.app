<?php

require_once("../config/db.php");
require_once('../models/Admin.php');
$con = new Admin();
if ($con->borrar_conexion()) {
	header("Location: index.php");
}
?>