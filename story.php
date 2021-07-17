<!DOCTYPE html>
<html>
<head>

 <!--to add the icon-->
 <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/project/css/basic.css">
<!--to add font-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Open+Sans:wght@700&display=swap" rel="stylesheet">

    
    <title>Stories</title>

<style>
    h1{
   font-family: 'Dancing Script', cursive;
   text-align: center;
  position: absolute;
  font-size: 6rem;
  /*to make the text in center*/
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
    }
table{
    margin-top:5% ;
    width: 80%;
    border-collapse: collapse;
    /*To center a table */
    margin-left: auto;
   margin-right: auto;
    }
table, th, td {
    border-bottom: 1px solid
}
th {
    background-color: rgb(104, 147, 104);;
  color: white;
  height: 70px;
  
}
td {
  text-align: center;
  height: 50px;
  padding: 28px 8px;
}
tr:hover {background-color:#C8C8C8;}



 .hero-image-story{
    /* main image*/
    background-image: url("/project/images/home-2.jpg"); 
    color: white;
    height: 70%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    
  }
</style>
</head>

<body>
      <!-- Navbar -->
      <nav class="navbar">


<div class="topnav" id="myTopnav">
    <a href="/project/index.php" class="active"><b>Home</b></a>
    <a href="/project/html/page2.html"><b>Discover</b></a>
    <a href="/project/html/page3-map.html"><b>Map</b></a>
    <a href="/project/story.php"><b>Stories</b></a>
    <a href="/project/contact.php"><b>Contact</b></a>
   <!--class="icon" is used to open and close the topnav on small screens-->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars" aria-hidden="true" style="font-size:24px"></i>
    </a>
</div>
</nav>

</div>
<!--section 1 for main page image-->
<div class="hero-image-story">
</div>
<!--end of section 1 for main page image-->
<h1>Stories</h1>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM stories";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table><tr><th>Name</th><th>Email</th><th>Country</th><th>Story</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
	  
	echo "<tr><td>".$row["userName"]."</td><td>".$row["userEmail"].
	"</td><td>".$row["country"]."</td><td>".$row["message"]."</td></tr>";  
  
  } // end while
   echo "</table>";
} else {
  echo "Can not fine any results";
}

mysqli_close($conn);

?>

<script src="/project/js/script.js">
</script> 
</body>
</html>