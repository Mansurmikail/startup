  
 
 <?php

require 'database/connection.php';
require_once 'core/classes/user.php';


$getFromU = new User($pdo);

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $getFromU->login($email, $password);

    if ($user) {
        $_SESSION['username'] = $user['username']; // store username in session

        // Redirect to index.html
        header("Location: index.php"); // change to index.php so PHP can read session
        exit();
    } else {
        echo "Invalid email or password.";
    }
}
?>

                
                
        <!--
            <div class="form sign-in">
				<form method="POST" action="">
					<div class="input-group">
                        
							<i class='bx bxs-user'></i>
							<input type="text" placeholder="email" name="email">
						    </div>
						    <div class="input-group">
							<i class='bx bxs-lock-alt'></i>
							<input type="password" name="password" placeholder="Password">
						    </div>

                        <button name="login" type="submit">
							Sign in
						</button>
                </form>
						
						<p>
							<b>
								Forgot password?
							</b>
						</p>
						<p>
							<span>
								Don't have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign up here
							</b>
						</p>

                        <?php
                          if(isset($error)){
                            echo "<p style='color:red;'>$error</p>";
                          }  
                        ?>

                        
					</div>
				</div>
			<div class="form-wrapper">