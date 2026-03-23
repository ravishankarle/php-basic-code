<?php
include 'conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE id = $id";

    if($conn->query($sql) === TRUE){
        header("Location: display.php?msg=deleted");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} 
else {
    echo "Invalid request";
}
?>

