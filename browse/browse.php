
<html>
<head>
    <title>Browser History</title>
    <style>
        body {
            background-color: #e0f7fa;
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
        h2 { color: #00838f; }
        .page {
            background-color: #b2ebf2;
            padding: 12px;
            margin: 8px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="box">

<h2> Browser History</h2>

<?php

// Stack for browser history
$history = [];

array_push($history, "Google");
array_push($history, "YouTube");
array_push($history, "Wikipedia");
array_push($history, "GitHub");

echo "<h3>Recently Visited Pages</h3>";

foreach (array_reverse($history) as $page) {
    echo "<div class='page'>$page</div>";
}

// Back button removes latest page
$lastPage = array_pop($history);

echo "<p><b>Back button:</b> Closed $lastPage</p>";

echo "<h3>Updated History</h3>";

foreach (array_reverse($history) as $page) {
    echo "<div class='page'>$page</div>";
}

?>

</div>

</body>
</html>