<?php      
	if( ini_get('allow_url_fopen') ) {         
		echo 'allow_url_fopen is enabled. file_get_contents should work well';
	} else {         
		echo 'allow_url_fopen is disabled. file_get_contents would not work'; 
	} 
?>
