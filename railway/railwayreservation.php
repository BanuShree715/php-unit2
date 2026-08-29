
<html>
<head>
    <title>Railway Waiting List</title>
    <style>
        body {
            background-color: #fff3e0;
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
            color: #e65100;
        }
        .passenger {
            background-color: #ffe0b2;
            padding: 10px;
            margin: 8px;
            border-radius: 8px;
        }
        .confirmed {
            background-color: #c8e6c9;
            padding: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="box">

<h2>Railway Waiting List System</h2>

<?php

$waitingList = ["Rahul", "Priya", "Karthik", "Meena"];

echo "<h3>Waiting List</h3>";

foreach ($waitingList as $i => $passenger) {
    echo "<div class='passenger'>";
    echo "WL " . ($i + 1) . " - " . $passenger;
    echo "</div>";
}

// Passenger cancels confirmed ticket
echo "<h3>Cancellation</h3>";
echo "<p>One confirmed seat is cancelled.</p>";

// Move first waiting passenger to confirmed
$confirmed = array_shift($waitingList);

echo "<div class='confirmed'>";
echo "<b>$confirmed</b> gets the confirmed seat.";
echo "</div>";

echo "<h3>Updated Waiting List</h3>";

if (count($waitingList) > 0) {

    foreach ($waitingList as $i => $passenger) {
        echo "<div class='passenger'>";
        echo "WL " . ($i + 1) . " - " . $passenger;
        echo "</div>";
    }

} else {
    echo "<p>No passengers in waiting list.</p>";
}

echo "<p><b>Remaining Waiting Passengers:</b> "
     . count($waitingList) . "</p>";

?>

</div>

</body>
</html>