<!DOCTYPE html>
<html>
<head>
	<title>rtes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		*{
			padding: 0;
			margin: 0;

		 }

		 @font-face {
         	font-family: 'Nexa';
         	src: url('../font/PRISTINA.TTF');
  }

		 .header{
		 	width: 100%;
		 	height: 70px;
		 	background-color: red;
		 	position: fixed;
		 }

		 .header h1{
		 	margin-top: 10px;
		 	margin-left: 20px;
		 	font-family: 'Nexa';
		 	font-size: 35px;
		 }

		 
		 .wrapper .badan .sidebar{
		 	background-color: black;
		 	float: left;
		 	width: 22%;
		 	height: 490px;
		 	padding-left: 30px;
		 	padding-top: 80px;
		 	overflow-x: hidden;
		 	margin-top: 70px;
		 	position: fixed;
		 }
		 .sidebar a, .dropdown-btn {
  			padding: 8px 8px 6px 0px;
  			text-decoration: none;
	  		font-size: 24px;
	  		font-family: verdana;
	  		color: #818181;
	  		display: block;
	  		border: none;
	  		background: none;
	  		width: 100%;
	  		text-align: left;
	  		cursor: pointer;
	  		outline: none;
		}

		.sidebar a:hover, .dropdown-btn:hover {
  				color: #f1f1f1;
		}


		.active {
	  		color: white;
		}

		.dropdown-container {
  				display: none;
  				
  				padding-left: 15px;
  		}

  	
		 
		 .wrapper .badan .content{
			height: 590px;
		
		}

		.content h1{
			text-align: center;
			padding-top: 250px;
		}


	</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h1>Sevory</h1>
		</div>

		<div class="badan">
			<div class="sidebar">	
  			<button class="dropdown-btn">Menu 
    				<i class="fa fa-caret-down"></i>
 			 </button>
  			<div class="dropdown-container">
    				<a href="daftar_barang.php">Daftar Barang</a>
    				<a href="barang_pinjam.php">Barang Pinjaman</a>
  			</div>
 				 <a href="../login/logout.php" onclick="return confirm('Anda Yakin Ingin Keluar?')">Logout</a>
			</div>
	
	</div>
</body>
</html>
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>