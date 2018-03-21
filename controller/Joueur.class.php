<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 08/03/2018
 * Time: 19:07
 */
//require_once "model/Joueur.class.php";
class Joueur extends Controller
{

    public function __construct(){
        parent::__construct();
    }
    public function save()
    {
        $joueur = new Joueur();
        $joueur->setNom($_GET['nomj']);
        $joueur->setPrenom($_GET['prenomj']);
        $joueur->setIdDiscipline($_GET['disc']);
        $joueur->setIdEntraimeur($_GET['ent']);
        $res = $joueur->save();
        if($res->rowCount > 0)
        {
            echo 1;
        }
        else
        {
            echo 0 ;
        }

    }
    public function update()
    {

    }
    public function delete()
    {

    }
    public function getplayers()
    {

    }
    public function getmanagerplayer()
    {

    }
    public function add()
    {
        $listEntraineur = (new Joueur())->listEntraineur();
        $lisDisipline = (new Discipline())->listDiscipline();
        return $this->view->load("joueur/add",compact(['listEntraineur','lisDisipline ']));
    }


}