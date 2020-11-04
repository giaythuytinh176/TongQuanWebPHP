<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['ListPrice']) && isset($_POST['DiscountPercent'])) {
        $DiscountAmount = $_POST['ListPrice'] * $_POST['DiscountPercent'] * 0.1;
        $DiscountPrice = $_POST['ListPrice'] - $DiscountAmount;
        echo "Discount Amount " . $DiscountAmount . "<br>";
        echo "Discount Price " . $DiscountPrice;
    } else {
        echo "Bạn chưa nhập.";
    }

}

?>


<html>
<header>
    <title>[Bài tập] Ứng dụng Product Discount Calculator</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

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
<h1>Ứng dụng Product Discount Calculator</h1>
<br>
<form method="POST">
    <input type="text" name="ProductDescription" placeholder="Product Description">
    <input type="number" name="ListPrice" placeholder="List Price">
    <input type="number" name="DiscountPercent" placeholder="Discount Percent">
    <input type="submit" id="submit" value="Calculate Discount">
</form>


</body>


</html>
