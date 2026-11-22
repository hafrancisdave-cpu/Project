<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {

    // 1. Spaces on the left to make it centered
    for ($s = 1; $s <= $rows - $i; $s++) {
        echo "&nbsp;&nbsp;";
    }

    // 2. Top row - 1 x only
    if ($i == 1) {
        echo "x";
    }
    // 3. Bottom row - 5 x
    else if ($i == $rows) {
        for ($j = 1; $j <= $rows; $j++) {
            echo "x ";
        }
    }
    // 4. Middle rows - x on left and right only
    else {
        echo "x";
        for ($k = 1; $k <= 2 * $i - 3; $k++) {
            echo "&nbsp;&nbsp;";
        }
        echo "x";
    }

    echo "<br>";
}
?>