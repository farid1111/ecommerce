<?php
	include("../app/model/checkout/function_panier.php");
	 include("../app/model/checkout/read_address.php");
	   $read_add=read_address($_SESSION["user"]["cus_id"]);
	  include("../app/model/home/new_products.php");
	  $erreur = false;
	  
	  $fait = (isset($_POST['fait'])? $_POST['fait']:  (isset($_GET['fait'])? $_GET['fait']:null )) ;
	  if($fait !== null)
	  {
		 if(!in_array($fait,array('ajout', 'suppression', 'refresh')))
		 $erreur=true;
	  
		 //récuperation des variables en POST ou GET
		 $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
		 $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
		 $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;
	  
		 //Suppression des espaces verticaux
		 $l = preg_replace('#\v#', '',$l);
		 //On verifie que $p soit un float
		 $p = floatval($p);
	  
		 //On traite $q qui peut etre un entier simple ou un tableau d'entier
		  
		 if (is_array($q)){
			$QteArticle = array();
			$i=0;
			foreach ($q as $contenu){
			   $QteArticle[$i++] = intval($contenu);
			}
		 }
		 else
		 $q = intval($q);
		  
	  }
	  
	  if (!$erreur){
		 switch($fait){
			Case "ajout":
			   ajouterArticle($l,$q,$p);
			   break;
	  
			Case "suppression":
			   supprimerArticle($l);
			   break;
	  
			Case "refresh" :
			   for ($i = 0 ; $i < count($QteArticle) ; $i++)
			   {
				  modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
			   }
			   break;
	  
			Default:
			   break;
		 }
	  }
	  include("../app/view/layout/header.inc.php");
	  if (isset($_GET['deletepanier=true'])) {
		  supprrimePanier();
	  }
	define("PAGE_TITLE", "Validez et Commandez | Tœshï");
	include("../app/view/checkout/index.php");