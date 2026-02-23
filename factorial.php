<html>
<head>
    <title>Factorial </title>
</head>
<body>
<form method="POST">
    <h3>Factorial </h3>
    Enter number : <input type="number" name="num" required><br><br>
    <button type="submit" name="fact">Factorial</button> <br>
</form>

<?php
if(isset($_POST['fact'])){
    $num=$_POST['num'];

    $fact=1;
    for($i=1; $i<=$num; $i++){
        $fact*=$i;
    }
    echo "<h3>factorial of $num is $fact .</h3>";
}
?>
</body>
</html>


<?php
function factorial($num){
    $fact = 1;

    for($i = 1; $i <= $num; $i++){
        $fact*= $i;
    }
    return $fact;
  }
$num = 5;
echo "Factorial of $num = " . factorial($num);
?>
