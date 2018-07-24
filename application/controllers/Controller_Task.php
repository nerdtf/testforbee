<?php

class Controller_Task extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->model = new Model_Task();
        $this->view = new View();
    }

    public function action_index()
    {
        $data = [];
        $data['tasks'] = $this->model->all();
        $this->view->generate('tasks/index.php', 'main_template.php', $data);
    }

    public function action_show($start){
        $data['tasks'] = $this->model->get3Tasks($start);
        $this->view->generate('tasks/show.php', 'main_template.php', $data);
    }
    public function action_create(){
        $this->view->generate('tasks/create.php', 'main_template.php');
    }

    public function action_store(){

        

        if(!isset($_POST['user_name'])){
            die('Oops');           
        }
        
        $image = $_FILES['image']['name'];
        $tmp_name =$_FILES['image']['tmp_name'];
       move_uploaded_file($tmp_name, '/images');

        
        
        $this->model->store($_POST['user_name'], $_POST['email'], $_POST['task_text'], $image);
        $data = [];
        $data['tasks'] = $this->model->all();
        $this->view->generate('homepage.php', 'main_template.php', $data);
    }


}