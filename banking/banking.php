<!DOCTYPE html>
<html>
<head>
    <title>Banking Exception Handling</title>

    <style>
        body {
            background-color: #e3f2fd;
            font-family: Arial;
            text-align: center;
        }

        .box {
            background-color: white;
            width: 550px;
            margin: 50px auto;
            padding: 25px;
            border-radius: 15px;
        }

        h2 {
            color: #1565c0;
        }

        .success {
            background-color: #c8e6c9;
            padding: 12px;
            margin: 10px;
            border-radius: 8px;
        }

        .error {
            background-color: #ffcdd2;
            padding: 12px;
            margin: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="box">

<h2> Banking Transaction</h2>

<?php

$transactions = [
    ["amount" => 5000, "divisor" => 5],
    ["amount" => 3000, "divisor" => 0],
    ["amount" => -2000, "divisor" => 4],
    ["amount" => 8000, "divisor" => 2]
];

foreach ($transactions as $i => $transaction) {

    try {

        $amount = $transaction["amount"];
        $divisor = $transaction["divisor"];

        if (!is_numeric($amount) || !is_numeric($divisor)) {
            throw new Exception("Invalid input!");
        }

        if ($amount < 0) {
            throw new Exception("Transaction amount cannot be negative.");
        }

        if ($divisor == 0) {
            throw new Exception("Division by zero is not allowed.");
        }

        $result = $amount / $divisor;

        echo "<div class='success'>";
        echo "Transaction " . ($i + 1);
        echo " : ₹" . number_format($result, 2);
        echo "</div>";

    } catch (Exception $e) {

        echo "<div class='error'>";
        echo "Transaction " . ($i + 1);
        echo " Error: " . $e->getMessage();
        echo "</div>";
    }
}

echo "<p><b>All transactions have been processed.</b></p>";

?>

</div>

</body>
</html>