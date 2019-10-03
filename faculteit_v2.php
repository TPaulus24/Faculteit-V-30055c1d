<?php
echo "Vul een getal in.\n";
$Num = readline();
if (is_numeric($Num)) {
    $totaal = 1; 
    $i = 1;
    while ($i <= $Num) {
        $totaal *= $i++;
        
    }
    echo $totaal;
}