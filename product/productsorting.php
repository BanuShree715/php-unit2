<!DOCTYPE html>
<html>
<head>
    <title>Product Sorting</title>
    <style>
        body {
            background-color: #FFF3E0;
            font-family: Arial;
            padding: 30px;
        }
        .container {
            width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 10px #999;
        }
        h2 { color: #E65100; }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #FFCC80;
        }
    </style>
</head>
<body>

<div class="container">

<h2>Product Price Sorting</h2>

<?php

$products = [
    ["name" => "Keyboard", "price" => 1200],
    ["name" => "Mouse", "price" => 700],
    ["name" => "Monitor", "price" => 8500],
    ["name" => "Headphone", "price" => 2500],
    ["name" => "Webcam", "price" => 1800]
];

usort($products, function($a, $b) {
    return $a["price"] <=> $b["price"];
});

echo "<table>";
echo "<tr><th>Product</th><th>Price</th></tr>";

foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product["name"] . "</td>";
    echo "<td>₹" . number_format($product["price"]) . "</td>";
    echo "</tr>";
}

echo "</table>";

?>

</div>
</body>
</html>