<?php

$result = "";

if (isset($_POST["check"])) {

    $password = $_POST["password"];

    

    $pattern = "/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[@#$!%*?&])[A-Za-z0-9@#$!%*?&]{8,}$/";

    if (preg_match($pattern, $password)) {
        $result = "<div class='success'> Password is Strong and Valid</div>";
    } else {
        $result = "<div class='error'>
         Password is Invalid<br><br>
        Password must contain:<br>
         Minimum 8 characters<br>
         One uppercase letter<br>
         One lowercase letter<br>
         One number<br>
         One special character
        </div>";
    }
}

echo "
<style>

body {
    font-family: Arial;
    background: linear-gradient(135deg,#a29bfe,#74b9ff);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.card {
    background:white;
    width:400px;
    padding:35px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 8px 25px #555;
}

h1 {
    color:#2d3436;
}

input {
    width:90%;
    padding:12px;
    margin:15px;
    border:2px solid #74b9ff;
    border-radius:10px;
}

button {
    background:#6c5ce7;
    color:white;
    border:none;
    padding:12px 30px;
    border-radius:10px;
    cursor:pointer;
}

.success {
    margin-top:20px;
    padding:15px;
    background:#dff9fb;
    color:#0984e3;
    border-radius:10px;
    font-weight:bold;
}

.error {
    margin-top:20px;
    padding:15px;
    background:#ffe6e6;
    color:#d63031;
    border-radius:10px;
    text-align:left;
}

</style>

<div class='card'>

<h1> Employee Password Check</h1>

<form method='post'>

<input type='password'
       name='password'
       placeholder='Enter employee password'
       required>

<br>

<button type='submit' name='check'>
Check Password
</button>

</form>

$result

</div>
";
?>