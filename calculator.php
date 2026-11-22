<?php
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    if (is_numeric($num1) && is_numeric($num2)) {
        $num1 = (float) $num1;
        $num2 = (float) $num2;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $result = 'Error: Cannot divide by zero';
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = 'Error: Invalid operation';
        }
    } else {
        $result = 'Error: Please enter valid numbers';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="POST" action="">
        <input type="text" name="num1" placeholder="Enter first number" required>
        <br><br>
        <select name="operation">
            <option value="add">Add (+)</option>
            <option value="subtract">Subtract (-)</option>
            <option value="multiply">Multiply (*)</option>
            <option value="divide">Divide (/)</option>
        </select>
        <br><br>
        <input type="text" name="num2" placeholder="Enter second number" required>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php if ($result !== ''): ?>
        <h2>Result: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>
