
 <?php

?>
<html>
 <style>
   .add{
      background-color:blue; 
      color:white; 
      border:none;
      border-radius: 5px ;
      width: 80px;
      height: 23px;
     
     
   }  
 </style>
 <body>
 <h2> View Record</h2>

 Name <br> <?php echo $_POST["name"]; ?><br><br>
 E-mail <br> <?php echo $_POST["email"]; ?><br><br>
 Gender <br> <?php  echo $_POST["gender"]; ?><br>

 <p>you will receive emails from us.</p>

 <button class ="add" onclick="window.location.href='reg.php'">Back</button>

 </body>
 </html>
