<form method="post">
    <input type="number" name="rate" >
    <input type="submit" value="Chuyen doi">

</form>
<?php
$USD = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rate =(float)$_POST["rate"];
    if ($rate > 0) {
        $USD = $rate * 23000;
        echo "So tien la" . $USD;
    } else {
        echo "Thieu tien";
    }
}







