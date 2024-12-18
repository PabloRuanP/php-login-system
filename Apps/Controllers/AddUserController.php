<?php 

require_once '../Models/UserModel.php';

class AddUserController {

    private $addUser;

    public function __construct() {

        $this->addUser = new UserModel();
        $this->addUser();
    }


    private function addUser() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $first_name = trim($_POST['first_name']);
            $last_name = trim($_POST['last_name']);
            $user_name = iconv('UTF-8', 'ASCII//TRANSLIT', mb_strtolower(trim($_POST['user_name'])));
            $email = trim($_POST['email']);
            $passwd = trim($_POST['passwd']);

            if ($this->addUser->existsUser($user_name, $email)) {
                $_SESSION['response'] = [
                    'success' => false,
                    'message' => "The user is already registered!"
                ];
                header('Location: ../view/createAcc.php');
                exit();
            }

            $this->addUser->setFirstName($first_name);
            $this->addUser->setLastName($last_name);
            $this->addUser->setUserName($user_name);
            $this->addUser->setEmail($email);
            $this->addUser->setPasswd($passwd);

            $result = $this->addUser->addUser();

            if ($result >= 1) {
                $_SESSION['response'] = [
                    'success' => true,
                    'message' => "User successfully registered!"
                ];
            } else {
                $_SESSION['response'] = [
                    'success' => false,
                    'message' => "Error registering user!"
                ];
            }
            header('Location: ../view/home.php');
            exit;
            

        }

    }
}
new AddUserController();
?>