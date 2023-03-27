<?php
// define('DB_name', 'data/info.txt');



function  addUser($firstName,$lastName,$email,$password){
 $file = fopen("data/info.txt", "a");
	fwrite($file, "$firstName,$lastName,$email,$password\n");
		 fclose($file);

}
