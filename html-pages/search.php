<?php
$conn = new Mysqli("localhost","root","","realestatedb");

$item = $_GET['item'];
$sql = "SELECT * FROM 	property WHERE property_location LIKE '%$item%'";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo '<table>';
	while($res= $result->fetch_assoc()){		
		?>
	<tr>
		<td><?php echo $res['property_location'];?></td>
		<td>
			<a href="house_page.php?id=<?php echo $res['property_id'];?>"> | Visit Property</a></td>
	</tr>
		<?php
	}
	echo '</table>';
}


?>