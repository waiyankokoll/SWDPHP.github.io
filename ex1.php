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
echo factorial(3);


function gretting($name = "guest"){
    return "hello, $name";
}
$result1 = gretting("Wai Yan Ko Ko");
echo "<br>";
echo $result1;
echo "<br>";
  // array
  $fruits = array("apple", "banana", "orange");
  foreach($fruits as $fruit) {
    echo "<br>";
    echo $fruit;
  };
    // associative array
    $person = array("name" => "John", "age" => 20, "height" => 1.75);
    echo "<br>";
    echo $person["name"];
    echo "<br>";
    echo $person["age"];
    echo "<br>";
    echo $person["height"];
    echo "<br>";
    foreach($person as $key => $value) {
        echo "<br>";
        echo "$key: $value";
    };
//example of array
$marks = array("John" => 35, "Jane" => 90, "Bob" => 78);
foreach($marks as $name => $value) {
    if ($value >= 50) {
        echo "<br>";
        echo "$name:passed";
    } else {
        echo "<br>";
        echo "$name: failed"; 
    }

};

?>
