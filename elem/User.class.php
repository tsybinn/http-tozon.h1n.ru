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
            //$sql = "SELECT * FROM msgs WHERE name='vasy' AND password=555";
            // $db->query($sql);


            echo "db connect";


//    $sql = "SELECT * FROM msgs WHERE name='vasy' AND password=555";
//    $stmt = $db->query($sql);
//    $row_count = $stmt->rowCount();
            //echo $row_count.' rows selected';
            //Установка fetch mode
            //$row = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            //var_dump($row);
            // $sql = '';
            //$db->exec($sql);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }


    /**
     * @param $login
     * @param $email
     * @param $password
     */
    public function singUp($login, $email, $password)
    {

        $date = time();
        $status = 0;

//        $sql = "INSERT INTO users (login,email,password,date,status) VALUES (
//                '$login',
//                '$email',
//                '$password',
//                 $date,
//                 $date
//                      )";




            //$sql = "SELECT * FROM msgs WHERE name='vasy' AND password=555";
            // $db->query($sql);
            //$row_count = $stmt->rowCount();

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