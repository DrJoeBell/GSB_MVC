<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Medecin extends Controller {

	public function action_view()
	{
		$param1=$this->request->param('param1');
		$default = Database::instance();
		$result=$default->query(Database::SELECT,'SELECT * FROM medecin WHERE ID='.$param1);
		$rows = $result->as_array('ID');
		$this->response->body('Médecin');
	}
	public function action_page()
	{
		$param1=$this->request->param('param1');
		$default = Database::instance();
		$result=$default->query(Database::SELECT,'SELECT * FROM medecin WHERE ID='.$param1);
		$rows = $result->as_array('ID');
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
