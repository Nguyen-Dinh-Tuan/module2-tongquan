<form method="post">
    <input type="text" name="money">
    <input type="submit" value="Calculate">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $money1 = (float)$_POST["money"]."000";
    $interest = 0.15;
    if($money1 > 0){
        $money2 = $money1 + ($money1 * $interest);
        echo "So tien la ".$money2. " VND";
    } else {
        echo "Ban đang thieu tien ";
    }
}

