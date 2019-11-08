<!DOCTYPE html>
<html>
<head>
	<title>docker test</title>
</head>
<body>
	<h1>welcome lutvianii</h1>
	<ul>
		<?php
			$json = file_get_contents('http://product-service');
			$obj = json_decode($json);

			$products = $obj->products;
			foreach ($products as $products) {
				echo '<li>'.$products.'</li>';
			}
		?>
	</ul>
</body>
</html>
