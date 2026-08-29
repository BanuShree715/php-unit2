<!DOCTYPE html>
<html>
<head>
    <title>Payroll Exception Handling</title>
    <style>
        body {
            background-color: #E8F5E9;
            font-family: Arial;
            padding: 30px;
        }
        .box {
            background: white;
            padding: 20px;
            border-radius: 12px;
            width: 500px;
            margin: auto;
            box-shadow: 0 0 10px gray;
        }
        h2 { color: #2E7D32; }
        .error { color: red; }
    </style>
</head>
<body>

<div class="box">
<h2>Payroll Processing</h2>

<?php

$employees = [
    ["name" => "Arun", "salary" => 30000, "days" => 30],
    ["name" => "Banu", "salary" => 28000, "days" => 28],
    ["name" => "Kavi", "salary" => 32000, "days" => 0]
];

foreach ($employees as $employee) {

    try {
        if ($employee["days"] <= 0) {
            throw new Exception("Invalid working days for " . $employee["name"]);
        }

        $dailySalary = $employee["salary"] / $employee["days"];
        $bonus = 2000;
        $totalSalary = $employee["salary"] + $bonus;

        echo "<p>";
        echo "<b>Name:</b> " . $employee["name"] . "<br>";
        echo "<b>Daily Salary:</b> ₹" . number_format($dailySalary, 2) . "<br>";
        echo "<b>Total Salary:</b> ₹" . number_format($totalSalary, 2);
        echo "</p><hr>";

    } catch (Exception $e) {
        echo "<p class='error'>Error: " . $e->getMessage() . "</p>";
    }
}

echo "<b>Payroll processing completed successfully.</b>";

?>

</div>
</body>
</html>