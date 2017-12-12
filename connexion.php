<?php
/**
 * Created by PhpStorm.
 * User: b14010226
 * Date: 13/11/17
 * Time: 11:35
 */
ini_set('error_reporting', '-1'); // '-1' : toutes les erreurs possibles
ini_set('display_errors', 'on');
ini_set('log_errors', 'on');
ini_set('error_log', '/path/to/log/php.log');

global $link;

$link = mysqli_connect('mysql-nathberoux.alwaysdata.net', '146914', 'azerty')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
mysqli_select_db($link, 'nathberoux_siteweb')
or die ('Erreur de sélection de la BD : ' . mysqli_error($link));
mysqli_set_charset($link, 'utf8');
