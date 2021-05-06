<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <input type="number" name="InventmentAmount" placeholder="Giá trị hiện tại">
    <br>
    <input type="number" name="YearlyInterestRate" placeholder="Lãi suất năm / %" >
    <br>
    <input type="number" name="NumberofYears" placeholder="Số năm gửi">
    <br>
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $inventmentAmount = $_POST['InventmentAmount'];
    $yearlyInterestrate = $_POST['YearlyInterestRate'];
    $numberOfyears = $_POST['NumberofYears'];
    $a = null;
    for ($i = 1; $i <= $numberOfyears; $i++){
        $a = $inventmentAmount +($inventmentAmount*$yearlyInterestrate/100);
        $inventmentAmount = $a;
    }
    echo "Giá trị tương lai sau $numberOfyears là $a";

}


?>

</body>
</html>