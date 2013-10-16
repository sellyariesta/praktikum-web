<?php 
			if($_POST['submit']){
				$input1 	= $_POST['input1'];
				$input2 	= $_POST['input2'];
				$operator	= $_POST['operator'];
				$hasil		= 0;
				
				if($operator == "+"){
					$hasil = $input1 + $input2;
				}else if($operator == "-"){
					$hasil = $input1 - $input2;
				}else if($operator == "x"){
					$hasil = $input1 * $input2;
				}else if($operator == ":"){
					$hasil = $input1 / $input2;
				} 
			}
?>
<script language="javascript">
	document.location="kalkulator.php?hasil=<?php echo $hasil; ?>&&input1=<?php echo $input1; ?>&&input2=<?php echo $input2; ?>";
</script>