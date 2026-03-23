<?php
  include 'conn.php'; 

if(isset($_POST['submit'])){
    $id   = $_POST['id'];
    $name   = $_POST['name'];
    $email  = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password  = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (id,name, email, mobile, password)
            VALUES ('$id','$name','$email','$mobile','$password')";

    if($conn->query($sql) === TRUE){
        header("Location: display.php");
       // echo "Data Insert successfully";
        exit;
    } else {
        echo "Error: ".$conn->error;
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
     <h3 class="text-center mt-5">CRUD Operation</h3>
    <div class="container my-5">
      <form method="POST">
        <!-- 
  <div class="mb-3">
    <label class="form-label">Id </label>
    <input type="number" class="form-control" id="id" placeholder="Enter Id" required>
  </div>
 -->
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
  </div>


  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
  </div>

  <div class="mb-3">
    <label class="form-label">Mobile No</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter Mobile No" required>
  </div>


  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control"  name="password" placeholder="Enter Password" required>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>
