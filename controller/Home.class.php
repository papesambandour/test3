<?php
/**
 * Created by PhpStorm.
 * User: macintosh
 * Date: 08/03/2018
 * Time: 18:53
 */

class Home extends Controller
{
    public function __construct(){
        parent::__construct();
    }
    //methode ou url
    public function index(){
        $title = "Home";
        $this->view->tpl->assign("listj",["nom"=>"Pape","prenom"=>"ndour"]);
        return $this->view->load("default",compact('title'));

    }
}