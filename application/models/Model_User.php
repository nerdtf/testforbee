<?php



class Model_User extends Model
{
    public function register($submit, $login, $password){
        if(isset($submit))
        {
            $err = [];

            if(!preg_match("/^[a-zA-Z0-9]+$/",$login))
            {
                $err[] = "Логин может состоять только из букв английского алфавита и цифр";
            }
            if(strlen($login) < 3 or strlen($login) > 30)
            {
                $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
            }


            if(count($err) == 0)
            {

                $user_login = $login;
                $user_password = md5(md5(trim($password)));

                $sql = 'INSERT INTO users SET
            user_login = :user_login,
            user_password = :user_password
    ';
                $x = $this->db->prepare($sql);

                $x->bindValue(':user_login', $user_login);
                $x->bindValue(':user_password', $user_password);
                $x->execute();

            }
            else
            {
                print "<b>При регистрации произошли следующие ошибки:</b><br>";
                foreach($err AS $error)
                {
                    print $error."<br>";
                }
            }
        }
    }

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

    public function login($submit, $login, $password){
        if(isset($submit))
        {
            $user_login = $login;
            $sql = "SELECT * FROM users WHERE user_login = :user_login";
            $x = $this->db->prepare($sql);
            $x->bindValue(':user_login', $user_login);
            $x->execute();
            $data = $x->fetch();

            if($data['user_password'] === md5(md5($password)))
            {
                setcookie("id", $data['user_id'], time()+60*60*24*30);
                return $data;
            }
            else
            {
                print "Вы ввели неправильный логин/пароль";
            }


        }
    }
}