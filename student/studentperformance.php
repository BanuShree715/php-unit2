<?php

$students = [
    "Banu"  => ["PHP" => 88, "Python" => 95, "Java" => 82],
    "Arun"  => ["PHP" => 91, "Python" => 86, "Java" => 90],
    "Divya" => ["PHP" => 85, "Python" => 98, "Java" => 87],
    "Kavin" => ["PHP" => 79, "Python" => 89, "Java" => 94]
];

$subjects = ["PHP", "Python", "Java"];

echo "
<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg, #dff9fb, #c7ecee);
    margin: 0;
    padding: 30px;
}

.container {
    width: 85%;
    margin: auto;
}

h1 {
    text-align: center;
    color: #130f40;
}

.card {
    background: white;
    padding: 20px;
    margin: 20px 0;
    border-radius: 15px;
    box-shadow: 0 5px 15px #aaa;
}

h2 {
    color: #30336b;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background: #686de0;
    color: white;
}

td, th {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
}

.topper {
    background: #f6e58d;
    padding: 12px;
    margin: 8px;
    border-radius: 10px;
}

.good {
    color: #218c74;
    font-weight: bold;
}

.average {
    color: #e58e26;
    font-weight: bold;
}
</style>

<div class='container'>

<h1> Student Performance Dashboard</h1>
";


echo "
<div class='card'>
<h2> Semester Marks</h2>
<table>
<tr>
<th>Student</th>
<th>PHP</th>
<th>Python</th>
<th>Java</th>
<th>Total</th>
<th>Average</th>
</tr>
";

foreach ($students as $name => $marks) {

    $total = array_sum($marks);
    $average = $total / count($marks);

    echo "<tr>";
    echo "<td><b>$name</b></td>";
    echo "<td>{$marks['PHP']}</td>";
    echo "<td>{$marks['Python']}</td>";
    echo "<td>{$marks['Java']}</td>";
    echo "<td>$total</td>";
    echo "<td>" . round($average, 2) . "</td>";
    echo "</tr>";
}

echo "</table></div>";


echo "
<div class='card'>
<h2> Subject Toppers</h2>
";

foreach ($subjects as $subject) {

    $highest = 0;
    $topper = "";

    foreach ($students as $name => $marks) {

        if ($marks[$subject] > $highest) {
            $highest = $marks[$subject];
            $topper = $name;
        }
    }

    echo "
    <div class='topper'>
         <b>$subject</b> → $topper 
        <b>($highest marks)</b>
    </div>
    ";
}

echo "</div>";


echo "
<div class='card'>
<h2> Class Average</h2>
";

foreach ($subjects as $subject) {

    $total = 0;

    foreach ($students as $marks) {
        $total += $marks[$subject];
    }

    $average = $total / count($students);

    echo "
    <p>
    <b>$subject:</b> 
    <span class='good'>" . round($average, 2) . "</span>
    </p>
    ";
}

echo "</div>";


echo "
<div class='card'>
<h2> Performance Report</h2>
";

foreach ($students as $name => $marks) {

    $average = array_sum($marks) / count($marks);

    if ($average >= 90) {
        $status = "Excellent ";
    } elseif ($average >= 75) {
        $status = "Very Good ";
    } elseif ($average >= 50) {
        $status = "Good ";
    } else {
        $status = "Needs Improvement ";
    }

    echo "
    <p>
    <b>$name</b> → Average: " . round($average, 2) .
    " | <span class='good'>$status</span>
    </p>
    ";
}

echo "
</div>
</div>
";
?>