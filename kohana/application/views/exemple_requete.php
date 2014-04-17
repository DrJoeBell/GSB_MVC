<?php
    	// This would connect to the database defined as 'default'
		$default = Database::instance();

		$result = $default->query(Database::SELECT, 'SELECT * FROM visiteur');
		//var_dump($result->get('NOM'));
?>