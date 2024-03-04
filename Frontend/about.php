<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/30e5fd8902.js" crossorigin="anonymous"></script>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="logo.png">

  <!-- Original Webpage :  https://hms.infyom.com/ -->

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <title>About Us | HMS</title>
</head>

<body>
  <main style=" border-radius: 0px 0px 100px 100px; background: rgb(245,248,249);">
    <div class="container">
      <nav class="navbar navbar-expand-xl navbar-light">
        <a class="navbar-brand ms-0" href="#">
          <img class="img-fluid" src="logo.png" alt="" style="transform: scale(0.6);">
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-4 pt-1 p-xl-0 shadow" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-xl-0">
            <li class="nav-item p-xl-2">
              <a class="nav-link text-secondary" href="index.php">Home</a>
            </li>
            <li class="nav-item p-xl-2">
              <a class="nav-link text-secondary" href="services.php">Services</a>
            </li>
            <li class="nav-item p-xl-2">
              <a class="nav-link text-secondary" href="doctors.php">Doctors</a>
            </li>
            <li class="nav-item p-xl-2">
              <a class="nav-link active text-secondary" aria-current="page" href="about.php">About</a>
            </li>
            <li class="nav-item p-xl-2">
              <a class="nav-link text-secondary" href="contact.php">Contact</a>
            </li>
            <li class="nav-item dropdown p-xl-2 position-relative">
              <a class="nav-link dropdown-toggle1 text-secondary" href="#" id="navbarDropdown1">
                Our Features
                <i class="fas fa-chevron-down text-secondary ps-1" style="font-size: 12px;"></i>
              </a>
              <ul class="pe-5 dropdown-menu ms-xl-2 ms-0 border-0 pt-1 rounded-3 position-absolute"
                id="navbarDropdown1content">
                <li>
                  <a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                    href="appointment.php">Appointment</a>
                </li>
                <li>
                  <a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="working-hours.php">Working
                    Hours</a>
                </li>
                <li>
                  <a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                    href="testimonials.php">Testimonials</a>
                </li>
                <li>
                  <a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="terms_of_service.php">Terms
                    of Service</a>
                </li>
                <li>
                  <a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="privacy_policy.php">Privacy
                    Policy</a>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown p-xl-2">
              <a class="nav-link dropdown-toggle2 text-secondary" href="#" id="navbarDropdown2">
                English
              </a>
              <ul class="pe-5 dropdown-menu ms-xl-2 ms-0 border-0 pt-1 rounded-3 position-absolute"
                id="navbarDropdown2content">
                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="#">Arabic</a>
                </li>
                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="#">Chinese</a>
                </li>
                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="#">English</a>
                </li>
                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="#">French</a>
                </li>
                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="#">German</a>
                </li>
                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="#">Portuguese</a></li>
                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="#">Russian</a>
                </li>
                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="#">Spanish</a>
                </li>
                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2" href="#">Turkish</a>
                </li>
              </ul>
            </li>
          </ul>
          <div class="text-xl-end ms-xl-3">
            <a class="btn text-white ps-xxl-3 ps-2 py-2 me-2 " href="register.php"
              style="background: rgb(22,30,84); border-radius: .625rem;">Login</a>
            <a class="btn text-white ps-xxl-3 ps-2 py-2" href="appointment.php"
              style="background: rgb(255,142,75); border-radius: .625rem;">Book Apppointment</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="container pt-5" style="overflow: hidden;">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <h1 class="text-center text-lg-start fw-bold myhead1" style="color: rgb(22,30,84); font-size: 40px;">About Us
          </h1>
          <h6 class="text-center text-lg-start mt-4" style="color: rgb(255,142,75);">Home
            <span class="text-center text-lg-start text-secondary"> / About Us</span>
          </h6>
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0 text-center">
          <img class="img-fluid" src="about.jpg" alt="">
        </div>
      </div>
    </div>
  </main>

  <section>
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 align-self-center order-lg-2">
          <?php
          include("conn.php");
          $sql = "select * from about_master";
          $query = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($query);
          ?>
          <h1 class="mt-3 text-center text-lg-start" style="color: rgb(22,30,84); font-weight: 800;">
            <?php echo $row['heading']; ?>
          </h1>
          <p class="py-4 text-center text-lg-start text-secondary">
            <?php echo $row['subheading']; ?>
          </p>
          <div class="text-center text-lg-start">
            <a class="btn text-white p-2 px-3" href="appointment.php"
              style="background: rgb(255,142,75); border-radius: .625rem;">Book Apppointment</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row mt-4">
            <div class="col-md-7 mt-4">
              <div class="text-center p-5" style="background: rgb(235,249,242); border-radius: 20px;">
                <h1 class="fw-bold pt-md-4" style="color: rgb(60,196,123); font-size: 50px;">
                  <?php echo $row['patient_beds']; ?>
                </h1>
                <h5 class="pb-md-4">Patients Beds</h5>
              </div>
            </div>
            <div class="col-md-5 mt-4 align-self-end">
              <div class="text-center p-5 py-lg-4" style="background: rgb(255,243,237); border-radius: 20px;">
                <h1 class="fw-bold" style="color: rgb(249,99,118); font-size: 50px;">
                  <?php echo $row['doctors_nurses']; ?>
                </h1>
                <h5>Doctors & Nurses</h5>
              </div>
            </div>
            <div class="col-md-5 mt-4">
              <div class="text-center p-5 py-lg-4" style="background: rgb(231,232,238); border-radius: 20px;">
                <h1 class="fw-bold" style="color: rgb(255,142,75); font-size: 50px;">
                  <?php echo $row['happy_patients']; ?>
                </h1>
                <h5>Happy Patients</h5>
              </div>
            </div>
            <div class="col-md-7 mt-4">
              <div class="text-center p-5" style="background: rgb(254,238,240); border-radius: 20px;">
                <h1 class="fw-bold pt-md-4" style="color: rgb(29,111,241); font-size: 50px;">
                  <?php echo $row['experience']; ?>
                </h1>
                <h5 class="pb-md-4">Years Experience</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mt-xl-5 pt-xl-5">
    <div class="container py-5">
      <div class="text-center">
        <p style="color: rgb(255,142,75);">Our Testimonials</p>
        <h1 class="col-lg-6 mx-auto" style="color: rgb(22,30,84); font-weight: 800;">What Our Patients Say About
          Our Medical Treatments</h1>
        <p class="col-lg-6 mx-auto text-secondary">Our medical clinic provides quality care for the entire family while
          maintaining a personable atmosphere best services. Our medica...</p>
      </div>
      <div class="mt-5 owl-carousel owl-theme">
        <?php
        include("conn.php");
        $sql = "select * from testimonial_master where status = 'Active'";
        $query = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($query)) {
          ?>
          <div class="item">
            <div class="row mx-xl-5 px-xl-5">
              <div class="col-sm-4">
                <div class="position-relative">
                  <?php
                  echo "<img class='img-fluid' style='height:300px; object-fit: cover; border-radius: 20px;' src='Backend/pages/tables/images/" . $row['image'] . "'>";
                  ?>
                  <!-- <img class="img-fluid" style="height:300px; object-fit: cover; border-radius: 20px;"
                  src="Testimonial-1.jpeg" alt=""> -->
                  <i class="fa-solid fa-quote-left position-absolute fs-1 text-white p-3 rounded-circle"
                    style="background: rgb(255,142,75); right: -10%; top: 10%;"></i>
                </div>
              </div>
              <div class="col-sm-8 align-self-center">
                <h3 class="pt-4 pb-2 fw-bold " style="color: rgb(22,30,84);">
                  <?php echo $row['name']; ?>
                </h3>
                <p class="text-secondary ">
                  <?php echo $row['review']; ?>
                </p>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
        <!-- <div class="item">
          <div class="row mx-xl-5 px-xl-5">
            <div class="col-sm-4">
              <div class="position-relative">
                <img class="img-fluid" style="height:300px; object-fit: cover; border-radius: 20px;"
                  src="Testimonial-2.jpeg" alt="">
                <i class="fa-solid fa-quote-left position-absolute fs-1 text-white p-3 rounded-circle"
                  style="background: rgb(255,142,75); right: -10%; top: 10%;"></i>
              </div>
            </div>
            <div class="col-sm-8 align-self-center">
              <h3 class="pt-4 pb-2 fw-bold" style="color: rgb(22,30,84);">David Swatznager</h3>
              <p class="text-secondary">
                We have found the doctors, nursing, staff and support personnel to be extremely skilled
                and
                caring in our daily contact with all concerned.
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row mx-xl-5 px-xl-5">
            <div class="col-sm-4">
              <div class="position-relative">
                <img class="img-fluid" style="height:300px; object-fit: cover; border-radius: 20px;"
                  src="Testimonial-3.jpeg" alt="">
                <i class="fa-solid fa-quote-left position-absolute fs-1 text-white p-3 rounded-circle"
                  style="background: rgb(255,142,75); right: -10%; top: 10%;"></i>
              </div>
            </div>
            <div class="col-sm-8 align-self-center">
              <h3 class="pt-4 pb-2 fw-bold" style="color: rgb(22,30,84);">Callings Hokma</h3>
              <p class="text-secondary">
                During our stay in hospital, we find good and excellent treatment from all the
                employees. They
                really helpful in all areas of the treatment.
              </p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row mx-xl-5 px-xl-5">
            <div class="col-sm-4">
              <div class="position-relative">
                <img class="img-fluid" style="height:300px; object-fit: cover; border-radius: 20px;"
                  src="Testimonial-4.jpeg" alt="">
                <i class="fa-solid fa-quote-left position-absolute fs-1 text-white p-3 rounded-circle"
                  style="background: rgb(255,142,75); right: -10%; top: 10%;"></i>
              </div>
            </div>
            <div class="col-sm-8 align-self-center">
              <h3 class="pt-4 pb-2 fw-bold" style="color: rgb(22,30,84);">Miley Kottler</h3>
              <p class="text-secondary">
                Provided me with excellent and prompt service. The nurses are very attentive and there
                are
                always enough meals and service for the patients.
              </p>
            </div>
          </div> 
        </div>-->
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
      <!-- Owl Carousel -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <!-- custom JS code after importing jquery and owl -->
      <script>
        $('.owl-carousel').owlCarousel({
          loop: true,
          margin: 10,
          dots: true,
          responsive: {
            0: {
              items: 1,
              nav: false,
            },
            740: {
              items: 1,
              nav: true,
            }
          }
        })
      </script>
    </div>
  </section>

  <section class="mt-xl-5 pt-xl-3">
    <div class="container mt-xl-5 p-xl-4">
      <div class="py-5 ">
        <div class="text-center">
          <p style="color: rgb(255,142,75);">Professional Doctors</p>
          <h1 class="col-lg-6 mx-auto" style="color: rgb(22,30,84); font-weight: 800;">We are Experienced
            Healthcare Professionals</h1>
        </div>
        <div class="row my-4 gx-5 gy-5 justify-content-center">
          <?php
          include("conn.php");
          $sql = "select * from doctor_master where status = 'Active'";
          $query = mysqli_query($con, $sql);
          while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-md-6 col-lg-4 col-xxl-3">
              <div class="position-relative pb-5 justify-content-center d-flex">
                <?php
                echo "<img class='p-2 img-fluid rounded-circle' style='height: 300px; width: 300px; object-fit: cover;' src='Backend/pages/tables/images/" . $row['image'] . "'>";
                ?>
                <div class="position-absolute bottom-0 border bg-white w-100 text-center" style="border-radius: 15px;">
                  <h5 class="fw-bold" style="color: rgb(22,30,84);">
                    <?php echo $row['name']; ?>
                  </h5>
                  <h6 class="py-1 text-secondary">
                    (<?php echo $row['degree']; ?>)
                  </h6>
                  <h6 style="color: rgb(22,30,84);">
                    <?php echo $row['speciality']; ?> Specialist
                  </h6>
                  <h6 style="color: rgb(22,30,84);">
                    <?php echo $row['patients']; ?>+ Patients
                  </h6>
                </div>
              </div>
            </div>
            <?php
          }
          ?>
          <!--           
          <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="position-relative pb-5 justify-content-center d-flex">
              <img src="doc13.jpeg" class="p-2 img-fluid rounded-circle"
                style="height: 300px; width: 300px; object-fit: cover;">
              <div class="position-absolute bottom-0 border bg-white w-100 text-center" style="border-radius: 15px;">
                <h5 class="fw-bold" style="color: rgb(22,30,84);">Steven Lyon</h5>
                <h6 class="py-1 text-secondary">(MBBS)</h6>
                <h6 style="color: rgb(22,30,84);">Liver Specialist</h6>
                <h6 style="color: rgb(22,30,84);">35+ Patients</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="position-relative pb-5 justify-content-center d-flex">
              <img src="DA.svg" class="p-2 img-fluid rounded-circle"
                style="height: 300px; width: 300px; object-fit: cover;">
              <div class="position-absolute bottom-0 border bg-white w-100 text-center" style="border-radius: 15px;">
                <h5 class="fw-bold" style="color: rgb(22,30,84);">Steven Lyon</h5>
                <h6 class="py-1 text-secondary">(MBBS)</h6>
                <h6 style="color: rgb(22,30,84);">Liver Specialist</h6>
                <h6 style="color: rgb(22,30,84);">35+ Patients</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="position-relative pb-5 justify-content-center d-flex">
              <img src="doctor12.jpeg" class="p-2 img-fluid rounded-circle"
                style="height: 300px; width: 300px; object-fit: cover;">
              <div class="position-absolute bottom-0 border bg-white w-100 text-center" style="border-radius: 15px;">
                <h5 class="fw-bold" style="color: rgb(22,30,84);">Steven Lyon</h5>
                <h6 class="py-1 text-secondary">(MBBS)</h6>
                <h6 style="color: rgb(22,30,84);">Liver Specialist</h6>
                <h6 style="color: rgb(22,30,84);">35+ Patients</h6>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xxl-3">
            <div class="position-relative pb-5 justify-content-center d-flex">
              <img src="AS.svg" class="p-2 img-fluid rounded-circle"
                style="height: 300px; width: 300px; object-fit: cover;">
              <div class="position-absolute bottom-0 border bg-white w-100 text-center" style="border-radius: 15px;">
                <h5 class="fw-bold" style="color: rgb(22,30,84);">Steven Lyon</h5>
                <h6 class="py-1 text-secondary">(MBBS)</h6>
                <h6 style="color: rgb(22,30,84);">Liver Specialist</h6>
                <h6 style="color: rgb(22,30,84);">35+ Patients</h6>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <footer style="background: rgb(22,30,84);">
    <div class="container text-white pt-5 pb-1">
      <div class="row justify-content-between">
        <div class="col-lg-4">
          <div class="d-lg-flex">
            <div class="p-4">
              <img class="img-fluid" src="logo.png" alt="">
            </div>
            <p class="pt-4">
              Over past 10+ years of experience and skills in various technologies, we built great
              scalable
              products.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2">
          <h3 class="fw-bold py-3" style="color: rgb(255,142,75);">Useful Link</h3>
          <ul class="list-unstyled">
            <li class="py-2">
              <a class="text-decoration-none text-white" href="index.php">Home</a>
            </li>
            <li class="py-2">
              <a class="text-decoration-none text-white" href="services.php">Services</a>
            </li>
            <li class="py-2">
              <a class="text-decoration-none text-white" href="doctors.php">Doctors</a>
            </li>
            <li class="py-2">
              <a class="text-decoration-none" style="color: rgb(255,142,75);" href="about.php">About</a>
            </li>
            <li class="py-2">
              <a class="text-decoration-none text-white" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3">
          <h3 class="fw-bold py-3" style="color: rgb(255,142,75);">Contact Information</h3>
          <ul class="list-unstyled fw-bold">
            <li class="pb-2">
              <i class="fa-solid fa-phone p-2 pe-3 fs-4"></i>
              <a class="text-decoration-none text-white" href="tel:+905414761900">+905414761900</a>
            </li>
            <li class="py-2">
              <i class="fa-solid fa-clock p-2 pe-3 fs-4"></i>
              08:00 AM to 21:00 PM
            </li>
            <li class="pt-2 d-flex">
              <i class="fa-solid fa-location-dot align-self-center p-2 pe-4 fs-3"></i>
              <p>C/303, Atlanta Shopping Mall Sudama Chowk, Mota Varachha, Surat, Gujarat 394101</p>
            </li>
          </ul>
        </div>
      </div>
      <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
      </div>
      <p class="text-center p-3">Copyright © 2023 All Rights Reserved by HMS</p>
    </div>
  </footer>
  <a href="#" id="gototop" class="position-fixed bottom-0 end-0" style="display: none;">
    <i class="fa-solid fa-chevron-up text-white p-3 mb-5 me-3 rounded-circle fs-5"
      style="background: rgb(22,30,84);"></i>
  </a>
  <script>
    window.onscroll(function () {
      document.getElementById("gototop").style.display = "block";
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>