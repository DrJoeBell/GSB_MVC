<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_GSB extends Controller_Template
{
    
 
    public function action_index()
    {
    	// This would connect to the database defined as 'default'
		$default = Database::instance();
        public $template = 'site';
		$result = $default->query(Database::SELECT, 'SELECT * FROM visiteur');
		//var_dump($result->get('NOM'));
		//var_dump($default);

        $this->template->message = '<br><br><br><br>hello, world!';
    }
}