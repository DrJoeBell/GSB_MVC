<?php defined('SYSPATH') or die('No direct script access.');

class Controller_CompteRendu extends Controller {

	public function action_index()
	{
		$this->response->body('Compte-rendu');
	}
		public function action_ajouter()
	{
		$this->response->body('Ajouter un Compte-rendu');
	}
	public function action_modifier()
	{
		$test=$this->request->param('id');
		$this->response->body('Modifier le Compte-rendu '.$test['id']);
	}
	public function action_supprimer()
	{
		$test=$this->request->param('id');
		$this->response->body('Supprimer le Compte-rendu '.$test['id']);
	}
} // End CompteRendu
