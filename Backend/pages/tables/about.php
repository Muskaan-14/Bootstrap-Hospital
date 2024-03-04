<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>About | HMS | Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../logo.png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
        style="background: rgb(22,30,84);">
        <a class="navbar-brand brand-logo" href="index.php">
          <img src="../../images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php">
          <img src="../../images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search Projects.." aria-label="search"
                aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown d-lg-flex d-none">
            <button type="button" class="btn btn-info text-white font-weight-bold border-0"
              style="background: rgb(255,142,75);">+
              Create New</button>
          </li>
          <li class="nav-item dropdown d-flex">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
              id="messageDropdown" href="#" data-toggle="dropdown">
              <i class="icon-air-play mx-0"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center"
              id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
              <a class="dropdown-item preview-item">
                <i class="icon-head"></i> Profile
              </a>
              <a class="dropdown-item preview-item">
                <i class="icon-inbox"></i> Logout
              </a>
            </div>
          </li>
          <li class="nav-item dropdown mr-4 d-lg-flex d-none">
            <a class="nav-link count-indicatord-flex align-item s-center justify-content-center" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="background: white; color: black;">
        <div class="user-profile">
          <div class="user-image">
            <img src="../../../logo.png">
          </div>
          <div class="user-name" style="color: rgb(22,30,84);">
            Steven Lyon
          </div>
          <div class="user-designation" style="color: rgb(22,30,84);">
            Cardiologists
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-box menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="appointment.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-globe menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Appointment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php" style="background: rgb(255,142,75);">
              <i class="icon-speech-bubble menu-icon text-white"></i>
              <span class="menu-title text-white">About</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-square-check menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Services</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="doctors.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-help menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Doctors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testimonials.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-head menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Testimonials</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-mail menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Contact</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class=" grid-margin stretch-card"> <!-- col-xxl-6 -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">About Us</h4>
                  <button type="button" class="btn text-white mb-2" style="background: rgb(29,111,241);"
                    data-bs-toggle="modal" data-bs-target="#aboutModal">
                    Edit
                  </button>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SNo</th>
                          <th>Heading</th>
                          <th>Subheading</th>
                          <th class="text-nowrap">Patient Beds</th>
                          <th class="text-nowrap">Doctors Nurses</th>
                          <th class="text-nowrap">Happy Patients</th>
                          <th class="text-nowrap">Experience</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "hospital");
                        if (mysqli_connect_errno()) {
                          echo "Connection Fail" . mysqli_connect_error();
                        }
                        ;
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
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                          ?>
                          <tr>
                            <td>
                              <?php echo $cnt++ ?>
                            </td>
                            <td>
                              <?php echo $row['heading'] ?>
                            </td>
                            <td>
                              <?php echo $row['subheading'] ?>
                            </td>
                            <td>
                              <?php echo $row['patient_beds'] ?>
                            </td>
                            <td>
                              <?php echo $row['doctors_nurses'] ?>
                            </td>
                            <td>
                              <?php echo $row['happy_patients'] ?>
                            </td>
                            <td>
                              <?php echo $row['experience'] ?>
                            </td>
                          </tr>
                          <div class="modal fade" id="aboutModal" tabindex="-1" aria-labelledby="aboutModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="aboutModalLabel">Edit About Us</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                </div>
                                <form action="about_table.php" method="post">
                                  <div class="modal-body">
                                    Heading :
                                    <input class="w-100 p-2 border rounded-3 mb-2" type="text" name="heading"
                                      value="<?php echo $row['heading'] ?>">
                                    Sub Heading :
                                    <!-- <textarea class="w-100 p-2 border rounded-3 mb-2" name="subheading" cols="60"
                                      rows="10" value="<?php echo $row['subheading'] ?>">
                                          <?php echo $row['subheading'] ?>
                                        </textarea> -->
                                    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
                                    <style>
                                      .ck-editor__editable_inline {
                                        min-height: 200px !important;
                                      }
                                    </style>
                                    <div id="wrapper" class="w-100 p-2 border rounded-3 mb-2">
                                      <div id="editor_div">
                                        <textarea id="editor" name="subheading" name="w3review"
                                          placeholder="<?php echo $row['subheading'] ?>"
                                          value="<?php echo $row['subheading'] ?>"></textarea>
                                        <script>
                                          ClassicEditor
                                            .create(document.querySelector('#editor'))
                                            .then(editor => {
                                              ;
                                              console.log(editor);
                                            })
                                            .catch(error => {
                                              console.error(error);
                                            });
                                        </script>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-6">
                                        Patient Beds :
                                        <input class="w-100 p-2 border rounded-3 mb-2" type="number" name="patient_beds"
                                          value="<?php echo $row['patient_beds'] ?>">
                                      </div>
                                      <div class="col-6">
                                        Doctors & Nurses :
                                        <input class="w-100 p-2 border rounded-3 mb-2" type="number" name="doctors_nurses"
                                          value="<?php echo $row['doctors_nurses'] ?>">
                                      </div>
                                      <div class="col-6">
                                        Happy Patients :
                                        <input class="w-100 p-2 border rounded-3 mb-2" type="number" name="happy_patients"
                                          value="<?php echo $row['happy_patients'] ?>">
                                      </div>
                                      <div class="col-6">
                                        Experience :
                                        <input class="w-100 p-2 border rounded-3 mb-2" type="number" name="experience"
                                          value="<?php echo $row['experience'] ?>">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="w-100 btn text-white"
                                      style="background: rgb(29,111,241)">
                                      Save
                                    </button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
              bootstrapdash.com
              2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a>
              from
              Bootstrapdash.com</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="try.js" defer></script>

  <script>
    function mydisplaytime(data, id) {
      let req = new XMLHttpRequest();
      req.open("GET", "http://localhost/Bootstrap%20Hospital/Backend/pages/tables/appointment-display-time.php?last=" + data, true);
      req.send();
      req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById("timeslot" + id).style.display = req.responseText;
        }
      }
    }
    function myvalidtime(data, id) {
      let req = new XMLHttpRequest();;
      req.open("GET", "http://localhost/Bootstrap%20Hospital/Backend/pages/tables/appointment-booked-time.php?last=" + data + "&id=" + id, true);
      req.send();
      req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById("booked_slot_alert").style.display = req.responseText;
        }
      }
    }
  </script>
</body>

</html>