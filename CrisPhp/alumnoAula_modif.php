<?php
	include "bootstrap.php";
?>	
<!DOCTYPE html>
<html>
<head>
<title>Modifica Datos de un Alumno y sus aulas </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <link rel="stylesheet" type="text/css" href="styles/menu.css">
  <link rel="stylesheet" type="text/css" href="styles/grillas.css">
</head>
<body style="margin: auto; width: 1100px">

<?php
	$ope=$_REQUEST['codigo'];
	$registros=mysqli_query($con,"SELECT pp.ID_AlumnoAula,pp.ID_Alumno,ph.Nombre AS Alumno,pp.ID_Aula,pj.Nombre AS Aula FROM alumnos_aula AS pp 
	LEFT JOIN aulas AS pj ON pp.ID_Aula = pj.ID_Aula
	LEFT JOIN alumnos AS ph ON pp.ID_Alumno = ph.ID_Alumno WHERE ID_AlumnoAula = $ope");
	$reg=mysqli_fetch_array($registros);
?>	

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
					<input type='hidden' name='accion' value='modifica'>
					<input type='hidden' name='codigo' value='<?php echo $_REQUEST['codigo'];?>'>
					Nombre<br>
					<a style="font-size: 10px">Es el nombre del Alumno</a>
				</td>
				<td>
					
					<select name="opermiso" style="width: 200px">
					<?php
					// COMBO permiso
					$registros=mysqli_query($con,"SELECT * FROM alumnos");
					while ($reg1=mysqli_fetch_array($registros))
					{
						$sele='';
						if($reg['Alumno']==$reg1['Nombre']) $sele="selected";
						echo "<option value='".$reg1['ID_Alumno']."'".$sele.">".$reg1['Nombre']."</option>";
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
					while ($reg1=mysqli_fetch_array($registros))
					{
						$sele='';
						if($reg['Aula']==$reg1['Nombre']) $sele="selected";
						echo "<option value='".$reg1['ID_Aula']."'".$sele.">".$reg1['Nombre']."</option>";
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