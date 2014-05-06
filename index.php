<?php
	$arr = array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,);
	var_dump($arr);
	echo '<br>';
	$json = json_encode($arr);
	echo $json;
	echo '<br>';	
	var_dump(json_decode($json));
	echo '<br>';
	var_dump(json_decode($json, true));