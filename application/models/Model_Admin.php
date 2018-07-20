<?php

class Model_Admin extends Model
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

    public function getById($id){
        try{
            $sql = "SELECT * FROM tasks WHERE id = :id";
            $x = $this->db->prepare($sql);
            $x->bindValue('id', $id);
            $x->execute();
            return $task = $x->fetch();

        }catch (Exception $e){
            echo 'Error' . $e->getMessage();
            die();
        }
    }

    public function update($user_name, $email, $task_text, $status, $id, $image = ""){
        try{
            $sql = 'UPDATE tasks
            SET user_name = :user_name,
			email = :email,
			task_text = :task_text,
			image = :image,
			status = :status
			WHERE id = :id
				';
            $x = $this->db->prepare($sql);
            $x->bindValue(':user_name', $user_name);
            $x->bindValue(':email', $email);
            $x->bindValue(':task_text', $task_text);
            $x->bindValue(':image', $image);
            $x->bindValue(':status', $status);
            $x->bindValue(':id', $id);
            return $x->execute();

        }catch(Exception $e){
            echo "Error adding test data" . $e->getMessage();
        }
    }

}