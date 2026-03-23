<?php
include 'conn.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation Display Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

    <table class="table table-striped mt-5">
  <thead>
    <tr>
      <!-- <th scope="col">Id</th> -->
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        // echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['mobile']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>
            <button class='btn btn-primary btn-sm'><a href='update.php?id=".$row['id']."' class='text-light'>Update</a></button> 
            <button class='btn btn-danger btn-sm'><a href='delete.php?id=".$row['id']."' onclick=\"return confirm('Are you sure?')\">Delete</a></button>
              </td>";
       
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No records found</td></tr>";
}
?>
   </table>
       <button class="btn btn-primary my-3"><a href="crud.php"></a>Add User</button> 
    </div>    
  </body>
</html>

