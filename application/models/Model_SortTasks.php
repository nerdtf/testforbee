<?php
class Model_SortTasks extends Model
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

    public function sort($field)
    {
        try {
            $sql = "SELECT * FROM tasks ORDER BY $field ASC";
            $result = $this->db->query($sql);
        } catch (Exception $e) {
            echo 'Не удалось получить данные!';
            die();
        }
        return $resultArray = $result->fetchAll();
    }

    public function get3Tasks($start, $field)
    {
        $start -= 1;
        try {
            $sql = "SELECT * FROM tasks ORDER BY $field ASC LIMIT $start ,3";
            $x = $this->db->prepare($sql);
            $x->execute();
            return $tasks = $x->fetchAll();

        } catch (Exception $e) {
            echo 'Error' . $e->getMessage();
            die();
        }
    }

}