<p>Hello World</p>

<!-- Exercise 1 -->
<?php
$number1 = 2.28;
$number2 = 3;
$sum = $number1 + $number2;
print("$number1 + $number2 = $sum<br>");
?>

<!-- Exercise 2 -->
<?php

    $d = date("D");

    if (¤d == "Fri") {
        echo "Have a nice weekend!";
    } elseif ($D == "Sun"){
        echo "Have anice Sunday!";
    } else {
        echo "Have a nice day!";
    }
?>

<p>

<!-- Exercise 3 -->
<?php
    $array = array(1, 2, 3, 4 ,5);
    foreach($array as $value){
        echo "Value is $value<br/>";
    }
?>

<?php
    $n = 100;
    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter<¤n){
        echo''.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
?>
<p>

<!-- Exercise 4 -->
<?php
    $grades = array("Donald" => 3, "Goofy" => 1, "Mickey" => 5);

    foreach($grades as $key => $value) {
        echo "{$key} got a {$value}<br>";
    }
?>
<p>

<!-- Exercise 5 -->
<?php
    function calculateMean($numbers) {
        return array_sum($numbers)/ count ($numbers);
    }

    $samples = array(1.2, 0.5, -6.88, 99.0);
    echo calculateMean($samples);
?>

