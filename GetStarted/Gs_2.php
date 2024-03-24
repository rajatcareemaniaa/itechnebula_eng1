<?php
// session_start(); 
// include('db.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $enteredUserName = trim($_POST["userName"]);

//   if ($enteredUserName !== "") {
//     $_SESSION["userName"] = $enteredUserName; 
//     header("Location: Gs_3.php");
//     exit();
//   }
// }
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

  <link rel="stylesheet" href="../Styles/Gs/Gs_2.css" />
  <link rel="stylesheet" href="../Styles/Gs/Gs_1.css" />
  <link rel="stylesheet" href="style.css" />


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
              <div class="stepper-circle stepper-active">1</div>
              <div class="stepper-line"></div>
            </li>
            <li class="stepper-item">
              <div class="stepper-circle">2</div>
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
            <div class="col-md-8">
              <h1 class="ck_gs_2_text1">Let's Keep It Snappy, Shall We? But First, Let's Be Polite <br> What's Your Name?</h1>
            </div>
          </div>

          <div class="row justify-content-center align-items-center">
            <div style="display: flex;
            justify-content: center;
            flex-wrap: wrap;" class="col-lg-8 mt-5 ">
              <form method="post" action="" enctype="multipart/form-data">
                <!-- <input type="text" name="userName" placeholder="Enter your First name" class="ck_gs_2_input1 text-center" /> -->
                <!-- <div class="col-md-6"> -->
                  <!-- <label for="validationCustom03" class="form-label">City</label> -->
                  <input type="text" placeholder="Enter your First name" class="form-control ck_gs_2_input1 text-center" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                <!-- </div> -->
                <button type="submit" class="ck_gs_2_btn mt-5"> Continue <img src="../Assets/Images/gs_right_arrow.png" class="img-fluid" style="width: 75px; height: 25px;"> </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>