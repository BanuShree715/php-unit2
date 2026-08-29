<!DOCTYPE html>
<html>
<head>
    <title>Stock Performance Analysis</title>
    <style>
        body {
            background-color: #e8f5e9;
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
            color: #2e7d32;
        }

        .stock {
            background-color: #c8e6c9;
            padding: 12px;
            margin: 8px;
            border-radius: 8px;
        }

        .result {
            background-color: #a5d6a7;
            padding: 12px;
            margin: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="box">

<h2> Stock Performance Analysis</h2>

<?php

$stocks = [
    "ABC Ltd" => 120,
    "XYZ Ltd" => 150,
    "Tech Ltd" => 180,
    "Green Ltd" => 95,
    "Bank Ltd" => 140
];

echo "<h3>Stock Prices</h3>";

foreach ($stocks as $name => $price) {
    echo "<div class='stock'>";
    echo "$name : ₹" . number_format($price, 2);
    echo "</div>";
}

$prices = array_values($stocks);

$highest = max($prices);
$lowest = min($prices);
$average = array_sum($prices) / count($prices);

$highestStock = array_search($highest, $stocks);
$lowestStock = array_search($lowest, $stocks);

echo "<h3>Investor Report</h3>";

echo "<div class='result'>";
echo "<b>Highest Stock:</b> $highestStock - ₹$highest";
echo "</div>";

echo "<div class='result'>";
echo "<b>Lowest Stock:</b> $lowestStock - ₹$lowest";
echo "</div>";

echo "<div class='result'>";
echo "<b>Average Price:</b> ₹" . number_format($average, 2);
echo "</div>";

?>

</div>

</body>
</html>