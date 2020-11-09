<?php

//[Bài tập] Ứng dụng đọc số thành chữ


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        if (!is_numeric($number)) {
            echo "Mời bạn nhập một số";
        } else {
            echo "Số " . $number . " thành chữ là: ";
            if ($number >= 0 && $number < 10) {
                echo hangdonvi($number);
            } elseif ($number >= 10 && $number < 20) {
                echo hangchuc($number);
            } elseif ($number >= 20 && $number < 100) {
                echo parse3($number);
            } elseif ($number >= 100 && $number < 1000) {
                echo parse4($number);
            } else {
                echo "out of ability";
            }
        }
    } else {
        echo "Bạn chưa nhập số";
    }

}

function parse4($number)
{
    $hangtram = substr($number, 0, 1);
    $hangchuc = substr($number, 1, 1);
    $donvi = substr($number, 2, 1);
    $trontram = false;
    if ($hangchuc == 1) {
        $parse = hangchuc($hangchuc . $donvi);
    } else {
        $parse = parse3($hangchuc . $donvi);
    }
    if ($hangchuc == 0 && $donvi == 0) {
        $trontram = true;
    }
    $ht = hangdonvi($hangtram) . " hundred";
    $toNum = $ht . ($trontram ? '' : (" and " . $parse));
    return $toNum;
}

function parse3($number)
{
    $hangchuc = substr($number, 0, 1);
    $donvi = substr($number, 1, 1);
    $hc = hangdonvi($hangchuc, 1) . "ty";
    $rm_zero = false;
    if ($donvi == 0) {
        $rm_zero = true;
    }
    $dv = hangdonvi($donvi);
    $toNum = $hc . ($rm_zero ? '' : (" " . $dv));
    return $toNum;
}


function hangdonvi($number, $a = 0)
{
    if ($a == 1) {
        switch ($number) {
            case 2:
                return "twen";
        }
    }
    switch ($number) {
        case 0:
            return "zero";
        case 1:
            return "one";
        case 2:
            return "two";
        case 3:
            return "three";
        case 4:
            return "four";
        case 5:
            return "five";
        case 6:
            return "six";
        case 7:
            return "seven";
        case 8:
            return "eight";
        case 9:
            return "nine";
    }
}

function hangchuc($number)
{
    switch ($number) {
        case 10:
            return "ten";
        case 11:
            return "eleven";
        case 12:
            return "twelve";
        case 13:
            return "thirteen";
        case 14:
            return "fourteen";
        case 15:
            return "fifteen";
        case 16:
            return "sixteen";
        case 17:
            return "seventeen";
        case 18:
            return "eighteen";
        case 19:
            return "nighteen";
    }
}

?>


<html>
<header>
    <title>[Bài tập] Ứng dụng đọc số thành chữ</title>
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
<h1>Ứng dụng đọc số thành chữ</h1>
<br>
<form method="POST">
    <input type="number" name="number" placeholder="Nhập số cần đọc">
    <input type="submit" id="submit" value="Submit">

</form>


</body>


</html>
