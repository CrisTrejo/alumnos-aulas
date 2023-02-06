<?php
	include "bootstrap.php";
?>	
<!DOCTYPE html>
<html>
<head>
<title>Alta Datos de un Alumno y sus aulas </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <link rel="stylesheet" type="text/css" href="styles/menu.css">
  <link rel="stylesheet" type="text/css" href="styles/grillas.css">
</head>
<body style="margin: auto; width: 1100px">


<DIV id="cuerpo" >
	<p style="font-size: 24px"> DATOS DE UN ALUMNO/AULA
    </p>
	<FORM  method="POST" action='alumnoAula_graba.php'>
		<table class="tablaedita">
			<tr>
				<th style="width: 400px">Campo</th><th style="height: 30px;width: 200px">Contenido</th>
			</tr>
			
			<tr>
				<td>
					<input type='hidden' name='accion' value='alta'>
					Nombre<br>
					<a style="font-size: 10px">Es el nombre del Alumno</a>
				</td>
				<td>
					
					<select name="opermiso" style="width: 200px">
					<?php
					// COMBO permiso
					$registros=mysqli_query($con,"SELECT * FROM alumnos");
					echo "<option value='' disabled selected>Seleccionar Opción</option>";
					while ($reg1=mysqli_fetch_array($registros))
					{
						echo "<option value='".$reg1['ID_Alumno']."'>".$reg1['Nombre']."</option>";
					}
					?>
				</td>
			</tr>
			
			<tr>
				<td>
					Nombre<br>
					<a style="font-size: 10px">Es el nombre del aula</a>
				</td>
				<td>
					
					<select name="omodulo" style="width: 200px">
					<?php
					// COMBO permiso
					$registros=mysqli_query($con,"SELECT * FROM aulas");
					echo "<option value='' disabled selected>Seleccionar Opción</option>";
					while ($reg1=mysqli_fetch_array($registros))
					{
						echo "<option value='".$reg1['ID_Aula']."'>".$reg1['Nombre']."</option>";
					}
					?>
				</td>
			</tr>
	  
			
		</table>	
	  
        <br/>
		<input type='submit' value='Grabar Datos'>
	</FORM>
	
</DIV>
    

</body>
</html>