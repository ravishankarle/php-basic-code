<?php
    include 'conn.php';

    if(isset($_POST['submit'])){

        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];

        $sql="INSERT INTO student(name,email,mobile) VALUES ('$name','$email','$mobile')";

        if(mysqli_query($conn,$sql)){
            echo "New record created successfully";
           // header('location:display.php');
        } 
        else {
            echo "Error: ".$sql."<br>".mysqli_error($conn);
        }
    }
?>

<html>
    <head>
        <title>Registration Form</title>
        </head>
        <body>
            <form action="" method="POST">
                <label>Name:</label>
                <input type="text" name="name" required><br><br>
                <label>Email:</label>
                <input type="email" name="email" required><br><br>
                <label>Mobile:</label>
                <input type="number" name="mobile" required><br><br>
                <button type="submit" name="submit">Submit</button>
    </form>
  </body>
</html>