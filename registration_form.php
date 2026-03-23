<?php
$servername="localhost";
$username="root";
$password="";
$dbname="register";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
    die("connection failed ".$conn->connect_error);
}

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $mobile_no=$_POST['mobile_no'];
  $email=$_POST['email'];
  $password=password_hash($_POST['password'],PASSWORD_DEFAULT);

  $sql="Insert into user (name,mobile_no,email,password)Values('$name','$mobile_no','$email','$password')";

  if($conn->query($sql)===True){
    echo "Registration successfully";
  }
  else {
    echo "Error".$conn->error;
  }
    }
?>


<html>
    <head>
    <title>Registration form </title>
    </head>
   
<body>
<form method="POST">
    <h3>Registration form</h3>
    Enter Name : <input type="text" name="name" placeholder="enter your name" required><br><br>
    Enter Mobile No : <input type="number" name="mobile_no" placeholder="enter mobile number" maxlength="10" required><br><br>
    Enter E-mail :<input type="email" name="email" placeholder="your e-mail@gmail.com" required><br><br>
    Enter Password :<input type="password" name="password" placeholder="enter password" minlength="6" required><br><br>
    <button type="submit" name="submit">Submit</button> <br>
</form>
</body>
</html>
