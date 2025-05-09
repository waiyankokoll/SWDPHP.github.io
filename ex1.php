<?php
$number = 6;

if ($number%2==1) {
    echo "<br>";
    echo "<br>";
    echo "$number is odd";

}else {
    echo "<br>";
    echo "<br>";
    echo "$number is even";
};
echo "<br>";
$num1 = 9;
$num2 = 3;
$action = "*";
switch ($action) {
    case '+':
        echo $num1+$num2;
        break;
        case '-':
            echo $num1-$num2;
            break;    
            case '*':
                echo $num1*$num2;
                break;
                case '/':
                    echo $num1/$num2;
                    break;

    
    default:
        echo "Action error";
        break;
};
function factorial($n) {
    $result = 1;
    for ($i= 1; $i < $n; $i++) { 
        $result *= $n;
    }
    return $result;
};
echo "<br>";
echo factorial(5);


?>
