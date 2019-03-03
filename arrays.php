<?php
$arr = array("item_1", 55, 22.62);
$arr[3] = false;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><?php echo $arr[0]; ?></h1>
	<h1><?php echo $arr[1]; ?></h1>
	<h1><?php echo $arr[2]; ?></h1>
	<h1><?php echo $arr[3]; ?></h1>

	<h1><?php var_dump($arr) ?></h1>
</body>
</html>