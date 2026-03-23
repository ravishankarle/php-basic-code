<?php
function calculator($num1,$num2,$ch){
    switch($ch){
        case '+':
            echo "Addition of number ".($num1+$num2);
            break;
        case '-':
            echo "Substraction of number".($num1-$num2);
            break;
        case '*':
            echo "Multiple of number".($num1*$num2);
            break;
        case '/':
            if($num2 != 0){
                echo "Division of number" .($num1/$num2);
             }
            else{
                echo "not divided by zero";
           }
            break;
        default:
            echo "Invalid choice";
    }
}
     calculator(20,5,'/');
?>