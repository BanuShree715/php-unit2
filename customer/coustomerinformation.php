<?php

$name = "Banu Shree";
$phone = "9876543210";
$email = "banu@gmail.com";
$account = "ACC123456";

$nameCheck = preg_match("/^[A-Za-z ]{3,30}$/", $name);
$phoneCheck = preg_match("/^[6-9][0-9]{9}$/", $phone);
$emailCheck = preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/", $email);
$accountCheck = preg_match("/^ACC[0-9]{6}$/", $account);

function result($value) {
    return $value
        ? "<span class='valid'>✔ Valid</span>"
        : "<span class='invalid'>✖ Invalid</span>";
}

echo "
<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg, #fd79a8, #fab1a0);
    padding: 40px;
}
.card {
    width: 65%;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 8px 20px #555;
}
h1 {
    text-align: center;
}
.item {
    padding: 15px;
    margin: 10px;
    background: #ffeaa7;
    border-radius: 10px;
}
.valid {
    color: green;
    font-weight: bold;
}
.invalid {
    color: red;
    font-weight: bold;
}
</style>

<div class='card'>

<h1> Customer Validation Report</h1>

<div class='item'>
<b>Name:</b> $name → " . result($nameCheck) . "
</div>

<div class='item'>
<b>Phone:</b> $phone → " . result($phoneCheck) . "
</div>

<div class='item'>
<b>Email:</b> $email → " . result($emailCheck) . "
</div>

<div class='item'>
<b>Account:</b> $account → " . result($accountCheck) . "
</div>

</div>";
?>