<?php
include __DIR__ . '/core/init.php';


require_once 'core/classes/user.php';

$userObj = new User($pdo);
$msg = "";

// Detect if request is AJAX
$isAjax = (
    !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'
);

// Get the action from URL, default to 'login'
$action = $_GET['action'] ?? 'login';

// ---------- HANDLE REGISTRATION ----------
if (isset($_POST['register']) || $isAjax) {
    $username        = $_POST['username'] ?? '';
    $email           = $_POST['email'] ?? '';
    $user_status     = $_POST['user_status'] ?? ''; // ✅ Corrected: now uses user_status
    $password        = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Call register using the fixed user_status variable
    $result = $userObj->register($username, $email, $user_status, $password, $confirm_password);

    if ($isAjax) {
        header('Content-Type: application/json');
        echo json_encode($result);
        exit();
    } else {
        $msg = "<p style='text-align:center; color:" . ($result['status'] ? 'green' : 'red') . ";'>{$result['message']}</p>";
        if ($result['status']) {
            // After registration, redirect or show login form
            $action = 'login';
        }
    }
}


// ---------- HANDLE LOGIN ----------
if (isset($_POST['login'])) {
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = $userObj->login($email, $password);

    if ($user) {
        $_SESSION['user_id']  = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_status'] = $user['user_status']; // ✅ store user_status

        // Redirect based on user_status
        if (strtolower($user['user_status']) === 'admin') {
            header("Location: " . BASE_URL . "admin/index.php"); // ✅ Admin dashboard
        } else {
            header("Location: " . BASE_URL . "index.php"); // ✅ Normal user homepage
        }
        exit();
    } else {
        $msg = "<p style='color:red; text-align:center;'>Invalid email or password</p>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
    <link rel="stylesheet" href="slide navbar style.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container <?php echo ($action === 'register') ? 'sign-up' : 'sign-in'; ?>">

    <?php if (!empty($msg)) echo $msg; ?>

    <div class="row">
        <!-- SIGN UP -->
        <div id="register" class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">
                <div class="form sign-up">
                    <form id="registerForm" method="POST" action="">
                        <div class="input-group">
                            <input type="text" name="username" placeholder="Username" required>
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-group">
                            <input type="text" name="user_status" placeholder="Role (Admin/User)" required>
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="input-group">
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                        <button type="submit" name="register">Sign Up</button>
                    </form>
                    <p>
                        <span>Already have an account?</span>
                        <b onclick="toggleSignIn()" style="cursor:pointer; color:var(--primary-color);">Sign in here</b>
                    </p>
                </div>
            </div>
        </div>

        <!-- SIGN IN -->
        <div id="login" class="col align-items-center flex-col sign-in">
            <div class="form-wrapper align-items-center">
                <div class="form sign-in">
                    <form method="POST" action="">
                        <div class="input-group">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" name="login">Sign In</button>
                    </form>
                    <p>
                        <span>Don't have an account?</span>
                        <b onclick="toggleSignUp()" style="cursor:pointer; color:var(--primary-color);">Sign up here</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Toggle between login and register manually
function toggleSignUp() {
    document.querySelector('.container').classList.add('sign-up');
}
function toggleSignIn() {
    document.querySelector('.container').classList.remove('sign-up');
}
</script>



<script>
document.addEventListener("DOMContentLoaded", function() {
    // If URL has ?action=login or ?action=register, open the correct form
    const params = new URLSearchParams(window.location.search);
    const action = params.get('action');
    const container = document.querySelector('.container');

    if (action === 'register') {
        container.classList.add('sign-up-mode');
    } else {
        container.classList.remove('sign-up-mode');
    }

    // Smooth scroll when menu links are clicked
    const openLinks = document.querySelectorAll('.openForm');
    openLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const action = this.dataset.action;
            if (action === 'register') {
                container.classList.add('sign-up-mode');
            } else {
                container.classList.remove('sign-up-mode');
            }

            // Scroll to the form
            window.scrollTo({ top: container.offsetTop - 50, behavior: 'smooth' });

            // Update URL without reloading
            history.replaceState(null, '', `account.php?action=${action}`);
        });
    });
});
</script>


</body>
</html>
