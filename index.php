<?php 

	$conexion=mysqli_connect('localhost','root','3006622703','techlaunch');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			
			<td>name</td>
			<td>country</td>
			<td>language</td>
			
		</tr>

		<?php 
		$sql="Select A.name , B.country , B. lang from students A join countries B on A.country = B.code where lang = 'fr'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			
			<td><?php echo $mostrar['name'] ?></td>
			<td><?php echo $mostrar['country'] ?></td>
			<td><?php echo $mostrar['lang'] ?></td>
		
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>