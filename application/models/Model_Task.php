<?php

class Model_Task extends Model
{
    public function all()
    {
        try {
            $sql = 'SELECT * from tasks';
            $result = $this->db->query($sql);
        } catch (Exception $e) {
            echo 'Не удалось получить данные!';
            die();
        }
        return $resultArray = $result->fetchAll();
    }


    public function get3Tasks($start)
    {
        $start -= 1;
        try {
            $sql = "SELECT * FROM tasks LIMIT $start ,3";
            $x = $this->db->prepare($sql);
            $x->execute();
            return $tasks = $x->fetchAll();

        } catch (Exception $e) {
            echo 'Error' . $e->getMessage();
            die();
        }
    }

    public function store($user_name, $email, $task_text, $image = ""){
        try{
            $sql = 'INSERT INTO tasks SET
			user_name = :user_name,
			email = :email,
			task_text = :task_text,
			image = :image,
			status = :status	';
            $x = $this->db->prepare($sql);
            $x->bindValue(':user_name', $user_name);
            $x->bindValue(':email', $email);
            $x->bindValue(':task_text', $task_text);
            $x->bindValue(':image', $image);
            $x->bindValue(':status', '');

            return $x->execute();

        }catch(Exception $e){
            echo "Error adding test data" . $e->getMessage();
        }
    }


}