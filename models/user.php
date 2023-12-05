<?php
class User extends DB{

    public function checkLogon($user , $password)
    {
        $sql = self::$connection->prepare("SELECT * FROM user WHERE user = ? AND password = ?");
        $password = md5($password);
        $sql->bind_param("ss", $user, $password);
        $sql->execute(); // Thực thi câu truy vấn
        $result = $sql->get_result();

        if ($result->num_rows == 1) {
            // Đăng nhập thành công
            $row = $result->fetch_assoc( q); // Lấy dòng dữ liệu
            $roles = $row['roles']; // Lấy giá trị của trường 'roles'
            
            return $roles;
        } else {
            // Đăng nhập thất bại
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