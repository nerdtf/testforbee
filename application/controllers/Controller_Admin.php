<?php

class Controller_Admin extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->model = new Model_Admin();
        $this->view = new View();
    }

    public function action_index()
    {
        $this->view->generate('admin/index.php', 'main_template.php');
    }

    public function action_login(){
        if ($_POST['login'] == 'admin' && $_POST['password'] == 123){
            $data = [];
            $data['tasks'] = $this->model->all();
            $this->view->generate('admin/panel.php', 'main_template.php',$data);
        }
        else{
            return die('Wrong Login or Password');
        }
    }

    public function action_edit($id){
        $data['task'] = $this->model->getById($id);
        $this->view->generate('admin/edit.php', 'main_template.php', $data);
    }

    public function action_update(){

        $this->model->update($_POST['user_name'], $_POST['email'], $_POST['task_text'], $_POST['status'], $_POST['id']);
        $data = [];
        $data['tasks'] = $this->model->all();
        $this->view->generate('admin/panel.php', 'main_template.php', $data);
        

    }
}