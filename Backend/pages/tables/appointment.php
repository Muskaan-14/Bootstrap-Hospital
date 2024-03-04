<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Appointment | HMS | Admin</title>
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
            <a class="nav-link" href="appointment.php" style="background: rgb(255,142,75);">
              <i class="icon-globe menu-icon text-white"></i>
              <span class="menu-title text-white">Appointment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-speech-bubble menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">About</span>
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
                  <h4 class="card-title">Appointment</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>SNo</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Department</th>
                          <th>Doctor</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Time</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "hospital");
                        if (mysqli_connect_errno()) {
                          echo "Connection Fail" . mysqli_connect_error();
                        }
                        ;
                        $sql = "select * from appointment_master";
                        $query = mysqli_query($con, $sql);
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                          ?>
                          <tr>
                            <td>
                              <?php echo $cnt++ ?>
                            </td>
                            <td>
                              <?php echo $row['fname'] . ' ' . $row['lname'] ?>
                            </td>
                            <td>
                              <?php echo $row['gender'] ?>
                            </td>
                            <td>
                              <?php echo $row['doctor_dept'] ?>
                            </td>
                            <td>
                              <?php echo $row['doctor_name'] ?>
                            </td>
                            <td>
                              <?php echo $row['dat'] ?>
                            </td>
                            <td>
                              <?php
                              if ($row['status'] == 'Accepted') {
                                echo substr($row['time'], 0, 5);
                              }
                              ?>
                            </td>
                            <td class="pe-lg-2 pe-xl-5">
                              <?php if ($row['status'] == 'Pending') {
                                ?>
                                <button type="button" class="w-100 btn text-white" style="background: rgb(249,99,118)"
                                  data-bs-toggle="modal" data-bs-target="#Modal<?php echo $row['patientid'] ?>">
                                  <?php echo $row['status'] ?>
                                </button>
                                <?php
                              } else if ($row['status'] == 'Accepted') {
                                ?>
                                  <button type="button" class="w-100 btn text-white" style="background: rgb(60,196,123);"
                                    data-bs-toggle="modal" data-bs-target="#Modal<?php echo $row['patientid'] ?>">
                                  <?php echo $row['status'] ?>
                                  </button>
                                  <?php
                              } else if ($row['status'] == 'Rejected') {
                                ?>
                                    <button type="button" class="w-100 btn text-white" style="background: rgb(29,111,241)"
                                      data-bs-toggle="modal" data-bs-target="#Modal<?php echo $row['patientid'] ?>">
                                    <?php echo $row['status'] ?>
                                    </button>
                                    <?php
                              }
                              ?>
                              <form action="appointment_table.php" method="post">
                                <div class="modal fade" id="Modal<?php echo $row['patientid'] ?>" tabindex="-1"
                                  aria-labelledby="ModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Current Status
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <input type="number" name="patient_id" id="patient_id"
                                          value="<?php echo $row['patientid'] ?>" class="d-none">
                                        <select onchange="mydisplaytime(this.value,<?php echo $row['patientid'] ?>)"
                                          class="w-100 p-3 py-2" name="status" value="">
                                          <option class="p-3" value="<?php echo $row['status'] ?>">
                                            <?php echo $row['status'] ?>
                                          </option>
                                          <?php
                                          if ($row['status'] != 'Pending') {
                                            ?>
                                            <option value="Pending">Pending</option>
                                            <?php
                                          }
                                          ?>
                                          <?php
                                          if ($row['status'] != 'Accepted') {
                                            ?>
                                            <option value="Accepted">Accepted
                                            </option>
                                            <?php
                                          }
                                          ?>
                                          <?php
                                          if ($row['status'] != 'Rejected') {
                                            ?>
                                            <option value="Rejected">Rejected
                                            </option>
                                            <?php
                                          }
                                          ?>
                                        </select>
                                        <?php
                                        $arr = array('10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '01:00', '01:30', '02:00', '02:30', '03:00', '03:30', '04:00');
                                        if ($row['status'] != 'Accepted') {
                                          ?>
                                          <select class="w-100 p-3 py-2 my-2" style="display:none" name="timeslot"
                                            onchange="myvalidtime(this.value,<?php echo $row['patientid'] ?>)"
                                            id="timeslot<?php echo $row['patientid'] ?>">
                                            <option class="p-3" value="<?php echo substr($row['time'], 0, 5) ?>">
                                              <?php echo substr($row['time'], 0, 5) ?></option>
                                            <?php
                                            foreach ($arr as $value) {
                                              if ($value != $row['time']) {
                                                ?>
                                                <option value="<?php echo $value ?>">
                                                  <?php echo $value ?></option>
                                                <?php
                                              }
                                            }
                                            ?>
                                          </select>
                                          <?php
                                        } else {
                                          ?>
                                          <select class="w-100 p-3 py-2 my-2"
                                            onchange="myvalidtime(this.value,<?php echo $row['patientid'] ?>)"
                                            name="timeslot" id="timeslot<?php echo $row['patientid'] ?>">
                                            <option class="p-3" value="<?php echo substr($row['time'], 0, 5) ?>">
                                              <?php echo substr($row['time'], 0, 5) ?></option>
                                            <?php
                                            foreach ($arr as $value) {
                                              if ($value != substr($row['time'], 0, 5)) {
                                                ?>
                                                <option value="<?php echo $value ?>">
                                                  <?php echo $value ?></option>
                                                <?php
                                              }
                                            }
                                            ?>
                                          </select>
                                          <?php
                                        }
                                        ?>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                          data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save
                                          changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </td>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                    <div class="alert alert-danger alert-dismissible" role="alert" id="booked_slot_alert"
                      style="display:none">
                      Time is already booked!
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
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