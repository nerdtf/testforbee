<?php

/**
 * Created by PhpStorm.
 * User: Саньок
 * Date: 23.07.2018
 * Time: 14:52
 */
class Controller_User extends Controller
{

    public function __construct(){
    parent::__construct();
    $this->model = new Model_User();
    $this->view = new View();
}

    public function action_index()
{
    $this->view->generate('register.php', 'main_template.php');
}

    public function action_register(){
        $this->model->register($_POST['submit'], $_POST['login'], $_POST['password']);
        $this->view->generate('login.php', 'main_template.php');
    }

    public function action_enter(){
        $this->view->generate('login.php', 'main_template.php');
    }


    public function action_login()
    {
        if ($_POST['login'] == 'admin' && $_POST['password'] == 123) {
            $data = [];
            $data['tasks'] = $this->model->all();
            $this->view->generate('admin/panel.php', 'main_template.php', $data);
        } else {
            $data = [];
            $data['user'] = $this->model->login($_POST['submit'], $_POST['login'], $_POST['password']);
            $data['tasks'] = $this->model->all();
            $this->view->generate('homepage.php', 'main_template.php', $data);
        }
    }


}