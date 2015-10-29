<?php 

echo "<h2>{$title}</h2>";
echo '<h4>Ingredients:</h4>';
echo '<ol>';
foreach ($ingredients as $value) {
	echo "<li>{$value}</li>";
}
echo '</ol>';
echo '<h4>Procedure:</h4>';
echo '<ol>';
foreach ($procedure as $value) {
	echo "<li>{$value}</li>";
}
echo '</ol>';
?>
<img src="<?php echo base_url().$image['src']; ?>" alt="<?php echo $image['alt']; ?>" width="250">