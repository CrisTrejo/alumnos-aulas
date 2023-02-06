<?php
  include "bootstrap.php";
    
	$cod=$_REQUEST['codigo'];
	
	  // Toma las leyendas de la pregunta
	   $registros=mysqli_query($con,"DELETE FROM alumnos_aula WHERE ID_AlumnoAula=$cod");
	   
    header("Location: alumnoAula_abm.php?codigo=$cod");  
	  
?>