<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MERCODER</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                
            <?php
                    //if they are not logged in or have not been assigned a token
                    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == 0) { 
                        echo '<li class="sidebar-brand"><a href="/mercoder/index.php">Home</a></li>
                        <li class="sidebar-nav-item"><a href="/mercoder/PHP/index.php">Login</a></li>
                        <li class="sidebar-nav-item"><a href="/mercoder/index.php#about">About</a></li>
                        <li class="sidebar-nav-item"><a href="/mercoder/PHP/prob_landing.php">Problems</a></li>';
                    } else {   //else they are logged in
                        if($_SESSION['loggedin'] == 2){     //Teacher menu
                            echo '<li class="sidebar-brand"><a href="/mercoder/index.php">Home</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/PHP/logout.php">Logout</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/index.php#about">About</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/PHP/prob_landing.php">Problems</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/PHP/problem_form.php">New Problem</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/PHP/user_profile.php">View Account</a></li>';
                        } else {    //Student menu
                            echo '<li class="sidebar-brand"><a href="/mercoder/index.php">Home</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/PHP/logout.php">Logout</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/index.php#about">About</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/PHP/prob_landing.php">Problems</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/PHP/user_profile.php">View Account</a></li>';
                    }
                    }
                ?>
            </ul>
            
        </nav>

<section class="content-section bg-light" id="update-account">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
            <h2 class="mb-5">Update Account Details</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="update_account.php" method="post">
                    <!-- <div class="form-floating mb-3">
                        <input class="form-control" id="username" name="username" type="text" placeholder="Username" required />
                        <label for="username">Username</label>
                    </div> -->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="oldPass" name="oldPass" type="password" placeholder="oldPass" required />
                        <label for="oldPass">Enter old password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="newPass" name="newPass" type="password" placeholder="newPass" required />
                        <label for="newPass">Enter new password</label>
                    </div>

                    <?php
                        if ($_SESSION['loggedin'] == 1 || $_SESSION['loggedin'] == 2){
                            if ($_SESSION['loggedin'] == 1){
                                echo '<div class="form-floating mb-3">
                                <input class="form-control" id="school" name="school" type="text" placeholder="School" />
                                <label for="school">School</label>
                            </div>';
                            } else {
                                echo '<div class="form-floating mb-3">
                                <input class="form-control" id="school" name="school" type="text" placeholder="School" required />
                                <label for="school">School</label>
                            </div>';
                            }
                        }
                    ?>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="city" name="city" type="text" placeholder="City" required />
                        <label for="city">City</label>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Update Account</button></div>
                    <input type="hidden" name="username" value="' . $_SESSION['username'] . '">

                </form>
            </div>
        </div>
    </div>
</section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <p><?php echo $_SESSION['username'];?><p>
                <p class="text-muted small mb-0">Copyright &copy; Table of Lords</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>

        
    </body>
</html> 