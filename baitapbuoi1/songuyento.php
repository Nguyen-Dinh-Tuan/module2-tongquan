
<?php
function isPrimeNumber1($n) {
    if($n<2) {
        return false;
    }
 for ($i = 2; $i <= sqrt($n); $i++) {
if ($n % $i == 0) {
return false;
}
}
return true;
}

    echo ("Cac so nguyen to nho hon 200 la: <br>");
    for($i =0; $i< 100;$i++) {
        if (isPrimeNumber1($i)) {
            echo($i . " ");
        }
    }


