<?php

$branches = [
    "Coimbatore" => ["Mobile" => 25, "Laptop" => 15, "Tablet" => 20],
    "Chennai"    => ["Mobile" => 30, "Laptop" => 18, "Tablet" => 15],
    "Madurai"    => ["Mobile" => 20, "Laptop" => 12, "Tablet" => 25],
    "Salem"      => ["Mobile" => 28, "Laptop" => 10, "Tablet" => 18]
];

echo "
<style>
body {
    font-family: Arial;
    background: linear-gradient(135deg,#ffeaa7,#fab1a0);
    padding: 30px;
}
.box {
    width: 85%;
    margin: auto;
    background: white;
    padding: 25px;
    border-radius: 20px;
    box-shadow: 0 5px 20px #999;
}
h1 {
    text-align:center;
    color:#2d3436;
}
table {
    width:100%;
    border-collapse:collapse;
}
th {
    background:#e17055;
    color:white;
}
td,th {
    padding:13px;
    text-align:center;
    border:1px solid #ddd;
}
.highlight {
    background:#ffeaa7;
    padding:15px;
    border-radius:12px;
    margin-top:20px;
    font-weight:bold;
}
</style>

<div class='box'>
<h1> Branch Sales Dashboard</h1>

<table>
<tr>
<th>Branch</th>
<th>Mobile</th>
<th>Laptop</th>
<th>Tablet</th>
<th>Total Sales</th>
</tr>
";

$branchTotals = [];

foreach ($branches as $branch => $sales) {

    $total = array_sum($sales);
    $branchTotals[$branch] = $total;

    echo "
    <tr>
        <td><b>$branch</b></td>
        <td>{$sales['Mobile']}</td>
        <td>{$sales['Laptop']}</td>
        <td>{$sales['Tablet']}</td>
        <td><b>$total</b></td>
    </tr>";
}

echo "</table>";

$bestBranch = array_search(max($branchTotals), $branchTotals);
$highestSale = max($branchTotals);

$totalSales = array_sum($branchTotals);
$averageSales = $totalSales / count($branchTotals);

echo "
<div class='highlight'>
 Best Branch: $bestBranch <br><br>
 Highest Sales: $highestSale units <br><br>
 Overall Sales: $totalSales units <br><br>
 Average Branch Sales: " . round($averageSales, 2) . " units
</div>

</div>";
?>