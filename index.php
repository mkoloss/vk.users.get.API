<?php
	$vkid = isset($_GET['vkid']) ? $_GET['vkid']:'1';
	$vkarr = file_get_contents('https://api.vk.com/method/users.get?v=5.21&user_ids='.$vkid.'&fields=photo_200,city');
	echo $vkarr.'<br>';
	var_dump(json_decode($vkarr, true));
	$new_arr = json_decode($vkarr, true);
	echo '<br>';
	echo $new_arr['response'][0]['id'];

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Echo Vk Info</h1>
	<form action="" method="get">
		<input type="text" placeholder="Введите id" name="vkid">
		<input type="submit" value="Получить даннные  пользователя">
	</form>

	<?php 
		echo $new_arr['response'][0]['first_name'].' '.$new_arr['response'][0]['last_name'].'<br>';
 		echo $new_arr['response'][0]['city']['title'].'<br>';
 		echo '<img src="'.$new_arr['response'][0]['photo_200'].'">';
 	?>
</body>
</html>