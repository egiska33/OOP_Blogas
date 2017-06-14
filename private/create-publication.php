<?php
/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 13/04/2017
 * Time: 23:59
 */

require_once 'header.php';



?>

<form action="store-publication.php" method="post">
    <div class="form-group">
        <label for="formGroupExampleInput2">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Content</label>
        <textarea class="form-control" name="content" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
require_once 'footer.php';