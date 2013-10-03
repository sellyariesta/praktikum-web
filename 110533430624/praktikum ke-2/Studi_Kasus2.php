<!DOCTYPE html>
<html>
	<head>
		<title>STUDI KASUS 2</title>
	</head>
	<body>
		
		<?php 
			function tabel($baris, $kolom){
				echo "<table border=1>";
				for($i = 1; $i <=$baris; $i++){
					echo "<tr height=60>";
					for($j = 1; $j <=$kolom; $j++){
						echo "<td width=60></td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}
			tabel(5,5);
		?>
	</body>
</html>

