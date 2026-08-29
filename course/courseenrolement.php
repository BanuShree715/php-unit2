<?php

$courses = [
    "Python with AI" => 45,
    "Web Development" => 32,
    "Data Science" => 28,
    "Cloud Computing" => 20,
    "Cyber Security" => 35
];

$mostPopular = array_search(max($courses), $courses);
$totalStudents = array_sum($courses);

arsort($courses);

echo "
<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg,#a29bfe,#81ecec);
    padding: 40px;
}
.box {
    width: 75%;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 22px;
    box-shadow: 0 8px 20px #555;
}
h1 {
    text-align: center;
    color: #2d3436;
}
.course {
    padding: 15px;
    margin: 10px;
    background: #dfe6e9;
    border-radius: 12px;
}
.popular {
    background: #ffeaa7;
    padding: 20px;
    border-radius: 15px;
    margin-top: 20px;
    font-weight: bold;
}
</style>

<div class='box'>

<h1> Course Enrolment Hub</h1>

<h2> Enrolment Summary</h2>
";

foreach ($courses as $course => $students) {
    echo "
    <div class='course'>
     <b>$course</b> 
    <span style='float:right'>$students Students</span>
    </div>";
}

echo "
<div class='popular'>
 Most Popular Course: $mostPopular <br><br>
 Students Enrolled: {$courses[$mostPopular]} <br><br>
 Total Enrolments: $totalStudents
</div>

</div>
";
?>