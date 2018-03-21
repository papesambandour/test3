<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 08/03/2018
 * Time: 18:46
 */

class Joueur extends Model
{
    private $id ;
    private $prenom ;
    private $nom ;
    private $idEntraimeur =null;
    private $idDiscipline ;

    /**
     * Joueur.class.class.class constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function save()
    {
        $query = "INSERT INTO joueur set nom = ?, prenom = ? , id_entraineur = ?, idD = ?";
        return $this->myQuery($query,[$this->getNom(),$this->getPrenom(),$this->getIdEntraimeur(),$this->getIdDiscipline()]);
    }

    public function del()
    {
        $query = "DELECTE FROM joueur where id = ?";
        return $this->myQuery($query,[$this->getId()]);

    }
    public function updaye()
    {
        $query = "UPDATE joueur set nom = ?, prenom = ? , id_entraineur = ?, idD = ? Where id = ?";
        return $this->myQuery($query,[$this->getNom(),$this->getPrenom(),$this->getIdEntraimeur(),$this->getIdDiscipline(),$this->getId()]);

    }
    public function getEntraineur()
    {
        $query = "SELECT e.* FROM joueur j , joueur e WHERE e.id_entraineur e.id WHERE j.id = ?";
        return $this->myQuery($query,[$this->getId()]);

    }

    public function listJoueur()
    {
        $query = "SELECT * FROM joueur ";
        return $this->myQuery($query);
    }
    public  function listEntraineur()
    {
        $query = "SELECT * FROM joueur WHERE id_entraineur is NULL ";
        return $this->myQuery($query);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getIdEntraimeur()
    {
        return $this->idEntraimeur;
    }

    /**
     * @param mixed $idEntraimeur
     */
    public function setIdEntraimeur($idEntraimeur)
    {
        $this->idEntraimeur = $idEntraimeur;
    }

    /**
     * @return mixed
     */
    public function getIdDiscipline()
    {
        return $this->idDiscipline;
    }

    /**
     * @param mixed $idDiscipline
     */
    public function setIdDiscipline($idDiscipline)
    {
        $this->idDiscipline = $idDiscipline;
    }

}