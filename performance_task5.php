<?php

$xp = 4500;
$achievementsCount = 12;

$rank   = "";
$reward = "";

switch (true) {
    case ($xp >= 5000 && $achievementsCount >= 10):
        $rank   = "Legend";
        $reward = "50 Diamonds";
        break;
    case ($xp >= 2500 && $achievementsCount >= 5):
        $rank   = "Veteran";
        $reward = "25 Gold Gems";
        break;
    case ($xp >= 1000):
        $rank   = "Challenger";
        $reward = "10 Silver Gems";
        break;
    default:
        $rank   = "Novice";
        $reward = "1 Bronze Gem";
        break;
}

$bonusNote = "";
if ($xp % 1000 === 0) {
    if (preg_match('/(\d+)/', $reward, $matches)) {
        $baseAmount   = (int) $matches[1];
        $bonusAmount  = (int) round($baseAmount * 0.10);
        $totalAmount  = $baseAmount + $bonusAmount;
        $reward       = str_replace($matches[1], (string) $totalAmount, $reward);
        $bonusNote    = " (includes +{$bonusAmount} bonus for a round-number XP milestone)";
    }
}

echo "Player XP: {$xp}\n";
echo "Achievements completed: {$achievementsCount}\n";
echo "Rank: {$rank}\n";
echo "Reward: {$reward}{$bonusNote}\n";