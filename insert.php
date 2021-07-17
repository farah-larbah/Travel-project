<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  h1{
  text-align: center;
  position: absolute;
  font-size: 3rem;
  /*to make the text in center*/
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  }
  </style>
</head>
<body>
  
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

if ( isset( $_POST['submit'] ) ) {

$userName = mysqli_real_escape_string($conn, $_REQUEST['userName']);
$userEmail = mysqli_real_escape_string($conn, $_REQUEST['userEmail']);
$country = mysqli_real_escape_string($conn, $_REQUEST['country']);
$message = mysqli_real_escape_string($conn, $_REQUEST['message']);



$sql = "INSERT INTO stories( userName, userEmail,country,message)
VALUES ('$userName', '$userEmail','$country','$message')";

if (mysqli_query($conn, $sql)) {
  echo "<h1>Thank you for sharing your story with us</h1>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);

?>

</body>
</html>