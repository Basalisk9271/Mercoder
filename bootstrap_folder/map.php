<?php 
session_start();
require_once 'PHP/probQuery.php';

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
                
            <?php
                    //if they are not logged in or have not been assigned a token
                    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == 0) { 
                        echo '<li class="sidebar-brand"><a href="/mercoder/bootstrap_folder/index.php">Home</a></li>
                        <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/index.php">Login</a></li>
                        <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/index.php#about">About</a></li>
                        <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/prob_landing.php">All Problems</a></li>';
                    } else {   //else they are logged in
                        if($_SESSION['loggedin'] == 2){     //Teacher menu
                            echo '<li class="sidebar-brand"><a href="/mercoder/bootstrap_folder/index.php">Home</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/logout.php">Logout</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/index.php#about">About</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/prob_landing.php">All Problems</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/problem_form.php">New Problem</a></li>';
                        } else {    //Student menu
                            echo '<li class="sidebar-brand"><a href="/mercoder/bootstrap_folder/index.php">Home</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/logout.php">Logout</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/index.php#about">About</a></li>
                            <li class="sidebar-nav-item"><a href="/mercoder/bootstrap_folder/PHP/prob_landing.php">All Problems</a></li>';
                    }
                    }
                ?>
            </ul>
            
        </nav>
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <img class="img-fluid" src="assets/img/logo-no-background.png">
                
                <?php
                        //if they are not logged in or have not been assigned a token
                        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == 0) { 
                            echo '<h3 class="mb-5"><em> </em></h3>
                            <a class="btn btn-primary btn-xl" href="/mercoder/bootstrap_folder/PHP/index.php">Login</a>';
                        } else {   //else they are logged in
                            if($_SESSION['loggedin'] == 2){     //Teacher view
                                echo '<h1 class="mt-5" style="font-family: Rufina ">Welcome, ' . $_SESSION['username'] . ' </h1>
                                <h3 class="mb-5"><em> </em></h3>
                                <a class="btn btn-primary btn-xl" href="/mercoder/bootstrap_folder/PHP/prob_landing.php">View Problems</a>
                                <a class="btn btn-secondary btn-xl ms-3" href="/mercoder/bootstrap_folder/PHP/problem_form.php">New Problem</a>';
                            } else {    //Student view
                                echo '<h1 class="mt-5" style="font-family: Rufina ">Welcome, ' . $_SESSION['username'] . ' </h1>
                                <h3 class="mb-5"><em> </em></h3>
                                <a class="btn btn-primary btn-xl" href="/mercoder/bootstrap_folder/PHP/prob_landing.php">View Problems</a>';
                        }
                        }
                    ?>
                
                
            </div>


        </header>

        <section class="content-section bg-primary text-white text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h2 class="mb-5">What is MERCODER and what does it provide?</h2>
                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-screen-smartphone"></i></span>
                        <h4><strong>For Students:</strong></h4>
                        <p class="text-faded mb-0">Students are able to find coding problems and solve them using their problem-solving skills.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-pencil"></i></span>
                        <h4><strong>For Teachers:</strong></h4>
                        <p class="text-faded mb-0">Teachers are also able to find coding problems on this site, in addition to having the ability to publish their own coding assignments.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
                        <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-like"></i></span>
                        <h4><strong>For Everyone:</strong></h4>
                        <p class="text-faded mb-0">
                       Everyone has access to a map that shows which problems are being solved, along with where, and by whom.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio-->
        <section class="content-section" id="problems">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h2 class="mb-5">Recently Submitted Problems</h2>
                    <div id="loop"></div>
                    
                
                    <script>
        
                        //initialize variable htmlCode with Bootstrap Grid row gutters
                        let htmlCode = `<div class="row gx-5 justify-content-center">
                                            <div class="row gy-4">` ;
                            
                        const div = document.createElement('div');
                        
                    for (let i = 0; i < 4; i++)
                    {
                    var description = probs[i].description.substr(0, 200);
                    if (probs[i].description.length > 200) {
                    description += '...';
                    }
                    htmlCode += `<div class="col-lg-6 ">
                                    <a class="portfolio-item" href="#" onclick="redirectToProblem(${probs[i].id})">
                                    <div class="caption">
                                        <div class="caption-content mx-auto text-center px-4 py-2">
                                        <div class="h2">${probs[i].title}</div>
                                        <p class="mb-0">${description}</p>
                                        </div>
                                    </div>
                                    <img class="img-fluid" src="assets/img/portfolio-1.jpg" alt="..." />
                                    </a>
                                </div>
                                `;

                    
                    div.innerHTML = htmlCode;    //fill the new div element with the variable htmlCode
                    document.getElementById("loop").appendChild(div);    //append new div element to div with id "loop"
                    }

                    function redirectToProblem(problemId) {
                        window.location.href = `/mercoder/bootstrap_folder/PHP/problem_submit.php?id=${problemId}`;
                    }
                        
                    </script>
        </section>
        
        <!-- Map and Dropdown Menu-->
        <section>
            <!-- Drop down menu that will show different map markers depending on which problem is chosen-->
            <!-- All map markers will be shown by default -->
            <div align="center">
                <select id="dropDown" name="list" size="1"></select>
                <span id="tag"></span>
            </div>
            
            <script>

                    <?php 
                        require_once('get_prob_titles.php');

                        $probArr = getProbTitles();

                        echo '<script> 
                          var probArr = [];
                          probArr = ' . $probArr . ';
                          console.log(probArr);
                        </script>';
                    ?>

                    /*
                const probArr = [
                                { title: "Problem 1", details: "Description for Problem 1" },
                                { title: "Problem 2", details: "Description for Problem 2" },
                                { title: "Problem 3", details: "Description for Problem 3" },
                                { title: "Problem 4", details: "Description for Problem 4" },
                                { title: "Problem 5", details: "Description for Problem 5" }
                                ];
                    */
                

                var select = document.getElementById("dropDown");
                
                //Create and append options elements to the select element with the id "dropDown"
                for (let i = 0; i < probArr.length; i++)
                {
                    var option = document.createElement("option");
                    //option.value = probArr[i].details;
                    option.text = probArr[i].title;
                    select.appendChild(option);
                }
                
                tag = document.getElementById("tag");

                //Function that changes the content of the tag
                select.onchange = function()
                {
                   tag.innerHTML = select.value;
                }
            </script>
            
            
            <div class="container px-4 px-lg-5">
                       <div class="row gx-4 gx-lg-5 justify-content-center">
                           <div class="col-lg-8">
                               <h2 class="text-white mb-4"></h2>
                               <div id="googleMap" style="width:100%;height:650px;"></div>
                               <script>
                               function myMap() {
                               var mapProp= {
                                 center:new google.maps.LatLng(33.264080,-82.763100),
                                 zoom:3.75,
                               };
                               var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

                               //make const

                               const lat = [32.832102];
                               const lang = [-83.648181];
                               const info = ["Mercer University"]

                               for (let i = 0; i < lat.length; i++)
                                 {
                                   var marker = new google.maps.Marker({position: new google.maps.LatLng(lat[i],lang[i])});
                                   marker.setMap(map);
                                   var infowindow = new google.maps.InfoWindow({content:info[i]});
                                   infowindow.open(map,marker);
                                 }
                               }
                               </script>
                               <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfhDoPuP4Hkf_nis_oKqwol7Tk5TuzJA8&callback=myMap"></script>
            </div>
            
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
        <script src="js/scripts.js"></script>

        
    </body>
</html>
