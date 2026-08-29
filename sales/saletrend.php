
<html>
<head>
    <title>Sales Trend Analysis</title>
    <style>
        body {
            background-color: #e8eaf6;
            font-family: Arial;
            text-align: center;
        }
        .box {
            background-color: white;
            width: 550px;
            margin: 40px auto;
            padding: 25px;
            border-radius: 15px;
        }
        h2 { color: #283593; }
        .sale {
            background-color: #c5cae9;
            padding: 12px;
            margin: 8px;
            border-radius: 8px;
        }
        .growth {
            background-color: #9fa8da;
            padding: 12px;
            margin: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="box">

<h2> Sales Trend Analysis</h2>

<?php

$sales = [
    "January" => 40000,
    "February" => 45000,
    "March" => 42000,
    "April" => 50000,
    "May" => 55000
];

echo "<h3>Monthly Sales</h3>";

foreach ($sales as $month => $amount) {
    echo "<div class='sale'>";
    echo "$month : ₹" . number_format($amount);
    echo "</div>";
}

$months = array_keys($sales);
$values = array_values($sales);

echo "<h3>Sales Growth</h3>";

for ($i = 1; $i < count($values); $i++) {

    $growth = (($values[$i] - $values[$i - 1])
              / $values[$i - 1]) * 100;

    echo "<div class='growth'>";
    echo $months[$i - 1] . " → " . $months[$i];
    echo " : " . number_format($growth, 2) . "%";
    echo "</div>";
}

// Find highest sales month
$highest = max($values);
$highestMonth = array_search($highest, $sales);

echo "<h3>Overall Analysis</h3>";

echo "<p><b>Highest Sales:</b> $highestMonth - ₹"
     . number_format($highest) . "</p>";

if ($values[count($values) - 1] > $values[0]) {
    echo "<p><b>Trend:</b> Sales are increasing 📈</p>";
} else {
    echo "<p><b>Trend:</b> Sales are decreasing 📉</p>";
}

?>

</div>

</body>
</html>