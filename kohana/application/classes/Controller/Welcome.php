<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public $template = 'pages/accueil';

	public function action_index()
	{
		 $view = View::factory('pages/accueil')
  			->set('message', '<br><br><h1>it\'s works!</h1>');
        $view->set('valentin', 'ca fonctionne');
 
    // The view will have $places and $user variables
    $this->response->body($view);
	}
} // End Welcome
