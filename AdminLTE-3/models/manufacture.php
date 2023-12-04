<?php
class Manufacture extends DB{
    public function getAllmanufacture ()
{
$sql = self::$connection->prepare("SELECT * FROM manufactures ORDER BY 'id' DESC");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}
public function getAllmanufacturebyid ($manu_id)
{
$sql = self::$connection->prepare("SELECT * FROM manufactures WHERE manu_id = ?");
$sql->bind_param("i", $manu_id);
$sql->execute(); //return an object
    $items = $sql->get_result()->fetch_object();
    return $items;
}
public function insertManufacture($manu_name )
{
    
    //insert into products values("toan" , 1 , 1, 34324 , "But.jpg","dsfsdf" , 1 , "2022-10-26 05:50:59");
    $sql = self::$connection->prepare("insert into manufactures (manu_name ) values(?)");
    $sql->bind_param("s" , $manu_name  );
    $sql->execute(); //return an object
  
}

public function deleteManufacture($manu_id)
{
    $sql = self::$connection->prepare("delete  FROM manufactures  where  manu_id = ? ");
    $sql->bind_param("i", $manu_id );
    $sql->execute(); //return an object

}

public function updateManufacture($manu_id , $manu_name)
{  
   
    //insert into products values("toan" , 1 , 1, 34324 , "But.jpg","dsfsdf" , 1 , "2022-10-26 05:50:59");
    $sql = self::$connection->prepare("update manufactures  set manu_name = ?   where manu_id = ? ");
    $sql->bind_param("si" , $manu_name , $manu_id );
    $sql->execute(); //return an object
     
}

public function countManufacture()
{
    $sql = self::$connection->prepare("SELECT count(manu_id) as number from manufactures");
    $sql->execute(); 
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}




}
?>