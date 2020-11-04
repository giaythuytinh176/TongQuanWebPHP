<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['InventmentAmount']) && isset($_POST['YearlyInterestRate']) && isset($_POST['NumberofYears'])) {
        $FutureValue = $_POST['InventmentAmount'] + ($_POST['InventmentAmount'] * $_POST['YearlyInterestRate'] / 100);
        $FutureValue = $FutureValue * $_POST['NumberofYears'];
        echo "Giá trị Tương lai " . $FutureValue;
    } else {
        echo "Bạn chưa nhập.";
    }

}

?>


<html>
<header>
    <title>[Bài tập] Ứng dụng Future Value Calculator</title>
    <style>
        input[type=number] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</header>

<body>
<br>
<h1>Ứng dụng Future Value Calculator</h1>
<br>
<form method="POST">
    <input type="number" name="InventmentAmount" placeholder="Inventment Amount">
    <input type="number" name="YearlyInterestRate" placeholder="Yearly Interest Rate">
    <input type="number" name="NumberofYears" placeholder="Number of Years">
    <input type="submit" id="submit" value="Calculate">
</form>


</body>


</html>
