<?php
include "bootstrap.php";
    
	$cod=$_REQUEST['codigo'];
	 
	   $registros=mysqli_query($con,"DELETE FROM aulas WHERE ID_Aula=$cod");
	   
    header("Location: /PHP%20Work/CrisPhp/aulasAbm.php");  
    // http://localhost/PHP%20Work/CrisPhp/aulasAbm.php
?>