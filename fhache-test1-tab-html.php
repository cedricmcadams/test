<html>
	Hello World
	<?php
	
		echo "coucou" ;
	
		class Tab
		{
			var $tableau = array();
			//Tableau à 2dimensions
			var $nomCol = array();
			var $rows = array();
			function setCols($col)
			{
				$tableau[0] = $col;
				$nomCol = $col;
			}
			function insertRow($tab)
			{
				$tableau[] = $tab;
				$rows[] = $tab;
			}
			function display()
			{
				echo "<table>";
				echo "<tr>";
				for ($i=0;$i<3;$i++)
				{
					echo "<td>".$nomCol[$i]."</td>":
				}
				echo "</tr>";
				foreach ( $rows as $row )
				{
					echo "<tr>";
					foreach ( $row as $val )
					{
						echo "<td>$val</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}
			function find($val)
			{
				$retour = array();
				foreach ( $rows as $row )
				{
					foreach ( $row as $valrow )
					{
						if ( $valrow == $val )
						{
							$retour[] == $valrow;
						}
					}
				}
				return $retour;
			}
			function sortBy()
			{
				
			}
		}
	?>
</html>
