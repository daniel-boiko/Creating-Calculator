<?php

if($_POST['submit'])
{
    $a = (int)$_POST['first'];
    $b = (int)$_POST['second'];
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
    First number
    <input type = "text" name = "first" required>
    <br>
    Operator
    <select name = "operation" required>
        <option value = "+">+</option>
        <option value = "-">-</option>
        <option value = "*">*</option>
        <option value = "/">/</option>
    </select>
    <br>
    Second number
    <input type = "text" name = "second" required>
    <br>
    Try it out
    <input type = "submit" name  = "submit">
    <br>
    Answer:
</form>

<?php
if($c)
    echo $c;
?>

