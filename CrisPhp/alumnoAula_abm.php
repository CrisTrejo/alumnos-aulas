
<!DOCTYPE html>
<html>
<head>
  <title>ABM de Alumnos/Permisos por Aula/Modulo</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <link rel="stylesheet" type="text/css" href="styles/panel.css">
  <link rel="stylesheet" type="text/css" href="styles/menu.css">
  <link rel="stylesheet" type="text/css" href="styles/grillas.css">
</head>
<body style="margin: auto; width: 1100px">
<?php
//  ----------------------------------------------------------------------------
include "bootstrap.php";	
	$registros=mysqli_query($con,"SELECT pp.ID_AlumnoAula,pp.ID_Alumno,ph.Nombre AS Alumno,pp.ID_Aula,pj.Nombre AS Aula
	FROM alumnos_aula AS pp 
	LEFT JOIN aulas AS pj ON pp.ID_Aula = pj.ID_Aula
	LEFT JOIN alumnos AS ph ON pp.ID_Alumno = ph.ID_Alumno
	ORDER BY Alumno ASC, Aula DESC");
	$row=0;
?>
<div id='cuerpo'>
	
	<h1> ABM de Alumnos por Aula </h1>

	
	<a href='alumnoAula_alta.php' style="float: left">Nuevo Alumno/Aula</a>
	<a href='cabecera.php' style="float: right">Volver</a>
	<br>
	<br>
	<table class="tablaedita" style="width:1100px">
		<tr>
			<th>Alumno</th>
			<th>Aula</th>

			<th>Modifica</th>
			<th>Borra</th>
		</tr>

		<?php	
		while ($reg1=mysqli_fetch_array($registros))
		{
		  // Guardo el ID de la pregunta para mandarla a la otra página
		?>
			<tr>
				<td style="text-align: center">
				<?php echo $reg1['Alumno']; ?>
				</td>	  
				<td style="text-align: center">
				<?php echo $reg1['Aula'];?>
				</td>
				
				<td style="text-align: center">
				<a href="alumnoAula_modif.php?codigo=<?php echo $reg1['ID_AlumnoAula'];?>">Modificar</a>
				</td>
				<td style="text-align: center">
				<a href="alumnoAula_borra.php?codigo=<?php echo $reg1['ID_AlumnoAula'];?>">Borrar</a>
				</td>
			</tr>	  
		<?php
		}
		?>
	</table>
</div>
</body>
</html>