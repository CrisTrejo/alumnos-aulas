<html>
    <body>
        <?php
       include "bootstrap.php";

        $nombre=substr($_POST['onombre'],0,40);
	$nombre=mysqli_real_escape_string($con,htmlentities($nombre));
	if(! isset($_POST['onombre'])) {$nombre="";}
	// ------------------------------------------------------------------------
	
	
	
	
	if($_POST['accion']=='alta')
	{
		$hoy=date('Y-m-d');
		$registros=mysqli_query($con,"INSERT INTO alumnos 
		(Nombre) values ('$nombre')");
	}
	else 
	{
		$cod=$_REQUEST['codigo'];
		$registros=mysqli_query($con,"UPDATE alumnos SET  Nombre = '$nombre'
		WHERE ID_Alumno = $cod") ;
	}	 
	
	header("Location: /PHP%20Work/CrisPhp/alumnosAbm.php");

        ?>
</body>
    </html>