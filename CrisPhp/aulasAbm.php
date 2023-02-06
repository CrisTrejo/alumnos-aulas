<?php
	// include "../../cabecera.php";
    // require_once("../../snippets/cdn_tablesorter_header.php");
?>	
 
  
  <style>
  .remove-me {
	  display:none;
  }
  .tablesorter td:nth-child(4n+1) {
    width: 80px;
	}
  .tablesorter td:nth-child(4n+2) {
    width: 800px;
  }
  </style>
  
  <script>
  $(function(){

  var $table = $('table');
 
  var pagerOptions = {
    
    container: $(".pager"),
    output: '{startRow} to {endRow} ({totalRows})',
    page: 0,
    size: 40,
 
  };
  
    // call the tablesorter plugin 
    $(".tablesorter").tablesorter({
		theme:"green",
		headers: { 3 : {sorter: false} },
		widgets: ["zebra","filter","resizable","stickyHeaders"],
		widgetOptions: {
			 // filter_hideFilters : true,
			 // filter_columnFilters : true
		}
		})
		
		.tablesorterPager(pagerOptions); 
  }); 
 

  </script>
  

<body style="width: 1100px; margin:auto">
<?php
// Consulta de Acciones  ----------------------------------------------------------------------------
	
	include "bootstrap.php";	
	$registros=mysqli_query($con,"SELECT * 
	FROM aulas 
	ORDER BY Nombre ASC");
	
?>
    <div id='cuerpo'>
	<div class="w3-container w3-teal">
		<h3>LISTA DE AULAS</h3>
	</div>
	<table class="tablesorter" style="width:1100px">
		<thead>
			<tr class="panel">
			  <td class="pager" colspan="3">
				
				  
				<a style="text-align: center; font-family: Arial; font-size: 18px">
				AULAS
				</a>
				<a href='/PHP%20Work/CrisPhp/aulasAlta.php' style="float:right"> <img src="data:image/jpeg;base64,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" width="25" height="25" ></a>
			  </td>
			 
			</tr>
		
			<tr >
				<th class="panel" >#</th>
				<th>NOMBRE</th>
				<th data-filter="false">ACCIONES</th>
			</tr>
	</thead>

	<tbody>
	<?php
	
	while ($reg1=mysqli_fetch_array($registros))
    {
	?>

	  <tr>
	    <td style="text-align: center">
          <?php echo $reg1['ID_Aula']; ?>
      </td>
	   <td>
          <?php echo $reg1['Nombre']; ?>
      </td>
	 
	  
	  
	  <td style="text-align: center">
		<a href="aulasModif.php?codigo=<?php echo $reg1['ID_Aula'];?>"><img src="data:image/png;base64,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" width="15" height="15" ></a>	  
		&nbsp &nbsp
		<a href="aulasBorra.php?codigo=<?php echo $reg1['ID_Aula'];?>" onClick="if (! confirm('Seguro que borra?')) return false;" ><img src="data:image/png;base64,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" width="15" height="15" ></a>
		
	  </td>
	  </tr>	  
	  
	<?php
	}	
	?>
	
	</tbody>
	<tfoot>
		<tr>
			  <td class="pager" colspan="3">
				
			  </td>
			 
		</tr>
	</tfoot>
	</table>
		
	</body>
	</html>