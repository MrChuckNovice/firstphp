<?php
function Fibonacci($n) {
    $u = 1;
    $v = 21;
    // pour 
    for($i=2; $i <= $n; $i++) {
        $w = $u+$v;
        $u = $v;
        $v = $w;
    };
    return $v;
}

for($I=0;$I<=20;$I++) {
    echo "Fibonacci(".$I.")=".Fibonacci($I)."<BR>";
}
?>