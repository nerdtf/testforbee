<?php

class Model_Portfolio extends Model
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

    public function getById($id){
        try{
            $sql = "SELECT * FROM tasks WHERE id = :id";
            $x = $this->db->prepare($sql);
            $x->bindValue('id', $id);
            $x->execute();
            return $portfolio = $x->fetch();


        }catch (Exception $e){
            echo 'Error' . $e->getMessage();
            die();
        }
    }
}