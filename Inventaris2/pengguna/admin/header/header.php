<!DOCTYPE html>
<html>
<head>
	<title>rtes</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../asset/css/style.css">
</head>
<style type="text/css">

.sidebar{
  position: fixed;
  width: 250px;
  height: 100%;
  left: -250px;
  transition: .5s;
  background-color: grey;
}
.sidebar header{
  line-height: 75px;
  color: white;
  background-color: black;

  box-shadow: -2px 2px 8px rgba(0, 0, 0, 0.8);
}
.sidebar header h1{
  font-family: myFirstFont;
  font-size: 30px;
margin-left: 40px;
}
.sidebar ul li a{
  font-size: 20px;
  color: white;
  line-height: 50px;
  transition: .5s;
  display: block;
  margin-left: 30px;
  text-decoration: none;

}
.sidebar ul li a i{
  margin-right: 10px;
}
.sidebar ul li a:hover{
  margin-left: 50px;
  color: #BDC3C7;
}

.sidebar ul li {
  list-style: none;
  border-bottom: 1px solid white;
  width: 100%;
}
#check{
  display: none;
}

label #open{
  position: absolute;
  top: 15px;
  left: 20px;
  font-size: 40px;
  cursor: pointer;
  transition: .5s;
  color: white;
}

label #close{
  position: absolute;
  top: 14px;
  left: -200px;
  font-size: 40px;
    cursor: pointer;
    z-index: 1;
    transition: .5s;
    color: white;
}

#check:checked ~ .sidebar{
  left: 0;
}
#check:checked ~ label #close{
  left: 200px;
}
#check:checked ~ label #open{
  left: -200px;
}
section{
  transition: .5s;
}


*{
  padding: 0;
  margin: 0;
}
.navbar{
  width: 100%;
  height: 60px;
  background-color: black;
  padding-top: 15px;
}
.navbar h1{
  font-family: myFIrstFont;
  margin-left: 80px;
  margin-top: 2px;
  color: white;
}
.sidebar button{
  margin-left: 25px;
}

</style>
<body>

  <input type="checkbox" id="check">
  <label for="check">
    <i class="fa fa-navicon" id="open"></i>
    <i class="fa fa-close" id="close"></i>
  </label>
  <div class="sidebar">
    <header>
      <h1>Menu</h1>
    </header>
    <ul>
      <li><a href="index.php"><i class="fa fa-home"></i>Home </a> </li>
      <li><a href="confirm.php">Confirm</a></li>
      <li>
        <button class="dropdown-btn">Data 
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
          <a href="data_barang.php">Data Barang</a>
          <a href="ruang.php">DataRuang</a>
        </div>
      </li> 
      <li>
        <button class="dropdown-btn">Petugas 
            <i class="fa fa-caret-down"></i>
        </button>
          <div class="dropdown-container">
            <a  href="pengguna_user.php">User</a>
            <a  href="pengguna_operator.php">Operator</a>
          </div>
      </li>
      <li>
        <a href="">Riwayat</a>
      </li>     
      <li>
        <a href="logout.php"><i class="fa fa-power-off"></i>Log out</a> 
      </li>
    </ul>
  </div>
  <section>


    </div>
    <div class="navbar">
      <h1>SKENVORY</h1>
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