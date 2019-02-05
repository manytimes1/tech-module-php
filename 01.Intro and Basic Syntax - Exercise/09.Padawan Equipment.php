<?php
$amountMoney = doubleval(readline());
$studentsCount = intval(readline());
$sabresPrice = doubleval(readline());
$robesPrice = doubleval(readline());
$beltsPrice = doubleval(readline());

$totalSum = $sabresPrice * ceil($studentsCount * 1.1) + ($robesPrice * $studentsCount) +
    $beltsPrice * ceil(($studentsCount - ($studentsCount / 6)));

if ($totalSum <= $amountMoney) {
    printf("The money is enough - it would cost %.2flv.", $totalSum);
} else {
    printf("Ivan Cho will need %.2flv more.", ($totalSum - $amountMoney));
}
