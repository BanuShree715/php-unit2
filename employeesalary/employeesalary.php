<?php

$employees = [
    ["name" => "Banu",  "salary" => 45000],
    ["name" => "Arun",  "salary" => 52000],
    ["name" => "Divya", "salary" => 38000],
    ["name" => "Kavin", "salary" => 60000],
    ["name" => "Meena", "salary" => 48000]
];

$salaries = array_column($employees, "salary");

$highest = max($salaries);
$lowest = min($salaries);
$average = array_sum($salaries) / count($salaries);

$highEmployee = $employees[array_search($highest, $salaries)];
$lowEmployee = $employees[array_search($lowest, $salaries)];

echo "
<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg,#dfe6e9,#b2bec3);
    padding: 40px;
}
.container {
    width: 75%;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 8px 20px #636e72;
}
h1 {
    text-align: center;
    color: #2d3436;
}
table {
    width: 100%;
    border-collapse: collapse;
}
th {
    background: #00b894;
    color: white;
}
td, th {
    padding: 14px;
    text-align: center;
    border: 1px solid #ddd;
}
.result {
    background: #ffeaa7;
    padding: 18px;
    margin-top: 20px;
    border-radius: 12px;
}
</style>

<div class='container'>
<h1> Employee Salary Analyzer</h1>

<table>
<tr>
<th>Employee</th>
<th>Salary</th>
</tr>
";

foreach ($employees as $emp) {
    echo "
    <tr>
        <td>{$emp['name']}</td>
        <td>₹{$emp['salary']}</td>
    </tr>";
}

echo "
</table>

<div class='result'>
 Highest Salary: {$highEmployee['name']} - ₹$highest <br><br>
 Lowest Salary: {$lowEmployee['name']} - ₹$lowest <br><br>
 Average Salary: ₹" . round($average, 2) . "
</div>

</div>
";
?>