
<html>
<head>
    <title>Player Score Analysis</title>
    <style>
        body {
            background-color: #fff8e1;
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
        h2 { color: #ef6c00; }
        .score {
            background-color: #ffe0b2;
            padding: 10px;
            margin: 8px;
            border-radius: 8px;
        }
        .result {
            background-color: #ffcc80;
            padding: 12px;
            margin: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="box">

<h2> Player Score Analysis</h2>

<?php

$players = [
    "Arun" => 78,
    "Banu" => 92,
    "Kavin" => 65,
    "Divya" => 88,
    "Ravi" => 74
];

echo "<h3>Player Scores</h3>";

foreach ($players as $name => $score) {
    echo "<div class='score'>";
    echo "$name : $score";
    echo "</div>";
}

$scores = array_values($players);

$highest = max($scores);
$lowest = min($scores);
$average = array_sum($scores) / count($scores);

$topPlayer = array_search($highest, $players);
$lowPlayer = array_search($lowest, $players);

echo "<div class='result'><b>Highest:</b> $topPlayer - $highest</div>";
echo "<div class='result'><b>Lowest:</b> $lowPlayer - $lowest</div>";
echo "<div class='result'><b>Average Score:</b> "
     . number_format($average, 2) . "</div>";

?>

</div>

</body>
</html>