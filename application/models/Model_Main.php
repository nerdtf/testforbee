<?php

class Model_Main extends Model
{
    public function all()
    {
        try{
            $sql = 'SELECT * from tasks';
            $result=$this->db->query($sql);
        }catch(Exception $e){
            echo 'Не удалось получить данные!';
            die();
        }
        return $resultArray = $result->fetchAll();
    }



}