<?php
/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 14/04/2017
 * Time: 00:19
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once 'database.php';
require_once 'PublicationRepository.class.php';

if (strlen($_POST['title']) > 0 && strlen($_POST['content']) > 0){

    $title = $_POST['title'];
    $content = $_POST['content'];

}

$publication = new Publication();

$publication->setTitle($title);
$publication->setContent($content);

//var_dump($publication);
$newblog = new PublicationRepository($pdo);

$newblog->save($publication);





header('Location: index.php');
exit;