<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Data CheckBox</title>
</head>

<body>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"><!--form ditangani oleh current script dan transfer data menggunakan metode POST-->
      Jenis Makanan
	 <br><input type="checkbox" name="makanan[]" value="Nasi Goreng"
	 <?php
	    if (isset($_POST['makanan'])){      //kondisi melakukan cek makanan mempunyai nilai atau tidak	
		  foreach ($_POST['makanan'] as $key => $val){     //pengulangan untuk membaca nilai array makanan
	                   if($val == 'Nasi Goreng'){    //checkbox akan ditandai bila 'Nasi Goreng' merupakan salah satu elemen array makanan	
		                   echo 'checked="checked"';
			   }
		  }
	    }
	 ?>
	 />Nasi Goreng   <!-- input berupa CheckBox -->
	 <br><input type="checkbox" name="makanan[]" value="Ayam Panggang"
	 <?php
	     if (isset($_POST['makanan'])){    //kondisi melakukan cek makanan mempunyai nilai atau tidak
		   foreach($_POST['makanan'] as $key => $val){    //pengulangan untuk membaca nilai array makanan
			   if($val == 'Ayam Panggang'){    //checkbox akan ditandai bila 'Ayam Panggang' merupakan salah satu elemen array makanan	
				   echo 'checked="checked"';
			   }
		   }
	     }
          ?>
	  />Ayam Panggang   <!-- input berupa CheckBox -->
	  <br><input type="checkbox" name="makanan[]" value="Bakso"
	  <?php
	     if (isset($_POST['makanan'])){    //kondisi melakukan cek makanan mempunyai nilai atau tidak
		    foreach($_POST['makanan'] as $key => $val){   //pengulangan untuk membaca nilai array makanan
			    if($val == 'Bakso'){        //checkbox akan ditandai bila 'Bakso' merupakan salah satu elemen array makanan	
				    echo 'checked="checked"';
			    }
		    }
	     }
	   ?>
	   />Bakso    <!-- input berupa CheckBox -->
	   <br><input type="submit" value="OK" />       <!--membuat button submit -->
      </form>

      <?php
	      //Ekstraksi Nilai
	      if (isset($_POST['makanan'])){   //kondisi melakukan cek makanan mempunyai nilai atau tidak	
		       foreach ($_POST['makanan'] as $key => $val){    //pengulangan untuk mendapatkan nilai array makanan dan disimpan pada variabel $val
			       echo ' '.$val.'<br />';        //menampilkan index array dan isi array
		       }
	      }
      ?>
</body>
