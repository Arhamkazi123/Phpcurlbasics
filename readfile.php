<?php


$file = "Filesoperation/abc.txt";
$myfile = fopen($file, "r") or die("unable to open");
echo fread($myfile, filesize(($file)));
fclose($myfile);
