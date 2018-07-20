<?php
class Model{
    public $db;
    public function __construct(){
       try{
           $this->db = new PDO('mysql:host=localhost;dbname=task',
               'task_user' , '123456789');
           $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $this->db->exec('SET NAMES "utf8"');
        }catch(Exception $e){
            echo 'Не удалось подключиться к бд';
            die();
        }
    }
    public function get_data(){

    }
}