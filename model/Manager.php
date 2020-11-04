<?php
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}