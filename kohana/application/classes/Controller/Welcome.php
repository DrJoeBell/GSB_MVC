<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$view = View::factory('pages/accueil');
		 $this->page_title = 'Home';
		$this->response->body($view);
	}
} // End Welcome
