<?php
$x=5;
function myTest()
{
    $x="";
    echo $x; // local scope
}

myTest();  // keluaran kosong
?>