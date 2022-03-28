<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ayush_singh_chillax";


    $conn = mysqli_connect($server , $username , $password ,  $dbname);

    if(isset($_POST['submit'])) {
        if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {

            $first_name = $_POST['first_name'] ;
            $last_name = $_POST['last_name'] ;
            $email = $_POST['email'] ;
            $password = $_POST['password'] ;

            $query = "insert into ayush_singh_chillax_user_tbl(first_name,last_name,email,password) values('$first_name' , '$last_name' , '$email' , '$password')" ;

            $run = mysqli_query($conn ,  $query) or die(mysqli_error());

            if($run) {
                header("Refresh:0 ; url=http://localhost/CHILLAX/index1.php");
            }
            else {
                echo "form not submitted";
            }

        }
        else {
            echo "All fields required";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>HOME</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="index1.css">
    <link rel="icon" href="Login-Images/home-regular-24.png" type="image/png" size="16x16">
    
    

</head>

<body id="page-top">
    <a class="menu-toggle rounded" href="#">
        <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">

            <!-- Theme Changer Toggler -->
            <div>
                <input type="checkbox" class="checkbox" id="chk" onclick="darkmode()">
                <label class="label" for="chk">
                    <i class="fa fa-moon-o" aria-hidden="true"></i>
                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                    <div class="ball"></div>
                </label>
            </div>
            <li class="sidebar-brand">
                <a class="js-scroll-trigger" href="#page-top">CHILLAX</a>
            </li>
            <?php 
                  session_start();
                        echo "<h5 style='color:white;margin-left:15px;font-weight:500;'>Welcome</h5>";
            ?>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#UpcomingMovies">Upcoming Movies</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#TopRatedMovies">Top Rated Movies</a>
            </li>
            <li class="sidebar-nav-item">
                <a class="js-scroll-trigger" href="#LatestMovies">Latest Movies</a>
            </li>
            <a href="Logout.php"style='color:white;margin-left:15px;font-weight:500;'>Logout</a>
        </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex">
        <div class="container text-center my-auto">
            <h1 class="mb-1"><br>Spiderman<br>No-Way Home</h1>
            <h3 class="mb-5">
                <em>Coming Soon On CHILLAX</em>
            </h3>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="Movies/Spidermannowayhome/index.html">Watch Trailer Now</a>
        </div>
        <div class="overlay"></div>
    </header>


    <!-- upcoming movies section start -->
    <section id="UpcomingMovies">
        <div class="Container">
            <h2>Upcoming Movies</h2>
            <div class="row Movies">
                    
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="row">
                          <div class="col-6"><a href="Movies/Venom2/index.html"><img src="Images/UpcomingMoviesImages/Venom2-compressed.jpg"></a></div>
                          <div class="col-6"><a href="Movies/TheKingsMan/index.html"><img src="Images/UpcomingMoviesImages/Kigsman-scaled.jpg"></a></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="row">
                          <div class="col-6"><a href="Movies/Shang-Chi/index.html"><img src="Images/UpcomingMoviesImages/shang-chi.jpg"></a></div>
                          <div class="col-6"><a href="Movies/Spidermannowayhome/index.html"><img src="Images/UpcomingMoviesImages/spiderman-no-way-home.jpg"></a></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="row">
                          <div class="col-6"><a href="Movies/Eternals/index.html"><img src="Images/UpcomingMoviesImages/eternals.png"></a></div>
                          <div class="col-6"><a href="Movies/TheBatman/index.html"><img src="Images/UpcomingMoviesImages/TheBatman-compressed.jpg"></a></div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- top rated movies section -->
    <section id="TopRatedMovies">
        <div class="Container">
            <h2>Top Rated Movies</h2>
            <div class="row Movies">
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="row">
                          <div class="col-6"><a href="Movies/Iron Man/index.html"><img src="Images/TopRatedMoviesImages/MI_09082021_134321.jpg"></a></div>
                          <div class="col-6"><a href="Movies/Deadpool 2/index.html"><img src="Images/TopRatedMoviesImages/Deadpool2-compressed.jpg"></a></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="row">
                          <div class="col-6"><a href="Movies/GOG2/index.html"><img src="Images/TopRatedMoviesImages/GuardiansoftheGalaxy-compressed.jpg"></a></div>
                          <div class="col-6"><a href="Movies/John Wick 3/index.html"><img src="Images/TopRatedMoviesImages/JohnWick-compressed.jpg"></a></div>
                        </div>
                      </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="row">
                            <div class="col-6"><a href="Movies/Joker/index.html"><img src="Images/TopRatedMoviesImages/Joker-compressed.jpg"></a></div>
                            <div class="col-6"><a href="Movies/Avengers Endgame/index.html"><img src="Images/TopRatedMoviesImages/AvengersEndGame-compressed.jpg"></a></div>
                        </div>
                    </div> 

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="row">
                            <div class="col-6"><a href="Movies/Thor-the dark world/index.html"><img src="Images/TopRatedMoviesImages/MI_09082021_140052.jpg"></a></div>
                            <div class="col-6"><a href="Movies/Captain Ameria- Winter Soldier/index.html"><img src="Images/TopRatedMoviesImages/MI_09082021_140447.jpg"></a></div>
                        </div>
                    </div> 
            </div>
        </div>
    </section>

    <!-- Latest movies section -->
    <section id="LatestMovies">
        <div class="Container">
            <h2>Latest Movies</h2>
            <div class="row Movies">
                    
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="row">
                          <div class="col-6"><a href="Movies/Antman2/index.html"><img src="Images/LatestMoviesImages/AntMan2-compressed.jpg"></a></div>
                          <div class="col-6"><a href="Movies/Avengers-Infinity War/index.html"><img src="Images/LatestMoviesImages/AvengersInfinityWar-compressed.jpg"></a></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="row">
                          <div class="col-6"><a href="Movies/Black Panther/index.html"><img src="Images/LatestMoviesImages/BlackPanther-compressed.jpg"></a></div>
                          <div class="col-6"><a href="Movies/Bloodshot/index.html"><img src="Images/LatestMoviesImages/Bloodshot-compressed.jpg"></a></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="row">
                          <div class="col-6"><a href="Movies/Project Power/index.html"><img src="Images/LatestMoviesImages/ProjectPower-compressed.jpg"></a></div>
                          <div class="col-6"><a href="Movies/Sonic/index.html"><img src="Images/LatestMoviesImages/SonictheHedgehog-compressed.jpg"></a></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="row">
                          <div class="col-6"><a href="Movies/Spiderman-into the spiderverse/index.html"><img src="Images/LatestMoviesImages/SpiderManIntoTheSpiderVerse-compressed.jpg"></a></div>
                          <div class="col-6"><a href="Movies/WW84/index.html"><img src="Images/LatestMoviesImages/WonderWoman1984-compressed.jpg"></a></div>
                        </div>
                    </div> 
            </div>
        </div>
    </section>
    <!-- footer section -->
    <footer id="footer">
        <a class="social-icon fa fa-github" aria-hidden="true" target="_blank" href="https://github.com/sayush950"></a>
        <a class="social-icon fa fa-instagram" aria-hidden="true" target="_blank" href="https://www.instagram.com/irxahm/"></a>
        <a class="social-icon fa fa-linkedin" aria-hidden="true" target="_blank" href="https://www.linkedin.com/in/ayush-singh-a70a07156/"></a>
        <p>Created By: Ayush Singh</p>
        <p>&copy; Copyright  <script>document.write(new Date().getFullYear())</script> <a href="index1.php" class="footername">CHILLAX</a></p>
    </footer>

    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="index1.js"></script>

</body>

</html>