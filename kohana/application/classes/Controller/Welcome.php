<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{

		$text=
		'
		<a href="'.url::base().'index.php/login">login</a>
		<a href="'.url::base().'index.php/logout">logout</a>
		<a href="'.url::base().'index.php/monCompte">Mon compte</a>
		<a href="'.url::base().'index.php/">Modifier mon compte</a>
		<ul>
			<li>
				<a href="'.url::base().'index.php/">Medicament</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/">Ajouter</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/">Supprimer</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/">Modifier</a>
			</li>
		</ul>
		<ul>
			<li>
				<a href="'.url::base().'index.php/">Compte rendu</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/">Ajouter</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/">Supprimer</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/">Modifier</a>
			</li>
		</ul>
		<ul>
			<li>
				<a href="'.url::base().'index.php/">Médecin</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/">Ajouter</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/">Supprimer</a>
			</li>
			<li>
				<a href="'.url::base().'index.php/">Modifier</a>
			</li>
		</ul>


		';


		$this->response->body($text);
	}
} // End Welcome
