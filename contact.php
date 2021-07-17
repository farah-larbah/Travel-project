<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--to add css-->
    <link rel="stylesheet" href="\project\css\style.css">
     <!--to add font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <title>Contact us</title>

    <style>
    body {
    /* main image*/
    background-image: url("/project/images/hero-image1.jpg"); 
    color: white;
    height: 120%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    .form-update{
      background-color: rgb(104,147,104,0.5);
      width: 70vw;
    
    }
    .contact-form h2 {
  padding: 2%;
}
    .btn{
  color: #fff;
  background-color: #022831;
  display: inline-block;
  font-size: 1.1em;
  font-weight: 500;
  letter-spacing: 2px;
  width: 25%;
  border: none;
  cursor: pointer;
  margin-bottom: 3%;
    }

 
																							
    </style>

</head>
<body onload="alert('Make Sure to Enter your Name to Update,Delete or Dispaly Data')">

<script src="/project/js/check.js"></script>
    <form class="contact-form form-update" name="form1" action="/project/db_conn.php" method="post">
        
        <h2 class="section-title  "><span>GET </span>In Touch With Us</h2>
        
        <div class="input-box">
          <input type="text" name="name"  placeholder="Full Name" onblur="validateform()">
        </div>
        <div class="input-box">
          <input type="email" name="email"   placeholder="Email" onblur="isCheckEmail(this.value)">
        </div>
        <div class="input-box">
        <input type="text" name="subject"  placeholder="Subject" onblur="subjectvalidateform()">
        </div>
        <div class="input-box">
        <input type="tel" name="number"  placeholder="Phone Number" onblur="numbervalidateform()">
        </div>
        
        <div class="input-box">
          <textarea name="mess" rows="8" cols="80" placeholder="Message" onblur="textareavalidateform()"></textarea>
        </div>

        <div class="input-box">
          <input type="submit" class="send-btn btn" name="proc" value="Send" >
           <input type="submit" class="send-btn btn" name="proc" value="Delete">

           <input type="submit" class="send-btn btn" name="proc" value="Display" >
           <input type="submit" class="send-btn btn" name="proc" value="Update">
           <input type="reset" class="send-btn btn"  value="Reset">
        </div>
      
    </form>  

 
   
</body>
</html>
