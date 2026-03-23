<html>
<head>
    <title>Palindrome Program</title>
</head>
<body>
<h2>Palindrome for string Checker</h2>
<form method="POST">
    
   Enter String: <input type="text" name="str" required><br><br>
    <button type="submit" name="check">Check</button>
</form>

<?php
if(isset($_POST['check'])){
    $str = $_POST['str'];

    $str_lower = strtolower($str);

    if($str_lower==strrev($str_lower)){
        echo "<h3>$str is a palindrome string .</h3>";
    }
    else{
        echo "<h3>$str is not a palindrome string .</h3>";
    }
   }
?>
</body>
</html>
