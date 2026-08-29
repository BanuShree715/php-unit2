<!DOCTYPE html>
<html>
<head>
    <title>Patient Data Processing</title>
    <style>
        body {
            background-color: #E3F2FD;
            font-family: Arial;
            padding: 30px;
        }
        .card {
            width: 650px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 12px #777;
        }
        h2 { color: #1565C0; }
        .patient {
            background-color: #E8F4FD;
            padding: 12px;
            margin: 10px 0;
            border-left: 5px solid #1565C0;
        }
        .error {
            background-color: #FFEBEE;
            color: #C62828;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="card">

<h2>Patient Record Validation</h2>

<?php

$patients = [
    ["name" => "Ravi", "age" => 25, "blood" => "O+"],
    ["name" => "Meena", "age" => 42, "blood" => "A+"],
    ["name" => "", "age" => 30, "blood" => "B+"],
    ["name" => "Karthik", "age" => -5, "blood" => "AB+"]
];

foreach ($patients as $patient) {

    try {

        if (empty($patient["name"])) {
            throw new Exception("Patient name cannot be empty.");
        }

        if ($patient["age"] <= 0 || $patient["age"] > 120) {
            throw new Exception(
                "Invalid age for patient " . $patient["name"]
            );
        }

        $validBloodGroups = ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"];

        if (!in_array($patient["blood"], $validBloodGroups)) {
            throw new Exception(
                "Invalid blood group for " . $patient["name"]
            );
        }

        echo "<div class='patient'>";
        echo "<b>Patient Name:</b> " . $patient["name"] . "<br>";
        echo "<b>Age:</b> " . $patient["age"] . "<br>";
        echo "<b>Blood Group:</b> " . $patient["blood"];
        echo "</div>";

    } catch (Exception $e) {

        echo "<div class='error'>";
        echo "⚠ " . $e->getMessage();
        echo "</div>";
    }
}

echo "<br><b>Patient data processing completed.</b>";

?>

</div>
</body>
</html>