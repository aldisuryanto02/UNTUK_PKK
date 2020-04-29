<!DOCTYPE html>
<html>
<head>
	<title>rtes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<h1>SKENVORY</h1>
		</div>  

		<div class="badan">
			<div class="sidebar">	
  			<button class="dropdown-btn">Data 
    				<i class="fa fa-caret-down"></i>
 			 </button>
  			<div class="dropdown-container">
    				<a href="data_barang.php">Data Barang</a>
    				<a href="data_pinjam.php">Data Peminjam</a>
            <a href="data_kembali.php">Data Pengembalian</a>
  			</div>
 				 <a href="../logout.php">Logout</a>
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