<!DOCTYPE html>
<html>
<head>
    <title>Gerona Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculator {
            border: 2px solid #000;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 250px;
        }
        h2 {
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 80px;
            padding: 5px;
            margin: 10px;
            text-align: center;
        }
        .btn {
            padding: 10px 15px;
            margin: 5px;
            background-color: teal;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: darkcyan;
        }
        .result-box {
            border: 1px solid teal;
            padding: 10px;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Gerona Calculator</h2>
    <form method="post">
        <input type="number" name="num1" required value="<?php if(isset($_POST['num1'])) echo $_POST['num1']; ?>">
        <input type="number" name="num2" required value="<?php if(isset($_POST['num2'])) echo $_POST['num2']; ?>">
        <br>
        <button type="submit" name="operation" value="add" class="btn">+</button>
        <button type="submit" name="operation" value="sub" class="btn">-</button>
        <button type="submit" name="operation" value="mul" class="btn">*</button>
        <button type="submit" name="operation" value="div" class="btn">/</button>
    </form>

    <div class="result-box">
        Result <br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = "";

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "sub":
                    $result = $num1 - $num2;
                    break;
                case "mul":
                    $result = $num1 * $num2;
                    break;
                case "div":
                    $result = ($num2 != 0) ? $num1 / $num2 : "Error (Div by 0)";
                    break;
            }
            echo "<p style='font-size:18px; color:teal;'>$result</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
