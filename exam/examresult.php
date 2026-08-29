<!DOCTYPE html>
<html>
<head>
    <title>Examination Result</title>
    <style>
        body {
            background-color: #F3E5F5;
            font-family: Arial;
            padding: 30px;
        }

        .box {
            width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 12px gray;
        }

        h2 {
            color: #7B1FA2;
        }

        .student {
            background-color: #F8EAFB;
            padding: 12px;
            margin: 12px 0;
            border-left: 5px solid #7B1FA2;
        }

        .error {
            background-color: #FFEBEE;
            color: #C62828;
            padding: 12px;
            margin: 12px 0;
        }
    </style>
</head>

<body>

<div class="box">

<h2>Examination Result Processing</h2>

<?php

$students = [
    ["name" => "Arun", "mark" => 85],
    ["name" => "Banu", "mark" => 72],
    ["name" => "Kavi", "mark" => -10],
    ["name" => "Meena", "mark" => 91]
];

$errorLog = [];

foreach ($students as $student) {

    try {

        if ($student["mark"] < 0 || $student["mark"] > 100) {
            throw new Exception(
                "Invalid mark for " . $student["name"]
            );
        }

        if ($student["mark"] >= 50) {
            $result = "PASS";
        } else {
            $result = "FAIL";
        }

        echo "<div class='student'>";
        echo "<b>Name:</b> " . $student["name"] . "<br>";
        echo "<b>Mark:</b> " . $student["mark"] . "<br>";
        echo "<b>Result:</b> " . $result;
        echo "</div>";

    } catch (Exception $e) {

        $errorLog[] = $e->getMessage();

        echo "<div class='error'>";
        echo "⚠ Error: " . $e->getMessage();
        echo "</div>";
    }
}

echo "<h3>Error Log</h3>";

if (count($errorLog) > 0) {
    foreach ($errorLog as $error) {
        echo "<p>• " . $error . "</p>";
    }
} else {
    echo "<p>No errors found.</p>";
}

echo "<b>All student results processed successfully.</b>";

?>

</div>

</body>
</html>