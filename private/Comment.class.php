<?php

/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 13/04/2017
 * Time: 19:12
 */
class Comment
{
    private $id;
    private $author;
    private $comment;
    private $publicationId;


    /**
     * @param $id
     */
    public function setId($id){
        $this->id =$id;
    }

    /**
     * @return mixed
     */
    public function getId(){

        return $this->id;
    }

    /**
     * @param $publicationId
     * @internal param $publication
     */
    public function setPublicationId($publicationId){

        $this->publicationId = $publicationId;
    }

    /**
     * @return mixed
     */
    public function getPublicationId(){

        return  $this->publicationId;
    }

    /**
     * @param $author
     */
    public function setAuthor($author){

        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthor(){

        return $this->author;
    }

    /**
     * @param $comment
     * @internal param $content
     */
    public function setComment($comment) {

        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getComment(){

        return $this->comment;
    }
}