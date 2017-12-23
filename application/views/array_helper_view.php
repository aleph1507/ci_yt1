<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		// print_r($seo);
	?>

	<p>1. element()</p>

	<?php 
		echo element("meta_desc", $seo);
		// element($key, $array);
	?>

	<p>2. random_element()</p>

	<?php 
		echo random_element($seo);
	?>

	<p>3. elements()</p>

	<?php 
		$new_array =  elements(array('meta_desc', 'meta_key'), $seo);

		print_r($new_array);
		// elements(array($key), $array);
	?>

   <?php //print_r($seo); ?>
</body>
</html>