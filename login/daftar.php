<!DOCTYPE html>
<html>
<head>
	<title>register</title>
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

		.kotak_daftar{
      background : rgba(128, 212, 255,0.2);
      width: 360px;
      margin: 40px auto;
      padding: 20px;
      border-radius: 20px;
  }

    .form_daftar{
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

    .kotak_daftar:hover, .kotak_daftar:focus{
      box-shadow: -10px -10px 10px rgb(26, 178, 255), 10px 10px 10px #1a75ff;
  }

  .tombol_daftar{
    margin-top: 10px;
    border: none;
    height: 50px;
    width: 87%;
    margin-left: 0px;
    border-radius: 50px;
    background-color: #0099e6;
    margin-bottom: 20px;
    color: white;
    font-family: 'mith';
}

  .tombol_daftar:hover{
    background-color:  #1ab2ff;
}

  .login{
    color:  #1ab2ff;
    font-family: 'mith';
}

  .login a{
    color: white;
    text-decoration: none;
}

  .login a:hover{
    text-decoration: underline;
}

	</style>
</head>
<body>
	<div class="kotak_daftar"> 
    <br>
    <form action="proses_daftar.php" method="post">
    	<center><h1>Register</h1></center>
      <label>NIS</label>
      <input type="number" name="nis" class="form_daftar" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">

      <label>Email</label>
      <input type="text" name="email" class="form_daftar" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">

      <label>Username</label>
      <input type="text" name="username" class="form_daftar" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">

      <label>Password</label>
      <input type="password" name="password" class="form_daftar" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
      <input type="hidden" name="level" value="user">

      <center><input type="submit" class="tombol_daftar" value="Daftar"></center>

      <div class="login">
      <center><td colspan="2" align="center">Sudah Punya akun ? <a href="index.php">Login</a></td></center>
      <br>
    </form>
</div>
</body>
</html>