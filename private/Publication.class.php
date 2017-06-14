<?php

/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 13/04/2017
 * Time: 19:11
 */
class Publication
{

    private $id;
    private $title;
    private $content;
    private $comments=[];


    /**
     * @param $id
     */
    public function setId($id){
        $this->id = $id;
    }

    public function getId(){

        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle(){

        return $this->title;
    }

    /**
     * @param $title
     */
    public function setTitle($title){

        $this->title = $title;
    }

    /**
     * @param $content
     */
    public function setContent($content){

        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent(){

        return $this->content;
    }

    /**
     * @return array
     */
    public function getComments(){

        return $this->comments;
    }

    /**
     * @param $comments
     */
    public function setComments($comments){

        $this->comments = $comments;
    }
}