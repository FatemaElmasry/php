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


$nameErr = $emailErr = $genderErr = $AgreeErr = "";
$name = $email = $gender = $Agree = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name =($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
  }
    
  

  if (!empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = ($_POST["gender"]);
  }

  if (empty($_POST["Agree"])) {
    $AgreeErr = "You must agree to terms";
  } else {
    $Agree =($_POST["Agree"]);
  }
}

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


</body>
</html>


<?php
#5
//insert data to TABLE
  //  $dbhost = 'localhost';
  //  $dbuser = 'root';
  //  $dbpass = '';
  //  $dbname ='test';
  //  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
  //  if(! $conn ) {
  //     die('Could not connect: ' . mysqli_error($conn));
  //  }
   
  //  echo 'Connected successfully<br>';
   
  //  //select
  //  mysqli_select_db( $conn,$dbname );

  //  //create table
  //  $sql = "INSERT INTO users(u_name, email, gender) 
  //  VALUES ( ".$_POST['name'].", ".$_POST['email'].", ".$_POST['gender']." )";
     
  //  $retval = mysqli_query( $conn,$sql );
   
  //  if(! $retval ) {
  //     die('Could not insert to table: ' . mysqli_error($conn));
  //  }
    
  //  echo "<br>Data inserted to table successfully\n";
  //  mysqli_close($conn);
  
?>    