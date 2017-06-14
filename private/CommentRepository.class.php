<?php

/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 13/04/2017
 * Time: 19:14
 */

if(! class_exists('Repository')){
    require_once 'Repository.class.php';
}

if(! class_exists('Comment')){
    require_once 'Comment.class.php';
}
class CommentRepository extends Repository
{

    public function  getByPublication(Publication $publication){

    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    /**
     * @param $item
     * @return mixed
     */
    public function delete($item)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $comment
     * @internal param $item
     */
    public function save($comment)
    {
        $query = $this->pdo->prepare("INSERT INTO comments SET publicationId = :pulicationId, author = :author, comment = :comment");
        $query->execute([
            'comment' => $comment->getComment(),
            'publicationId' =>$comment->getPublicationId(),
            'author' => $comment->getAuthor()
        ]);
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }
}