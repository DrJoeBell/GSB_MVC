<?php defined('SYSPATH') or die('No direct script access.');

class Controller_MonCompte extends Controller {


	public $template = 'pages/compte';

	public function action_index()
	{
		$this->response->body('Mon Compte');
	}

	public function action_modifier()
	{
		$this->response->body('modifier');
	}


} // End Login
