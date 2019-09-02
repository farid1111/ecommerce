<?php
	try {
		$query= "SELECT *
					FROM st_products
                    ORDER BY pro_date DESC
                    LIMIT 3";
		$req = $pdo->query($query);
		$req->setFetchMode(PDO::FETCH_ASSOC);
		$data = $req->fetchAll();
		//var_dump($data);
		$req->closeCursor();
	 }catch (Exception $e) {
		die("Erreur MySQL :". utf8_encode($e->getMessage()));
	}