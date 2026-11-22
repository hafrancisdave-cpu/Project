<?php

$shippingMethod = "standard";
$weightKg       = 4;
$orderAmount    = 120.00;

$freeShippingThreshold = 100.00;

switch ($shippingMethod) {
    case "standard":
        $originalCost = 5.00 + (1.00 * $weightKg);
        break;
    case "express":
        $originalCost = 15.00 + (2.00 * $weightKg);
        break;
    case "international":
        $originalCost = 25.00 + (3.50 * $weightKg);
        break;
    case "same_day":
        $originalCost = 30.00 + (5.00 * $weightKg);
        break;
    default:
        $originalCost = 0.00;
        break;
}

$discount  = 0.00;
$finalCost = $originalCost;

if ($shippingMethod === "same_day") {
    $discount  = 0.00;
    $finalCost = $originalCost;
} elseif ($orderAmount > $freeShippingThreshold) {
    if ($shippingMethod === "international") {
        $discount  = $originalCost * 0.50;
        $finalCost = $originalCost - $discount;
    } else {
        $discount  = $originalCost;
        $finalCost = 0.00;
    }
}

echo "Shipping method: {$shippingMethod}\n";
echo "Order amount: $" . number_format($orderAmount, 2) . "\n";
echo "Original shipping cost: $" . number_format($originalCost, 2) . "\n";
echo "Discount applied: $" . number_format($discount, 2) . "\n";
echo "Final shipping fee: $" . number_format($finalCost, 2) . "\n";