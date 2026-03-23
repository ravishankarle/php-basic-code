<?php

$result="";

if(isset($_POST['calculate'])){
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    $ch=$_POST['ch'];

    switch($ch){
        case '+':
            $result=$num1+$num2;
            break;
        case '-':
            $result=$num1-$num2;
            break;
        case '*':
            $result=$num1*$num2;
            break;
        case '/':
            if($num2 != 0){
                $result=$num1/$num2;
            }
            else{
                $result="can not divide by zero";
            }
            break;
}
}
?>

 <html>
 <head>
 <title> simple calculator </title>
 </head>
 <body>
 <h3>Factorial </h3>
<form action="" method="POST">
First Number <input type="number" name="num1" placeholder="enter first num" required> <br><br>
Second Number <input type="number" name="num2" placeholder="enter second num " required><br><br>

<select name="ch" required>
    <option value="+">Addition</option>
    <option value="-">Substraction</option>
    <option value="*">Multiply</option>
    <option value="/">Division</option>
    </select> <br><br>

 <button type="submit" name="calculate">calculate</button>
 </form>

 <?php
  if($result !== ""){
    echo "<h3>Result of two number  =$result</h3>";
  }
 ?>

 </body>
 </html>
