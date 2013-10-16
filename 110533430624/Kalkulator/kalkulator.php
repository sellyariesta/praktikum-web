<!DOCTYPE html>
<html>
	<head> 
		<title>Tugas Kalkulator Selly</title>
	</head>
	<body onload="document.form1.input1.focus();" style="font-family:calibri;">
		<form name="form1" method="post" action="kode.php">
			<input type="text" name="input1" value="<?php echo $_GET['input1']; ?>" style="width:80px;height:20px;padding:5px;background:#f4f4f4;border:1px solid #f4f4f4;"/>
			<select name="operator"  style="width:100px;height:30px;padding:5px;border:1px solid #f4f4f4;">
				<option value="+"> + </option>
				<option value="-"> - </option>
				<option value="x"> x </option>
				<option value=":"> : </option>
			</select>
			<input type="text" name="input2" value="<?php echo $_GET['input2']; ?>"  style="width:80px;height:20px;padding:5px;background:#f4f4f4;border:1px solid #f4f4f4;"/>
			<input type="submit" name="submit" value="="  style="width:100px;height:50px;padding:5px;background:#d4d4d4;border:1px solid #d4d4d4;"/>
			<input type="text" name="hasil" value="<?php echo $_GET['hasil']; ?>"  style="width:170px;height:30px;padding:5px;background:#f4f4f4;border:1px solid #f4f4f4;"/><br/>
		</form>
	</body>
</html>