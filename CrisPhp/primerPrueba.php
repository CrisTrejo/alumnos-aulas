<style>
table, tr, td, th {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<?php
	include "bootstrap.php";
	$registros=mysqli_query($con,"SELECT Nombre, ID_Alumno from alumnos");//aca esta la busqueda o sea el array, queda en formato q no me sirve, asi q tengo q usar fetch para q lo convierte en un array q es mas un diccionario de datos.


	echo "<table>";
	
	echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>ID</th>";
	echo "</tr>";
	
	while ($reg1=mysqli_fetch_array($registros))//va a recorrer el array
    {
		echo "<tr>";
		echo "<td>" . $reg1["Nombre"] . "</td>";
		echo "<td>" . $reg1["ID_Alumno"] . "</td>";
        echo "</tr>";
	
	}
	echo "</table>";
	exit;
?>	
