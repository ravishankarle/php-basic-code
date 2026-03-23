<html>
<body>
<title>Array </title>
<form method="POST">
    <h3>Array Ascending & Descending</h3>
    Enter number : <input type="text" name="num" placeholder="5,2,9,1"><br><br>
    <button type="submit" name="sort">Sort</button>
</form>

<?php
if(isset($_POST['sort'])){
    $arr = explode(",", $_POST['num']);

    echo "<h3>Original Array:</h3> ";
    print_r($arr);

    sort($arr);
    echo "<h3>Ascending Order:</h3> ";
    print_r($arr);

    rsort($arr);
    echo "<h3>Descending Order:</h3> ";
    print_r($arr);
}
?>
</body>
</html>
