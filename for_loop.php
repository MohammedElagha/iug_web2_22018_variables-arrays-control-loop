<?php
$arr = array("item 1", "item 2", "item 3", "item 4");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	for ($i = 0 ; $i < count($arr) ; $i++) {
		echo "<h1>$arr[$i]</h1>";
	}

	echo "<br>";

	foreach($arr as $item) {
		echo "<h1>$item</h1>";
	}
	?>
</body>
</html>