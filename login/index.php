<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
    *{
      margin: 0;
      padding: 0;
    }
    body{
      background-image: url(../img/Inventory-background.png);
      background-repeat: no-repeat;
    }

    @font-face {
          font-family: 'Nexa';
          src: url('../font/Jungle_Land.ttf');
  }

  @font-face {
          font-family: 'mith';
          src: url('../font/Mithella-Regular.otf');
  }

  h1{
    font-family: 'Nexa';
    color: white;
    font-size: 35px;
    margin-top: 10px; 
    margin-bottom: 15px;
  }

	.kotak_login{ 
		  height: 500px;
  		background : rgba(128, 212, 255,0.2);
  		width: 330px;
  		margin: 70px auto;
  		padding: 20px;
      border-radius: 20px;
}

.form_login{
  	height: 20px;
  	width: 80%;
    border:  2px inset white;
  	margin-top: 5px;
  	padding: 10px;
    margin-left: 20px;
  	margin-bottom: 20px;
    border-radius: 50px;
    background: none;
    font-family: 'mith';
    color: white;
} 


label{
  margin-left: 25px;
  color: white;
  font-family: 'mith';
}

.kotak_login:hover, .kotak_login:focus{
  box-shadow: -10px -10px 10px rgb(26, 178, 255), 10px 10px 10px #1a75ff;
}

.tombol_login{
	margin-top: 10px;
  border: none;
  height: 50px;
  width: 87%;
  margin-left: 20px;
  border-radius: 50px;
  background-color: #0099e6;
  margin-bottom: 20px;
  color: white;
  font-family: 'mith';
}

.tombol_login:hover{
  background-color:  #1ab2ff;
}

.daftar{
  color:  #1ab2ff;
  font-family: 'mith';
}

.daftar a{
  color: white;
  text-decoration: none;
}

.daftar a:hover{
  text-decoration: underline;
}

.select{
  margin-top: 5px;
  margin-left: 20px;
  border:2px inset #eaeaea;
	width: 87%;
	height: 43px;
	margin-bottom: 10px;
  border-radius: 50px;
  background: none;
  color: #00aaff;
}
.lupa{
	margin-left: 58%;
  color: white;
  font-family: 'mith';
}
a .lupa{
	margin-top: 10%;
}
	</style>
</head>
<body>
	<?php 

		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				$pesan = "Username dan Password tidak sesuai !";
				echo "<script type='text/javascript'>alert('$pesan');</script>";
			}
			
		}

	?>

	<div class="kotak_login"> 
    <br>
    <form action="proses_login.php" method="post">
    	<center><h1>Login</h1></center>
      <label> Username</label>
      <input type="text" name="username" class="form_login" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">

      <label>Password</label>
      <input type="password" name="password" class="form_login" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">

      <label>Level</label>
      <select name='level' class="select">
		    <option value='admin'>Admin</option>
		    <option value='operator'>Operator</option>
		    <option value='user'>User</option>
	  </select>

	  <a href="forgot_password.php" class="lupa">Lupa Password?</a>
	  

      <input type="submit" onclick="nama()" class="tombol_login" value="LOGIN"></center>
      <br>

      <div class="daftar">
      <center><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php">Daftar</a></td></center>
      <br/>
      </div>
    </form>
  </div>
</body>
</html>