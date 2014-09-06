<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'formregistration'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function NewUser() { $fullname = $_POST['name']; $userName = $_POST['user']; 
$email = $_POST['email']; $password = $_POST['pass']; 
$query = "INSERT INTO formtable (user_name,user_fname,user_lname,user_email,password) 
VALUES ('$user_name','$user_fname','$user_lname','$user_email','$password')"; 
$data = mysql_query ($query)or die(mysql_error()); 
if($data) { echo "YOUR REGISTRATION IS COMPLETED..."; } } 
//checking the 'user' name which is from Sign-Up.html, is it empty or have some text 

