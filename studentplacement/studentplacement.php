<!DOCTYPE html>
<html>
<head>
    <title>Student Placement Statistics</title>
    <style>
        body {
            background-color: #FFF8E1;
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
            color: #E65100;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #FFE0B2;
        }

        .report {
            background-color: #FFF3E0;
            padding: 15px;
            margin-top: 20px;
            border-left: 5px solid #E65100;
        }
    </style>
</head>

<body>

<div class="container">

<h2>Student Placement Statistics</h2>

<?php

$students = [
    ["name" => "Arun", "department" => "CSE", "package" => 8.5],
    ["name" => "Banu", "department" => "CSE", "package" => 9.2],
    ["name" => "Kavi", "department" => "ECE", "package" => 7.8],
    ["name" => "Meena", "department" => "ECE", "package" => 8.9],
    ["name" => "Ravi", "department" => "IT", "package" => 10.5],
    ["name" => "Divya", "department" => "IT", "package" => 9.8]
];

/* Sort students by package */
usort($students, function($a, $b) {
    return $b["package"] <=> $a["package"];
});

echo "<table>";
echo "<tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Department</th>
        <th>Package (LPA)</th>
      </tr>";

$rank = 1;

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $rank . "</td>";
    echo "<td>" . $student["name"] . "</td>";
    echo "<td>" . $student["department"] . "</td>";
    echo "<td>" . $student["package"] . "</td>";
    echo "</tr>";

    $rank++;
}

echo "</table>";

/* Mathematical calculations */
$totalPackage = 0;

foreach ($students as $student) {
    $totalPackage += $student["package"];
}

$averagePackage = $totalPackage / count($students);
$highestPackage = max(array_column($students, "package"));

echo "<div class='report'>";

echo "<b>Total Students Placed:</b> " . count($students) . "<br>";
echo "<b>Average Package:</b> " .
     round($averagePackage, 2) . " LPA<br>";
echo "<b>Highest Package:</b> " .
     $highestPackage . " LPA";

echo "<h3>Department-wise Ranking</h3>";

$departments = [];

foreach ($students as $student) {
    $departments[$student["department"]][] = $student;
}

foreach ($departments as $department => $members) {

    usort($members, function($a, $b) {
        return $b["package"] <=> $a["package"];
    });

    echo "<b>$department:</b> ";

    $position = 1;

    foreach ($members as $member) {
        echo $position . ". " .
             $member["name"] .
             " (" . $member["package"] . " LPA) ";

        $position++;
    }

    echo "<br>";
}

echo "</div>";

?>

</div>

</body>
</html>