<?php

class Controller_SortTasks extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->model = new Model_SortTasks();
        $this->view = new View();
    }

    public function action_index()
    {
        $data = [];
        $data['tasks'] = $this->model->all();
        $data['tasks'] = array_values($this->model->sort('user_name'));

        $this->view->generate('tasks/sortTasks/index.php', 'main_template.php', $data);
    }

    public function action_show($start){
        
        $data['tasks'] = array_values($this->model->sort('user_name'));
        for ($i = $start; $i<=$start+2; $i++){
            $data['sortTasks'][] = $data['tasks'][$i];
        }
        $this->view->generate('tasks/sortTasks/show.php', 'main_template.php', $data);
    }


}