<!DOCTYPE html>
<html>
<head>
    <title>PHP Data Type Exercises</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .exercise {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 20px auto;
            transition: transform 0.2s;
            max-width: 700px;
            border-left:orangered solid 6px;
        }
        .exercise:hover {
            transform: translateY(-5px);
            background-color: #f9f9f9;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .exercise h2 {
            color:#FD7F2C;
            margin-top: 0;
            font-size: 24px;
        }
        h1 {
            color: #FD7F2C;
            text-align: center;
            font-size: 36px;
            margin-bottom: 20px;
        }
        .result {
            font-size: 16px;
            color: #555;
        }
        input[type="number"] {
            width: 80px;
            padding: 5px;
            margin: 5px;
        }
        input[type="submit"] {
            padding: 6px 12px;
            background: #FD7F2C;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #FD7F2C;
        }
    </style>
</head>
<body>
<h1>Data Types Exercises</h1>

<div class="exercise">
    <h2>Exercise 1: Personal Information</h2>
    <form method="post">
        Enter X: <input type="number" name="x" required>
        Enter Y: <input type="number" name="y" required>
        <input type="submit" name="calc1" value="Calculate">
    </form>
    <div class="result">
        <?php
        if (isset($_POST['calc1'])) {
            $x = $_POST['x'];
            $y = $_POST['y'];
            $z = ($x + $y) * 5;
            echo "The total is <strong>$z</strong>";
        }
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Exercise 2: Value Added Tax</h2>
    <form method="post">
        Price: <input type="number" name="price" required>
        VAT (%): <input type="number" name="vat" value="30" required>
        <input type="submit" name="calc2" value="Compute VAT">
    </form>
    <div class="result">
        <?php
        if (isset($_POST['calc2'])) {
            $price = $_POST['price'];
            $vat = $_POST['vat'] / 100;
            $vatAmount = $price * $vat;
            $totalPrice = $price + $vatAmount;
            echo "Price: <strong>\$$price</strong><br>";
            echo "VAT: <strong>\$" . number_format($vatAmount, 2) . "</strong><br>";
            echo "Total Price: <strong>\$" . number_format($totalPrice, 2) . "</strong>";
        }
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Exercise 3: Average</h2>
    <form method="post">
        X: <input type="number" name="x3" required>
        Y: <input type="number" name="y3" required>
        Z: <input type="number" name="z3" required>
        <input type="submit" name="calc3" value="Compute Average">
    </form>
    <div class="result">
        <?php
        if (isset($_POST['calc3'])) {
            $x = $_POST['x3'];
            $y = $_POST['y3'];
            $z = $_POST['z3'];
            $average = ($x + $y + $z) / 3;
            echo "The average is <strong>" . number_format($average, 2) . "</strong>";
        }
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Exercise 4: Countries and Capitals</h2>
    <div class="result">
        <?php
        $countries = [
            "Iceland" => "Reykjavik",
            "Egypt" => "Cairo",
            "Canada" => "Ottawa",
            "South Korea" => "Seoul",
            "Ireland" => "Dublin"
        ];
        foreach ($countries as $country => $capital) {
            echo "The capital of <strong>$country</strong> is <strong>$capital</strong><br>";
        }
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Exercise 5: Centimeters to Inches</h2>
    <form method="post">
        Centimeters: <input type="number" name="cm" required>
        <input type="submit" name="calc5" value="Convert">
    </form>
    <div class="result">
        <?php
        if (isset($_POST['calc5'])) {
            $cm = $_POST['cm'];
            $inch = $cm * 0.39;
            echo "$cm centimeters is <strong>" . number_format($inch, 2) . "</strong> inches.";
        }
        ?>
    </div>
</div>

<div class="exercise">
    <h2>Exercise 6: Expenses</h2>
    <form method="post">
        Enter expenses (comma-separated):<br>
        <input type="text" name="expenses" placeholder="e.g., 3000,200,15000">
        <input type="submit" name="calc6" value="Calculate">
    </form>
    <div class="result">
        <?php
        if (isset($_POST['calc6'])) {
            $expenses = explode(',', str_replace(' ', '', $_POST['expenses']));
            $total = array_sum($expenses);
            $count = count($expenses);
            echo "My <strong>$count</strong> biggest expenses were <strong>\$$total</strong>";
        }
        ?>
    </div>
</div>

</body>
</html>