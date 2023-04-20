<?php 
session_start();
if(!isset($_SESSION['loggedin'])) {
    $_SESSION['loggedin'] = 0;
    header('Location: index.php'); // don't redirect same page
} 

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
        <link href="css/styles.css" rel="stylesheet" />
        
        
     
        
        
        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">Problems</a></li>
		<li class="sidebar-nav-item"><a href="http://34.75.152.62/mercoder/bootstrap_folder/home.php">Home</a></li>
               
		<!-- I don't think this is needed 
		 <li class="sidebar-nav-item"><a href="./PHP/index.php">Login</a></li>	
                -->
		
		<li class="sidebar-nav-item"><a href="./PHP/index.php">Logout</a></li>
            </ul>
        </nav>
        </header>


        <!-- Portfolio-->
        <section class="content-section" id="problems">
            <div class="container px-4 px-xl-5">
                <div class="content-section-heading text-center">
                    <h3 class="text-secondary mb-0">Problems</h3>
                    <h2 class="mb-5">All currently available problems:</h2>
                </div>
                <div class="row gx-0">
                    
                    
                   
                    
                    
                    
                    <!-- Add php code to insert problems from database here with a loop -->
                    
                    
                    <div class="col-lg-6">
                        
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    
                                    
                                    <div class="h2">Problem 1 title</div>  <!-- Title insert -->
                                    <p class="mb-0">Problem 1 description</p> <!-- Description insert -->
                                
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                        </a>
                    </div>
                    
                    
                    
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    
                                    
                                    <div class="h2">Problem 2 title</div>  <!-- Title insert -->
                                    <p class="mb-0">Problem 2 description</p> <!-- Description insert -->
                                    
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                        </a>
                    </div>
                    
                    
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    
                                    
                                    <div class="h2">Problem 3 title</div>  <!-- Title insert -->
                                    <p class="mb-0">Problem 3 description</p> <!-- Description insert -->
                                    
                                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                        </a>
                    </div>
                    
                   
                   <div class="col-lg-6">
                       <a class="portfolio-item" href="#!">
                           <div class="caption">
                               <div class="caption-content">
                                   
                                   
                                   <div class="h2">Problem 4 title</div>  <!-- Title insert -->
                                   <p class="mb-0">Problem 4 description</p> <!-- Description insert -->
                                   
                               </div>
                           </div>
                           <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                       </a>
                   </div>
                   
                    
                    
                </div>
            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <p class="text-muted small mb-0">Copyright &copy; Table of Lords</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        
    </body>
</html>
