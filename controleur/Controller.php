<?php
	// require_once 'modele/dao/ArticleDao.php';
	// require_once 'modele/dao/CategorieDao.php';
	require_once 'dao/ArticleDAO.php';
	require_once 'dao/CategorieDAO.php';
	//require_once 'modele/ConnexionManager.php';

	/**
	 * Classe représentant notre controleur principal
	 */

	class Controller
	{

		private $articleDAO;
		private $categorieDAO;

		public function __construct() {
            $this->articleDAO = new ArticleDAO();
			$this->categorieDAO = new CategorieDAO();
        }
		

		public function showAccueil()
		{
			$articles = $this->articleDAO->getList();
			$categories = $this->categorieDAO->getList();

			require_once 'vue/accueil.php';
		}

		public function showArticle($id)
		{
			$article = $this->articleDAO->getById($id);
			$categories = $this->categorieDAO->getList();
			
			require_once 'vue/article.php';
		}

		public function showCategorie($id)
		{
			$articles = $this->articleDAO->getByCategoryId($id);
			$categories = $this->categorieDAO->getList();
			
			require_once 'vue/articleByCategorie.php';
		}
	}
?>