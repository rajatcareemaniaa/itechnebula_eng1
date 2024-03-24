<?php
include('Mobile_Detect.php');
include('BrowserDetection.php');
// include('save_entry.php');
// include('santa.php');

include('db.php');

$browser = new Wolfcast\BrowserDetection;

$browser_name = $browser->getName();
$browser_version = $browser->getVersion();

$detect = new Mobile_Detect();

if ($detect->isMobile()) {
  $type = 'Mobile';
} elseif ($detect->isTablet()) {
  $type = 'Tablet';
} else {
  $type = 'PC';
}

if ($detect->isiOS()) {
  $os = 'IOS';
} elseif ($detect->isAndroidOS()) {
  $os = 'Android';
} else {
  $os = 'Window';
}

$url = (isset($_SERVER['HTTPS'])) ? "https" : "http";
$url .= "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$ref = '';
if (isset($_SERVER['HTTP_REFERER'])) {
  $ref = $_SERVER['HTTP_REFERER'];
}
// $sql="insert into visitor(browser_name,browser_version,type,os,url,ref) values('$browser_name','$browser_version','$type','$os','$url','$ref')";
// mysqli_query($con,$sql);
// var_dump($browser_name);
// echo  $browser_name;

$sql = "INSERT INTO visitor (browser_name, browser_version, type, os, url, ref) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($con, $sql);

mysqli_stmt_bind_param($stmt, "ssssss", $browser_name, $browser_version, $type, $os, $url, $ref);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

?>
<!-- <a href="about.php">About</a> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="title" content="Transforming Ideas into Digital Realities | Expert Web Development Services For Business - 
   ITECHNEBULA  ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="
   ITECHNEBULA - Website Development Agency">
  <meta property="og:description" content="
   ITECHNEBULA is a professional website development agency, offering expert solutions for web design and development. Visit us at 
   ITECHNEBULA.com for top-notch web services.">
  <meta property="og:image" content="URL_of_your_featured_image">
  <meta property="og:url" content="http://www.
   ITECHNEBULA.com/">
  <meta property="og:url" content="http://www.
   ITECHNEBULA.com/">
  <meta property="og:type" content="http://www.
   ITECHNEBULA.com/">
  <meta property="og:site_name" content="http://www.
   ITECHNEBULA.com/">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">



  <!-- Latest version of Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->

  <!-- -----------------------------------google font---------------- -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,500&family=Lato&display=swap" rel="stylesheet"> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,500&family=Lato&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="style.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <script src="script.js" defer></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600;1,9..40,700;1,9..40,800;1,9..40,900;1,9..40,1000&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- -------------css----------- -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="Styles/carousel1.css" />
  <link rel="stylesheet" href="Styles/carousel2.css" />
  <link rel="stylesheet" href="Styles/carousel4.css" />
  <link rel="stylesheet" href="Styles/carousel3.css" />
  <link rel="stylesheet" href="Styles/iTechnebula_Specialists.css" />
  <link rel="stylesheet" href="./Styles/Blog.css">


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <style>

  </style>
  <!-- ----------------------------- -->
  <title></title>

</head>



<body>

<section>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/mssLogo.png?updatedAt=1706168321088" class="img-fluid"
            alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto mss_nav_ul ">
            <li class="nav-item">
              <a class="nav-link active mss_home" aria-current="page" href="index.php" style="color: #040484;">Home</a>
            </li>
            <li class="nav-item mx-4 dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Industries
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="industries.html">Real Estate</a></li>
                <li><a class="dropdown-item" href="#">Hotels, Banquet &  Hospitality</a></li>
                <li><a class="dropdown-item" href="#">Health care and  Doctors</a></li>
              </ul>
            </li>
            <li class="nav-item mx-4 mss_cast">
              <a class="nav-link mss_home1" href="Casestudies.html" style="color: #040484;">Casestudies</a>
            </li>

            <li class="nav-item  ">
              <a class="nav-link mss_home2" href="iTechnebula_Specialists.html" tabindex="-1" aria-disabled="true"
                style="color: #040484;">itechnebula Specialists</a>
            </li>
          </ul>
          <form class="d-flex mss_forms">
            <a href="form.php" class="btn rounded-pill mss_request" type="submit">
              Request a quote
            </a>
            <a href="https://codedelhiites.dev/team/authentication" class="btn mss_client rounded-pill" type="submit">

              <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/mssButtonIcon.png?updatedAt=1706168319415" alt="icon" class="img-fluid">
              Client Login</a>

          </form>
        </div>
      </div>
    </nav>
  </section>

  <section class="rjj_bg">
    <div class="container ">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <p class="onlylne"></p>
          <h1 class="text-tech mx-auto " style=" font-weight: bold;"> Revolutionize Your
            <span class="ck_text_sec_12" style=" font-weight: bold;"> लोकल</span> Business with Tech- <span class="sp-rjj" style=" font-weight: bold;">
              ITECHNEBULA</span>
          </h1>
          <p class="text-app mx-auto">📈 Streamline your processes, connect with customers in innovative ways, and watch
            your Local business soar to new heights. With ITECHNEBULA expertise, every click becomes a step toward
            success. 💻 we're here to equip your business for the digital era. Let's amplify your local impact together!
          </p>
          <a href="./GetStarted/Gs_1.html"> <button class="border-0 mx-auto find-rjj mb-4 rounded-pill">Let’s Start Now</button></a>
          <!-- <img src="/Assets/Images/Group 56.png" alt="" class="img-fluid heroCircle imageTopD d-block" /> -->
        </div>
        <div class="col-lg-6 mt-5">
          <div title="Play video" class="play-gif mt-5" id="circle-play-b">
            <div class="video-container mx-auto mx-sm-0">
              <video autoplay muted loop class="video-frame">
                <source src="https://ik.imagekit.io/ujxwdmvj7k/finsl%20website%20promo.mp4?updatedAt=1705316597583" type="video/mp4">
              </video>
              <h1 class="our-h mt-2 ck_carousel1_text1"> Our Clients</h1>
              <div id="image-carousel" class="owl-carousel owl-theme ck_carousel1_img">
                <div class="item"> <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Logo1.png?updatedAt=1706168312328" class="img-fluid center-rj" alt="Image 1" /></div>
                <div class="item"> <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Logo2.png?updatedAt=1706168312311" class="img-fluid center-rj " alt="Image 2" />
                </div>
                <div class="item"> <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Logo3.png?updatedAt=1706168312767" class="img-fluid center-rj " alt="Image 3" />
                </div>
                <div class="item"> <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Logo4.png?updatedAt=1706168313674" class="img-fluid center-rj" alt="Image 4" /></div>
                <div class="item"> <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Logo5.png?updatedAt=1706168314194" class="img-fluid center-rj" alt="Image 5" />
                </div>
                <div class="item"> <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Logo6.png?updatedAt=1706168313774" class="img-fluid center-rj" alt="Image 6" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <script>
    // Initial scale factor (1 is the original size)
    let scale = 1;

    // Function to handle the scaling of the video container
    function scaleVideoContainer() {
      const videoContainer = document.querySelector('.video-container');
      videoContainer.style.transform = `scale(${scale})`;
    }

    // Event listener to detect scroll direction
    let lastScrollTop = 0;
    window.addEventListener('scroll', function() {
      const st = window.scrollY;
      if (st > lastScrollTop) {
        // Scrolling down, make the video smaller
        scale -= 0.05; // Adjust the scale factor as needed
      } else {
        // Scrolling up, make the video larger
        scale += 0.05; // Adjust the scale factor as needed
      }

      // Ensure the scale factor is within limits
      if (scale < 0.5) scale = 0.5; // Minimum scale
      if (scale > 1) scale = 1; // Maximum scale

      // Apply the new scale factor to the video container
      scaleVideoContainer();

      lastScrollTop = st;
    });
  </script>

  <section style="background: #A4D5DB;" class="">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 mt-5">
          <h2 style="text-align: center;" class="">Our Services <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/office.png?updatedAt=1706168322330" class="img-fluid ">
          </h2>
          <p class=" text-center mt-3">In order to help you achieve your business goals, we offer comprehensive<br>
            IT services that are tailored to your needs.</p>
        </div>
      </div>
    </div>
    <div class="container mt-3">
      <div class="row  justify-content-center ">
        <div class="col-lg-4 mb-4">
          <div class="card shadow rjj_filter my-card left-hover" style="height: 360px;" >
            <div class="card-body rjj-body mb-4 mt-5">
              <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/vector-img/Ellipse%20633.png?updatedAt=1706168339532" class="img-fluid rjj_crcl">
              <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/web-site.png?updatedAt=1706168336290" class="img-fluid">
              <h5 class="rjj-title mt-3">E-commerce Development</h5>
              <p class="rjj-card-text  mt-4">
                A custom-tailored e-commerce solution for businesses of all sizes is what we specialize in.
              </p>
              <div>
                <button class="btn4  rjj_read">Read More <i class="bi bi-arrow-right"></i></button>


              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4"  >
          <div style="height: 363px;" class="card shadow rjj_filter my-card up-hover "  >
            <div class="card-body rjj-body "  >
              <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/vector-img/Ellipse%20633.png?updatedAt=1706168339532" class="img-fluid rjj_crcl">
              <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/wordpress.png?updatedAt=1706168336281" class="img-fluid">
              <h5 class="rjj-title mt-3">WordPress Development</h5>
              <p class="rjj-card-text  mt-4">
                A theme tailored to your brand and a plugin that enhances your site's functionality.
              </p>

              <button class="btn4 rjj_read" id="service2-readmore">Read More <i class="bi bi-arrow-right"></i></button>

            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card shadow rjj_filter my-card right-hover" style="height: 360px;" >
            <div class="card-body rjj-body mb-4 mt-5">
              <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/vector-img/Ellipse%20633.png?updatedAt=1706168339532" class="img-fluid rjj_crcl">
              <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/web-site.png?updatedAt=1706168336290" class="img-fluid">
              <h5 class="rjj-title mt-3">Website Redesign </h5>
              <p class="rjj-card-text  mt-4">
                Conducting a thorough analysis of your current website. Improving the visitor experience.</p>
              <button class="btn4 rjj_read">Read More <i class="bi bi-arrow-right"></i></button>

            </div>
          </div>
        </div>
      </div>
      <div class="row   justify-content-center">
        <div class="col-lg-4 mb-4">
          <div class="rjj_filter" style="filter: drop-shadow(#5454AC 0rem -7px 0px);  ">
            <div class="card shadow  my-card left-hover" style="height: 360px;" >
              <div class="card-body rjj-body mb-4 mt-5"  >
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/vector-img/Ellipse%20633.png?updatedAt=1706168339532" class="img-fluid rjj_crcl">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/magnifying-glass.png?updatedAt=1706168313779" class="img-fluid">
                <h5 class="rjj-title mt-3">Conversion Rate Optimization</h5>
                <p class="rjj-card-text  mt-4">
                  An in-depth analysis of your website's performance to identify bottlenecks. Evaluation of the
                  website's usability.
                </p>

                <button class="btn4 rjj_read">Read More <i class="bi bi-arrow-right"></i></button>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="rjj_filter">
            <div class="card shadow rjj_card my-card down-hover" style="height: 360px;">
              <div class="card-body rjj-body mb-4 mt-5">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/vector-img/Ellipse%20633.png?updatedAt=1706168339532" class="img-fluid rjj_crcl">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/startup.png?updatedAt=1706168330842" class="img-fluid">
                <h5 class="rjj-title mt-3">Search Engine Optimization</h5>
                <p class="rjj-card-text  mt-4">
                  Develop a tailored SEO strategy based on a comprehensive assessment. Increasing
                  लोकल search for
                  businesses.
                </p>
                <button class="btn4 rjj_read" id="service5-readmore">Read More <i class="bi bi-arrow-right"></i></button>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="rjj_filter" style="filter: drop-shadow(#5454AC 0rem -7px 0px);  ">
            <div class="card shadow rjj_card my-card right-hover" style="height: 360px;" >
              <div class="card-body rjj-body mb-4 mt-5">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/vector-img/Ellipse%20633.png?updatedAt=1706168339532" class="img-fluid rjj_crcl">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/layers.png?updatedAt=1706168309653" class="img-fluid">
                <h5 class="rjj-title mt-3">Cross Platform Mobile App</h5>
                <p class="rjj-card-text mt-4">
                  The development of React Native mobile apps is an essential part of a comprehensive cross-platform
                  strategy.
                </p>


                <button class="btn4  rjj_read" id="service6-readmore ">Read More <i class="bi bi-arrow-right"></i></button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section class="ck_123">
    <div class="container">
      <div class="row justify-content-center mt-3">
        <div class="col-lg-7 mt-5">
          <h3 class="h-3">Portfolio <span class="span-day1" id="current-date-month-year"></span></h3>
          <h2 class="h-2 mt-2" style="text-align: center;">Our Great Work <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/briefcase.png?updatedAt=1706168288143" class="img-fluid"></h2>

        </div>

      </div>
    </div>
    <div class="container">
      <div class="row">
        <div style="text-align: center;" class="col-lg-12  g-3 mb-5 ">
          <!-- <div class="mb-5 btn-card1rj"> -->
          <div class="mt-5 rjj-ebtn">
            <button type="button" class="btn-0 btn-light ck_sec4_btn1 " style="border: 1px solid black;" onclick="showCategory('ecommerce', 1)">Web Development</button>
            <button type="button" class="btn-0 btn-light ck_sec4_btn2 " style="border: 1px solid black;" onclick="showCategory('redesign', 2)">Website Redesign</button>
            <button type="button" class="btn-0 btn-light ck_sec4_btn3 " style="border: 1px solid black;" onclick="showCategory('mobileapps', 3)">Mobile Apps</button>
          </div>

          <div id="image-carousel123" class="owl-carousel">
            <!-- <div id="myCarousel" class="owl-carousel"> -->

            <div class="thumb-wrapper mt-5">
              <div class="img-box">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/Imgae%20Place%20Holder%20(1).png?updatedAt=1706168345460" class="img-fluid ck-img-rj" alt="">
              </div>
              <div class="thumb-content mt-5">
                <p class="card-text">The journey of Fruniro from a traditional
                  furniture retailer to a
                  thriving e-commerce
                  brand illustrates the power of a strategic digital
                  transformation.</p>
              </div>
            </div>

            <div class="thumb-wrapper mt-5">
              <div class="img-box">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/Imgae%20Place%20Holder%20(2).png?updatedAt=1706168345471" class="img-fluid ck-img-rj" alt="">
              </div>
              <div class="thumb-content mt-5">
                <p class="card-text">An e-commerce powerhouse like Shopy has
                  taken a traditional Outlet
                  retailer and
                  transformed it into a thriving e-commerce business.</p>
              </div>
            </div>

            <div class="thumb-wrapper mt-5">
              <div class="img-box">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/Imgae%20Place%20Holder.png?updatedAt=1706168347857" class="img-fluid ck-img-rj" alt="">
              </div>
              <div class="thumb-content mt-5">
                <p class="card-text">Strategic digital innovation has
                  transformed FASCO from a traditional
                  industrial
                  equipment supplier to a profitable e-commerce powerhouse.
                </p>
              </div>
            </div>

            <div class="thumb-wrapper mt-5">
              <div class="img-box">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_1.png?updatedAt=1706168342623" class="img-fluid ck-img-rj" alt="">
              </div>
              <div class="thumb-content mt-5">
                <p class="card-text">Creating a modern, user-friendly, and
                  engaging website redesign has
                  helped Hawkins
                  enhance its brand and capture new market opportunities.</p>
              </div>
            </div>

            <div class="thumb-wrapper mt-5">
              <div class="img-box">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_2.png?updatedAt=1706168342631" class="img-fluid ck-img-rj" alt="">
              </div>
              <div class="thumb-content mt-5">
                <p class="card-text">This transformation of Takee's website into
                  a cutting-edge online
                  platform illustrates
                  the transformative power of mobile applications.</p>
              </div>
            </div>

            <div class="thumb-wrapper mt-5">
              <div class="img-box">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_3.png?updatedAt=1706168342850" class="img-fluid ck-img-rj" alt="">
              </div>
              <div class="thumb-content mt-5">
                <p class="card-text">Creating a modern, user-friendly, and
                  engaging website redesign has
                  helped Hawkins
                  enhance its brand and capture new market opportunities.</p>
              </div>
            </div>

            <div class="thumb-wrapper mt-5">
              <div class="img-box">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_44.png?updatedAt=1706168343154" class="img-fluid ck-img-rj" alt="">
              </div>
              <div class="thumb-content mt-5">
                <p class="card-text">We provide a convenient food delivery
                  experience through our mobile
                  app. Additionally,
                  Just Eat the app has improved customer loyalty and
                  satisfaction.</p>
              </div>
            </div>

            <div class="thumb-wrapper mt-5">
              <div class="img-box">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_4.png?updatedAt=1706168342921" class="img-fluid ck-img-rj" alt="">
              </div>
              <div class="thumb-content mt-5">
                <p class="card-text">Travel bookings have become easier with
                  Beesnbirds' mobile apps. Apps
                  not only
                  streamline booking processes, but also increase customer
                  satisfaction.</p>
              </div>
            </div>

            <div class="thumb-wrapper mt-5">
              <div class="img-box">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_5.png?updatedAt=1706168343256" class="img-fluid ck-img-rj" alt="">
              </div>
              <div class="thumb-content mt-4">
                <p class="card-text">With our mobile app solutions, Moodtrack is
                  able to provide our users
                  with a
                  user-friendly and effective mood tracking platform that they
                  can use on the go.</p>
              </div>
            </div>
          </div>


        </div>

        <div style="text-align: center;" class="">
          <button type="button" class="btn ck_sec4_btn " onclick="showSection('ck_456')">See
            All</button>
        </div>
      </div>

      <div class="mt-4">

      </div>
    </div>
  </section>


  <script>
    // Get the current date
    const currentDate1 = new Date();

    // Extract day, month, and year from the current date
    const day = currentDate1.getDate();
    const month = currentDate1.toLocaleString('default', {
      month: 'long'
    }); // Full month name
    const year = currentDate1.getFullYear();

    // Display the date in the specified span element
    const displayElement = document.getElementById('current-date-month-year');
    displayElement.textContent = `${day} ${month} ${year}`;
  </script>

  <script>
    $(document).ready(function() {
      $("#image-carousel123").owlCarousel({
        items: 3,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          991: {
            items: 3
          }
        },
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
      });

      // Call the toggleButtons function every 5 seconds
      setInterval(toggleButtons, 7000);
    });

    function toggleButtons() {
      // Get the index of the currently active button
      var activeIndex = $(".rjj-ebtn button.active-button").index();

      // Remove the 'active-button' class from all buttons
      $(".rjj-ebtn button").removeClass("active-button");

      // Calculate the index of the next button to be made active
      var nextIndex = (activeIndex + 1) % 3; // Assuming you have 3 buttons

      // Add the 'active-button' class to the next button
      $(".rjj-ebtn button:eq(" + nextIndex + ")").addClass("active-button");
    }

    function showCategory(category, buttonNumber) {
      // Your logic to show the images based on the category goes here

      // Remove the 'active-button' class from all buttons
      $(".rjj-ebtn button").removeClass("active-button");

      // Add the 'active-button' class to the clicked button
      $(`.ck_sec4_btn${buttonNumber}`).addClass("active-button");
    }

    function showSection(sectionId) {
      // Your logic to show the specified section goes here
    }
  </script>

  <section class="ms-main-section ck_456" style="display: none;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 mt-5">
          <h3 class="h-3">Portfolio <span class="span-day1" id="current-date-month-year"></span></h3>
          <h2 class="h-2" style="text-align: center;">Our Great Work <img src="/Assets/Images/briefcase.png" class="img-fluid"></h2>

        </div>

      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-around ms_card mt-5">
          <div class="card" id="mscardradious" style="width: 19rem">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ck_img41.png?updatedAt=1706168291005" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text ms-card-text">
                The journey of Fruniro from a traditional furniture retailer
                to a thriving e-commerce brand illustrates the power of a
                strategic digital transformation.
              </p>
            </div>
          </div>
          <div class="card ms_mid" id="mscardradious" style="width: 19rem">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ck_img42.png?updatedAt=1706168291051" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text ms-card-text">
                An e-commerce powerhouse like Shopy has taken a traditional
                Outlet retailer and transformed it into a thriving e-commerce
                business.
              </p>
            </div>
          </div>
          <div class="card" style="width: 19rem" id="mscardradious">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ck_img43.png?updatedAt=1706168291191" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text ms-card-text">
                Strategic digital innovation has transformed FASCO from a
                traditional industrial equipment supplier to a profitable
                e-commerce powerhouse.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-around ms_card">
          <div class="card" style="width: 19rem" id="mscardradious">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ck_img44.png?updatedAt=1706168291356" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text ms-card-text">
                Creating a modern, user-friendly, and engaging website
                redesign has helped Hawkins enhance its brand and capture new
                market opportunities.
              </p>
            </div>
          </div>
          <div class="card ms_mid" style="width: 19rem" id="mscardradious">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ck_img45.png?updatedAt=1706168292741" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text ms-card-text">
                Through our team's dedication, Samsung was able to enhance its
                brand and capture new opportunities in the online home
                electronic market.
              </p>
            </div>
          </div>
          <div class="card" style="width: 19rem" id="mscardradious">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ck_img46.png?updatedAt=1706168293086" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text ms-card-text">
                This transformation of Takee's website into a cutting-edge
                online platform illustrates the transformative power of mobile
                applications.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-around ms_card">
          <div class="card" style="width: 19rem" id="mscardradious">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ck_img47.png?updatedAt=1706168293018" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text ms-card-text">
                Travel bookings have become easier with Beesnbirds' mobile
                apps. Apps not only streamline booking processes, but also
                increase customer satisfaction.
              </p>
            </div>
          </div>
          <div class="card ms_mid mscardradious" style="width: 19rem" id="mscardradious">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ck_img48.png?updatedAt=1706168293365" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text ms-card-text">
                We provide a convenient food delivery experience through our
                mobile app. Additionally, Just Eat the app has improved
                customer loyalty and satisfaction.
              </p>
            </div>
          </div>
          <div class="card" style="width: 19rem" id="mscardradious">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ck_img49.png?updatedAt=1706168293745" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-text ms-card-text">
                With our mobile app solutions, Moodtrack is able to provide
                our users with a user-friendly and effective mood tracking
                platform that they can use on the go.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center my-5">
      <button class="border-0 ms_sellal rounded-pill btn ck_sec4_btn" onclick="showSection('ck_123')">View
        Less</button>
    </div>
  </section>



  <script>
    // Function to show the specified section and hide the other
    function showSection(sectionId) {
      // Hide both sections initially
      $(".ck_123, .ck_456").hide();

      // Show the specified section
      $(`.${sectionId}`).show();
    }

    // Function to switch between sections when buttons are clicked
    $(document).ready(function() {
      showSection('ck_123'); // Show 'ck_123' initially

      // "See All" button click event
      $(".btn-outline-primary1").click(function() {
        showSection('ck_456'); // Show 'ck_456' and hide 'ck_123'
      });

      // "View Less" button click event
      $(".ms_sellal").click(function() {
        showSection('ck_123'); // Show 'ck_123' and hide 'ck_456'
      });
    });
  </script>




  <section class="mt-5 ck_75768">
    <div class="container">
      <div class="row">
        <div class="col-md-12 onlypadding">
          <div class="rjj_main">
            <h1 class="rjj_idea mx-3">
              Your idea turn into <span class="rjj_re"> reality🚀</span>
              <!-- <span><img src="Assets/Images/rocket.png" class="img-fluid rocket" alt="" /></span> -->
            </h1>
            <p class="rjj_web">
              Every web development project begins with a project manager from
              <span style="color: #040484">
                ITECHNEBULA </span>interviewing you
              about your goals. We need to do this so that we can come up with
              a solution for your Traditional business, estimate a timeline,
              and calculate a budget.
            </p>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex position-relative mb-5 ">
              <div class="rjj_line"></div>
              <div class=" mx-4  ">
                <div class="rjj_fex ">
                  <div class="">
                    <button onclick="showImage(1)" class="rjj_2 shadow border-0 rounded-pill active" id="button1">1</button>
                  </div>
                  <div class="">
                    <h5 class="rjj_h">Your Idea</h5>
                    <p class="rjj_p">
                      When we at
                      ITECHNEBULA are assessing whether we are a good
                      fit for your project, we always begin by asking screening
                      questions to confirm that we are a good fit.
                    </p>
                  </div>
                </div>

                <div class="rjj_fex">
                  <div>
                    <button onclick="showImage(2)" class="rjj_2  border-0 shadow rounded-pill" id="button2">
                      2
                    </button>
                  </div>
                  <div>
                    <h5 class="rjj_h">Strategy meeting</h5>
                    <p class="rjj_p">
                      It will be a meeting where we discuss our proposed
                      strategy for reaching your website goals together. From
                      the beginning to the end, you will be able to follow the
                      entire process with this project update system.
                    </p>
                  </div>
                </div>
                <div class="rjj_fex">
                  <div>
                    <button onclick="showImage(3)" class="rounded-pill border-0 rjj_2" id="button3">3</button>
                  </div>
                  <div>
                    <h5 class="rjj_h">Agile and Scrum framework</h5>
                    <p class="rjj_p">
                      At this point, the project manager and the lead developer
                      and designer will meet to discuss the project .As a
                      result, we will be working with an agile and scrum
                      framework to ensure that your project is completed on time
                      and within budget.
                    </p>
                  </div>
                </div>
                <div class="rjj_fex">
                  <div>
                    <button onclick="showImage(4)" class=" rjj_2 rounded-pill  border-0 " id="button4">
                      4
                    </button>
                  </div>
                  <div>
                    <h5 class="rjj_h">Your website goes live</h5>
                    <p class="rjj_p">
                      After the final checks are complete, we will ensure that
                      all tracking pixels, links, and user interfaces are
                      compatible across all platforms. As part of the process of
                      optimizing the website for user experience, we will
                      perform several different tests.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <div class="position-relative rightImgeMainDivision">
                <!-- Add your UFO and other images here based on the button clicks -->
                <img id="selectedImage" src="Assets/Images/Businessman with a coffee mug got a new idea.png" class="img-fluid jumping-image ck_img_index_1" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-5 ck_76768">
    <div class="container">
      <div class="row">
        <div class="col-md-12 onlypadding">
          <div class="rjj_main">
            <h1 class="rjj_idea mx-3">
              Your idea turn into <span class="rjj_re"> reality🚀</span>
            </h1>
            <p class="rjj_web">
              Every web development project begins with a project manager from
              <span style="color: #040484">
                ITECHNEBULA </span>interviewing you
              about your goals. We need to do this so that we can come up with
              a solution for your Traditional business, estimate a timeline,
              and calculate a budget.
            </p>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex position-relative mb-5 ">
              <div class="rjj_line"></div>
              <div class=" mx-4  ">
                <div class="rjj_fex ">
                  <div class="b1">
                    <button onclick="changeImage(1)" class="rjj_2 shadow border-0 rounded-pill active" id="button1">1</button>
                  </div>
                  <div class="">
                    <img id="selectedImage" src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Businessman%20with%20a%20coffee%20mug%20got%20a%20new%20idea.png?updatedAt=1706168288423" class="img-fluid jumping-image ck_img_index_1" alt="" />
                    <h5 class="rjj_h">Your Idea</h5>
                    <p class="rjj_p">
                      When we at
                      ITECHNEBULA are assessing whether we are a good
                      fit for your project, we always begin by asking screening
                      questions to confirm that we are a good fit.
                    </p>
                
                  </div>
                </div>

                <div class="rjj_fex">
                  <div class="b1">
                    <button onclick="changeImage(2)" class="rjj_2 border-0 shadow rounded-pill" id="button2">2</button>
                  </div>
                  <div>
                    <img id="selectedImage" src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_7.png?updatedAt=1706168343439" class="img-fluid jumping-image ck_img_index_1" alt="" />
                    <h5 class="rjj_h">Strategy meeting</h5>
                    <p class="rjj_p">
                      It will be a meeting where we discuss our proposed
                      strategy for reaching your website goals together. From
                      the beginning to the end, you will be able to follow the
                      entire process with this project update system.
                    </p>
                 
                  </div>
                </div>
                <div class="rjj_fex">
                  <div class="b1">
                    <button onclick="changeImage(3)" class="rounded-pill border-0 rjj_2" id="button3">3</button>
                  </div>
                  <div>
                    <img id="selectedImage" src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_8.png?updatedAt=1706168345351" class="img-fluid jumping-image ck_img_index_1" alt="" />
                    <h5 class="rjj_h">Agile and Scrum framework</h5>
                    <p class="rjj_p">
                      At this point, the project manager and the lead developer
                      and designer will meet to discuss the project .As a
                      result, we will be working with an agile and scrum
                      framework to ensure that your project is completed on time
                      and within budget.
                    </p>
                 
                  </div>
                </div>
                <div class="rjj_fex">
                  <div class="b1">
                    <button onclick="changeImage(4)" class="rjj_2 rounded-pill border-0" id="button4">4</button>
                  </div>
                  <div>
                    <img id="selectedImage" src="https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_9.png?updatedAt=1706168345270" class="img-fluid jumping-image ck_img_index_1" alt="" />
                    <h5 class="rjj_h">Your website goes live</h5>
                    <p class="rjj_p">
                      After the final checks are complete, we will ensure that
                      all tracking pixels, links, and user interfaces are
                      compatible across all platforms. As part of the process of
                      optimizing the website for user experience, we will
                      perform several different tests.
                    </p>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
              <div class="position-relative rightImgeMainDivision img-boy">
                <img id="selectedImage" src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Businessman%20with%20a%20coffee%20mug%20got%20a%20new%20idea.png?updatedAt=1706168288423" class="img-fluid jumping-image ck_img_index_1" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script>
    function showImage(index) {
      // Array to store image sources
      const images = [
        "https://ik.imagekit.io/cowe9tcww/Assets/Images/Businessman%20with%20a%20coffee%20mug%20got%20a%20new%20idea.png?updatedAt=1706168288423",
        "https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_7.png?updatedAt=1706168343439",
        "https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_8.png?updatedAt=1706168345351",
        "https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_9.png?updatedAt=1706168345270"
      ];
      console.log('Button clicked with index:', index);

      // Set the source of the selectedImage based on the button clicked
      document.getElementById("selectedImage").src = images[index - 1];

      // Remove active class from all buttons
      const buttons = document.querySelectorAll('.rjj_2');
      buttons.forEach(button => button.classList.remove("active"));

      // Set active class for the clicked button
      document.getElementById(`button${index}`).classList.add("active");
      console.log('Image source:', images[index - 1]);
    }
  </script>

<script>
  // Function to change the image based on the button click
  function changeImage(index) {
    // Array to store image sources
    const images = [
      "https://ik.imagekit.io/cowe9tcww/Assets/Images/Businessman%20with%20a%20coffee%20mug%20got%20a%20new%20idea.png?updatedAt=1706168288423",
        "https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_7.png?updatedAt=1706168343439",
        "https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_8.png?updatedAt=1706168345351",
        "https://ik.imagekit.io/cowe9tcww/Assets/Images/s-img/ck_9.png?updatedAt=1706168345270"
    ];

    // Set the source of the selectedImage based on the button clicked
    document.getElementById("selectedImage").src = images[index - 1];
  }
</script>








  <section style="background: #A4D5DB;">
    <div class="container">
      <div class="row">
        <div class="col-12  text-center mt-5">
          <h1 class="h-work">Interested to work with us ?🫡</h1>
          <h6 class="mt-3 h-hit">Hit your mail here get and update daily</h6>

          <div class="main-btnrjj mb-5 mt-5 ">
          <form action="email.php" method="post" class="btn-rjj2">
    <div class="d-flex input-group">
        <div class="col-2">
            <span class="input-group-text">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ICON/mail-bulk.png?updatedAt=1706168348158" class="img-fluid ">
            </span>
        </div>
        <div class="col">
            <input style="border: none; z-index: -1;border-top-left-radius: 20px; border-bottom-left-radius: 20px;" placeholder="Enter Your Email" type="text" class="input1" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email1" id="email1">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn-rjj3" style="border-radius: 100px; background: #5454AC;">Hit me</button>
        </div>
    </div>
</form>
          </div>
        </div>
      </div>
  </section>
  
  <script>

    // script.js
document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('.btn-rjj2').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Serialize form data
        var formData = new FormData(this);

        // Send form data to PHP script using AJAX
        fetch('email.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Your email has been submitted.',
                    showConfirmButton: false,
                    timer: 1000 // 1 second
                }).then(function () {
                    // Redirect to index.php after the alert disappears
                    window.location.href = 'index.php';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong. Please try again later.'
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong. Please try again later.'
            });
        });
    });
});

  </script>


  <section>
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-md-12 mt-5 mb-5">
          <div>
            <h6 class="card-top-h">Testimonials</h6>
            <h5 class="card-top-h1">Our Happy 🙂</h5>
            <h5 class="card-top-h2">Clients</h5>
          </div>
          <div id="custCarousel" class="carousel slide" data-ride="carousel" align="center">

            <!-- Slides -->
            <div style="border-radius: 12px;
            background: #FDFDFF;
            box-shadow: 0px 97px 90px 0px rgba(7, 0, 59, 0.12);" class="carousel-inner">
              <div class="carousel-item">
                <p class="rateing-p">5.0</p>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <h1 class="card-h">Five stars for Itechnebula! Their team's technical proficiency is unmatched. Our IT
                  worries are a thing of the past</h1>
              </div>
              <div class="carousel-item">
                <p class="rateing-p">5.0</p>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <h1 class="card-h">I wholeheartedly recommend itechnebula Agency to any business looking to stay at the
                  forefront of innovation. With their expertise across 10+ technologies, they're not just a service
                  provider; they're a strategic partner driving business growth</h1>
              </div>

              <div class="carousel-item active">
                <p class="rateing-p">5.0</p>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <h1 class="card-h">Very nice and user friendly....</h1>
              </div>

              <div class="carousel-item">
                <p class="rateing-p">5.0</p>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <!-- <h1 class="card-h">Reliable IT support from <span class="spn-rj">itechnebula</span>. Their quick
                response and problem-solving skills have saved us countless hours</h1> -->

                <h1 class="card-h">I can't express how grateful we are to have chosen itechnebula Agency for our
                  e-commerce platform development. Their team took our vision and turned it into reality</h1>
              </div>
              <div class="carousel-item">
                <p class="rateing-p">5.0</p>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <span class="star-icon">&starf;</span>
                <h1 class="card-h">Reliable IT support from <span class="spn-rj">itechnebula</span>. Their quick
                  response and problem-solving skills have saved us countless hours</h1>
              </div>

              <!-- Add more carousel items as needed -->
            </div>

            <!-- Left and right controls -->
            <!-- <a class="carousel-control-prev" href="#custCarousel" data-slide="prev">
              <img src="/Assets/Images/Chevron Next.png" class="img-fluid">
            </a>
            <a class="carousel-control-next" href="#custCarousel" data-slide="next">
              <img src="/Assets/Images/vector-img/Chevron Next.png" class="img-fluid">
            </a> -->

            <!-- Thumbnails -->
            <ol class="carousel-indicators list-inline">
              <li class="list-inline-item ">
                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel">
                  <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/aahid.png?updatedAt=1706168283602" width="60%" class="img-fluid">
                  <p class="vr-h mt-2">Aahid Quamre</p>
                  <!-- <h6 class="ow-h">Owner, EY PVT Ltd</h6> -->
                </a>
              </li>
              <li class="list-inline-item">
                <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
                  <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/burhan.png?updatedAt=1706168288247" width="60%" class="img-fluid">
                  <p class="vr-h mt-2">burhan ahmed</p>
                  <!-- <h6 class="ow-h">Owner, EY PVT Ltd</h6> -->
                </a>
              </li>
              <li class="list-inline-item active">
                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel">
                  <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/DINESH.png?updatedAt=1706168296407" width="60%" class="img-fluid">
                  <p class="vr-h mt-2">DINESH DINKER</p>
                  <!-- <h6 class="ow-h">Owner, EY PVT Ltd</h6> -->
                </a>
              </li>
              <li class="list-inline-item">
                <a id="carousel-selector-1" data-slide-to="1" data-target="#custCarousel">
                  <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/ayush.png?updatedAt=1706168285712" width="60%" class="img-fluid">
                  <p class="vr-h mt-2">ayush kumar</p>
                  <!-- <h6 class="ow-h">Owner, EY PVT Ltd</h6> -->
                </a>
              </li>
              <li class="list-inline-item ">
                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#custCarousel">
                  <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Nahid.png?updatedAt=1706168322250" width="60%" class="img-fluid">
                  <p class="vr-h mt-2">Nahid Khan</p>
                  <!-- <h6 class="ow-h">Owner, EY PVT Ltd</h6> -->
                </a>
              </li>

              <!-- Add more thumbnails as needed -->
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Initialize the carousel and set it to start from the center image
    $(document).ready(function() {
      var carousel = $('#custCarousel');

      carousel.carousel({
        interval: false // Disable the default interval
      });

      // Find the number of slides
      var slideCount = carousel.find('.carousel-item').length;

      // Calculate the index of the center slide (assuming an odd number of slides)
      var centerSlideIndex = Math.floor(slideCount / 2);

      // Go to the center slide immediately
      carousel.carousel(centerSlideIndex);
    });
  </script>

  <section style="background-color: #E9FBF8;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 main-p">
          <h3 class="top-h">News & Articles<img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/newspaper.png?updatedAt=1706168322230" class="img-fluid"></h3>
          <h2 class="madil-h">
           <span style="color: #040484;"> ITECHNEBULA</span> Blog</h2>
          <p class="butm-p">On
            <span class="ck_textsec8_12"> ITECHNEBULA</span> blog, we will review the latest in web development for the
            <span class="ck_text_sec_121" style=" font-weight: bold;">लोकल</span> Business-
            our industry.
          </p>
          <div class="mt-5 ms_button_view">
            <button type="button" class="btn ck_carousel4_text1 " id="see-all-button">See All</button>
          </div>
        </div>

        <div class="col-lg-6 mt-5 mb-4">
          <div class="wrapper">
            <div id="myCarousel" class="owl-carousel ">
              <div class="item ">
                <div class="card g-5 ck_card_111" style="width: 15rem;">
                  <div class="card-body">
                    <h5 class="card-title-rj">Online Presence: The Power of Traditional Business</h5>
                    <p class="card-text-rj">Find out how a website can expand your reach, enhance your credibility, and
                      drive growth for your traditional business.</p>
                    <a href="#" class="card-link">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card g-3 ck_card_111" style="width: 15rem;">
                  <div class="card-body">
                    <h5 class="card-title-rj">Online Presence: The Power of Traditional Business</h5>
                    <p class="card-text-rj">Find out how a website can expand your reach, enhance your credibility, and
                      drive growth for your traditional business.</p>
                    <a href="#" class="card-link">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="card g-3 ck_card_111" style="width: 15rem;">
                  <div class="card-body">
                    <h5 class="card-title-rj">Online Presence: The Power of Traditional Business</h5>
                    <p class="card-text-rj">Find out how a website can expand your reach, enhance your credibility, and
                      drive growth for your traditional business.</p>
                    <a href="#" class="card-link">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- <div class="mt-5 ms_button_view_mobile">
            <button type="button" class="btn" id="see-all-button">See All</button>
          </div> -->
        </div>

      </div>
    </div>
    </div>
  </section>

  <!-- see all button-->

  <script>
    document.getElementById('see-all-button').addEventListener('click', function() {
      var butmP = document.querySelector('.butm-p');
      butmP.innerHTML += '<br>we understand the importance of keeping our valued clients and partners informed, engaged, and inspired. That is why we have dedicated a space just for you – our blog and news section. ';
      document.getElementById('see-all-button').style.display = 'none';
    });
  </script>

  <!-- see all end -->

  <!--8 section  -->
  <script>
    $(document).ready(function() {
      $('#myCarousel').owlCarousel({
        items: 1,
        responsive: {
          992: {
            items: 2
          },
          768: {
            items: 2
          },
          481: {
            items: 1
          }

        },
        loop: true,
        autoplay: true, // Add this option to enable auto-scroll
        autoplayTimeout: 2000, // Set the time (in milliseconds) between slides
        autoplayHoverPause: true, // Pause the auto-scroll when hovering over the carousel




      });
    });
  </script>






  <!-- save Entry -->
  <script>
    var userId = '<?php echo $_SESSION['unique_user_id']; ?>';
    console.log("Generated unique_user_id:", userId);

    var url = 'save_entry.php?user_id=' + userId + '&time_spent=your_time_spent';

    function calculateTimeSpent(entryTime) {
      var exitTime = new Date();
      var timeSpent = exitTime - entryTime;
      var timeSpentInSeconds = Math.floor(timeSpent / 1000);
      return timeSpentInSeconds;
    }


    function sendDataToServer(userId, timeSpent) {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", url + "&time_spent=" + timeSpent, true);
      xhr.send();
    }

    document.addEventListener("DOMContentLoaded", function() {
      var entryTime = new Date();
      var deviceInfo = navigator.userAgent;

      window.addEventListener("beforeunload", function() {
        var timeSpent = calculateTimeSpent(entryTime);
        sendDataToServer(userId, timeSpent);
      });
    });
  </script>





  <!--  -->
 
  <section class="ms_footerSection overflow-hidden">
    <div class="container">
      <div class="row position-relative">
  
        <div class="mss_footerMainDiv d-flex justify-content-between flex-wrap">
          <div class="mss_footerWidth">
            <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/mssLogo.png?updatedAt=1706168321088" class="img-fluid" alt="logo">
            <div>
              <p class="mt-4 mss_empower">Empowering Your Digital Journey with <span style="color: #5454AC;">itechnebula</span></p>
              <p class="mss_empower">Navigating the Future with Confidence</p>
              <p class="mt-4 mss_copy">Copyright © CODEDELHIITES TECH PRIVATE LIMITED 2023. All Rights Reserved.</p>
            </div>
          </div>
  
          
          <div class="col-md-auto">
            <h6 class="mss_fotHead">Work</h6>
            <a href="Blog.html" class="text-decoration-none ms_anchor "><p class="mt-4 ">Blog</p></a>
            <a href="careers1.html" class="text-decoration-none ms_anchor"><p>Careers</p></a>
            <a href="ContactUs.html" class="text-decoration-none ms_anchor"><p>Contact us</p></a>
          </div>
  
          
          <div class="col-md-auto">
            <h6 class="mss_fotHead">Services</h6>
            <a href="Website Development Services.html" class="text-decoration-none ms_anchor"><p class="mt-4">Web Development </p></a>
            <a href="SEO.html" class="text-decoration-none ms_anchor"><p>SEO & Performance Marketing </p></a>
            <a href="WRS.html" class="text-decoration-none ms_anchor"><p>Website Redesign</p></a>
            <a href="./MDS.html" class="text-decoration-none ms_anchor"><p>Mobile app Development</p></a>
          </div>
  
          
          <div class="col-md-auto">
            <h6 class="mss_fotHead">Solutions</h6>
            <a href="" class="text-decoration-none ms_anchor"><p class="mt-4">Courses</p></a>
            <a href="./Agency.html" class="text-decoration-none ms_anchor"><p>Agency</p></a>
            <a href="./Partnership/Partnership.html" class="text-decoration-none ms_anchor"><p>Partnership </p></a>
          </div>

          <div class="col-lg-1 col-md-6 mb-4 mb-md-0">
            <div class="dropdown" data-bs-theme="light">
              <button class="btn-rj btn-secondary-rj dropdown-toggle ck_ln2_hide" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/globe_with_meridians.png?updatedAt=1706168305237" class=""> Language
              </button>
              <button class="btn-rj btn-secondary-rj dropdown-toggle ck_ln_hide" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/globe_with_meridians.png?updatedAt=1706168305237" class=""> Lang
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
                <li><a class="dropdown-item active" href="index.php">English</a></li>
                <li><a class="dropdown-item" href="bangla_index.php">
                    বাংলা</a></li>
                <li><a class="dropdown-item" href="hindi_index.php">हिंदी </a></li>
                <li><a class="dropdown-item" href="#"> ગુજરાતી </a></li>
                <li><a class="dropdown-item" href="#"> ಕನ್ನಡ</a></li>
                <li><a class="dropdown-item" href="#"> മലയാളം</a></li>
                <li><a class="dropdown-item" href="marathi_index.php">मराठी </a></li>
                <li><a class="dropdown-item" href="panjabi_index.php"> ਪੰਜਾਬੀ</a></li>
                <li><a class="dropdown-item" href="#">தமிழ் </a></li>
                <li><a class="dropdown-item" href="#"> తెలుగు</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#"></a></li>
              </ul>
            </div>
          </div>
  
          
          <div>
            <div class="dropdown mss_deopDownMainDiv" data-bs-theme="light">
              
            </div>
          </div>
        </div>
  
        <hr>
  
        <div class="d-flex justify-content-between flex-wrap">
          <div class="mss_foterDesc">
            <p class="mss_protected">It is protected by all possible laws.
              You're gonna get your family in trouble if you try to copy. In the style of Liam Neeson.
              Term & Conditions | Privacy & Policy Disclaimer | Enjoy the rest of your day Current of the day <span class="span-day" id="current-day"></span></p>
          </div>
          <div class="d-flex align-items-center">
            <a href="https://www.facebook.com/itechnebula?mibextid=ZbWKwL"><img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Facebook.png?updatedAt=1706168302232" class="img-fluid h-25 mss_iconFacebook" alt="icon"> </a>
            <a href="https://www.linkedin.com/showcase/itechnebula/about/?viewAsMember=true"> <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/LinkedIn.png?updatedAt=1706168310883" class="img-fluid mx-3 h-25 mss_iconFacebook" alt="icon"></a>
            <a href="https://www.instagram.com/itechnebula/"> <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/Instagram.png?updatedAt=1706168309599" class="img-fluid h-25 mss_iconFacebook" alt="icon"></a>
          </div>
        </div>
  
        <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/mssLineOne.png?updatedAt=1706168320909" class="img-fluid position-absolute mss_footerLIneOne" alt="">
        <div class="mss_footerCircleOne position-absolute "> </div>
      </div>
    </div>
  </section>



  <script>
    const currentDayElement = document.getElementById("current-day");

    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    const currentDate = new Date();

    const currentDayIndex = currentDate.getDay();

    currentDayElement.textContent = days[currentDayIndex];
  </script>

  <!--carousel1  -->

  <!-- <script>
    setTimeout(function () {
      var popup = window.open('santa.php', '_blank');
    }, 2000);
  </script> -->

  <!-- final<script>
    setTimeout(function() {
      var popup = window.open('santa.php');
    }, 2000);
  </script> -->

  <!-- <script>
    setTimeout(function() {
      window.location.href = 'santa.html'; 
      <a href = "page.php" > Go to PHP Page </a>
    }, 2000);
  </script> -->

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Check if the flag is set in localStorage
      var redirectFlag = localStorage.getItem('redirectFlag');

      if (!redirectFlag) {
        // Set the flag in localStorage to prevent further automatic redirections
        localStorage.setItem('redirectFlag', 'true');

        // Wait for 2 seconds and then redirect to santa.php
        setTimeout(function() {
          window.location.href = 'santa.php';
        }, 2000);
      }
    });
  </script>


  <!-- Language map -->

  <!-- <script>
    var alreadyRedirected = false;  // Added this variable to track whether redirection has already occurred

    // Function to get the current city using geolocation and OpenCage Geocoding API
    function getCurrentCity() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;

                    // Replace 'YOUR_OPENCAGE_API_KEY' with your actual OpenCage API key
                    var apiKey = '9ce1eda527e2427cab59168d6b93eecd';
                    var apiUrl = `https://api.opencagedata.com/geocode/v1/json?key=${apiKey}&q=${latitude}+${longitude}&pretty=1`;

                    // Fetch city information from OpenCage Geocoding API
                    fetch(apiUrl)
                        .then(response => response.json())
                        .then(data => {
                            console.log('API Response:', data); // Log the entire response for debugging

                            // Check if the city component is available in the response
                            if (data.results && data.results.length > 0) {
                                var cityName = data.results[0].components.city || data.results[0].components.state_district;

                                // Load specific HTML page based on city
                                loadCityPage(cityName);
                            } else {
                                console.error('City not found in the API response.');
                                // If city is not found, load default page
                                loadDefaultPage();
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching city:', error);
                            // If there is an error fetching city, load default page
                            loadDefaultPage();
                        });
                },
                function(error) {
                    console.error('Error getting geolocation:', error);
                    // If there is an error getting geolocation, load default page
                    loadDefaultPage();
                },
                { timeout: 10000 }  // Set a timeout to stop watching for changes after 10 seconds
            );
        } else {
            document.getElementById("liveCity").innerHTML = "Geolocation is not supported by this browser.";
            // If geolocation is not supported, load default page
            loadDefaultPage();
        }
    }

    // Function to load specific HTML page based on city or state_district
    function loadCityPage(locationName) {
        var pageMapping = {
            "Punjab": "punjabi_index.html",
            "Haryana": "punjabi_index.html",
            "West Bengal": "bangla_index.html",
            "Bihar": "hindi_index.html",
            "Jharkhand": "hindi_index.html",
            "Uttar Pradesh": "hindi_index.html"
            // Add more mappings as needed
        };

        // Check if the location is in the mapping
        if (pageMapping.hasOwnProperty(locationName)) {
            var selectedPage = pageMapping[locationName];
            // Redirect to the selected HTML page only if not redirected before
            if (!alreadyRedirected) {
                window.location.href = selectedPage;
                alreadyRedirected = true;  // Set the flag to true after redirecting
            }
        } else {
            console.error('HTML page not mapped for the location:', locationName);
            // If HTML page is not mapped, load default page
            loadDefaultPage();
        }
    }

    // Function to load default HTML page
    function loadDefaultPage() {
        // Redirect to the default HTML page (e.g., index.php) only if not redirected before
        if (!alreadyRedirected) {
            window.location.href = "index.php";
            alreadyRedirected = true;  // Set the flag to true after redirecting
        }
    }

    // Call the function to get the current city and load the appropriate HTML page
    getCurrentCity();
</script> -->




  <!-- Language map End -->

  <!-- <script>
    const redirectToStatePage = (state) => {
        switch (state) {
            case "Punjab":
                window.location.href = "panjabi_index.php";
                break;
            case "Bihar":
                window.location.href = "hindi_index.php";
            case "Karnataka":
                window.location.href = "bangla_index.php";
                break;
            default:
                // If the default redirection has already occurred, do nothing
                if (!localStorage.getItem('defaultRedirect')) {
                    window.location.href = "index.php";
                    // Set a flag to indicate that the default redirection has occurred
                    localStorage.setItem('defaultRedirect', 'true');
                }
        }
    };

    const getlocation = () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition((position) => {
            const { latitude, longitude } = position.coords;
            fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}`)
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);
                    const state = data.address.state || "Unknown";  // Use 'state' directly

                    // Redirect to the state's HTML page
                    redirectToStatePage(state);
                })
                .catch((error) => {
                    console.error("Error fetching location:", error);
                });
        });
    }
};


    getlocation();
</script> -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!--carousel1  -->
  <script>
    $(document).ready(function() {
      $('#image-carousel').owlCarousel({
        items: 6,
        responsive: {
          992: {
            items: 6
          },
          768: {
            items: 6
          },
          0: {
            items: 1
          }
        },
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        margin: 10,
      });
    });
  </script>


  <!-- carousel1  end -->
</body>

</html>