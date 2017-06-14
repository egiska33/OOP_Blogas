<?php
/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 14/04/2017
 * Time: 18:35
 */

require_once 'header.php';


$pubicationId= $_GET['id'];
?>

    <form action="store-comment.php?publicationId=<?=$pubicationId?>" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput2">Author</label>
            <input type="text" class="form-control" name="author" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleTextarea">Comment</label>
            <textarea class="form-control" name="comment" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php
require_once 'footer.php';