<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>

<form action = "" method = "post">

    <label>
        <input type = "text" name = "first" required>
    </label>

    <label>
        <select name = "operation" required>
        <option value = "+">+</option>
        <option value = "-">-</option>
        <option value = "*">*</option>
        <option value = "/">/</option>
        </select>
    </label>

    <label>
    <input type = "text" name = "second" required>
    <input type = "submit" name  = "submit">
    </label>

    <?php

    if($_POST['submit'])
    {
        $a = (int)$_POST['first'];
        $b = (int)$_POST['second'];
        $p = $_POST['operation'];
        $c=0;
        if ($p == "+")
            $c = $a + $b;
        else if($p == "-")
            $c = $a - $b;
        else if($p == "*")
            $c = $a * $b;
        else if ($p = "/")
        {
            if($b == 0)
                echo "Cannot divide by 0";
            else $c = $a / $b;
        }

        echo "<br> Answer: $c";
    }

    ?>
</form>
</body>
</html>

