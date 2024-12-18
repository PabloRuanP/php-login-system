<?php 

require_once '../../Core/Connection.php';

class Model extends Connection {


    public function __contruct() {
        parent::__contruct();
    }


    public function setUser($first_name, $last_name, $user_name, $email, $passwd) {
        $sql = "INSERT INTO tb_customers (first_name, last_name,user_name, email, passwd, register, access_level, active) VALUE (:first_name, :last_name, :user_name, :email, :passwd, :register, :access_level, :active)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':first_name', $first_name);
        $stmt->bindValue(':last_name', $last_name);
        $stmt->bindValue(':user_name', $user_name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':passwd', password_hash($passwd,PASSWORD_DEFAULT));
        $stmt->bindValue(':register', date('Y-m-d H:i:s'));
        $stmt->bindValue(':access_level', 1, PDO::PARAM_INT);
        $stmt->bindValue(':active', 1, PDO::PARAM_INT);

        if ($stmt->execute() == true) {
            return true;
        } else {
            return false;
        }
        
    }

    public function existsUser($user_name, $email) {
        $sql = "SELECT COUNT(*) as count FROM tb_customers WHERE user_name = ? OR email = ?";
        $query = $this->pdo->prepare($sql);
        $query->execute([
            $user_name,
            $email
        ]);

        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result['count'] > 0;

    }

    public function getUserByUserName($user_name) {
        $sql = "SELECT * FROM tb_customers WHERE user_name = :user_name LIMIT 1";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':user_name', $user_name, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        return false;
    }

}
?>