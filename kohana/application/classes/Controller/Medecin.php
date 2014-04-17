<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Medecin extends Controller {

	public function action_index()
	{
		$this->response->body('Médecin');
	}

	public function action_ajouter()
	{
		$this->response->body('ajouter');
	}

	public function action_modifier()
	{
		$this->response->body('modifier');
	}

	public function action_supprimer()
	{
		$this->response->body('supprimer');
	}

} // End Login
