<?php
include "bootstrap.php";
    
	$cod=$_REQUEST['codigo'];
	 
	   $registros=mysqli_query($con,"DELETE FROM alumnos WHERE ID_Alumno=$cod");
	   
    header("Location: /PHP%20Work/CrisPhp/alumnosAbm.php");  
    // http://localhost/PHP%20Work/CrisPhp/aulasAbm.php
?>