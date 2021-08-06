<?php

if($_POST['sibmit'])
{
    $a = (int)$_POST['first'];
    $b = (int)$_POST['operation'];
    $p = $_POST['operation'];
    $c;
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
}

?>


<form action = "" method = "post">

    <input type = "text" name = "first" required>

    <select name = "operation" required>
        <option value = "+">+</option>
        <option value = "-">-</option>
        <option value = "*">*</option>
        <option value = "/">/</option>
    </select>

    <input type = "text" name = "second" required>

    <input type = "submit" name  = "submit">

</form>

<?php
if($c)
    echo $c;
?>


// here output
echo("summa: " . $sum);
echo ("<br");
echo("Subtraction: " . $min);
echo ("<br");
echo("Multiplying: " . $multi);
echo ("<br");
echo("Dividing: " . $del);
echo ("<br");
//
?>
</body>
</html>

