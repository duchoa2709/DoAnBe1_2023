<?php
class Product extends DB{
    
public function getAllProducts()
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getAllProductsLimit($x , $y)
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC limit ?  offset ? ");
    $sql->bind_param("ii", $x , $y);
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}
public function getAllProductsById($id)
{
    $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
    $sql->bind_param("i", $id);
    $sql->execute(); //return an object
    $items = $sql->get_result()->fetch_object();
    return $items;
}

public function getAllProductslimit4()
{
    $sql = self::$connection->prepare("SELECT * FROM products ORDER BY 'id' DESC limit 4");
    $sql->execute(); //return an object
    $items = array();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items; //return an array
}


public function countProducts()
{
    $sql = self::$connection->prepare("SELECT count(id) as number from products");
    $sql->execute();
    $result = $sql->get_result()->fetch_assoc();
    return $result['number']; // trả về một giá trị duy nhất
}

public function searchAndPagination($keyword,$x , $y)
{
    $keyword = '%' . $keyword . '%';
    $sql = self::$connection->prepare("SELECT * FROM products WHERE name LIKE ? ORDER BY id DESC limit ?  offset ?");
    $sql->bind_param("sii", $keyword , $x , $y);
    $sql->execute();
    $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    return $items;
}

public function countProductsSearch($keyword)
{
    $sql = self::$connection->prepare("SELECT count(id) as number FROM products WHERE name LIKE ?");
    $keyword = '%' . $keyword . '%';
    $sql->bind_param("s", $keyword);
    $sql->execute();
    $result = $sql->get_result()->fetch_assoc();
    return $result['number']; // trả về một giá trị duy nhất
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
    $sql = self::$connection->prepare("DELETE FROM products WHERE id = ?");
    $sql->bind_param("i", $x);
    
    // Execute the statement
    if ($sql->execute()) {
        // Successful deletion
        $sql->close();  // Close the statement
        return true;
    } else {
        // Error occurred
        error_log("Error deleting product: " . $sql->error);
        $sql->close();  // Close the statement
        return false;
    }
}


public function insertProducts($name, $manu_id, $type_id, $price, $image, $description, $feature, $created_at)
{
    $sql = self::$connection->prepare("INSERT INTO products (name, manu_id, type_id, price, image, description, feature, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("siiissss", $name, $manu_id, $type_id, $price, $image, $description, $feature, $created_at);

    // Thực hiện câu lệnh và kiểm tra kết quả
    if ($sql->execute()) {
        // Thành công
        return true;
    } else {
        // Xử lý lỗi
        error_log("Error inserting product: " . $sql->error);
        return false;
    }
}


public function updateProducts($id , $name , $manu_id , $type_id , $price , $image , $description , $feature , $created_at )
{  
    $sql = self::$connection->prepare("update products  set name = ? ,  manu_id = ? , type_id = ? , price = ? , image = ? , description = ? , feature = ? , created_at = ?  where id = ? ");
    $sql->bind_param("siiissisi" , $name , $manu_id , $type_id, $price , $image, $description , $feature, $created_at ,  $id );
    // Thực hiện câu lệnh và kiểm tra kết quả
    if ($sql->execute()) {
        // Thành công
        return true;
    } else {
        // Xử lý lỗi
        error_log("Error inserting product: " . $sql->error);
        return false;
    }
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
    $sql = self::$connection->prepare(" insert into detail_product (id_detail , name_product , qty_product , price_product )
    values(?, ? , ? , ? );");
    $sql->bind_param("isii" , $id_detail ,  $name , $price , $qty  );
    $sql->execute(); //return an object
}

}
?>