<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=store;charset=utf8', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // PDO::FETCH_OBJ
        ]);
        return $db;
    } catch (Exception $e) {
        return die('Erreur MySQL : ' . $e->getMessage());
    }
}