<!DOCTYPE html>
<html>
<head>
    <title>Loan Repayment Calculator</title>
    <style>
        body {
            background-color: #e3f2fd;
            font-family: Arial;
            text-align: center;
        }
        .box {
            background-color: white;
            width: 550px;
            margin: 40px auto;
            padding: 25px;
            border-radius: 15px;
        }
        h2 {
            color: #1565c0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #90caf9;
            padding: 8px;
        }
        th {
            background-color: #bbdefb;
        }
    </style>
</head>
<body>

<div class="box">

<h2>Loan Repayment Calculator</h2>

<?php

$loan = 100000;
$rate = 10;
$years = 2;

$months = $years * 12;
$monthlyRate = $rate / (12 * 100);

// EMI formula
$emi = ($loan * $monthlyRate * pow(1 + $monthlyRate, $months))
     / (pow(1 + $monthlyRate, $months) - 1);

$totalPayment = $emi * $months;
$totalInterest = $totalPayment - $loan;

echo "<p><b>Loan Amount:</b> ₹" . number_format($loan, 2) . "</p>";
echo "<p><b>Interest Rate:</b> $rate%</p>";
echo "<p><b>Loan Period:</b> $years Years</p>";
echo "<p><b>Monthly EMI:</b> ₹" . number_format($emi, 2) . "</p>";
echo "<p><b>Total Interest:</b> ₹" . number_format($totalInterest, 2) . "</p>";

echo "<h3>Repayment Schedule</h3>";

echo "<table>";
echo "<tr>
        <th>Month</th>
        <th>EMI</th>
        <th>Balance</th>
      </tr>";

$balance = $loan;

for ($month = 1; $month <= $months; $month++) {

    $interest = $balance * $monthlyRate;
    $principal = $emi - $interest;
    $balance = $balance - $principal;

    if ($balance < 0) {
        $balance = 0;
    }

    echo "<tr>";
    echo "<td>$month</td>";
    echo "<td>₹" . number_format($emi, 2) . "</td>";
    echo "<td>₹" . number_format($balance, 2) . "</td>";
    echo "</tr>";
}

echo "</table>";

?>

</div>

</body>
</html>