
<html>
<head>
    <title>Package Handling</title>
    <style>
        body {
            background-color: #f3e5f5;
            font-family: Arial;
            text-align: center;
        }
        .box {
            background: white;
            width: 550px;
            margin: 40px auto;
            padding: 25px;
            border-radius: 15px;
        }
        h2 { color: #6a1b9a; }
        .item {
            background-color: #e1bee7;
            padding: 10px;
            margin: 8px;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="box">

<h2> Package Handling Workflow</h2>

<?php


$stack = [];

array_push($stack, "Package A");
array_push($stack, "Package B");
array_push($stack, "Package C");

echo "<h3>Stack Operations</h3>";

foreach ($stack as $package) {
    echo "<div class='item'>$package</div>";
}


$topPackage = array_pop($stack);

echo "<p><b>Processed from Stack:</b> $topPackage</p>";

$queue = [];

array_push($queue, "Package X");
array_push($queue, "Package Y");
array_push($queue, "Package Z");

echo "<h3>Queue Operations</h3>";

$nextPackage = array_shift($queue);

echo "<p><b>Processed from Queue:</b> $nextPackage</p>";

echo "<h3>Remaining Packages</h3>";

foreach ($queue as $package) {
    echo "<div class='item'>$package</div>";
}

?>

</div>

</body>
</html>