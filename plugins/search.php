<form method="POST">
	<input type="text" name="word">
	<input type="submit" value="search">
</form>


<?php
	$cur_name = basename($_SERVER['SCRIPT_FILENAME']);
	$dir_full = substr($_SERVER['SCRIPT_FILENAME'],0,-strlen($cur_name));
	$dir    = new RecursiveDirectoryIterator($dir_full);
	if (!empty($_POST['word'])){
		$search = trim($_POST['word']);
		foreach (new RecursiveIteratorIterator($dir) as $file) {
			if(( strpos($file,".php") == strlen($file)-4 || strpos($file,".js") == strlen($file)-3 && ($file!="." && $file!=".."))){
				$txt1 = file_get_contents($file);
				if (strpos($txt1, $search) !== false) {
			  		echo ( '\'<b>'.$search .'\' in file '.$file."</b><br/>");
			  		// $file_content = file_get_contents($file);
				  	// $file_strings = split(' ', $file_content);
				  	// foreach ($file_strings as $file_str) {
				  	// 	if(strlen($file_str) > 200 ) echo '<b>'.$file.'</b><br/><br/><br/>'.$file_str.'<br/><br/><br/>';
				  	// }
			  	}
			  	// $file_content = file_get_contents($file);
			  	// $file_strings = split(' ', $file_content);
			  	// foreach ($file_strings as $file_str) {
			  	// 	if(strlen($file_str) > 200 ) echo '<b>'.$file.'</b><br/><br/><br/>'.$file_str.'<br/><br/><br/>';
			  	// }
			}
		}
	}
?>