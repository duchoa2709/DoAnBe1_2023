<?php
class User extends DB{

    public function checkLogon($username, $hashedPassword)
    {
        $sql = self::$connection->prepare("SELECT * FROM user WHERE user = ? AND password = ?");
        $sql->bind_param("ss", $username, $hashedPassword);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            // Login successful
            $user = $result->fetch_object();
            return $user->role; // Return the user's role
        } else {
            // Login failed
            return false;
        }
    } 

    public function getAllAdmin ()
    {
        $sql = self::$connection->prepare("SELECT * FROM user ORDER BY 'id' DESC");
        $sql->execute(); //return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }

    public function InsertData($user , $password)
    {
        $sql = self::$connection->prepare("INSERT INTO user (user, password)
        VALUES (?,?)");
        $password = md5($password);
        $sql->bind_param("ss", $user , $password);
        $sql->execute(); //return an object
        $items = array();

        return $items; //return an array
    
    }


}