<?php
require_once "Interface/Iuser.php";
class User implements Iuser
{
     private $db = null;

    function __construct()
    {

        $host = "localHost";
        $dbname = "gbook";
        $user = "root";
        $password = "";

        try {

             $this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $this->db->exec("set names utf8");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public function singUp($login, $email, $password)
    {

        $date = time();
        $status = 0;

            try {
                $sql = "SELECT * FROM users WHERE login = '$login' AND password='$password'";
                $user = $this->db->query($sql);
                $userCount = $user->rowCount();
        } catch (PDOException $e) {
                echo 'Error : ' . $e->getMessage();
                exit();
            }

            if ( $userCount == 0){

                try {
                    $stmt = $this->db->prepare("INSERT INTO users (login,email,password,date,status) VALUES (?,?,?,?,?)");
                   return $stmt->execute(array(
                        $login,
                        $email,
                        $password,
                        $date,
                        $status));
                    }catch (PDOException $e) {
                    echo 'Error : ' . $e->getMessage();
        }
        }
    }
    function singIn($login,$password){
        try {
            $sql = "SELECT * FROM users WHERE login = '$login' AND password='$password'";
            $stm = $this->db->prepare($sql);
            $stm->execute();
            $user = $stm->fetch(PDO::FETCH_ASSOC);
            var_dump($user);
            $_SESSION['auth'] = true;
            $_SESSION['login'] = $user['login'];
            return $user;
        } catch (PDOException $e) {
            echo 'Error : ' . $e->getMessage();
            exit();
        }
    }

    public function clear($value)
    {


        $value = trim($value);
        $value = htmlspecialchars($value);
        $value = strip_tags($value);


        return $value;
    }

    public function clearInt($data)
    {
        return abs((int)$data);
    }
}