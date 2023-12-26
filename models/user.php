<?php
class User extends DB{

    public function checkLogon($user, $password)
{
    $sql = self::$connection->prepare("SELECT * FROM user WHERE user = ?");
    $sql->bind_param("s", $user);
    $sql->execute();
    $result = $sql->get_result();
    

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $storedHashedPassword = trim($row['password']); // Trim leading/trailing spaces
        $enteredPassword = trim($password); // Trim leading/trailing spaces

        // Debugging
        // echo "Stored hashed password: $storedHashedPassword<br>";
        // echo "Entered password: $enteredPassword<br>";

        if (password_verify($enteredPassword, $storedHashedPassword)) {
            // Login successful
            $roles = $row['roles'];
            var_dump($storedHashedPassword, $enteredPassword);

            // Debugging
            // echo "Login successful<br>";

            return $roles;
        } else {
            // Debugging
            // echo "Password verification failed<br>";
        }
    }

    // Login failed
    return false;
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