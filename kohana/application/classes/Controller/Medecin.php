<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Medecin extends Controller {

	public function action_index()
	{
		$this->response->body('Médecin');
	}

	public function action_view()
	{
		$param1=$this->request->param('param1');
		if (is_numeric($param1)){
		$default = Database::instance();
		$result=$default->query(Database::SELECT,'SELECT * FROM medecin WHERE ID='.$param1);
		$rows = $result->as_array('ID');
		}
		$this->response->body('Médecin');
	}
	public function action_page()
	{
		$nbParPage = 3;
		$param1=$this->request->param('param1');
		if (is_numeric($param1)){

				$limit = ($param1-1) * $nbParPage;
				$limit2 = $limit + $nbParPage;
			$default = Database::instance();
			$result=$default->query(Database::SELECT,"SELECT * FROM medecin ORDER BY ID LIMIT $limit, $limit2" );
			$rows = $result->as_array('ID');
			var_dump($rows);
		}
		else{
			$message_error = "Le numero de page est incorrect";
		}
		$this->response->body('Médecin');
	}
	public function action_ajouter()
	{
		$view = View::factory('pages/ajouter_medecin');
		$post = $this->request->post();
		if (!empty($post)){	
		var_dump($post);var_dump($post);
		}
		$this->response->body($view);
	}

	public function action_modifier()
	{
		$view = View::factory('pages/ajouter_medecin');
		$param1=$this->request->param('param1');
		if (is_numeric($param1)){
			$default = Database::instance();
			$result=$default->query(Database::SELECT,'SELECT * FROM medecin WHERE ID='.$param1);
			$medecin = $result->as_array('ID');
			$view->set('medecin', $medecin);
		}
		$this->response->body($view);
	}

	public function action_supprimer()
	{
		$this->response->body('supprimer');
	}

} // End Login
