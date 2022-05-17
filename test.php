<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
/* .inp {margin: 0px 0px 0px 45px ;}

.agree {margin: 0px 0px 0px 60px ;} */

.add{
      background-color:blue; 
      color:white; 
      border:none;
      border-radius: 5px ;
      width: 80px;
      height: 23px;
     
     
   }

</style>
</head>
<body>  

<?php

if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["gender"])) {

   echo "Name : ". $_POST['name']. "<br />";
   echo "E-mail: ". $_POST['email']. " <br />";
   echo "Gender: ". $_POST['gender']. " <br />";
  
  }


// $nameErr = $emailErr = $genderErr = $AgreeErr = "";
// $name = $email = $gender = $Agree = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   } else {
//     $name =($_POST["name"]);
//   }
  
//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = ($_POST["email"]);
//   }
    
  

//   if (!empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = ($_POST["gender"]);
//   }

//   if (empty($_POST["Agree"])) {
//     $AgreeErr = "You must agree to terms";
//   } else {
//     $Agree =($_POST["Agree"]);
//   }
// }



?>

<h2>User Registration Form</h2>

<!-- <p><span class="error">* Required field</span></p> -->
<form method="post" action="record.php">  
  Name
  <br><input class="inp" type="text" name="name">
  <!-- <span class="error">* ?php echo $nameErr;?></span> -->
  <br><br>
  E-mail
  <br><input class="inp" type="text" name="email">
  <!-- <span class="error">* ?php echo $emailErr;?></span> -->
  <br><br>
  Gender
  <br><input class="inp" type="radio" name="gender" value="F">Female
  <br><input  type="radio" name="gender" value="M">Male
  <!-- <span class="error">* ?php echo $genderErr;?></span> -->
  <br><br>

     


  <input class="agree" type="checkbox" name="Agree"/>Receive Email from us.
  <!-- <span class="error">* ?php echo $AgreeErr;?></span> -->
  <br><br>
  <input  class="add" type="submit" name="submit" value="Submit"> 
  <input  onclick="window.location.href='reg.php'" style=' background-color:white; color:black; border:solid 2px; ' class="add" type="button" value="cancel"> 
</form>

<?php
// echo "<h2> View Record</h2>";
// echo "Name <br> $name" ;
// echo "<br><br>";
// echo "E-mail <br>  $email" ;
// echo "<br><br>";
// echo "Gender <br> $gender" ;
// echo "<br>";



?>
<!-- <p>you will receive emails from us.</p>

<button class ="add" onclick="window.location.href='users.php'">Back</button> -->
</body>
</html>