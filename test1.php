<?php

class test1 {
	private $tab;
	private $cols;
	private $nbCols;
	
	function __construct() {
		$this->tab = array ();
	}
	
	function setCols($cols) {
		$this->cols = $cols;
		$this->nbCols = COUNT ( $cols );
	}
	
	function insertRow($row) {
		$this->tab [] = $row;
	}
	
	function sortBy($col, $sort) {
		for($i = 0; $i < sizeof ( $this->tab ); $i ++) {
			$sort_values [$i] = $this->tab [$i] [$col];
		}
		asort ( $sort_values );
		reset ( $sort_values );
		while ( list ( $arr_key, $arr_val ) = each ( $sort_values ) ) {
			$sorted_arr [] = $this->tab [$arr_key];
		}
		return $sorted_arr;
	}
	
	function find($value) {
		foreach ( $this->tab as $row ) {
			if (in_array ( $value, $row )) {
				print_r ( $row );
			}
		}
	}
	
	function display() {
		
		echo "<table border=1>";
		// Cols
		echo "<tr>";
		foreach ( $this->cols as $col ) {
			echo "<th>" . $col . "</th>";
		}
		echo "</tr>";
		
		// Rows
		foreach ( $this->tab as $row ) {
			echo "<tr>";
			foreach ( $row as $value ) {
				echo "<td>" . $value . "</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

}

?>

<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
</head>
<body>
<?php
$test1 = new test1 ();
$test1->setCols ( array ("col1", "col2", "col3" ) );
for($i = 0; $i < 50; $i ++) {
	$test1->insertRow ( array ($i, ++ $i, ++ $i ) );
}

$test1->display ();
$test1->find ( "15" );

?>
</body>
</html>