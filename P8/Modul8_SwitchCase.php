<?php
$warna = "red";//ganti nilai red ke blue atau green ata diluar red blue green
switch ($warna)
{
    case "red":
        echo "your favorite color is red!";
        break;
    case "blue":
        echo "your favorite color is blue!";
        break;
    case "green":
        echo "your favorite color is green!";
        break;
    default:
        echo "your favorite color is neither red, blue, or green!";
}
?>