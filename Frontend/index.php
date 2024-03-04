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

  <title>Home | HMS</title>
</head>

<body>
  <main style=" border-radius: 0px 0px 100px 100px; padding-bottom:140px; background: rgb(245,248,249);">
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
              <a class="nav-link active text-secondary" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item p-xl-2">
              <a class="nav-link text-secondary" href="services.php">Services</a>
            </li>
            <li class="nav-item p-xl-2">
              <a class="nav-link text-secondary" href="doctors.php">Doctors</a>
            </li>
            <li class="nav-item p-xl-2">
              <a class="nav-link text-secondary" href="about.php">About</a>
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
            <a class="btn text-white ps-xxl-3 ps-2 py-2 me-2 " href="login.php"
              style="background: rgb(22,30,84); border-radius: .625rem;">Login</a>
            <a class="btn text-white ps-xxl-3 ps-2 py-2" href="appointment.php"
              style="background: rgb(255,142,75); border-radius: .625rem;">Book Apppointment</a>
          </div>
        </div>
      </nav>
    </div>
    <div class="container mt-5">
      <div class="row mt-3">
        <div class="col-lg-6 align-self-center order-lg-2">
          <img class="img-fluid" src="Home.png" alt="">
        </div>
        <div class="text-center text-lg-start col-lg-6">
          <h6 class="mt-5" style="color: rgb(255,142,75);">5 Years Experience</h6>
          <h1 class="fw-bold mt-4 myhead1" style="color: rgb(22,30,84); font-size: 40px;">Digital
            Hospital
            Management at one place</h1>
          <h5 class="fw-normal mt-4" style="color: grey;">Next-Gen Hospital Solutions: Drive
            Innovation, Deliver Quality Healthcare</h5>
          <a class="btn text-white mt-4 p-3 py-2" style="background: rgb(255,142,75);" href="register.php">Sign Up</a>
        </div>
      </div>
    </div>
  </main>
  <section>
    <div class="container pb-2" style="margin-top: -80px;">
      <div class="bg-white p-4 m-2 row shadow" style="border-radius: 20px;">
        <h4 class="col-lg-3 col-12 fw-bold mt-3 ps-lg-4" style="color: rgb(22,30,84);">Book an Appointment</h4>
        <div class="col-md-6 col-lg-3 col-12">
          <div class="position-relative myselectinput">
            <input class="w-100 p-3 mt-2 border rounded-3" type="" placeholder="Select Doctor">
            <div class="position-absolute start-0 w-100 d-none shadow-sm" style=" border-radius: 20px;">
              <div class="overflow-auto" style=" max-height: 200px;">
                <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3" data-selectable>Steven
                  Lyon</div>
                <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3" data-selectable>Steven
                  Lyon</div>
                <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3" data-selectable>Steven
                  Lyon</div>
                <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3" data-selectable>Steven
                  Lyon</div>
                <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3" data-selectable>Steven
                  Lyon</div>
                <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3" data-selectable>Steven
                  Lyon</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-12 col-lg-3">
          <input class="myinput w-100 p-3 my-2 border rounded-3 position-relative" placeholder="Select Date" type="text"
            id="datepicker" name="patient_date" required>
        </div>
        <div class="col-12 col-lg-3">
          <a class="row justify-content-center m-3 p-3 rounded-3 text-white text-decoration-none" href="appointment.php"
            style="background: rgb(255,142,75);">Book Now</a>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-light mt-5 pb-4 mybg1">
    <div class="container pt-5 position-relative">
      <div class="col-lg-6 mx-auto">
        <p class="text-center" style="color: rgb(255,142,75);">Easy Solutions</p>
        <h1 class="text-center" style="color: rgb(22,30,84); font-weight: 800;">4 Easy Step and Get the World
          Best Treatment</h1>
      </div>
      <div class="row mt-5 mybg2">
        <div class="col-md-6 col-xxl-3 pb-4 pt-2 d-flex">
          <div class="w-100 text-center bg-white p-4 shadow-sm" style="border-radius: 20px;">
            <i class="fa-solid fa-user p-4 mb-4 mt-2 rounded-circle fs-5"
              style="background: rgb(235,249,242); color: rgb(60,196,123);"></i>
            <h5 class="fw-bold" style="color: rgb(22,30,84);">Qualified doctors</h5>
            <p class="text-secondary">Check expert Doctor profile as per your need and get consultation.</p>
          </div>
        </div>
        <div class="col-md-6 col-xxl-3 pb-4 pt-2 d-flex">
          <div class="text-center bg-white p-4 shadow-sm" style="border-radius: 20px;">
            <i class="fa fa-headphones p-4 mb-4 mt-2 rounded-circle fs-5"
              style="background: rgb(255,243,237); color: rgb(255,142,75)"></i>
            <h5 class="fw-bold" style="color: rgb(22,30,84);">Digital Consultation R...</h5>
            <p class="text-secondary">Our utmost priority is to ensure safety and well being of our
              patients. To avoid adverse health conditions later,...</p>
          </div>
        </div>
        <div class="col-md-6 col-xxl-3 pb-4 pt-2 d-flex">
          <div class="text-center bg-white p-4 shadow-sm" style="border-radius: 20px;">
            <i class="fa-solid fa-calendar-days p-4 mb-4 mt-2 rounded-circle fs-5"
              style="background: rgb(231,232,238); color: rgb(22,30,84);"></i>
            <h5 class="fw-bold" style="color: rgb(22,30,84);">Get Your Consultant</h5>
            <p class="text-secondary">Our internal medicine consultants provide personalized care and treat
              patients with a wide range of acute and chro...</p>
          </div>
        </div>
        <div class="col-md-6 col-xxl-3 pb-4 pt-2 d-flex">
          <div class="text-center bg-white p-4 shadow-sm" style="border-radius: 20px;">
            <i class="fa-solid fa-check-double p-4 mb-4 mt-2 rounded-circle fs-5"
              style="background: rgb(254,238,240); color: rgb(249,99,118)"></i>
            <h5 class="fw-bold" style="color: rgb(22,30,84);">Get Your Treatment</h5>
            <p class="text-secondary">We offers expert care from the best doctors. The doctors may direct
              you to a specialist if needed, in order to hel...</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 align-self-center order-lg-2">
          <?php
          include("conn.php");
          $sql = "create table if not exists about_master(
                        heading varchar(100) default 'About Us',
                        subheading varchar(1000) default 'At Home of Compassion Hospital, we are dedicated to providing exceptional and comprehensive care to our patients. Our team of experienced healthcare professionals is committed to using the latest technologies and techniques to ensure that every patient receives the highest quality of care. We pride ourselves on our commitment to excellence and strive to make a positive difference in the lives of those we serve. Join us in our mission to advance healthcare and improve lives.',
                        patient_beds int default 96,
                        doctors_nurses int default 104,
                        happy_patients int default 910,
                        experience int default 5
                        )";
          $query = mysqli_query($con, $sql);
          $sql = "select * from about_master";
          $query = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($query);
          if (empty($row)) {
            $sql = "insert into about_master values()";
            $query = mysqli_query($con, $sql);
          }
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
  <section class="bg-light">
    <div class="container py-5">
      <div>
        <p class="text-center" style="color: rgb(255,142,75);">Our Services</p>
        <h1 class="text-center col-lg-6 mx-auto" style="color: rgb(22,30,84); font-weight: 800;">We Offer
          Different Services To Improve Your Health</h1>
      </div>
      <div class="row mt-5 justify-content-center">
        <?php
        include("conn.php");
        $sql = "create table if not exists service_master(
                    service_id int auto_increment primary key,
                    image blob,
                    heading varchar(30),
                    subheading varchar(500),
                    status varchar(10) default 'Active'
                    )";
        $query = mysqli_query($con, $sql);
        $sql = "select * from service_master";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);
        if (empty($row)) {
          $sql = "insert into service_master(image, heading, subheading)
                    values
                    ('Cardiology.png','Cardiology','Cardiology is medicine speciality that involves diagnosis and treatment of disorders of the heart and certain parts of the...'),
                    ('Orthopedics.png','Orthopedics','Orthopedics is a branch of medicine that focuses on the care of the musculoskeletal system. This system is made up of muscl...'),
                    ('Medicine.png','Medicine','Orthopedics is a branch of medicine that focuses on the care of the musculoskeletal system. This system is made up of muscl...'),
                    ('Ambulance.png','Ambulance','An ambulance is a medically equipped vehicle which transports patients to treatment facilities, such as hospitals. Typicall...'),
                    ('Ophthalmology.png','Ophthalmology','Ophthalmology is the study of medical conditions relating to the eye. Ophthalmologists are doctors who specialize in the me...'),
                    ('Neurology.png','Neurology','Neurology deals with the diagnosis and treatment of all categories of conditions and disease involving the central and peri...')
                    ";
          $query = mysqli_query($con, $sql);
        }
        $sql = "select * from service_master where status = 'Active'";
        $query = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($query)) {
          ?>
          <div class="col-md-6 col-lg-4 col-xl-3 d-flex">
            <div class="w-100 p-4 bg-white text-center shadow-sm mb-4 myhover">
              <!-- <img class="img-fluid pt-3" src='images/".$row['image']."' alt=""> -->
              <?php
              echo "<img class='img-fluid pt-3' style='height:80px; width:80px;' src='Backend/pages/tables/images/" . $row['image'] . "'>";
              ?>
              <h5 class="mb-2 my-4 fw-bold" style="color: rgb(22,30,84);">
                <?php echo $row['heading'] ?>
              </h5>
              <p class="text-secondary">
                <?php echo $row['subheading'] ?>
              </p>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>
  <section>
    <div class="container py-5 mb-5">
      <div class="row">
        <div class="col-lg-6">
          <p class="text-center text-lg-start" style="color: rgb(255,142,75);">Quality Healthcare</p>
          <h1 class="text-center text-lg-start" style="color: rgb(22,30,84); font-weight: 800;">Have Certified
            and High Quality Doctor For You</h1>
          <p class="py-2 text-center text-lg-start text-secondary">
            Our medical clinic provides quality care for the entire family while maintaining a personable
            atmosphere best services. Our medical clinic provides quality. Our medical clinic provides
            quality
            care for the entire family while maintaining lizam a personable atmosphere best services. Our
            medical clinic provides.
          </p>
          <div class="text-center text-lg-start">
            <a class="btn text-white p-2 px-3" href="appointment.php"
              style="background: rgb(255,142,75); border-radius: .625rem;">Book Apppointment</a>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="position-relative">
            <img class="img-fluid mt-5" src="Doctors.png" alt="">
            <div class="myposition m-4 m-lg-0 mb-2 p-3 px-4 pb-0 position-absolute bottom-0 start-0 end-0 d-flex"
              style="background: rgb(22,30,84); border-radius: 20px;">
              <div>
                <i class="fa-sharp fa-solid fa-sun bg-white p-3 rounded-circle fs-4"
                  style="color: rgb(255,142,75);"></i>
              </div>
              <div class="text-white ms-4">
                <h5 class="fw-bold">Certified Doctor</h5>
                <p>All expertise doctors as per Hospital and M...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-light myprofilebg1">
    <div class="container myprofilebg2">
      <div class="py-5">
        <div class="text-center">
          <p style="color: rgb(255,142,75);">Professional Doctors</p>
          <h1 class="col-lg-6 mx-auto" style="color: rgb(22,30,84); font-weight: 800;">We are Experienced
            Healthcare Professionals</h1>
        </div>
        <div class="swiper mySwiper mt-5 text-center">
          <div class="swiper-wrapper">
            <?php
            include("conn.php");
            $sql = " create table doctor_master
                    (
                    doctor_id int auto_increment primary key,
                    image blob,
                    name varchar(50),
                    degree varchar(20),
                    speciality varchar(50),
                    patients int,
                    status varchar(10) default 'Active'
                    );";
            $query = mysqli_query($con, $sql);
            $sql = "select * from doctor_master";
            $query = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($query);
            if (empty($row)) {
              $sql = "insert into doctor_master(image, name, degree, speciality, patients)
                    values
                    ('doc13.jpeg','Steven Lyon','MBBS','Liver',35),
                    ('DA.svg','Dr. Satyavati AL','MD','Cosmetic Gyneco... ', 4)
                    ";
              $query = mysqli_query($con, $sql);
            }
            $sql = "select * from doctor_master where status = 'Active'";
            $query = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($query)) {
              ?>
              <div class="swiper-slide">
                <?php
                echo "<img class='img-fluid rounded-circle' style='height: 300px; width: 300px; object-fit: cover;' src='Backend/pages/tables/images/" . $row['image'] . "'>";
                ?>
                <h6 class="pt-4" style="color: rgb(22,30,84);">
                  <?php echo $row['name']; ?>
                </h6>
                <p class="text-secondary">
                  <?php echo $row['degree']; ?>
                </p>
              </div>
              <?php
            }
            ?>
          </div>
          <br><br><br>
          <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
          var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 30,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
              0: {
                slidesPerView: 1
              },
              789: {
                slidesPerView: 2
              },
              992: {
                slidesPerView: 3
              },
              1400: {
                slidesPerView: 4
              }
            }
          });
        </script>
      </div>
    </div>
  </section>
  <section class="mytestimonialbg">
    <div class="container py-5 mb-5">
      <div class="text-center">
        <p style="color: rgb(255,142,75);">Our Testimonials</p>
        <h1 class="col-lg-6 mx-auto" style="color: rgb(22,30,84); font-weight: 800;">What Our Patients Say About
          Our Medical Treatments</h1>
      </div>
      <div class="mt-5 owl-carousel owl-theme">
        <?php
        include("conn.php");
        $sql = "create table testimonial_master
                (
                testimonial_id int auto_increment primary key,
                image blob,
                name varchar(50),
                review varchar(500),
                status varchar(10) default 'Active'
                )";
        $query = mysqli_query($con, $sql);
        $sql = "select * from testimonial_master";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);
        if (empty($row)) {
          $sql = "insert into testimonial_master(image, name, review)
                    values
                    ('Testimonial-1.jpeg','Rossy','The services are very good. I recommend another patient to come to this hospital. Everything in hospital is good.'),
                    ('Testimonial-2.jpeg','David Swatznager','We have found the doctors, nursing, staff and support personnel to be extremely skilled and caring in our daily contact with all concerned.')
                    ";
          $query = mysqli_query($con, $sql);
        }
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
                  <i class="fa-solid fa-quote-left position-absolute fs-1 text-white p-3 rounded-circle"
                    style="background: rgb(255,142,75); right: -10%; top: 10%;"></i>
                </div>
              </div>
              <div class="col-sm-8 align-self-center">
                <h3 class="pt-4 pb-2 fw-bold " style="color: rgb(22,30,84);"><?php echo $row['name']; ?></h3>
                <p class="text-secondary "><?php echo $row['review']; ?></p>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
              <!-- <p class="text-secondary">
                We have found the doctors, nursing, staff and support personnel to be extremely skilled
                and
                caring in our daily contact with all concerned.
              </p>
              <p class="text-secondary">
                During our stay in hospital, we find good and excellent treatment from all the
                employees. They
                really helpful in all areas of the treatment.
              </p>
              <p class="text-secondary">
                Provided me with excellent and prompt service. The nurses are very attentive and there
                are
                always enough meals and service for the patients.
              </p> -->
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
              <a class="text-decoration-none" style="color: rgb(255,142,75);" href="index.php">Home</a>
            </li>
            <li class="py-2">
              <a class="text-decoration-none text-white" href="services.php">Services</a>
            </li>
            <li class="py-2">
              <a class="text-decoration-none text-white" href="doctors.php">Doctors</a>
            </li>
            <li class="py-2">
              <a class="text-decoration-none text-white" href="about.php">About</a>
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