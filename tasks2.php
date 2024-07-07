<?php
/*   1 : -  *//*

function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        return true;
    } else {
        return false;
    }
}


$year = 2013;


if (isLeapYear($year)) {
    echo "This year is a leap year";}
else {
    echo "This year is not a leap year";
}*/
/*   2 : -  */ /*
function getSeason($temperature) {
    if ($temperature < 20) {
        return "It is wintertime!";
    } else {
        return "It is summertime!";
    }
}

$temperature = 27;


echo getSeason($temperature);*/
/*   3 : -  */ /*

function calculateSum($firstInteger, $secondInteger) {
    
    $sum = $firstInteger + $secondInteger;

    
    if ($firstInteger == $secondInteger) {
        
        $result = $sum * 3;
        return "($firstInteger + $secondInteger) * 3 = $result";
    } else {
       
        return "($firstInteger + $secondInteger) = $sum";
    }
}


$firstInteger = 2;
$secondInteger = 2;
echo calculateSum($firstInteger, $secondInteger);*/
/*   4 : -  */ /*

function checkSumEquals30($firstInteger, $secondInteger) {
   
    $sum = $firstInteger + $secondInteger;
    
    
    if ($sum == 30) {
        return $sum;
    } else {
        return false;
    }
}


$firstInteger = 10;

$secondInteger = 10;

$result = checkSumEquals30($firstInteger, $secondInteger);
if ($result !== false) {
    echo $result;
} else {
    echo 'false';
}*/
/*   5 : -  */ /*

function isMultipleOf3($number) {
   
    if ($number > 0) {
        
        if ($number % 3 == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        return false; 
    }
}


$number = 20;

if (isMultipleOf3($number)) {
    echo 'true';
} else {
    echo 'false';
}*/
/*   6 : -  */ /*
function isInRange($number) {

    if ($number >= 20 && $number <= 50) {
        return 'true';
    } else {
        return 'false';
    }
}


$number = 50;


echo isInRange($number);*/
/*   7 : -  */ /*

$numbers = [1, 5, 9];


$largest = max($numbers);

// طباعة النتيجة

echo "$largest";*/
/*   8 : -  */ /*
function calculateElectricityBill($units) {
    // السعر لكل وحدة حتى 250 وحدة
    $rate = 0;
    
    // تحديد السعر حسب عدد الوحدات
    if ($units <= 50) {
        $rate = 2.50;
    } elseif ($units <= 150) {
        $rate = 5.00;
    } elseif ($units <= 250) {
        $rate = 6.20;
    } else {
        $rate = 7.50;
    }
    
    // حساب المبلغ الإجمالي
    $bill = $units * $rate;
    
    return number_format($bill, 2);
}

// مدخل عينة
$units = 280; 

// حساب فاتورة الكهرباء وطباعة النتيجة
echo "Units Consumed: " . $units . "<br>";
echo "Electricity Bill: " . calculateElectricityBill($units) . " JOD";*/
/*   9 : -  */ /*
function add($num1, $num2) {
    return $num1 + $num2;
}


function subtract($num1, $num2) {
    return $num1 - $num2;
}


function multiply($num1, $num2) {
    return $num1 * $num2;
}


function divide($num1, $num2) {
    if ($num2 == 0) {
        return "Cannot divide by zero";
    } else {
        return $num1 / $num2;
    }
}


$num1 = 10;
$num2 = 5;


echo "Addition: " . $num1 . " + " . $num2 . " = " . add($num1, $num2) . "<br>";
echo "Subtraction: " . $num1 . " - " . $num2 . " = " . subtract($num1, $num2) . "<br>";
echo "Multiplication: " . $num1 . " * " . $num2 . " = " . multiply($num1, $num2) . "<br>";
echo "Division: " . $num1 . " / " . $num2 . " = " . divide($num1, $num2);*/

/*   10 : -  */ /*
function checkVotingEligibility($age) {
    if ($age >= 18) {
        return "is eligible to vote";
    } else {
        return "is not eligible to vote";
    }
}

// Sample input
$age = 15; 


echo "Age: " . $age . "<br>";
echo "The person " . checkVotingEligibility($age);*/
/*   11 : -  */ /*
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}


$number = -60; 



echo "The number is " . checkNumber($number);*/
/*   12 : -  */ /*
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];


$average = array_sum($scores) / count($scores);


if ($average >= 90) {
    $grade = 'A';
} elseif ($average >= 80) {
    $grade = 'B';
} elseif ($average >= 70) {
    $grade = 'C';
} elseif ($average >= 60) {
    $grade = 'D';
} else {
    $grade = 'F';
}


echo "Scores: " . implode(", ", $scores) . "<br>";
echo "Average Score: " . $average . "<br>";
echo "Grade: " . $grade;*/
?>
