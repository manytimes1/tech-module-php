<?php
// 11 pts in Complete mode
// Trying to correct my results
$days = intval(readline());
$budget = doubleval(readline());
$groupOfPeople = intval(readline());
$fuelPerKm = doubleval(readline());
$foodExpensesPerPerson = doubleval(readline());
$roomPricePerNight = doubleval(readline());

$foodExpenses = $foodExpensesPerPerson * $groupOfPeople * $days;
$hotelExpenses = $roomPricePerNight * $groupOfPeople * $days;

if ($groupOfPeople > 10) {
    $hotelExpenses -= ($hotelExpenses * 0.25);
}

$currentExpenses = $foodExpenses + $hotelExpenses;
$haveMoney = true;

for ($i = 1; $i <= $days; $i++) {
    $travelledDistance = doubleval(readline());
    $consumedFuel = ($travelledDistance * $fuelPerKm);
    $currentExpenses += $consumedFuel;

    if ($i % 7 == 0) {
        $currentExpenses -= ($currentExpenses / $groupOfPeople);
    }

    if ($i % 3 == 0 || $i % 5 == 0) {
        $currentExpenses += ($currentExpenses * 0.4);
    }

    if ($currentExpenses > $budget) {
        printf("Not enough money to continue the trip. You need %.2f$ more.",
            ($currentExpenses - $budget));
        $haveMoney = false;
        break;
    }
}

if ($haveMoney && $budget >= $currentExpenses) {
    printf("You have reached the destination. You have %.2f$ budget left.",
        ($budget - $currentExpenses));
} elseif ($haveMoney && $currentExpenses > $budget) {
    printf("Not enough money to continue the trip. You need %.2f$ more.",
        ($currentExpenses - $budget));
}
