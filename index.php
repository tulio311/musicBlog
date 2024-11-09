<?php

    $cache_duration = 12 * 60 * 60; // 12 hours in seconds
    header('Cache-Control: public, max-age=' . $cache_duration);
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $cache_duration) . ' GMT');

    $dbFile = 'songs.db';

            try {
                // Create a PDO instance for SQLite
                $pdo = new PDO("sqlite:$dbFile");

                // Set the PDO error mode to exception
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // If the database is connected successfully
                //echo "Connected to the SQLite database!";
            } catch (PDOException $e) {
                // Handle connection errors
                echo "Connection failed: " . $e->getMessage();
}

            $sql = "SELECT * FROM songs;";

            $stmt = $pdo->prepare($sql);
    
    // Execute the query
    $stmt->execute();
    
    // Fetch all the rows from the result
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Loop through the results and print each user
    //header('Content-Type: application/json');
    //echo json_encode($users);

?>




<!DOCTYPE html>
<!-- Change the value of lang="en" attribute if your website's language is not English.
You can find the code of your language here - https://www.w3schools.com/tags/ref_language_codes.asp -->
<html lang="en">
    <head>
        
        <title>Resonance &mdash; One & Multi Page Creative Template</title>
        <meta name="description" content="Resonance &mdash; One & Multi Page Creative Template">  
        <meta charset="utf-8">
        <meta name="author" content="https://themeforest.net/user/bestlooker/portfolio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.png" type="image/png" sizes="any">
        <link rel="icon" href="images/favicon.svg" type="image/svg+xml">         

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/style-responsive.css">
        <link rel="stylesheet" href="css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/splitting.css">
        <link rel="stylesheet" href="css/YTPlayer.css">
        <link rel="stylesheet" href="css/demo-elegant/demo-elegant.css">
        <link rel="stylesheet" href="styles.css">
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    
    </head>
    <body class="appear-animate">

        <p style="display: none;" id="lengthArr"><?php echo count($users); ?></p>
        
        <!-- Page Loader -->   
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->

        <!-- Skip to Content -->
        <a href="#main" class="btn skip-to-content">Skip to Content</a>
        <!-- End Skip to Content -->
        
        <!-- Page Wrap -->
        <div class="page" id="top">
            
            <!-- Navigation Panel -->
            <nav class="main-nav dark transparent stick-fixed wow-menubar">
                <!-- <div class="main-nav-sub full-wrapper">-->
                    
                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format. 
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <!--
                    
                    <div class="nav-logo-wrap local-scroll">
                        <a href="index.html" class="logo font-alt">
                            <img src="images/demo-elegant/logo-white.svg" alt="Your Company Logo" width="170" height="12" />
                        </a>
                    </div>
-->
                    <!-- Mobile Menu Button -->
                     <!--
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="mobile-nav-icon"></i>
                        <span class="visually-hidden">Menu</span>
                    </div>
-->
                    <!-- Main Menu -->
                     <!--
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist local-scroll justify-content-end">                            
                            <li><a href="elegant-multi-page.html">Home</a></li>
                            <li><a href="elegant-about.html">About</a></li>
                            <li><a href="elegant-services.html">Services</a></li>
                            <li><a href="elegant-portfolio.html">Portfolio</a></li>
                            <li><a href="elegant-blog.html" class="active">Blog</a></li>
                            <li><a href="elegant-contact.html">Contact</a></li>
                            <li class="ms-3 me-2"></li>
                            <li><a href="//1.envato.market/R5abDb" class="opacity-1 no-hover" target="_blank"><span class="btn btn-mod btn-small btn-border-w btn-circle" data-btn-animate="y">Buy Resonance</span></a></li>
                        </ul>                        
                    </div>
-->
                    <!-- End Main Menu -->
                    
                <!--</div>-->
            </nav>
            <!-- End Navigation Panel -->
            
            <main id="main">
            
                <!-- Home Section bg-dark-alpha-50 -->
                <section class="page-section light-content" style="background-color:blue" id="home">
                    <div class="container position-relative pt-20 pt-sm-20 text-center">
                        
                        <h1 class="hs-title-3 mb-10 wow fadeInUpShort" data-wow-duration="0.6s">Música solamente</h1>     
                                
                        <div class="row wow fadeIn" data-wow-delay="0.2s">
                            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                                <p class="section-title-tiny mb-0 opacity-075">Todas las joyas escondidas en un solo lugar.</p>   
                            </div>
                        </div>
                         
                   </div>
                </section>
                <!-- End Home Section -->
                
                
                <!-- Blog Section -->
                <section class="page-section" id="blog">
                    <div class="container">
                        
                        <!-- Blog Posts Grid -->
                        <div class="row mt-n50 mb-50 wow fadeInUp" data-wow-offset="0">
                            
                        <?php

    foreach ($users as $song) {

                    $id = $song['id'];
                    $name = $song['nombre'];
                    $artist = $song['artista'];

                    $text =   <<<EOT
                            <div class="item post-prev col-md-6 col-lg-4 mt-50" id="_$id">                                
                                <div class="post-prev-container">
                                    <!--
                                    <div class="post-prev-img">
                                        <a href="elegant-blog-single.html"><img src="images/demo-elegant/blog/1.jpg" alt="Add Image Description" /></a>
                                    </div>
                                    -->
                                    <h3 class="post-prev-title">$name</h3>
                                        
                                    <!--
                                    <div class="post-prev-text">
                                        Looking for inspiration to kick it off, I stumbled across the work of Shane Griffin, an artist and director based in New York... 
                                    </div>
                                    -->
                                    <div class="post-prev-info clearfix">
                                        <div class="float-start">
                                            <a href="#" class="icon-author">
                                                <i class="mi-user size-14 align-middle"></i>
                                            </a>
                                            <a href="#">$artist</a>
                                        </div>
                                        <!--
                                        <div class="float-end">
                                            <i class="mi-calendar size-14 align-middle"></i>
                                            <a href="#">August 5</a>
                                        </div>
                                        -->
                                    </div>
                                
                                </div>                                
                            </div>
                            EOT;

                        echo $text;
                        }
                            ?>
                            <!-- End Post Item -->                            
                            
                        <!-- End Blog Posts Grid -->
                        
                        <!-- Pagination 
                        <div class="pagination justify-content-center">
                            <a href="#"><i class="mi-chevron-left"></i><span class="visually-hidden">Previous page</span></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span class="no-active">...</span>
                            <a href="#">9</a>
                            <a href="#"><i class="mi-chevron-right"></i><span class="visually-hidden">Next page</span></a>
                        </div>
                        End Pagination -->
                        
                    </div>
                </section>
                <!-- End Blog Section --> 
                
                <!-- Divider -->
                <hr class="mt-0 mb-0"/>
                <!-- End Divider -->
                
                
                <!-- Section -->
                <section class="page-section">
                    <div class="container relative">
                        
                        <div class="row mt-n60">
                            
                            <div class="col-sm-6 col-lg-3 mt-60">
                                
                                <!-- Widget -->
                                <div class="widget mb-0">
                                    
                                    <h3 class="widget-title">Categories</h3>
                                    
                                    <div class="widget-body">
                                        <ul class="clearlist widget-menu">
                                            <li>
                                                <a href="#" title="">Branding</a>
                                                <small>
                                                    - 7
                                                </small>
                                            </li>
                                            <li>
                                                <a href="#" title="">Design</a>
                                                <small>
                                                    - 15
                                                </small>
                                            </li>
                                            <li>
                                                <a href="#" title="">Development</a>
                                                <small>
                                                    - 3
                                                </small>
                                            </li>
                                            <li>
                                                <a href="#" title="">Photography</a>
                                                <small>
                                                    - 5
                                                </small>
                                            </li>
                                            <li>
                                                <a href="#" title="">Other</a>
                                                <small>
                                                    - 1
                                                </small>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <!-- End Widget -->
                                
                            </div>
                            
                            <div class="col-sm-6 col-lg-3 mt-60">
                                
                                <!-- Widget -->
                                <div class="widget mb-0">
                                    
                                    <h3 class="widget-title">Tags</h3>
                                    
                                    <div class="widget-body">
                                        <div class="tags">
                                            <a href="">Design</a>
                                            <a href="">Portfolio</a>
                                            <a href="">Digital</a>
                                            <a href="">Branding</a>
                                            <a href="">Theme</a>
                                            <a href="">Clean</a>
                                            <a href="">UI & UX</a>
                                            <a href="">Love</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- End Widget -->
                                
                            </div>
                            
                            <div class="col-sm-6 col-lg-3 mt-60">
                                
                                <!-- Widget -->
                                <div class="widget mb-0">
                                    
                                    <h3 class="widget-title">Archive</h3>
                                    
                                    <div class="widget-body">
                                        <ul class="clearlist widget-menu">
                                            <li>
                                                <a href="#" title="">February 2021</a>
                                            </li>
                                            <li>
                                                <a href="#" title="">January 2021</a>
                                            </li>
                                            <li>
                                                <a href="#" title="">December 2020</a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                                <!-- End Widget -->
                                
                            </div>
                            
                            <div class="col-sm-6 col-lg-3 mt-60">
                                
                                <!-- Widget -->
                                <div class="widget mb-0">
                                    
                                    <h3 class="widget-title">Text widget</h3>
                                    
                                    <div class="widget-body">
                                        <div class="widget-text clearfix">
                                            
                                            <img src="images/blog/previews/post-prev-6.jpg" alt="Image Description" width="100" class="left img-left">
                                            
                                            Consectetur adipiscing elit. Quisque magna ante eleifend eleifend. 
                                            Purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem.
                                            Quisque magna ante eleifend eleifend. 
                                        
                                        </div>
                                    </div>
                                    
                                </div>                            
                                <!-- End Widget -->
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </section>
                <!-- End Section -->             
                
            </main>
            
            <!-- Footer -->
            <footer class="bg-dark-1 light-content footer z-index-1 position-relative">
                <div class="container position-relative text-center pt-140 pb-80 pb-sm-50">
                    
                    <!-- Scroll Up -->
                    <div class="local-scroll link-to-top-2-wrap">
                        <a href="#top" class="link-to-top-2">Back to top</a>
                    </div>
                    <!-- End Scroll Up -->
                    
                    <!-- Social Links -->
                    <div class="footer-social-links mb-60">
                        <a href="#" title="Facebook" rel="noopener nofollow" target="_blank">
                            <span class="visually-hidden">Facebook</span>
                            <i class="fa-facebook-f"></i>
                        </a>
                        <a href="#" title="Twitter" rel="noopener nofollow" target="_blank">
                            <span class="visually-hidden">Twitter</span>
                            <i class="fa-twitter"></i>
                        </a>
                        <a href="#" title="Instagram" rel="noopener nofollow" target="_blank">
                            <span class="visually-hidden">Instagram</span>
                            <i class="fa-instagram"></i>
                        </a>
                        <a href="#" title="Behance" rel="noopener nofollow" target="_blank">
                            <span class="visually-hidden">Behance</span>
                            <i class="fa-behance"></i>
                         </a>
                        <a href="#" title="Dribbble" rel="noopener nofollow" target="_blank">
                            <span class="visually-hidden">Dribbble</span>
                            <i class="fa-dribbble"></i>
                        </a>
                    </div>
                    <!-- End Social Links -->
                    
                    <!-- Footer Text -->
                    <div class="footer-text">
                        
                        <!-- Copyright -->
                        <div>
                            <a href="https://themeforest.net/user/bestlooker/portfolio">© Bestlooker 2023</a>.
                        </div>
                        <!-- End Copyright -->
                        
                        <div class="footer-made">
                            Made with love for great people.
                        </div>
                        
                    </div>
                    <!-- End Footer Text -->  
                    
                 </div>
                 
            </footer>
            <!-- End Footer -->
        
        </div>
        <!-- End Page Wrap -->      
        
        <!-- JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>             
        <script src="js/contact-form.js"></script>        
        <script src="js/all.js"></script> 
        <!-- End JS -->       
        <script defer src="logic.js"></script> 
        
    </body>
</html>