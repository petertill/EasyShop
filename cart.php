<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kosár - Boltom</title>
		<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
	</head>
	<body>
		<?php
		if(!empty($_SESSION["kosár"])){
			$total = 0;
			foreach($_SESSION["kosár"] as $keys => $values){
		?>
		<table>
			<tr>
				<th>Azonosító</th>
				<th>Termék</th>
				<th>Mennyiség</th>
				<th>Ár</th>
			</tr>
			<tr>
				<td><?php echo $values['id']; ?></td>
				<td><?php echo $values['nev']; ?></td>
				<td><?php echo $values['mennyiseg']; ?></td>
				<td><?php echo $values['ar']; ?> Ft</td>
			</tr>
		</table>
		
		<?php

		
		$total += $values["mennyiseg"] * $values["ar"];
		
	
	}
	echo "<h1>Összesen: $total Ft</h1>";
}else{
echo "<h1><center>A kosár üres. Még...</center></h1>";
}
 ?>
	</body>
</html>
