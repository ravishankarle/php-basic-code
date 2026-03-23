<?php
include 'conn.php';

if(!isset($_GET['id'])){
    die("Invalid request");
}

$id = $_GET['id'];
$sql = "SELECT * FROM user WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows == 0){
    die("User not found");
}
$row = $result->fetch_assoc();
if(isset($_POST['submit'])){

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $mobile   = $_POST['mobile'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $update = "UPDATE user SET name=?, email=?, mobile=?, password=? WHERE id=?";
    $stmt = $conn->prepare($update);
    $stmt->bind_param("ssssi", $name, $email, $mobile, $password, $id);

    if($stmt->execute()){
        header("Location: display.php?msg=updated");
        exit();
    } else {
        echo "Update failed";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Update User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <h3>Update User</h3>

  <form method="POST">

    <div class="mb-3">
      <label>Name</label>
      <input type="text" class="form-control" name="name"
             value="<?php echo $row['name']; ?>" required>
    </div>

    <div class="mb-3">
      <label>Email</label>
      <input type="email" class="form-control" name="email"
             value="<?php echo $row['email']; ?>" required>
    </div>

    <div class="mb-3">
      <label>Mobile</label>
      <input type="number" class="form-control" name="mobile"
             value="<?php echo $row['mobile']; ?>" required>
    </div>

    <div class="mb-3">
      <label>New Password</label>
      <input type="password" class="form-control" name="password" required>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">
      Update
    </button>

    <a href="display.php" class="btn btn-secondary">Cancel</a>

  </form>
</div>

</body>
</html>
