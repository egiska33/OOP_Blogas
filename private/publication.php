<?php
/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 13/04/2017
 * Time: 23:20
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'database.php';
require_once 'PublicationRepository.class.php';

require_once 'header.php';

if(array_key_exists('id', $_GET)){
    $id = $_GET['id'];
}

$publication = new PublicationRepository($pdo);
$blog= $publication->getById($id);

?>
<div class="panel-body">
    <div class="media-body">
        <h4 class="media-heading">
            <?=$blog->getTitle()?>
        </h4>
        <p class="margin-top-10 margin-bottom-20">
            <?=$blog->getContent()?>
        </p>
        <a href="index.php" class="btn btn-default" >Atgal</a>
        <a href="create-comment.php?id=<?=$blog->getId()?>" class="btn btn-default">Komentuoti</a>
    </div>
</div>
<?php

require_once 'footer.php';