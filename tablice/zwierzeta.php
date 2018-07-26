<?php
echo '<pre>';
$zwierzeta = ["gucio"=>5, "tofik"=>10, "reksio"=>15];

echo "Tofik". "ma " . $zwierzeta["tofik"] . " lat";
$zwierzeta["kot"] = 20;

print_r($zwierzeta);