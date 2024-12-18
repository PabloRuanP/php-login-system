<?php 

require_once '../Models/UserModel.php';

class LoginController {

    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
        
    }

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user_name = trim($_POST['user_name']);
            $passwd = trim($_POST['passwd']);

            $user = $this->userModel->getUserByUserName($user_name);

            if ($user && password_verify($passwd, $user['passwd'])) {
                $_SESSION['user'] = $user;
                header('Location: ../View/Dashboard.php');
                exit();
            } else {
                $_SESSION['response'] = [
                    'success' => false,
                    'message' => 'Invalid username or password!'

                ];
                header('Location: ../View/home.php');
                exit();
            }
            
        }
    }
}
$access = new LoginController();
$access->login();
?>