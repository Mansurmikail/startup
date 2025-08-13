<?php
include 'core/init.php';
require_once 'core/classes/user.php';

$userObj = new User($pdo);
$msg = "";

// Detect if request is AJAX
$isAjax = (
    !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest'
);

// ---------- HANDLE REGISTRATION ----------
if (isset($_POST['register']) || $isAjax) {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $role = $_POST['role'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    $result = $userObj->register($username, $email, $role, $password, $confirm_password);

    if ($isAjax) {
        // Return JSON for AJAX
        header('Content-Type: application/json');
        echo json_encode($result);
        exit();
    } else {
        // Show message for normal POST
        $msg = "<p style='text-align:center; color:" . ($result['status'] ? 'green' : 'red') . ";'>{$result['message']}</p>";
    }
}

// ---------- HANDLE LOGIN ----------
if (isset($_POST['login'])) {
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = $userObj->login($email, $password);

    if ($user) {
        $_SESSION['username'] = $user['username'];
        header("Location: index1.php");
        exit();
    } else {
        $msg = "<p style='color:red; text-align:center;'>Invalid email or password</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="./assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="container" class="container">

        <?php if (!empty($msg)) echo $msg; ?>

        <div class="row">
            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-up">
                        <form id="registerForm" method="POST" action="">
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="text" name="username" id="username" placeholder="Username" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bx-mail-send'></i>
                                <input type="email" name="email" id="email"  placeholder="Email" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bx-user-type'></i>
                                <input type="text" name="role" id="role"  placeholder="Are you an Admin or a User?" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" name="password" id="password"  placeholder="Password" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" name="confirm_password" id="confirm_password"  placeholder="Confirm password" required>
                            </div>
                            <button type="submit" name="register" id="register">Sign up</button>
                        </form>
                        <p>
                            <span>Already have an account?</span>
                            <b onclick="toggle()" class="pointer">Sign in here</b>
                        </p>
                    </div>
                </div>
            </div>

            <!-- SIGN IN -->
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-in">
                        <form method="POST" action="">
                            <div class="input-group">
                                <i class='bx bxs-user'></i>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="input-group">
                                <i class='bx bxs-lock-alt'></i>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <button type="submit" name="login">Sign in</button>
                        </form>
                        <p><b>Forgot password?</b></p>
                        <p>
                            <span>Don't have an account?</span>
                            <b onclick="toggle()" class="pointer">Sign up here</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>Welcome</h2>
                </div>
                <div class="img sign-in"></div>
            </div>
            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up"></div>
                <div class="text sign-up">
                    <h2>Register Here</h2>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
$(function () {
    $('#register').click(function (e) {
        e.preventDefault(); // Prevent default form submission
        
        var valid = this.form.checkValidity();
        if (!valid) {
            Swal.fire({
                title: 'Validation Error',
                text: 'Please fill out all required fields correctly.',
                icon: 'error'
            });
            return;
        }

        // Get form values
        var formData = {
            username: $('#username').val(),
            email: $('#email').val(),
            role: $('#role').val(),
            password: $('#password').val(),
            confirm_password: $('#confirm_password').val()
        };

        // AJAX request
        $.ajax({
            url: '', // same file
            type: 'POST',
            data: formData,
            dataType: 'json',
            headers: { 'X-Requested-With': 'XMLHttpRequest' }, // Detect AJAX
            success: function (data) {
                if (data.status === true || data.status === 'success') {
                    Swal.fire({
                        title: 'Registration Successful!',
                        text: data.message,
                        icon: 'success'
                    });
                    $('#registerForm')[0].reset();
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                }
            },
            error: function () {
                Swal.fire({
                    title: 'Server Error',
                    text: 'Could not connect to the server.',
                    icon: 'error'
                });
            }
        });
    });
});
</script>

<script src="./assets/js/index.js"></script>
</html>
