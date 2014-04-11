<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{

		$text=
		'
		<a href="'.url::base().'index.php/login">login</a>
		<a href="'.url::base().'index.php/logout">logout</a>
		<a href="'.url::base().'index.php/monCompte">Mon compte</a>
		<a href="'.url::base().'index.php/monCompte/modifier">Modifier mon compte</a>
		<ul>
			<li>
				<a href="'.url::base().'index.php/medicament">Medicament</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/medicament/ajouter">Ajouter</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/medicament/supprimer/1">Supprimer</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/medicament/modifier/2">Modifier</a>
			</li>
		</ul>
		<ul>
			<li>
				<a href="'.url::base().'index.php/compteRendu">Compte rendu</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/compteRendu/ajouter">Ajouter</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/compteRendu/supprimer/1">Supprimer</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/compteRendu/modifier/2">Modifier</a>
			</li>
		</ul>
		<ul>
			<li>
				<a href="'.url::base().'index.php/medecin">Médecin</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/medecin/ajouter">Ajouter</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/medecin/supprimer/1">Supprimer</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/medecin/modifier/2">Modifier</a>
			</li>
		</ul>


		';


		$this->response->body($text);
	}
} // End Welcome
