<?php
$zip_name = 'zip1.zip'; //Zip name
$zip = new ZipArchive;
$cur_name = basename($_SERVER['SCRIPT_FILENAME']);
	$dir_full = substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($cur_name));
if ($zip->open($zip_name) === TRUE) {
    $zip->extractTo($dir_full);
    $zip->close();
    echo 'ok';
} else {
    echo 'error';
}
?>