<?php
	include "bootstrap.php";
	
	if($_POST['accion']=='alta')
	{
		$registros=mysqli_query($con,"INSERT INTO alumnos_aula 
		(ID_Alumno, ID_Aula) values ($_POST[opermiso],$_POST[omodulo])");
		
		$ultima=mysqli_insert_id($con);
	}
	else // esta modificando
	{
	$cod=$_REQUEST['codigo'];
    $registros=mysqli_query($con,"UPDATE alumnos_aula SET  ID_Alumno = $_POST[opermiso], ID_Aula = $_POST[omodulo]
	WHERE ID_AlumnoAula = $cod;") ;
    
		
	$ultima=$_REQUEST['codigo'];
	}	 
	
	header("Location:alumnoAula_abm.php?codigo=$ultima");
?>