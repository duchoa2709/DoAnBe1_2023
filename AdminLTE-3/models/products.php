<?php
class Product extends DB{
    
public function getAllProducts ()
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY 'id' DESC");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getAllProductsLimit($x , $y)
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY 'id' DESC  limit ?  offset ? ");
    $sql->bind_param("ii", $x , $y);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getAllProductsById ($id)
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute(); //return an object
    $items = $sql->get_result()->fetch_object();
    return $items;
}

public function getAllProductslimit4 ()
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY 'id' DESC limit 4");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function search($keyword)
{
    $sql = self::$connection->prepare("SELECT * FROM products  where description  like %?%" );
    $sql->bind_param("s",$keyword);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function countProducts()
{
    $sql = self::$connection->prepare("SELECT count(id) as number from products");
    $sql->execute(); 
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}

public function paginationProducts($x ,$y )
{
    $sql = self::$connection->prepare("SELECT * FROM products  limit 8  offset ?  ");
    $sql->bind_param("is", $x , $y);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function deleteProducts($x)
{
    $sql = self::$connection->prepare("delete  FROM products  where  id = ? ");
    $sql->bind_param("i", $x );
    $sql->execute(); //return an object

}

public function insertProducts ($name , $manu_id , $type_id , $price , $image , $description , $feature , $created_at )
{
    
    //insert into products values("toan" , 1 , 1, 34324 , "But.jpg","dsfsdf" , 1 , "2022-10-26 05:50:59");
    $sql = self::$connection->prepare("insert into products (name , manu_id ,type_id , price , image ,description ,feature,created_at  ) values(? , ? , ?, ? , ?,? , ? , ?)");
    $sql->bind_param("siiissis" , $name , $manu_id , $type_id , $price , $image , $description , $feature , $created_at );
    $sql->execute(); //return an object
  
   
}

public function updateProducts ($id , $name , $manu_id , $type_id , $price , $image , $description , $feature , $created_at )
{   
   
    //insert into products values("toan" , 1 , 1, 34324 , "But.jpg","dsfsdf" , 1 , "2022-10-26 05:50:59");
    $sql = self::$connection->prepare("update products  set name = ? ,  manu_id = ? , type_id = ? , price = ? , image = ? , description = ? , feature = ? , created_at = ?  where id = ? ");
    $sql->bind_param("siiissisi" , $name , $manu_id , $type_id, $price , $image, $description , $feature, $created_at ,  $id );
    $sql->execute(); //return an object
    
   
   
}

public function insertUsersOrder ($name_user , $tel_user , $email_user , $address_user )
{
    
    //insert into products values("toan" , 1 , 1, 34324 , "But.jpg","dsfsdf" , 1 , "2022-10-26 05:50:59");
    $sql = self::$connection->prepare(" insert into order_product (name_user , tel_user , email_user , address_user)
    values( ? , ? , ? , ?);");
    $sql->bind_param("ssss" , $name_user , $tel_user , $email_user , $address_user  );
    $sql->execute(); //return an object
  
   
}

public function insertProductOrder ($id_detail ,$name , $price , $qty )
{
    
    //insert into products values("toan" , 1 , 1, 34324 , "But.jpg","dsfsdf" , 1 , "2022-10-26 05:50:59");
    $sql = self::$connection->prepare(" insert into detail_product (id_detail , name_product , qty_product , price_product )
    values(?, ? , ? , ? );");
    $sql->bind_param("isii" , $id_detail ,  $name , $price , $qty  );
    $sql->execute(); //return an object
  
   
}







}
?>