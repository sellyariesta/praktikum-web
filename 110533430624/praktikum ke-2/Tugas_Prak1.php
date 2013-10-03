<!DOCTYPE html>
<html>
	<head>
		<title> TUGAS PRAKTIKUM 1</title>
	</head>
	<body>
		<?php 
			function byvalue($bil){
				$bil++;
			}
			function byref(&$bil){
				$bil++;
			}
			
			$nilai = 5;
			$nilai2 = 5;
			byvalue($nilai);
			byref($nilai2);
			echo "Nilai asli = ".$nilai."<br/>";
			echo "pass by value = ".$nilai."<br/>";
			echo "pass by reference = ".$nilai2;
		?>
	</body>
</html>