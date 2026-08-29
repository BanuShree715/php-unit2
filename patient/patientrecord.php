<?php

$patients = [
    ["name" => "Banu",  "age" => 21, "department" => "Cardiology", "treatment" => "Checkup"],
    ["name" => "Arun",  "age" => 35, "department" => "Neurology",  "treatment" => "Therapy"],
    ["name" => "Divya", "age" => 28, "department" => "Cardiology", "treatment" => "Medicine"],
    ["name" => "Kavin", "age" => 42, "department" => "Orthopedic", "treatment" => "Surgery"],
    ["name" => "Meena", "age" => 31, "department" => "Neurology", "treatment" => "Therapy"],
    ["name" => "Ravi",  "age" => 25, "department" => "Cardiology", "treatment" => "Checkup"]
];

$ages = array_column($patients, "age");
$totalPatients = count($patients);
$averageAge = array_sum($ages) / $totalPatients;

$departments = [];

foreach ($patients as $patient) {

    $dept = $patient["department"];

    if (!isset($departments[$dept])) {
        $departments[$dept] = 0;
    }

    $departments[$dept]++;
}

$treatments = [];

foreach ($patients as $patient) {

    $type = $patient["treatment"];

    if (!isset($treatments[$type])) {
        $treatments[$type] = 0;
    }

    $treatments[$type]++;
}

echo "
<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg,#fab1a0,#ffeaa7);
    padding: 30px;
}
.main {
    width: 85%;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 20px;
    box-shadow: 0 8px 20px #777;
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
    background: #e84393;
    color: white;
}
td, th {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
}
.info {
    display: inline-block;
    background: #dfe6e9;
    padding: 15px;
    margin: 8px;
    border-radius: 12px;
}
.report {
    background: #81ecec;
    padding: 18px;
    margin-top: 20px;
    border-radius: 15px;
}
</style>

<div class='main'>

<h1> Patient Care Report</h1>

<h2> Patient Records</h2>

<table>
<tr>
<th>Name</th>
<th>Age</th>
<th>Department</th>
<th>Treatment</th>
</tr>
";

foreach ($patients as $p) {
    echo "
    <tr>
        <td>{$p['name']}</td>
        <td>{$p['age']}</td>
        <td>{$p['department']}</td>
        <td>{$p['treatment']}</td>
    </tr>";
}

echo "
</table>

<h2> Department-wise Report</h2>
";

foreach ($departments as $dept => $count) {
    echo "
    <div class='info'>
     $dept : <b>$count Patients</b>
    </div>";
}

echo "
<div class='report'>
 Total Patients: <b>$totalPatients</b><br><br>
 Average Age: <b>" . round($averageAge, 2) . " years</b>
</div>

<h2> Treatment Statistics</h2>
";

foreach ($treatments as $treatment => $count) {
    echo "
    <div class='info'>
     $treatment : <b>$count</b>
    </div>";
}

echo "
</div>
";
?>