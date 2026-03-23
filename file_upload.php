<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
 
<h2>Upload an Image</h2>
 
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button type="submit" name="upload">Upload</button>
</form>
 
<?php
if (isset($_POST['upload'])) {
 
    $fileName = $_FILES['image']['name'];
    $fileTmp = $_FILES['image']['tmp_name'];
    $fileSize = $_FILES['image']['size'];
 
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
   
    $allowed = ['jpg', 'jpeg', 'png'];
   
    if (!in_array($fileExt, $allowed)) {
        echo "<p style='color:red;'>Only JPG and PNG files are allowed!</p>";
    } elseif ($fileSize > 2 * 1024 * 1024) {
        echo "<p style='color:red;'>File size must be less than 2MB!</p>";
    } else {
        $newName = time() . "." . $fileExt;
        $path = "uploads/" . $newName;
 
        if (move_uploaded_file($fileTmp, $path)) {
            echo "<h3 style='color:green;'>Image Uploaded Successfully!</h3>";
            echo "<img src='$path' width='200'>";
        } else {
            echo "<p style='color:red;'>Upload Failed!</p>";
        }
    }
}
?>
 
</body>
</html>
 
 