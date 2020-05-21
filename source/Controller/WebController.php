<?php 

	namespace Source\Controller;

	use League\Plates\Engine;
	use Source\Models\User;

	/**
	 * 
	 */
	class WebController
	{
		private $view;
		
		public function __construct()
		{
			$this->view = Engine::create(__DIR__ . "/../../theme", "php");
		}

		public function home(): void
		{
			$users = (new User())->find()->fetch(true);
			echo $this->view->render("home", [
				"title" => "Home | " .  SITE,
				"users" => $users
			]);
		}

		public function contato(): void
		{			
			echo $this->view->render("contato", [
				"title" => "Home | " .  SITE
			]);
		}
	}



?>