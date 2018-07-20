<?php

class Controller_Portfolio extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }

    public function action_index()
    {

        $data = [];
        $data['works'] = $this->model->all();
        $this->view->generate('portfolio/index.php', 'main_template.php', $data);
    }
    
    public function action_show($id){
        $data['work'] = $this->model->getById($id);
        $this->view->generate('portfolio/show.php', 'main_template.php', $data);
    }
}