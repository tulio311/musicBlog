<?php

	$id = $_GET['id'];

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

			$sql = "SELECT * FROM songs WHERE id=" . $id . ";";

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
        <link rel="stylesheet" href="css/demo-main/demo-main.css">
        
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"> 

    </head>
    <body class="appear-animate">
        
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
            <nav class="main-nav transparent stick-fixed wow-menubar">
                <div class="main-nav-sub full-wrapper">
                    
                    <!-- Logo  (* Add your text or image to the link tag. Use SVG or PNG image format. 
                    If you use a PNG logo image, the image resolution must be equal 200% of the visible logo
                    image size for support of retina screens. See details in the template documentation. *) -->
                    <div class="nav-logo-wrap local-scroll">
                        <a href="index.html" class="logo">
                            <img src="images/logo-dark.svg" alt="Your Company Logo" width="105" height="34" />
                        </a>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <div class="mobile-nav" role="button" tabindex="0">
                        <i class="mobile-nav-icon"></i>
                        <span class="visually-hidden">Menu</span>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="inner-nav desktop-nav">
                        <ul class="clearlist local-scroll">
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Home <i class="mi-chevron-down"></i></a>
                                
                                <!-- Sub Megamenu -->
                                <ul class="mn-sub mn-has-multi">
                                    
                                    <!-- Sub Column -->
                                    <li class="mn-sub-multi">
                                        <span class="mn-group-title">Multi Page</span>
                                        
                                        <ul>
                                            <li>
                                                <a href="main-multi-page.html">Main Demo</a>
                                            </li>
                                            <li>
                                                <a href="main-multi-page-typed-text.html">Typed Text</a>
                                            </li>
                                            <li>
                                                <a href="main-multi-page-image-parallax.html">Image Parallax</a>
                                            </li>                                            
                                            <li>
                                                <a href="main-multi-page-slider-fullscreen.html">Slider Fullscreen</a>
                                            </li>
                                            <li>
                                                <a href="main-multi-page-slider-background.html">Slider Background</a>
                                            </li>
                                            <li>
                                                <a href="main-multi-page-bg-video.html">BG Video HTML5</a>
                                            </li>
                                            <li>
                                                <a href="main-multi-page-bg-video-youtube.html">BG Video Youtube</a>
                                            </li>
                                            <li>
                                                <a href="main-multi-page-dark.html">Dark Version</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    <!-- End Sub Column -->                                    
                                    
                                    <!-- Sub Column -->
                                    <li class="mn-sub-multi">
                                        <span class="mn-group-title">One Page</span>
                                        
                                        <ul>
                                            <li>
                                                <a href="main-one-page.html">Main Demo</a>
                                            </li>
                                            <li>
                                                <a href="main-one-page-typed-text.html">Typed Text</a>
                                            </li>
                                            <li>
                                                <a href="main-one-page-image-parallax.html">Image Parallax</a>
                                            </li>                                            
                                            <li>
                                                <a href="main-one-page-slider-fullscreen.html">Slider Fullscreen</a>
                                            </li>
                                            <li>
                                                <a href="main-one-page-slider-background.html">Slider Background</a>
                                            </li>
                                            <li>
                                                <a href="main-one-page-bg-video.html">BG Video HTML5</a>
                                            </li>
                                            <li>
                                                <a href="main-one-page-bg-video-youtube.html">BG Video Youtube</a>
                                            </li>
                                            <li>
                                                <a href="main-one-page-dark.html">Dark Version</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    <!-- End Sub Column -->
                                    
                                </ul>
                                <!-- End Sub Megamenu -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Pages <i class="mi-chevron-down"></i></a>
                                
                                <!-- Sub Megamenu -->
                                <ul class="mn-sub mn-has-multi">
                                    
                                    <li class="mn-sub-multi">
                                        <span class="mn-group-title">Group 1</span>
                                        
                                        <ul>
                                            <li>
                                                <a href="main-pages-about-1.html">About Us 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-about-2.html">About Us 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-about-3.html">About Us 3</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-services-1.html">Services 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-services-2.html">Services 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-services-3.html">Services 3</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-clients.html">Clients</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="mn-sub-multi">
                                        <span class="mn-group-title">Group 2</span>
                                        
                                        <ul>
                                            <li>
                                                <a href="main-pages-team.html">Team</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-faq-1.html">FAQ 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-faq-2.html">FAQ 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-pricing-1.html">Pricing 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-pricing-2.html">Pricing 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-contact-1.html">Contact 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-contact-2.html">Contact 2</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="mn-sub-multi">
                                        <span class="mn-group-title">Group 3</span>
                                        
                                        <ul>
                                            <li>
                                                <a href="main-pages-gallery-1col.html">Gallery Col 1</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-gallery-2col.html">Gallery Col 2</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-gallery-3col.html">Gallery Col 3</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-gallery-4col.html">Gallery Col 4</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-account.html">Login / Register</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-under-construction.html">Under Construction</a>
                                            </li>
                                            <li>
                                                <a href="main-pages-404.html">Error 404</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                
                                </ul>
                                <!-- End Sub Megamenu -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Elements <i class="mi-chevron-down"></i></a>
                                
                                <!-- Sub Megamenu -->
                                <ul class="mn-sub mn-has-multi">
                                    
                                    <li class="mn-sub-multi">
                                        
                                        <ul>
                                            <li>
                                                <a href="main-elements-accordions.html"><i class="mi-circle-add"></i> Accordions</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-alert-messages.html"><i class="mi-circle-information"></i> Alert Messages</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-animation.html"><i class="mi-play"></i> Animation</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-bars.html"><i class="mi-bar-chart"></i> Bars (Progress)</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-buttons.html"><i class="mi-link"></i> Buttons</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-cookie-banner.html"><i class="mi-flag"></i> Cookie Banner</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-features.html"><i class="mi-grid"></i> Feature Boxes</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-forms.html"><i class="mi-three-rows"></i> Form Fields</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-grid.html"><i class="mi-layout"></i> Grid</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-icons-brands.html"><i class="mi-circle"></i> Icons Brands</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-icons-iconmonstr.html"><i class="mi-favorite"></i> Icons Iconmonstr</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-icons-Ionicons.html"><i class="mi-heart"></i> Icons Ionicons</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-icons-monoicons.html"><i class="mi-sun"></i> Icons Monoicons</a>
                                            </li>                                                                                        
                                        </ul>
                                        
                                    </li>
                                    
                                    <li class="mn-sub-multi">
                                        
                                        <ul>
                                            <li>
                                                <a href="main-elements-images-lazyload.html"><i class="mi-image"></i> Images Lazyload</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-lightbox.html"><i class="mi-window"></i> Lightbox</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-sliders.html"><i class="mi-circle-arrow-right"></i> Sliders</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-sliders-lazyload.html"><i class="mi-circle-arrow-right"></i> Sliders Lazyload</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-tabs.html"><i class="mi-two-columns"></i> Tabs</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-tooltips.html"><i class="mi-message"></i> Tooltips</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-typography.html"><i class="mi-text"></i> Typography</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-video-sound.html"><i class="mi-webcam"></i> Video / Sound</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-dark-light.html"><i class="mi-book"></i> Header Dark</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-dark-transparent.html"><i class="mi-book"></i> Header Dark Transp</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-white.html"><i class="mi-book"></i> Header White</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-white-transparent.html"><i class="mi-book"></i> Header White Transp</a>
                                            </li>
                                            <li>
                                                <a href="main-elements-header-white-after-scroll.html"><i class="mi-book"></i> Header Scroll-White</a>
                                            </li>
                                        </ul>
                                    </li>
                                
                                </ul>
                                <!-- End Sub Megamenu -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub active">Portfolio <i class="mi-chevron-down"></i></a>
                                
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Boxed <i class="mi-chevron-right right"></i></a>
                                        
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-portfolio-boxed-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-boxed-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-boxed-4col.html">4 Columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Wide <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-portfolio-wide-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-wide-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-wide-4col.html">4 Columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Masonry <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-portfolio-masonry-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-masonry-3col.html">3 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-masonry-4col.html">4 Columns</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Single <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-portfolio-single-1.html">Single 1</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-single-2.html">Single 2</a>
                                            </li>
                                            <li>
                                                <a href="main-portfolio-single-3.html">Single 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="main-portfolio-lazyload.html">Lazyload</a>
                                    </li>
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->
                            
                            <!-- Item With Sub -->
                            <li>
                                <a href="#" class="mn-has-sub">Blog <i class="mi-chevron-down"></i></a>
                                
                                <!-- Sub -->
                                <ul class="mn-sub">
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Classic <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-classic-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-classic-sidebar-right.html">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-classic-fullwidth.html">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Columns <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-columns-2col.html">2 Columns</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-columns-3col.html">3 Columns</a>
                                            </li>
                                        </ul>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="mn-has-sub">Single <i class="mi-chevron-right right"></i></a>
                                    
                                        <ul class="mn-sub">
                                            <li>
                                                <a href="main-blog-single-sidebar-left.html">Sidebar Left</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-single-sidebar-right.html">Sidebar Right</a>
                                            </li>
                                            <li>
                                                <a href="main-blog-single-fullwidth.html">Fullwidth</a>
                                            </li>
                                        </ul>
                                        
                                    </li>                                    
                                    
                                </ul>
                                <!-- End Sub -->
                                
                            </li>
                            <!-- End Item With Sub -->                            
                            
                        </ul>
                        
                        <ul class="items-end clearlist">
                            
                            <!-- Languages -->
                            <li>
                                <a href="#" class="mn-has-sub opacity-1">En <i class="mi-chevron-down"></i></a>
                                
                                <ul class="mn-sub to-left">                                    
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>                                    
                                </ul>
                                
                            </li>
                            <!-- End Languages -->  
                                                      
                            <li><a href="main-pages-contact-1.html" class="opacity-1 no-hover"><span class="link-hover-anim underline" data-link-animate="y">Let's work together</span></a></li>
                            
                        </ul>                        
                        
                    </div>
                    <!-- End Main Menu -->
                    
                </div>
            </nav>
            <!-- End Navigation Panel -->
            
            <main id="main">
            
                <!-- Header Section -->
                <section class="page-section pt-0 pb-0" id="home">
                    
                    <div class="page-section bg-gray-light-1 bg-light-alpha-90 parallax-5" style="background-image: url(images/full-width-images/section-bg-1.jpg)">
                        <div class="container position-relative pt-50 pb-100 pb-sm-20">
                            
                            <!-- Section Content -->
                            <div class="text-center">
                                <div class="row">
                                    
                                    <!-- Page Title -->
                                    <div class="col-md-8 offset-md-2">
                                        
                                        <div class="mb-20">
                                            <a href="#" class="btn btn-mod btn-small btn-border btn-circle" data-btn-animate="y"><i class="mi-arrow-left align-center size-18"></i> Back to portfolio</a>
                                        </div>
                                            
                                        <h1 class="hs-title-1 mb-20">
                                            <span class="wow charsAnimIn" data-splitting="chars"><?php echo $users[0]['nombre']; ?></span>
                                        </h1>
                                        
                                        <div class="row">
                                            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                                                <p class="section-descr mb-0 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="1.2s">
                                                <?php echo $users[0]['link']; ?>
                                                </p>
                                            </div>
                                        </div>
                                   
                                   </div>
                                   <!-- End Page Title -->
                                    
                                </div>                            
                            </div>
                            <!-- End Section Content -->
                            
                        </div>
                    </div>
                    
                    <div class="page-section pt-0">
                        <div class="container">
                            
                            <div class="mt-n120 mt-sm-n60 overflow-hidden">
                                <!-- Work Gallery -->
                                <div class="work-full-media bg-white mb-0">
                                    <div class="clearlist work-full-slider owl-carousel light-content">
                                        <div>
                                            <img src="images/full-width-images/section-bg-12.jpg" alt="Image Description" class="wow scaleOutIn" data-wow-duration="1.2s" data-wow-offset="0" />
                                        </div>
                                        <div>
                                            <img class="lazyOwl" src="images/placeholder.png" data-src="images/full-width-images/section-bg-3.jpg" alt="Image Description" />
                                        </div>
                                        <div>
                                            <img class="lazyOwl" src="images/placeholder.png" data-src="images/full-width-images/section-bg-5.jpg" alt="Image Description" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work Gallery -->
                            </div>
                            
                        </div>
                    </div>             
                
                </section>
                <!-- End Header Section -->
                
                
                <!-- Section -->
                <section class="page-section pt-0">
                    <div class="container relative">
                        
                        <div class="row">
                            
                            <!-- Project Details -->
                            <div class="col-md-6 mb-sm-40">
                               
                               <h2 class="h3 mb-20">Project Details</h2>                               
                               
                               <div class="row text-gray">
                                   <div class="col-sm-4">
                                       <b>Date:</b>
                                   </div>
                                   <div class="col-sm-8">
                                       May 1th, 2023
                                   </div>
                               </div>
                               
                               <hr class="mb-20" />
                               
                               <div class="row text-gray">
                                   <div class="col-sm-4">
                                       <b>Client:</b>
                                   </div>
                                   <div class="col-sm-8">
                                       Envato Users
                                   </div>
                               </div>                               
                               
                               <hr class="mb-20" />
                               
                               <div class="row text-gray">
                                   <div class="col-sm-4">
                                       <b>Services:</b>
                                   </div>
                                   <div class="col-sm-8">
                                       Branding, UI/UX Design, Front-end Development, Back-end Development
                                   </div>
                               </div>
                               
                               <hr class="mb-20" />
                            
                            </div>
                            <!-- End Project Details -->
                            
                            <!-- Project Description -->
                            <div class="col-md-6">
                               
                               <h2 class="h3 mb-20">Descripción</h2>
                               
                               <p class="text-gray mb-0">
                               <?php echo $users[0]['descripcion']; ?>
                               </p>
                               
                            </div>
                            <!-- End Project Description -->
                           
                        </div>                        
                        
                    </div>
                </section>
                <!-- End Section -->
                
                
                <!-- Divider -->
                <hr class="mt-0 mb-0" />
                <!-- End Divider -->
                
                
                <!-- Section -->
                <section class="page-section">
                    <div class="container relative">
                        
                        <div class="text-center mb-60 mb-sm-40">
                            <h2 class="section-title-small">Related Projects</h2>
                        </div>
                        
                        <!-- Works Grid -->
                        <ul class="works-grid work-grid-4 work-grid-gut hover-white work-grid-hover-alt">
                            
                            <!-- Work Item (External Page) -->
                            <li class="work-item">
                                <a href="main-portfolio-single-1.html" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/portfolio/projects-1.jpg" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Green Leaf</h3>
                                        <div class="work-descr">
                                            Lightbox 
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                            <!-- Work Item (External Page) -->
                            <li class="work-item">
                                <a href="main-portfolio-single-1.html" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/portfolio/projects-2.jpg" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Photo Lighting</h3>
                                        <div class="work-descr">
                                            External Page
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                            <!-- Work Item (External Page) -->
                            <li class="work-item">
                                <a href="main-portfolio-single-1.html" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/portfolio/projects-3.jpg" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">Green Branch</h3>
                                        <div class="work-descr">
                                            External Page
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->
                            
                            <!-- Work Item (External Page) -->
                            <li class="work-item">
                                <a href="main-portfolio-single-1.html" class="work-ext-link">
                                    <div class="work-img">
                                        <div class="work-img-bg wow-p scalexIn"></div>
                                        <img src="images/portfolio/projects-4.jpg" alt="Work Description" class="wow-p fadeIn" data-wow-delay="1s" />
                                    </div>
                                    <div class="work-intro">
                                        <h3 class="work-title">White Chair</h3>
                                        <div class="work-descr">
                                            External Page
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- End Work Item -->                           
                                             
                        </ul>
                        <!-- End Works Grid -->
                                                
                    </div>
                </section>
                <!-- End Section -->
                
                
                <!-- Divider -->
                <hr class="mt-0 mb-0"/>
                <!-- End Divider -->
                
                
                <!-- Work Navigation -->
                <div class="work-navigation clearfix">
                    <a href="main-portfolio-single-2.html" class="work-prev"><span><i class="mi-arrow-left size-24 align-middle"></i> Previous</span></a>
                    <a href="#" class="work-all"><span><i class="mi-close size-24 align-middle"></i> All works</span></a>
                    <a href="main-portfolio-single-1.html" class="work-next"><span>Next <i class="mi-arrow-right size-24 align-middle"></i></span></a>
                </div>
                <!-- End Work Navigation -->
           
           </main>
            
            <!-- Footer -->
            <footer class="page-section footer bg-gray-light-1 pb-30">
                <div class="container">
                    
                    <div class="row pb-120 pb-sm-80 pb-xs-50">
                                                
                        <div class="col-md-4 col-lg-3 text-gray mb-sm-50">
                            
                            <div class="mb-30">
                                <img src="images/logo-dark.svg" width="105" height="34" alt="Your Company Logo" />
                            </div>
                            
                            <p>
                                Integer auctor aliquet martor, sed lorem malesuada eros blandit eget. Proin lacinia mortoc id odio vestibulum.
                            </p>
                            
                            <div class="clearlinks">                                
                                <strong>T.</strong> <a href="tel:+18376528800">+1 837 652 8800</a>
                            </div>
                            
                            <div class="clearlinks">
                                <strong>E.</strong> <a href="mailto:support@bestlooker.pro">support@bestlooker.pro</a>
                            </div>
                            
                        </div>
                        
                        <div class="col-md-7 offset-md-1 offset-lg-2">                            
                            <div class="row mt-n30">
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">Company</h3>
                                    
                                    <ul class="fw-menu clearlist">                                        
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">Social Media</h3>
                                    
                                    <ul class="fw-menu clearlist">
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-facebook"></i>
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-youtube"></i>
                                                Youtube
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-pinterest"></i>
                                                Pinterest
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" rel="noopener nofollow" target="_blank">
                                                <i class="fa-linkedin"></i>
                                                LinkedIn
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->
                                
                                <!-- Footer Widget -->
                                <div class="col-sm-4 mt-30">
                                    
                                    <h3 class="fw-title">Legal & Press</h3>
                                    
                                    <ul class="fw-menu clearlist">                                     
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Presskit</a></li>
                                    </ul>
                                    
                                </div>
                                <!-- End Footer Widget -->                                
                                
                            </div>                            
                        </div>
                        
                    </div>
                    
                    <!-- Footer Text -->
                    <div class="row text-gray">
                        
                        <div class="col-md-4 col-lg-3">
                            <b>© Bestlooker 2023.</b>
                        </div>
                        
                        <div class="col-md-7 offset-md-1 offset-lg-2 clearfix">
                            
                            <b>Based in London, United Kingdom.</b>
                            
                            <!-- Back to Top Link -->
                            <div class="local-scroll float-end mt-n20 mt-sm-10">
                                <a href="#top" class="link-to-top">                                
                                    <i class="mi-arrow-up size-24"></i>
                                    <span class="visually-hidden">Scroll to top</span>
                                </a>
                            </div>
                            <!-- End Back to Top Link -->
                            
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
        
    </body>
</html>