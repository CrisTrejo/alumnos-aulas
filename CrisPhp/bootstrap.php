<?php
//session_save_path('/tmp');
session_start();
$con=mysqli_connect("localhost","root","","call1");
mysqli_query($con, "SET NAMES 'utf8'"); 
header("Content-Type: text/html; charset=UTF-8");
date_default_timezone_set('America/Argentina/Buenos_Aires');
// Si no encuentra la Sesion, lo manda al index
			