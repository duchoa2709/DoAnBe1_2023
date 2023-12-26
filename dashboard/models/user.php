<?php
class User extends DB{


    public function checkLogon($user, $password)
    {
        // Chuẩn bị một câu lệnh SQL để chọn bản ghi từ bảng 'user' với điều kiện là username và password phải trùng với các tham số được cung cấp
        $sql = self::$connection->prepare("SELECT * FROM user WHERE user = ? AND password = ?");
        
        // Mã hóa mật khẩu bằng thuật toán MD5
        $password = md5($password);
        
        // Liên kết các tham số với câu lệnh chuẩn bị
        $sql->bind_param("ss", $user, $password);
        
        // Thực hiện câu lệnh chuẩn bị
        $sql->execute();
        
        // Lấy tập kết quả và đếm số dòng
        $result = $sql->get_result();
        $items = $result->num_rows;
        
        // Kiểm tra nếu có đúng một bản ghi trùng khớp
        if ($items == 1) {
            // Lấy thông tin người dùng từ kết quả
            $user_data = $result->fetch_assoc();
    
            // Kiểm tra vai trò của người dùng
            if ($user_data['role'] == 1) {
                // Nếu vai trò là 1, đăng nhập thành công với quyền admin
                return 'admin';
            } else {
                // Nếu vai trò là 0, đăng nhập thành công với quyền trang chủ
                return 'home';
            }
        }
        
        // Nếu không có đúng một bản ghi trùng khớp, trả về false (xác thực thất bại)
        return false;
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