<?php 
session_start();
require_once ('probQuery.php');

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
        <link href="/mercoder/bootstrap_folder/css/styles.css" rel="stylesheet" />
        </head>
    
        <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars" ></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                
            <?php
                    //if they are not logged in or have not been assigned a token
                    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == 0) { 
                        echo '<li class="sidebar-brand"><a href="/mercoder/bootstrap_folder/index.php">Home</a></li>
                        <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/index.php">Login</a></li>
                        <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/index.php#about">About</a></li>
                        <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/prob_landing.php">Problems</a></li>';
                    } else {   //else they are logged in
                        if($_SESSION['loggedin'] == 2){     //Teacher menu
                            echo '<li class="sidebar-brand"><a href="/mercoder/bootstrap_folder/index.php">Home</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/logout.php">Logout</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/index.php#about">About</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/prob_landing.php">Problems</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/problem_form.php">New Problem</a></li>';
                        } else {    //Student menu
                            echo '<li class="sidebar-brand"><a href="/mercoder/bootstrap_folder/index.php">Home</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/logout.php">Logout</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/index.php#about">About</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/prob_landing.php">Problems</a></li>';
                    }
                    }
                ?>
            </ul>
            
        </nav>
        
        <!-- Portfolio-->
        <section class="content-section bg-light" id="problems">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h2 class="mb-5">All currently available problems:</h2>
                </div>
            <div id="loop"></div>
                    
                
            <script>

                //initialize variable htmlCode with Bootstrap Grid row gutters
                let htmlCode = `<div class="row gx-5 justify-content-center">
                                    <div class="row gy-4">` ;
                    
                const div = document.createElement('div');
                
                for (let i = 0; i < probs.length; i++)
                    {
                    var description = probs[i].description.substr(0, 200);
                    if (probs[i].description.length > 200) {
                    description += '...';
                    }
                        htmlCode += `<div class="col-lg-6">
                                            <a class="portfolio-item" href="#" onclick="redirectToProblem(${probs[i].id})">
                                                <div class="caption">
                                                    <div class="caption-content mx-auto text-center px-4 py-2">
                                                        <div class="h2">${probs[i].title}</div>
                                                            <p class="mb-0">${description}</p>
                                                    </div>
                                                </div>
                                                <img class="img-fluid" src="../assets/img/portfolio-1.jpg" alt="..." />
                                            </a>
                                        </div>`;
                    
                    div.innerHTML = htmlCode;    //fill the new div element with the variable htmlCode
                    document.getElementById("loop").appendChild(div);    //append new div element to div with id "loop"
                    }

                    function redirectToProblem(problemId) {
                        window.location.href = `/mercoder/bootstrap_folder/PHP/problem_submit.php?id=${problemId}`;
                    }
                
            </script>
        </section>
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
            <?php
            if(isset($_SESSION['username'])) { 
                echo '<p>'. $_SESSION['username'] .'<p>';
            }
            ?>
                <p class="text-muted small mb-0">Copyright &copy; Table of Lords</p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/mercoder/bootstrap_folder/js/scripts.js"></script>

        
    </body>
</html>

