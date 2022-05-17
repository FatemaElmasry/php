
<html>
<head>
<style>
   table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
   }
   th, td {
   padding: 10px;
   }
   .add{
      background-color:MediumSeaGreen; 
      color:white; 
      border:none;
      border-radius: 5px ;
      width: 120px;
      height: 23px;
      margin: 50px 40px 0px 330px;
      display: block;
   }
  
</style>
</head>
<body>
 
  <button class ="add" onclick="window.location.href='reg.php'">Add new user</button>     

</body>
</html>

<?php
 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = 'test';
 $link = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($link,"SELECT * FROM users");

echo "<h2 style='display: block'>Users Details<h2>";


echo "<table border='1'>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>gender</th>
<th>mail status</th>
<th>action</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['u_id'] . "</td>";
echo "<td>" . $row['u_name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td >" . $row['mail status'] . "</td>";
echo "<td><a href='" . $row['u_action'] .  "'>Click Here</a></td>";




echo "</tr>";
}
echo "</table>";

mysqli_close($link);


?>

