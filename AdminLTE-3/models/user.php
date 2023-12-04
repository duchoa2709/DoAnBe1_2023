<?php
class User extends DB{


public function checkLogon($user , $password)
{
    $sql = self::$connection->prepare("select * from user where user = ? and password = ? ");
    $password = md5($password);
    $sql->bind_param("ss", $user , $password );
    $sql->execute(); //return an object
    $items = array();
    $items =$sql->get_result()->num_rows;
    if($items == 1){
    
    return true;
    }
    
    
    return faLse;   

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