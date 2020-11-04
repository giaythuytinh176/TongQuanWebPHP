<?php


for ($i = 2; $i < 100; $i++) {
    if (soNT($i)) {
        echo $i . "<br>";
    }
}

function soNT($num)
{
    if ($num < 2) return false;
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

?>


<html>
<header>
    <title>[*Bài tập] Hiển thị các số nguyên tố nhỏ hơn 100</title>
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
<h1>Hiển thị các số nguyên tố nhỏ hơn 100</h1>
<br>


</body>


</html>
