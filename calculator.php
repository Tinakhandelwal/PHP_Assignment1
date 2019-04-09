<!DOCTYPE html>
<html>
<body>
<h1>Calculator</h1>
<br>
<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $ans = $_POST['cal'];

    //function for arithmetic operations.....
    function Calculator($num1,$num2,$ans){
        switch($ans){
            case "ADD":
            $calculate = $num1 + $num2;
            break;
            case "SUB":
            $calculate = $num1 - $num2;
            break;
            case "MUL":
            $calculate = $num1 * $num2;
            break;
            case "DIV":
            $calculate = $num1 / $num2;
            break;
        }
        return $calculate;
    }

?>
<form method="POST" action="">
Number1:<input name="num1" type = "number" value="<?php echo $num1; ?>">
<br>
Number2:<input name="num2" type = "number" value="<?php echo $num2; ?>">
<br>
Ans:<input name="ans" value="<?php echo Calculator($num1,$num2,$ans); ?>">
<br>
<input type="submit" name="cal" value="ADD">
<input type="submit" name="cal" value="SUB">
<input type="submit" name="cal" value="MUL">
<input type="submit" name="cal" value="DIV">
</form>
</body>
</html>
