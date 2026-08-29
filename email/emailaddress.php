<?php

$text = "
Employees:
Banu - banu@gmail.com
Arun - arun@yahoo.com
Divya - divya@company.in
Kavin - kavin@abc
Meena - meena@gmail.com
";

$pattern = "/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/";

preg_match_all($pattern, $text, $emails);

echo "
<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg, #00b894, #55efc4);
    padding: 50px;
}
.box {
    width: 65%;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 8px 20px #555;
}
h1 {
    text-align: center;
    color: #006266;
}
.email {
    background: #dff9fb;
    padding: 15px;
    margin: 10px;
    border-radius: 10px;
}
.count {
    background: #ffeaa7;
    padding: 15px;
    border-radius: 10px;
    font-weight: bold;
}
</style>

<div class='box'>

<h1> Email Finder</h1>

<h2>Valid Email Addresses</h2>
";

foreach ($emails[0] as $email) {
    echo "
    <div class='email'>
     $email
    </div>";
}

echo "
<div class='count'>
 Valid Emails Found: " . count($emails[0]) . "
</div>

</div>";
?>