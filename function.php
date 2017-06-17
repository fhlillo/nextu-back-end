<?php
function MostrarTodos(){
	$data = file_get_contents("data-1.json");
	$propiedades = json_decode($data, true);
	
	foreach ( $propiedades as $product ) {
		print_r( $product );
	}
}
?>