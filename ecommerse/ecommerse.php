<?php

$customer = [
    "name" => "Banu Shree",
    "email" => "banu@gmail.com",
    "phone" => "9876543210",
    "pincode" => "641001",
    "username" => "banu2026"
];

$rules = [
    "name" => "/^[A-Za-z ]{3,30}$/",
    "email" => "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/",
    "phone" => "/^[6-9][0-9]{9}$/",
    "pincode" => "/^[0-9]{6}$/",
    "username" => "/^[A-Za-z0-9_]{5,15}$/"
];

echo "
<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg, #0984e3, #74b9ff);
    padding: 40px;
}
.register {
    width: 70%;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 25px;
    box-shadow: 0 8px 25px #444;
}
h1 {
    text-align: center;
    color: #2d3436;
}
.row {
    display: flex;
    justify-content: space-between;
    padding: 15px;
    margin: 8px;
    background: #dfe6e9;
    border-radius: 10px;
}
.ok {
    color: green;
    font-weight: bold;
}
.bad {
    color: red;
    font-weight: bold;
}
</style>

<div class='register'>

<h1> E-Commerce Registration</h1>

<h2>Validation Report</h2>
";

foreach ($customer as $field => $value) {

    $valid = preg_match($rules[$field], $value);

    $status = $valid
        ? "<span class='ok'>✔ Valid</span>"
        : "<span class='bad'>✖ Invalid</span>";

    echo "
    <div class='row'>
        <b>" . ucfirst($field) . "</b>
        <span>$value</span>
        $status
    </div>";
}

echo "
</div>";
?>