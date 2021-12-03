<?php
echo "Here are our files : "; echo "\r\n";
$path = ".";
$dh = opendir($path);
$i=1;
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin" && $file != "leia") {
        echo "\r\n <a href='$path/$file'>$file</a><br /><br />";
        $i++;
    }
}
closedir($dh);
?>