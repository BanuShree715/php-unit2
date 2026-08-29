<!DOCTYPE html>
<html>
<head>
    <title>Customer Support Queue</title>
    <style>
        body {
            background-color: #e8f5e9;
            font-family: Arial;
            text-align: center;
        }
        .box {
            background-color: white;
            width: 500px;
            margin: 50px auto;
            padding: 25px;
            border-radius: 15px;
        }
        h2 {
            color: #2e7d32;
        }
        .customer {
            background-color: #c8e6c9;
            padding: 10px;
            margin: 8px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Customer Support Queue</h2>

    <?php
    $queue = ["Arun", "Banu", "Kavin", "Divya"];

    echo "<h3>Current Queue</h3>";

    foreach ($queue as $position => $customer) {
        echo "<div class='customer'>";
        echo "Position " . ($position + 1) . " : " . $customer;
        echo "</div>";
    }

    // Process first customer - FIFO
    $served = array_shift($queue);

    echo "<h3>Served Customer</h3>";
    echo "<p><b>$served</b> has been served.</p>";

    echo "<h3>Updated Queue</h3>";

    foreach ($queue as $position => $customer) {
        echo "<div class='customer'>";
        echo "Position " . ($position + 1) . " : " . $customer;
        echo "</div>";
    }

    echo "<p><b>Total Waiting:</b> " . count($queue) . "</p>";
    ?>

</div>

</body>
</html>