<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>TUGAS PRAKTIKUM 2</title>
	</head>
	
	<body>
		Tabel greeting, 9 sel dan 3 kolom
		<?php 
			$rows=3;$cells=9;$columns=3;
			$width = $columns * 100;
			echo "<table width=".$width." border=1>";
			$rw = 0;
			$cel = 1;
			while ($rw < $rows && $cel <= $cells){
				echo "<tr>";
				$col = 0;
				while ($col < $columns){
					if ($cel <= $cells){
						echo "<td><div align=center>".$cel."</div></td>";
						$cel++;
					}
					$col++;
				}
				echo "</tr>";
				$rw++;
			}
			echo "</table>";
		?>
	</body>
</html>
