<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Medicament extends Controller {

	public function action_index()
	{
		$this->response->body('Medicament');
	}
		public function action_ajouter()
	{
		$this->response->body('Ajouter un Medicament');
	}
	public function action_modifier()
	{
		$test=$this->request->param();
		$this->response->body('Modifier le Medicament '.$test['id']);
	}
	public function action_supprimer()
	{
		$test=$this->request->param();
		$this->response->body('Supprimer le Medicament '.$test['id']);
	}
} // End Medicament
