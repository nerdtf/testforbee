<?php

class Controller_Articles extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->model = new Model_Articles();
        $this->view = new View();
    }

    public function action_index()
    {

        $data = [];
        $data['works'] = $this->model->all();


        $this->view->generate('articles/index.php', 'main_template.php', $data);
    }

    public function action_show($id){
        $data['works'] = $this->model->getById($id);
        $this->view->generate('articles/show.php', 'main_template.php', $data);
    }
}