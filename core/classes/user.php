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

    // Fetch all users
    public function getUsers(){
        $stmt = $this->pdo->prepare("SELECT * FROM tlbstartup");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Register method
    public function register($username, $email, $role, $password, $confirm_password) {
        $username = $this->checkInput($username);
        $email = $this->checkInput($email);
        $role = $this->checkInput($role);
        $password = $this->checkInput($password);
        $confirm_password = $this->checkInput($confirm_password);

        // Validation
        if (empty($username) || empty($email) || empty($role) || empty($password) || empty($confirm_password)) {
            return ['status' => false, 'message' => 'All fields are required.'];
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['status' => false, 'message' => 'Invalid email format.'];
        }

        if ($password !== $confirm_password) {
            return ['status' => false, 'message' => 'Passwords do not match.'];
        }

        // Check if email exists
        $stmt = $this->pdo->prepare("SELECT email FROM tlbstartup WHERE email = :email");
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return ['status' => false, 'message' => 'Email already registered.'];
        }

        // Insert user
        $hashedPassword = md5($password); // keep consistent with login
        $stmt = $this->pdo->prepare("INSERT INTO tlbstartup (username, email, user_status, password) VALUES (:username, :email, :role, :password)");
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":role", $role);
        $stmt->bindParam(":password", $hashedPassword);

        if ($stmt->execute()) {
            return ['status' => true, 'message' => 'Registration successful. You can now log in.'];
        } else {
            return ['status' => false, 'message' => 'Registration failed. Try again.'];
        }
    }

    // Login method
    public function login($email, $password){
        $email    = $this->checkInput($email);
        $password = md5($this->checkInput($password)); // MD5 for demo — use password_hash in real apps

        $stmt = $this->pdo->prepare("SELECT * FROM tlbstartup WHERE email = :email AND password = :password");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            return $stmt->fetch(PDO::FETCH_ASSOC); // User found
        } else {
            return false; // No user
        }
    }
}
?>
