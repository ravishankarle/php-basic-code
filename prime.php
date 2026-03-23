<html>
<body>
<title>Prime number </title>
<form method="POST">
    <h3>Prime number </h3>
    Enter number : <input type="number" name="num" required><br><br>
    <button type="submit" name="prime">Prime</button> <br>
</form>

<?php
if(isset($_POST['prime'])){
    $num=$_POST['num'];
    $count=0;

    if($num <=1){
        echo "<h3>$num is not a prime number</h3>";
    }
    else {
        for ($i=1; $i<=$num; $i++){
            if($num % $i==0){
                $count++;
            }
        }
    if ($count == 2){
         echo "<h3>$num is a prime number</h3>";
        }
    else {
        echo "<h3>$num is not a prime number</h3>";
    }    
    }
}
?>
</body>
</html>


<?php
//  with function find prime number 
function isPrime($num){
    if($num <= 1){
        return false;
    }

    for($i = 2; $i <= sqrt($num); $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}
$number = 9;
if(isPrime($number)){
    echo "$number is a Prime number";
} else {
    echo "$number is not a Prime number";
}
?>
