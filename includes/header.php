<?php include __DIR__ . '/../core/init.php'; ?>



<header class="header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="top-info-left">
                        <span><i class="fas fa-map-marker-alt"></i> 24 Tech Road st NY 10023</span>
                        <span><i class="far fa-envelope"></i> info123@example.com</span>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center text-right">
                    <div class="top-info-right">
                        <div class="office-time">
                            <span><i class="far fa-clock"></i> Office Hour : 07:00am - 6:00pm</span>
                        </div>
                        <div class="top-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Bottom -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-2 col-4">
                    <div class="logo">
                        <a href="<?php echo BASE_URL; ?>index.php">
                            <img src="<?php echo BASE_URL; ?>assets/img/logo.png" alt="logo" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-10 col-8">
                    <div class="menu">
                        <nav>
                            <ul>
                                <!-- Main Links -->
                                <li><a href="<?php echo BASE_URL; ?>index.php">Home</a></li>
                                <li><a href="<?php echo BASE_URL; ?>index.php#team">Team Members</a></li>
                                <li><a href="<?php echo BASE_URL; ?>index.php#services">Services</a></li>
                                <li><a href="<?php echo BASE_URL; ?>index.php#project">Project</a></li>
                                <li><a href="<?php echo BASE_URL; ?>index.php#contact">Contact Us</a></li>
                                <li><a href="<?php echo BASE_URL; ?>index.php#about">About Us</a></li>

                                <!-- Account Menu -->
                                <li class="menu-item-has-children">
                                    <?php if ($getFromU->loggedIn()): ?>
                                        <?php $me = $getFromU->currentUser(); ?>
                                        <a href="#">Welcome, <?= htmlspecialchars($me['username']); ?></a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo BASE_URL; ?>logout.php">Logout</a></li>
                                        </ul>
                                    <?php else: ?>
                                        <a href="#">Account</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo BASE_URL; ?>account.php?action=login">Login</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>account.php?action=register">Register</a></li>

                                        </ul>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
