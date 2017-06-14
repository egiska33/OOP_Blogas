<?php
/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 15/04/2017
 * Time: 12:52
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once 'database.php';
require_once 'CommentRepository.class.php';

if (strlen($_POST['author']) > 0 && strlen($_POST['comment']) > 0){

    $author = $_POST['author'];
    $comment = $_POST['comment'];
    $publicationId = $_GET['publicationId'];
}

$commentation = new Comment();

$commentation->setAuthor($author);
$commentation->setComment($comment);
$commentation->setPublicationId($publicationId);

var_dump($commentation);

$newComment = new CommentRepository($pdo);

$newComment->save($commentation);


//header('Location: index.php');
//exit;