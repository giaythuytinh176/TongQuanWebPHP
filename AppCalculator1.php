<html>
<header>
    <title>[Bài tập] Ứng dụng Calculator</title>
    <style>

        .inline {
            display: inline-block;
            margin: 3em;
            width: 555px;
            height: 250px;
        }

    </style>
</header>

<body>
<br>
<h1>Ứng dụng Calculator</h1>
<br>
<fieldset class="inline">
    <legend>Calculator</legend>
    <form method="POST">
        First Operand <input type="text" id="first" name="FirstOperand"><br><br>
        Second Operand <input type="text" id="second" name="SecondOperand"><br><br>
        Operator
        <input type="submit" name="btn" id="submit" value="+">
        <input type="submit" name="btn" id="submit" value="-">
        <input type="submit" name="btn" id="submit" value="*">
        <input type="submit" name="btn" id="submit" value="/">
        </select><br><br>
    </form>


<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['FirstOperand']) && !empty($_POST['SecondOperand']) && !empty($_POST['btn'])) {
        $FirstOperand = (float) $_POST['FirstOperand'];
        $SecondOperand = (float) $_POST['SecondOperand'];
        $operator = $_POST['btn'];
        if ($operator == "+") {
            $result = $FirstOperand + $SecondOperand;
        } elseif ($operator == "-") {
            $result = $FirstOperand - $SecondOperand;
        } elseif ($operator == "*") {
            $result = $FirstOperand * $SecondOperand;
        } elseif ($operator == "/") {
            if ($SecondOperand == 0) {
                $result = "Số thứ 2 ko thể là 0. Mời nhập lại.";
            } else $result = $FirstOperand / $SecondOperand;
        }

        ?>

        <script>
            document.getElementById("first").value = <?php echo $FirstOperand?>;
            document.getElementById("second").value = <?php echo $SecondOperand?>;
        </script>

        <?php
        echo "<h1>Results:  $FirstOperand $operator $SecondOperand = ";
        echo $result;
        echo "</h1>";
    } else {
        echo "Bạn chưa nhập.";
    }

}

?>
</fieldset>

</body>


</html>

