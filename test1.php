<?php


$tab[] ;

function setCols($array){
	$tab[0] = $array;
}

function insertRow($array){
	$tab[$tab.sizeof()+1] = $array ;
}

// $order 0=Croissant  1=decroissant
function sortBy($indicecol , $order){
	if($order != 0 ||$order != 1)
		return null;
		
	if($indicecol > $tab.sizeof())
		return null;
		
	for($i=0 ; $i < $tab[$indicecol.sizeof()] ; $i++) {
		if($order == 0 ){
			$min =
		}
			
		
	
}

function display($value){
	for($i=0 ; $i < $tab.sizeof(); $i++)
		for($j=0 ; $j < $tab[$i].sizeof() : $j++) 
			if($tab[$i][$j] == $value)
				return "ligne ".$i." colone ".$j ;
	
}

function display(){

	$code ="<TABLE>";
	for($i=0 ; $i < $tab.sizeof(); $i++){
		$code .= "<tr>";
		for($j=0 ; $j < $tab[$i].sizeof() : $j++) 
			$code .= "<td>".$tab[$i]."</td>";
		$code .= "</tr>";
	}
	$code .= "</TABLE>";
	
	return $code;
}

?>