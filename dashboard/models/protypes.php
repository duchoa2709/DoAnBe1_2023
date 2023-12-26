<?php
class Protypes extends DB{

public function getAllprotypes ()
{
$sql = self::$connection->prepare("SELECT * FROM protypes ORDER BY type_id DESC");
$sql->execute(); //return an object
$items = array();
$items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
return $items; //return an array
}

public function getAllprototypesById($type_id)
{
$sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_id = ?");
$sql->bind_param("i", $type_id);
$sql->execute(); //return an object
$items = $sql->get_result()->fetch_object();
return $items;
}

public function deleteProtypes($type_id)
{
    $sql = self::$connection->prepare("delete FROM protypes where type_id = ? ");
    $sql->bind_param("i", $type_id );
    $sql->execute(); //return an object
}

public function updateProtypes($type_id , $type_name)
{   
    //insert into products values("toan" , 1 , 1, 34324 , "But.jpg","dsfsdf" , 1 , "2022-10-26 05:50:59");
    $sql = self::$connection->prepare("update protypes set type_name = ? where type_id = ? ");
    $sql->bind_param("si" , $type_name , $type_id );
    $sql->execute(); //return an object
}

public function insertProtypes($type_name )
{
    //insert into products values("toan" , 1 , 1, 34324 , "But.jpg","dsfsdf" , 1 , "2022-10-26 05:50:59");
    $sql = self::$connection->prepare("insert into protypes (type_name ) values(?)");
    $sql->bind_param("s" , $type_name  );
    $sql->execute(); //return an object
}

public function countProtypes()
{
    $sql = self::$connection->prepare("SELECT count(type_id) as number from protypes");
    $sql->execute(); 
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function getAllProtypesLimit($x , $y)
{
    $sql = self::$connection->prepare("SELECT * FROM protypes ORDER BY type_id DESC  limit ?  offset ? ");
    $sql->bind_param("ii", $x , $y);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function searchAndPaginationProtypes($keyword,$x , $y){
    $keyword = '%' . $keyword . '%';
    $sql = self::$connection->prepare("SELECT * FROM protypes WHERE type_name LIKE ? ORDER BY type_id DESC limit ?  offset ?");
    $sql->bind_param("sii", $keyword , $x , $y);
    $sql->execute();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;
}

public function countProtypesSearch($keyword)
{
    $sql = self::$connection->prepare("SELECT count(type_id) as number FROM protypes WHERE type_name LIKE ?");
    $keyword = '%' . $keyword . '%';
    $sql->bind_param("s", $keyword);
    $sql->execute();
    $result = $sql->get_result()->fetch_assoc();
    return $result['number']; // trả về một giá trị duy nhất
}
}
?>