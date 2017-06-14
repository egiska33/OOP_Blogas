<?php

/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 13/04/2017
 * Time: 19:13
 */
if(! class_exists('Repository')){
    require_once 'Repository.class.php';
}

if(! class_exists('Publication')){
    require_once 'Publication.class.php';
}

class PublicationRepository extends Repository
{


    /**
     * @return array
     */
    public function getAll(){

        $return =[];
        $query = $this->pdo->query("SELECT * FROM publications");
        $result = $query->fetchAll();
        foreach ($result as $item) {

            $publication = new Publication();
            $publication-> setId($item['id']) ;
            $publication-> setTitle($item['title']) ;
            $publication->setContent($item['content']);

            $return[] = $publication;

        }

        return $return;
    }


    /**
     * @param $id
     * @return array
     */
    public function getById($id){

        $query = $this->pdo->prepare("SELECT * FROM publications WHERE id = :id ");
        $query->execute(['id' => $id]);
        $result = $query->fetch();


        $publication = new Publication();
        $publication-> setId($result['id']) ;
        $publication-> setTitle($result['title'])  ;
        $publication-> setContent($result['content']) ;



        return $publication;
    }

    /**
     * @param $item
     */
    public function delete($item)
    {
        // TODO: Implement delete() method.
    }


    /**
     * @param $item
     */
    public function save($item)
    {
        $query = $this->pdo->prepare("INSERT INTO publications SET title = :title, content = :content");
        $query->execute([
            'title' => $item->getTitle(),
            'content' => $item->getContent()
        ]);
//        $lastInsertId = $this->pdo
    }
}