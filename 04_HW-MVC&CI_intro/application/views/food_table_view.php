<table border="1">
	
	<?php 

	//echo "<pre>";

	//var_dump($dishes);

	//echo "</pre>";

	?>
	<thead>
		<th>No</th>
		<th>Meal</th>
		<th>Picture</th>
		<th>Main Ingredient</th>
	</thead>
	<tbody>
		<?php 
		for ($i=0; $i < 3; $i++) { 
			$j = $i+1;
			echo '<tr><td>'.$j.'</td>';
			foreach ($dishes[$i] as $value) {
				echo '<td>'.$value.'</td>';
			}

			echo '</tr>';
		}
		?>
	</tbody>
</table>