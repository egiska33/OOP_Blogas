<?php
/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 13/04/2017
 * Time: 21:02
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once  'database.php';
require_once  'PublicationRepository.class.php';

require_once 'header.php';
?>

<!-- Begin fluid width widget -->
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="glyphicon glyphicon-list-alt"></span>  Recent Posts
        </h3>
    </div>
    <div class="panel-body">
        <?php
        $publication = new PublicationRepository($pdo);

        $blogs = $publication->getAll();

        foreach ($blogs as $blog) {
        ?>
        <ul class="media-list">
            <li class="media">
                <div class="media-body">
                    <h4 class="media-heading">
                        <a href="publication.php?id=<?=$blog->getId()?>" class="text-info">
         <?php
                         echo $blog->getTitle();
         ?>
                        </a>
                    </h4>
                    <p class="margin-top-10 margin-bottom-20">
          <?php
                        echo substr($blog->getContent(), 0, 100);
          ?>
                    </p>
                </div>
            </li>
        </ul>
        <?php

        }

        ?>





        <a href="create-publication.php" class="btn btn-default btn-block">New Blog Posts »</a>
    </div>
</div>
<!-- End fluid width widget -->

<?php

require_once 'footer.php';



