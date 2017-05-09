<?php
$zip_name = 'zip1.zip'; //Zip name
$zip = new ZipArchive;
$cur_name = basename($_SERVER['SCRIPT_FILENAME']);
$dir_full = substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($cur_name));
$dir    = new RecursiveDirectoryIterator($dir_full);
if ($zip->open($dir_full.$zip_name,  ZipArchive::CREATE)) {
	foreach (new RecursiveIteratorIterator($dir) as $file) {
		if(substr($file,strlen($file)-1,strlen($file))!="." && substr($file,strlen($file)-2,strlen($file))!=".."){
			$zip->addFile($file);
			echo $file.'<br/>';
		}
	}
    $zip->close();
    echo 'ok';
} else {
    echo 'error';
}
?>