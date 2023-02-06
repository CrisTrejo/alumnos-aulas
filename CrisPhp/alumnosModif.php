<?php
	
    include "bootstrap.php";

	$ope=$_REQUEST['codigo'];
	$registros=mysqli_query($con,"SELECT * FROM alumnos WHERE ID_Alumno = $ope");
	$reg=mysqli_fetch_array($registros);
?>	

	<div class="w3-container w3-teal">
		<h3>MODIFICACIÓN DE UN ALUMNO</h3>
	</div>
	<br/>
	<FORM  class="w3-container" method="POST" action='/PHP%20Work/CrisPhp/alumnosGraba.php'>
		<input type='hidden' name='accion' value='modifica'>
		<input type='hidden' name='codigo' value='<?php echo $_REQUEST['codigo'];?>'>
		<label>Nombre</label>
		<input class="w3-input" name="onombre" id="onombre" value='<?php echo $reg["Nombre"];?>' style='width:100%'>
        <br/>
		<input  class="w3-btn w3-teal" type="submit" value="Grabar Datos">
	</FORM>
</div>
</body>
</html>