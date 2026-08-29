<!DOCTYPE html>
<html>
<head>
    <title>Digital Marketing Campaign Analysis</title>
    <style>
        body {
            background-color: #E8EAF6;
            font-family: Arial;
            padding: 30px;
        }

        .container {
            width: 750px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 12px gray;
        }

        h2 {
            color: #3949AB;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #bbb;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #C5CAE9;
        }

        .summary {
            margin-top: 20px;
            padding: 15px;
            background-color: #EDE7F6;
            border-left: 5px solid #3949AB;
        }

        .good {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

<h2>Digital Marketing Campaign Analysis</h2>

<?php

$campaigns = [
    [
        "name" => "Summer Sale",
        "source" => "Instagram",
        "views" => 50000,
        "clicks" => 4500,
        "conversions" => 300,
        "cost" => 12000
    ],
    [
        "name" => "New Product",
        "source" => "Google",
        "views" => 40000,
        "clicks" => 5200,
        "conversions" => 420,
        "cost" => 15000
    ],
    [
        "name" => "Festival Offer",
        "source" => "Facebook",
        "views" => 60000,
        "clicks" => 4800,
        "conversions" => 350,
        "cost" => 10000
    ]
];

echo "<table>";

echo "<tr>
        <th>Campaign</th>
        <th>Source</th>
        <th>CTR</th>
        <th>Conversion Rate</th>
        <th>Cost/Conversion</th>
      </tr>";

$totalViews = 0;
$totalClicks = 0;
$totalConversions = 0;
$totalCost = 0;

foreach ($campaigns as $campaign) {

    $ctr = ($campaign["clicks"] / $campaign["views"]) * 100;

    $conversionRate =
        ($campaign["conversions"] / $campaign["clicks"]) * 100;

    $costPerConversion =
        $campaign["cost"] / $campaign["conversions"];

    echo "<tr>";

    echo "<td>" . $campaign["name"] . "</td>";
    echo "<td>" . $campaign["source"] . "</td>";
    echo "<td>" . round($ctr, 2) . "%</td>";
    echo "<td>" . round($conversionRate, 2) . "%</td>";
    echo "<td>₹" . round($costPerConversion, 2) . "</td>";

    echo "</tr>";

    $totalViews += $campaign["views"];
    $totalClicks += $campaign["clicks"];
    $totalConversions += $campaign["conversions"];
    $totalCost += $campaign["cost"];
}

echo "</table>";

/* Overall KPI calculations */

$overallCTR =
    ($totalClicks / $totalViews) * 100;

$overallConversionRate =
    ($totalConversions / $totalClicks) * 100;

$averageCost =
    $totalCost / $totalConversions;

echo "<div class='summary'>";

echo "<h3>Campaign Summary Report</h3>";

echo "<b>Total Views:</b> " .
     number_format($totalViews) . "<br>";

echo "<b>Total Clicks:</b> " .
     number_format($totalClicks) . "<br>";

echo "<b>Total Conversions:</b> " .
     number_format($totalConversions) . "<br>";

echo "<b>Total Marketing Cost:</b> ₹" .
     number_format($totalCost) . "<br>";

echo "<b>Overall CTR:</b> " .
     round($overallCTR, 2) . "%<br>";

echo "<b>Overall Conversion Rate:</b> " .
     round($overallConversionRate, 2) . "%<br>";

echo "<b>Average Cost per Conversion:</b> ₹" .
     round($averageCost, 2) . "<br><br>";

echo "<span class='good'>KPI analysis completed successfully.</span>";

echo "</div>";

?>

</div>

</body>
</html>