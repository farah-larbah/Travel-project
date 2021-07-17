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
  </style>
</head>
<body>
<?php

switch($_POST['proc']){
    case'Send':add_method();
    break;
    case'Update':Update_method();
    break;
    case'Display':Display_method();
    break;
    case'Delete':Delete_method();
    break;
    
    }



function add_method(){
   
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
    $name=mysqli_real_escape_string($conn,$_REQUEST['name']);
    $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
    $subject = mysqli_real_escape_string($conn, $_REQUEST['subject']);
    $number = mysqli_real_escape_string($conn, $_REQUEST['number']);
    $mess = mysqli_real_escape_string($conn, $_REQUEST['mess']);


    $sql = "INSERT INTO contact(name, email,subject,number,mess)
    VALUES ('$name', '$email', '$subject','$number','$mess')";
    
    if (mysqli_query($conn, $sql)) {
      echo "<h1>New record created successfully</h1>";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);


}
function Display_method(){
  
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

  $sql = "SELECT * FROM contact WHERE name='{$_REQUEST['name']}'";
  
  $result = mysqli_query($conn, $sql);


  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table><tr><th>Name</th><th>Email</th><th>Subject</th><th>Phone</th><th>message</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
      
    echo "<tr><td>".$row["name"]."</td><td>".$row["email"].
    "</td><td>".$row["subject"]."</td><td>".$row["number"]."</td><td>".$row["mess"]."</td></tr>";  
    
    } // end while
     echo "</table>";
  } else {
    echo "<h1>Can not fine any results</h1>";
  }
  
  
  mysqli_close($conn);
  
  }
  function Delete_method(){
  
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
 
  $sql ="Delete from contact where name='{$_REQUEST['name']}'";
  
  if (mysqli_query($conn, $sql)) {
    
      echo "<h1>Record deleted successfully</h1>";
     
  } else {
    
     echo "Error Deleted record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  
  }
  
  function Update_method(){
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
  
  $sql = "update contact SET email='{$_REQUEST['email']}',subject='{$_REQUEST['subject']}',number='{$_REQUEST['number']}',mess='{$_REQUEST['mess']}' where name='{$_REQUEST['name']}'";
  
  if (mysqli_query($conn, $sql)) {
    echo "<h1>Record updated successfully</h1>";
  
     
  } else {
    
   echo "Error updating record: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  
  
  }



    ?>


</body>
</html>