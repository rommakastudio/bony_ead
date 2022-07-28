<?php
class homeController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();

        $alunos = new Alunos();       

        if(!$alunos->isLogged()) {
            header("Location: ".BASE_URL."login");           
        
        }
        
    }

    public function index() {
        $dados = array();

        $this->loadTemplate("home", $dados);
    }

}