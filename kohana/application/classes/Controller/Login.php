<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {

	public function action_index()
	{
		$view = View::factory('pages/signin');

		$this->response->body($view);
	}
} // End Login
