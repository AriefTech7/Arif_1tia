<?php
$x=6;
$y=10;
function Testing()
{
    global$x,$y;
    $y=$x+$y;
}
Testing();
echo $y;
?>
