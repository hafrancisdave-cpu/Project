<?php

$seatType      = "extra_legroom";
$isPeakSeason  = true;

switch ($seatType) {
    case "standard":
        $baseFee = 0.00;
        break;
    case "extra_legroom":
    case "economy_plus":
        $baseFee = 35.00;
        break;
    case "business":
        $baseFee = 120.00;
        break;
    default:
        $baseFee = 0.00;
        break;
}

$surcharge = 0.00;
if ($isPeakSeason && $baseFee > 0) {
    $surcharge = $baseFee * 0.25;
}

$finalCost = $baseFee + $surcharge;

echo "Seat type: {$seatType}\n";
echo "Base upgrade fee: $" . number_format($baseFee, 2) . "\n";
echo "Peak season surcharge: $" . number_format($surcharge, 2) . "\n";
echo "Final seat selection cost: $" . number_format($finalCost, 2) . "\n";