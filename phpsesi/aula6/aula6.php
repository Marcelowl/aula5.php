<?php
$l = $_POST['tabuadas'];

$t= 0;
while($l >= $t){
    print("<h2>Tabuada do {$t}</h2>");
    for($i=0;$i<=10;$i++){
        $cont = $t * $i;
        print("<br>$t x $i = $cont");
    }
    $t+=1;
}
?>