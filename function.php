<?php
$data = file_get_contents("data-1.json");
$propiedades = json_decode($data, true);

function Ciudad($data){
	$i=0;
	foreach($data as $prop){
		$city[$i] = $prop[Ciudad];
		$i++;
	}
	$cityList = array_values(array_unique($city));
	$a = count($cityList);
	for($b=0; $b<$a;$b++){
		echo $cityList[$b];
	}
}

Ciudad($propiedades);
?>