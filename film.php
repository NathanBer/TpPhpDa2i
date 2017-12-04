<?php
/**
 * Created by PhpStorm.
 * User: b14010226
 * Date: 14/11/17
 * Time: 08:40
 */
require_once "connexion.php";
require_once "getblock.php";
$id=$_GET['idfilm'];
$requete="SELECT * FROM Film WHERE IDF='".$id."'";
