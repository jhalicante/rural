  <?php
$user = 'root';
$pass = 'root';
$db ='rural';

$db = new mysqli('localhost', $user,$pass,$db);
$result = $db->query("SELECT *FROM counter");


//pre_r($result);
?>
	<?php
	

			while ($row = $result->fetch_assoc()):?>
			<table>
			<tr>
					<input type="text" value=<?php echo $row['id']?>
				
<td>
		
	
				
				</td>
				</tr>
				</table>
				<?php endwhile; ?>