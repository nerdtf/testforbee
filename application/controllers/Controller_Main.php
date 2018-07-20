<?php


class Controller_Main extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->model = new Model_Main();
        $this->view = new View();
    }

    public function action_index(){
        $data = [];
        $data['tasks'] = $this->model->all();
        $this->view->generate('homepage.php', 'main_template.php', $data);

    }



}