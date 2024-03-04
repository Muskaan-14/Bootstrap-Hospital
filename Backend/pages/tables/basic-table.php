<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Table | HMS | Admin</title>
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
            <img src="../logo.png">
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
            <a class="nav-link" href="index.php" style="background: rgb(255,142,75);" >
              <i class="icon-box menu-icon text-white"></i>
              <span class="menu-title text-white">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/appointment.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-globe menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Appointment</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/about.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-speech-bubble menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">About</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/services.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-square-check menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Services</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/doctors.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-help menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Doctors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/testimonials.php" style="border-top: 2px solid rgb(255,142,75);">
              <i class="icon-head menu-icon text-dark"></i>
              <span class="menu-title" style="color: rgb(22,30,84);">Testimonials</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/contact.php" style="border-top: 2px solid rgb(255,142,75);">
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
                  <!-- <p class="card-description">
                    Add class <code>.table</code>
                  </p> -->
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
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Current Status</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <input type="number" name="patient_id" id="patient_id"
                                          value="<?php echo $row['patientid'] ?>" class="d-none">
                                        <select onchange="mydisplaytime(this.value,<?php echo $row['patientid'] ?>)"
                                          class="w-100 p-3 py-2" name="status" value="">
                                          <option class="p-3" value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
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
                                            <option value="Accepted">Accepted</option>
                                            <?php
                                          }
                                          ?>
                                          <?php
                                          if ($row['status'] != 'Rejected') {
                                            ?>
                                            <option value="Rejected">Rejected</option>
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
                                            <option class="p-3" value="<?php echo substr($row['time'], 0, 5) ?>"><?php echo substr($row['time'], 0, 5) ?></option>
                                            <?php
                                            foreach ($arr as $value) {
                                              if ($value != $row['time']) {
                                                ?>
                                                <option value="<?php echo $value ?>"><?php echo $value ?></option>
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
                                            <option class="p-3" value="<?php echo substr($row['time'], 0, 5) ?>"><?php echo substr($row['time'], 0, 5) ?></option>
                                            <?php
                                            foreach ($arr as $value) {
                                              if ($value != substr($row['time'], 0, 5)) {
                                                ?>
                                                <option value="<?php echo $value ?>"><?php echo $value ?></option>
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
                                        <button type="submit" class="btn btn-primary">Save changes</button>
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
            <!-- <div class=" grid-margin stretch-card"> 
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">About Us</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SNo</th>
                          <th>Heading</th>
                          <th>Subheading</th>
                          <th>Patient Beds</th>
                          <th>Doctors Nurses</th>
                          <th>Happy Patients</th>
                          <th>Experience</th>
                          <th>Action</th>
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
                            <form action="about_table.php" method="post">
                              <td>
                                <input class="w-100 p-2 border rounded-3" type="text" name="heading" value="<?php echo $row['heading'] ?>">
                              </td>
                              <td>
                                <textarea class="w-100 p-2 border rounded-3" name="subheading" cols="60" rows="10" value="<?php echo $row['subheading'] ?>">
                                  <?php echo $row['subheading'] ?>
                                </textarea>
                              </td>
                              <td style="width:40px">
                                <input class="w-100 p-2 border rounded-3" type="text" name="patient_beds" value="<?php echo $row['patient_beds'] ?>">
                              </td>
                              <td style="width:40px">
                                <input class="w-100 p-2 border rounded-3" type="text" name="doctors_nurses" value="<?php echo $row['doctors_nurses'] ?>">
                              </td>
                              <td style="width:40px">
                                <input class="w-100 p-2 border rounded-3" type="text" name="happy_patients" value="<?php echo $row['happy_patients'] ?>">
                              </td>
                              <td style="width:40px">
                                <input class="w-100 p-2 border rounded-3" type="number" name="experience" value="<?php echo $row['experience'] ?>">
                              </td>
                              <td>
                                <button type="submit" class="w-100 btn text-white" style="background: rgb(29,111,241)">
                                  Save
                                </button>
                              </td>
                            </form>
                          </tr>
                          <?php
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->
            <div class=" grid-margin stretch-card"> <!-- col-xxl-6 -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">About Us</h4>
                  <button type="button" class="btn text-white mb-2" style="background: rgb(29,111,241);" data-bs-toggle="modal" data-bs-target="#aboutModal">
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
                                    <textarea class="w-100 p-2 border rounded-3 mb-2" name="subheading" cols="60"
                                      rows="10" value="<?php echo $row['subheading'] ?>">
                                                        <?php echo $row['subheading'] ?>
                                                      </textarea>
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
            <!-- <div class=" grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Our Services</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>SNo</th>
                          <th>Image</th>
                          <th>Heading</th>
                          <th>Subheading</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "hospital");
                        if (mysqli_connect_errno()) {
                          echo "Connection Fail" . mysqli_connect_error();
                        }
                        ;
                        $sql = "select * from service_master";
                        $query = mysqli_query($con, $sql);
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                          ?>
                          <tr>
                            <td>
                              <?php echo $cnt++ ?>
                            </td>
                            <td>
                              <img src="../../../<?php echo $row['image'] ?>" alt="">
                            </td>
                            <td>
                              <?php echo $row['heading'] ?>
                            </td>
                            <td>
                              <?php echo $row['subheading'] ?>
                            </td>
                            <td>
                              <?php
                              if ($row['status'] == "Active") {
                                ?>
                                <button type="submit" class="w-100 btn text-white" style="background: rgb(29,111,241)"
                                  onclick="togglestatus(this.value,<?php echo $row['service_id'] ?>)"
                                  value="<?php echo $row['status'] ?>" id="about_toggle<?php echo $row['service_id'] ?>">
                                  <?php echo $row['status'] ?>
                                </button>
                                <?php
                              } else {
                                ?>
                                <button type="submit" class="w-100 btn text-white" style="background: rgb(249,99,118)"
                                  onclick="togglestatus(this.value,<?php echo $row['service_id'] ?>)"
                                  value="<?php echo $row['status'] ?>" id="about_toggle<?php echo $row['service_id'] ?>">
                                  <?php echo $row['status'] ?>
                                </button>
                                <?php
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                        }
                        ?>
                        <form action="service_table.php" method="post">
                          <tr id="add_row">
                            <td>
                              <?php echo $cnt++ ?>
                            </td>
                            <td>
                              <input class="p-2 border rounded-3 w-100" name="image" type="text"
                                placeholder="Image Path" Required>
                            </td>
                            <td>
                              <input class="p-2 border rounded-3 w-100" name="heading" type="text" placeholder="Heading"
                                Required>
                            </td>
                            <td>
                              <textarea class="p-2 border rounded-3 w-100" name="subheading" id="" rows="2"
                                placeholder="Sub Heading" Required></textarea>
                            </td>
                            <td>
                              <button class="w-100 btn text-white" style="background:  rgb(60,196,123);" value="Add"
                                type="submit">Save</button>
                            </td>
                          </tr>
                          Comment!! <button class="btn text-white" style="background: rgb(60,196,123);" id="add_service" onclick="addservice(this.value)" value="Add">Add</button>
                        </form>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> -->
            <div class=" grid-margin stretch-card"> <!-- col-xxl-6 -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Our Services</h4>
                  <button type="button" class="btn text-white mb-2" style="background: rgb(29,111,241);"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add
                  </button>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>SNo</th>
                          <th>Image</th>
                          <th>Heading</th>
                          <th>Subheading</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $con = mysqli_connect("localhost", "root", "", "hospital");
                        if (mysqli_connect_errno()) {
                          echo "Connection Fail" . mysqli_connect_error();
                        }
                        ;
                        $sql = "select * from service_master";
                        $query = mysqli_query($con, $sql);
                        $cnt = 1;
                        while ($row = mysqli_fetch_array($query)) {
                          ?>
                          <tr>
                            <td>
                              <?php echo $cnt++ ?>
                            </td>
                            <td>
                              <?php
                              echo "<img src='images/" . $row['image'] . "'>";
                              ?>
                              <!-- <img src="data:image/jpeg;base64, '.base64_encode(<?php echo $row['image'] ?>). '" alt="">
                              <img src="../../../<?php echo $row['image'] ?>" alt="">  -->
                            </td>
                            <td>
                              <?php echo $row['heading'] ?>
                            </td>
                            <td>
                              <?php echo $row['subheading'] ?>
                            </td>
                            <td>
                              <?php
                              if ($row['status'] == "Active") {
                                ?>
                                <button type="submit" class="w-100 btn text-white" style="background: rgb(60,196,123)"
                                  onclick="togglestatus(this.value,<?php echo $row['service_id'] ?>)"
                                  value="<?php echo $row['status'] ?>" id="about_toggle<?php echo $row['service_id'] ?>">
                                  <?php echo $row['status'] ?>
                                </button>
                                <?php
                              } else {
                                ?>
                                <button type="submit" class="w-100 btn text-white" style="background: rgb(249,99,118)"
                                  onclick="togglestatus(this.value,<?php echo $row['service_id'] ?>)"
                                  value="<?php echo $row['status'] ?>" id="about_toggle<?php echo $row['service_id'] ?>">
                                  <?php echo $row['status'] ?>
                                </button>
                                <?php
                              }
                              ?>
                            </td>
                          </tr>
                          <?php
                        }
                        ?>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Service</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <form action="service_table.php" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                  Image :
                                  <input class="file-upload-input mb-2 w-100" name="image" id="image" type="file"
                                    Required>
                                  Heading :
                                  <input class="p-2 border rounded-3 w-100 mb-2" name="heading" type="text"
                                    placeholder="Heading" Required>
                                  Sub Heading :
                                  <textarea class="p-2 border rounded-3 w-100 mb-2" name="subheading" id="" rows="2"
                                    placeholder="Sub Heading" Required></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button class="w-100 btn text-white" style="background: rgb(29,111,241);"
                                    type="submit">Save</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
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
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
              2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from
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
      req.open("GET", "http://localhost/Bootstrap%20Hospital/Backend/pages/tables/table-display-time.php?last=" + data, true);
      req.send();
      req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById("timeslot" + id).style.display = req.responseText;
        }
      }
    }
    function myvalidtime(data, id) {
      let req = new XMLHttpRequest();;
      req.open("GET", "http://localhost/Bootstrap%20Hospital/Backend/pages/tables/table-booked-time.php?last=" + data + "&id=" + id, true);
      req.send();
      req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById("booked_slot_alert").style.display = req.responseText;
        }
      }
    }
    function togglestatus(data, id) {
      let req = new XMLHttpRequest();;
      req.open("GET", "http://localhost/Bootstrap%20Hospital/Backend/pages/tables/service_table_toggle.php?last=" + data + "&id=" + id, true);
      req.send();
      req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
          document.getElementById("about_toggle" + id).value = req.responseText;
          document.getElementById("about_toggle" + id).innerHTML = req.responseText;
          req.open("GET", "http://localhost/Bootstrap%20Hospital/Backend/pages/tables/service_table_toggle_color.php?last=" + data + "&id=" + id, true);
          req.send();
          req.onreadystatechange = function () {
            if (req.readyState == 4 && req.status == 200) {
              document.getElementById("about_toggle" + id).style.backgroundColor = req.responseText;
            }
          }
        }
      }
    }
    function addservice(data) {
      function fun1(data) {
        let req = new XMLHttpRequest();
        req.open("GET", "http://localhost/Bootstrap%20Hospital/Backend/pages/tables/service_table_add_btn.php?last=" + data, true);
        req.send();
        req.onreadystatechange = function () {
          if (req.readyState == 4 && req.status == 200) {
            document.getElementById("add_service").innerHTML = req.responseText;
            document.getElementById("add_service").value = req.responseText;
          }
        }
      }
      function fun2(data) {
        let req = new XMLHttpRequest();
        req.open("GET", "http://localhost/Bootstrap%20Hospital/Backend/pages/tables/service_table_add_input.php?last=" + data, true);
        req.send();
        req.onreadystatechange = function () {
          if (req.readyState == 4 && req.status == 200) {
            let nodes = document.getElementById("add_row").getElementsByTagName("td");
            for (var i = 0; i < nodes.length; i++) {
              nodes[i].style.visibility = req.responseText;
            }
          }
        }
      }
      fun1(data);
      fun2(data);
    }
  </script>
</body>

</html>