<?php
include('db.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $enteredMessage = $_POST["message"];
  if (trim($enteredMessage) !== "") {
    $_SESSION["user_message1"] = $enteredMessage; // Storing the message in a session variable
    header("Location: Gs_9.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="../Styles/Gs/Gs_7.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../Styles/Gs/Gs_1.css">

  <title>Document</title>
</head>

<body>

  <section>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/mssLogo.png?updatedAt=1706168321088" class="img-fluid"
            alt="logo"></a>
            
          <div class="col-lg-2  mb-md-0">
            <div class="dropdown" data-bs-theme="light">
              <button class="btn-rj  btn-secondary-rj1 dropdown-toggle " type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/globe_with_meridians.png?updatedAt=1706168305237" class=""> Language
              </button>
              <!-- <button class="btn-rj dis-n1 btn-secondary-rj dropdown-toggle " type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://ik.imagekit.io/cowe9tcww/Assets/Images/globe_with_meridians.png?updatedAt=1706168305237" class=""> Lang
              </button> -->
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
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto mss_nav_ul ">
            <li class="nav-item">
              <a class="nav-link active mss_home" aria-current="page" href="index.php" style="color: #040484;">Home</a>
            </li>
            <li class="nav-item mx-4 dropdown">
              <a style="color: #040484;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
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
        </div> -->
      </div>
    </nav>
  </section>

  <section class="py-5 ">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-2 ">

          <!-- Vertical Stepper -->
          <ul class="stepper">
            <li class="stepper-item">
              <div class="stepper-circle  stepper-active_black">1</div>
              <div class="stepper-line"></div>
            </li>
            <li class="stepper-item">
              <div class="stepper-circle stepper-active">2</div>
              <div class="stepper-line"></div>
            </li>
            <li class="stepper-item">
              <div class="stepper-circle">3</div>
              <div class="stepper-line"></div>
            </li>
            <li class="stepper-item">
              <div class="stepper-circle">4</div>
            </li>
          </ul>
        </div>

        <div class="col-lg-10 mt-5">
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-8">
              <h1 class="ck_gs_7_text1">What specific functionalities or features are essential for your organization in this solution?
              </h1>
            </div>
          </div>

          <form method="post" action="" enctype="multipart/form-data">

          <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 fx mt-5">
            <input type="text" placeholder="MESSAGE" name="message" class="form-control ck_gs_7_input1 mx-2 text-center" />
           

            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8 fx">
              <button class="ck_gs_7_btn mt-5"> Continue <img src="../Assets/Images/gs_right_arrow.png" class="img-fluid" style="width: 75px; height: 25px;"> </button>
            </div>
          </div>

         
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="ms_footerSection overflow-hidden">
    <div class="container">
      <div class="row position-relative">
  
        <div class="mss_footerMainDiv d-flex justify-content-between flex-wrap">
          <div class="mss_footerWidth">
            <img src="Assets/Images/mssLogo.png" class="img-fluid" alt="logo">
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
            <a href="" class="text-decoration-none ms_anchor"><p>Mobile app Development</p></a>
          </div>
  
          
          <div class="col-md-auto">
            <h6 class="mss_fotHead">Solutions</h6>
            <a href="" class="text-decoration-none ms_anchor"><p class="mt-4">Courses</p></a>
            <a href="" class="text-decoration-none ms_anchor"><p>Agency</p></a>
            <a href="" class="text-decoration-none ms_anchor"><p>Partnership </p></a>
          </div>

          <div class="col-lg-1 col-md-6 mb-4 mb-md-0">
            <div class="dropdown" data-bs-theme="light">
              <button class="btn-rj btn-secondary-rj dropdown-toggle ck_ln2_hide" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/Assets/Images/globe_with_meridians.png" class=""> Language
              </button>
              <button class="btn-rj btn-secondary-rj dropdown-toggle ck_ln_hide" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/Assets/Images/globe_with_meridians.png" class=""> Lang
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
          <div class="d-flex">
            <a href=""><img src="Assets/Images/Facebook.png" class="img-fluid h-25 mss_iconFacebook" alt="icon"> </a>
            <a href=""> <img src="Assets/Images/LinkedIn.png" class="img-fluid mx-3 h-25 mss_iconFacebook" alt="icon"></a>
            <a href=""> <img src="Assets/Images/Instagram.png" class="img-fluid h-25 mss_iconFacebook" alt="icon"></a>
          </div>
        </div>
  
        <img src="Assets/Images/mssLineOne.png" class="img-fluid position-absolute mss_footerLIneOne" alt="">
        <div class="mss_footerCircleOne position-absolute "> </div>
      </div>
    </div>
  </section> -->

<!-- 
  <script>
    const currentDayElement = document.getElementById("current-day");

    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    const currentDate = new Date();

    const currentDayIndex = currentDate.getDay();

    currentDayElement.textContent = days[currentDayIndex];
  </script> -->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>