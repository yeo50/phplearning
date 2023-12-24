<?php
echo "hello whorld again";
$name = " min htet";
echo "<br>";
$str = "   james cameron ";
echo strlen($str);
echo "<br>";
$trimed = trim($str);
echo strlen($trimed), "<br>";
$p1 = '12345678';
$p2 = '12345678';
if (strcmp($p1, $p2) != 0) {
    echo "password don't match";
} else {
    echo "password match";
}
echo "<br>";
$web = "Dfas@sd.com";
echo strtolower($web);
echo "<br>";
echo strtoupper($web);
echo "<br>";
