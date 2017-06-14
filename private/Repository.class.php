<?php

/**
 * Created by PhpStorm.
 * User: egidijussivickas
 * Date: 13/04/2017
 * Time: 19:12
 */


abstract class Repository
{
    /*
     *     @var PDO
     */
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return mixed
     */
    public abstract function getAll();

    /**
     * @param $item
     * @return mixed
     */
    public abstract function delete($item);

    public abstract function save($item);
    public abstract function getById($id);

}