<?php
	if(isset($_POST['save']))
	{
		save();
	}
	printSite();
	function printSite()
	{
		$index = "";
	}
	function save()
	{
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$rnd = substr(str_shuffle($permitted_chars), 0, 10);
		$file = $rnd;
		if(!file_exists($file))
		{
			$myfile  = fopen($file, "w");
			fwrite($myfile, $_POST['save']);
			fclose($myfile);
			echo "Dein Code ist nun unter http://paste.mctzock.de/".$file;
		}else
		{
			save();
		}
	}
?>