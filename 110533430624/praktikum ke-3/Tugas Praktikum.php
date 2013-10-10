<!DOCTYPE HTML> 
<!--
Algoritma :
1. Start
2. Menampilkan Username dan Password
4. Pilih Seleksi 
5. Klik tombol Login
6. Tampil Hasil Login
7. End

--> 
<head> 
<title>Login Form</title> 

	</head> <script type="text/javascript">
  		//Deklarasi variabel username dan password
		function coba(){ var username=document.getElementById("username"); 
		var password=document.getElementById("password");

		if(username.value==''||password.value==''){ alert('inputan tidak boleh kosong..'); } } 
			</script>

<body bgcolor="blue"> <center>
 
	
	<form name="formlogin" action="<?php $_SERVER['PHP_SELF']; ?>" 
	method="get" onSubmit="coba()"> 
		<br> <font color='#24b108' size='30'> Login </font>
		<hr/>
		
	
		
		<br><font color='white', size='3'>Username </font><br><input type="text" name="username" id="username"><br>  <!--Melakukan input username-->
  <font color='white' size='3'>Password </font><br><input type="password" name="password" id="password">      <!--Melakukan input password-->

 <br> <br><input type="submit" name="login" value="login"> </form> 
 
						</center>
 

<?php if(isset($_GET['username'])){ $isiusername =$_GET['username']; $isipassword =$_GET['password']; $uname="selly"; $pass="selly";   //Mengecek username dan password
//Mengecek huruf
$string = 'abcdefghijklmnopqrstuvwxyz'; if(!preg_match("/^[a-zA-Z]+$/", $isiusername)){ echo "<br><p style='#b988b1' align='center'>Username & Password tidak boleh ada angka"; }
//kondisi untuk menampilkan username
if($isiusername==$uname && $isipassword==$pass){ echo "<br><p style='#b988b1' align='center'>Anda Login sebagai : ".$uname; }else{ echo "<br><p style='#b988b1' align='center'>Error!! <br/ > Periksa Username atau Password "; } } ?> 
</body> 
</html>

