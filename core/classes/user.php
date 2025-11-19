<?php
class User {
    protected $pdo;

    function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function checkInput($var){
        $var = htmlspecialchars($var);
        $var = trim($var);
        $var = stripslashes($var);
        return $var;
    }

    // ✅ Check if user is logged in
    public function loggedIn(){
        return isset($_SESSION['user_id']);
    }

    // ✅ Get current logged-in user
    public function currentUser(){
        if ($this->loggedIn()) {
            $stmt = $this->pdo->prepare("SELECT * FROM tlbstartup WHERE user_id = :user_id");
            $stmt->bindParam(":user_id", $_SESSION['user_id'], PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        return null;
    }

    // ✅ Fetch all users
    public function getUsers(){
        $stmt = $this->pdo->prepare("SELECT * FROM tlbstartup");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function register($username, $email, $user_status, $password, $confirm_password) {
    $username = $this->checkInput($username);
    $email = $this->checkInput($email);
    $user_status = $this->checkInput($user_status);
    $password = $this->checkInput($password);
    $confirm_password = $this->checkInput($confirm_password);

    // Basic validation
    if (empty($username) || empty($email) || empty($user_status) || empty($password) || empty($confirm_password)) {
        return ['status' => false, 'message' => 'All fields are required.'];
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return ['status' => false, 'message' => 'Invalid email format.'];
    }

    if ($password !== $confirm_password) {
        return ['status' => false, 'message' => 'Passwords do not match.'];
    }

    // Check if email already exists
    $stmt = $this->pdo->prepare("SELECT user_id FROM tlbstartup WHERE email = :email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        return ['status' => false, 'message' => 'Email already registered.'];
    }

    // Hash password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // ✅ Insert user (fixed: replaced role → user_status)
    $stmt = $this->pdo->prepare("INSERT INTO tlbstartup (username, email, user_status, password) 
                                 VALUES (:username, :email, :user_status, :password)");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":user_status", $user_status);
    $stmt->bindParam(":password", $hashedPassword);

    if ($stmt->execute()) {
        return ['status' => true, 'message' => 'Registration successful! You can now log in.'];
    } else {
        return ['status' => false, 'message' => 'Something went wrong. Please try again.'];
    }
}


    // ✅ Login method
    public function login($email, $password) {
        $email = $this->checkInput($email);

        $stmt = $this->pdo->prepare("SELECT * FROM tlbstartup WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['user_id']; // ✅ fixed
                return $user;
            }
        }

        return false;
    }
}
?>
