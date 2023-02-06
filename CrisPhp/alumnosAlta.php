<?php
    include "bootstrap.php";
?>	

<head>
  <link rel="stylesheet" type="text/css" href="/styles/grillas.css">
</head>

	
	
	<div class="w3-container w3-teal">
		<h3>ALTA DE UN ALUMNO</h3>
	</div>

	<FORM  class="w3-container" method="POST" action='/PHP%20Work/CrisPhp/alumnosGraba.php''id="formu">
		<input type='hidden' name='accion' value='alta'>
		<p>
			<label>Nombre</label>	
			<input class="w3-input" name="onombre" id="onombre" value='' style='width:100%' required>
		</p>	
		<br/>
		<input  class="w3-btn w3-teal" type="submit" value="Grabar Datos" >
	</FORM>
</DIV>


</body>
</html>