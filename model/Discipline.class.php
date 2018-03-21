<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 08/03/2018
 * Time: 19:01
 */

class Discipline extends Model
{
    private $idD;
    private $libD;

    /**
     * Discipline.class.class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function save()
    {
        $query = "INSERT INTO discipline set libD = ?";
        return $this->myQuery($query,[$this->getLibD()]);
    }

    public function del()
    {
        $query = "DELECTE FROM discipline where id = ?";
        return $this->myQuery($query,[$this->getIdD()]);

    }

    /**
     * @return PDOStatement
     */
    public function updaye()
    {
        $query = "UPDATE discipline set libD  Where idD = ?";
        return $this->myQuery($query,[$this->getLibD(),$this->getIdD()]);

    }


    public  function listDiscipline()
    {
        $query = "SELECT * FROM discipline ";
        return $this->myQuery($query);
    }

    /**
     * @return mixed
     */
    public function getIdD()
    {
        return $this->idD;
    }

    /**
     * @param mixed $idD
     */
    public function setIdD($idD)
    {
        $this->idD = $idD;
    }

    /**
     * @return mixed
     */
    public function getLibD()
    {
        return $this->libD;
    }

    /**
     * @param mixed $libD
     */
    public function setLibD($libD)
    {
        $this->libD = $libD;
    }

}