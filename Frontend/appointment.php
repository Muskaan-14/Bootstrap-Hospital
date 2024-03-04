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

    <!-- Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker").datepicker();
        });
    </script>

    <title>Appointments | HMS</title>
</head>

<body>
    <main style=" border-radius: 0px 0px 100px 100px; background: rgb(245,248,249);">
        <div class="container">
            <nav class="navbar navbar-expand-xl navbar-light">
                <a class="navbar-brand ms-0" href="#">
                    <img class="img-fluid" src="logo.png" alt="" style="transform: scale(0.6);">
                </a>
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                                    <a class="nav-link active bg-white dropdown-item text-secondary mx-4 py-2"
                                        aria-current="page" href="appointment.php">Appointment</a>
                                </li>
                                <li>
                                    <a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="working-hours.php">Working Hours</a>
                                </li>
                                <li>
                                    <a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="testimonials.php">Testimonials</a>
                                </li>
                                <li>
                                    <a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="terms_of_service.php">Terms of Service</a>
                                </li>
                                <li>
                                    <a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="privacy_policy.php">Privacy Policy</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown p-xl-2">
                            <a class="nav-link dropdown-toggle2 text-secondary" href="#" id="navbarDropdown2">
                                English
                            </a>
                            <ul class="pe-5 dropdown-menu ms-xl-2 ms-0 border-0 pt-1 rounded-3 position-absolute"
                                id="navbarDropdown2content">
                                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="#">Arabic</a>
                                </li>
                                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="#">Chinese</a>
                                </li>
                                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="#">English</a>
                                </li>
                                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="#">French</a>
                                </li>
                                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="#">German</a>
                                </li>
                                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="#">Portuguese</a></li>
                                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="#">Russian</a>
                                </li>
                                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="#">Spanish</a>
                                </li>
                                <li><a class="nav-link bg-white dropdown-item text-secondary mx-4 py-2"
                                        href="#">Turkish</a>
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
            <div class="row pt-5 mt-4" style="overflow: hidden;">
                <div class="col-lg-6 align-self-center">
                    <h1 class="text-center text-lg-start fw-bold myhead1"
                        style="color: rgb(22,30,84); font-size: 40px;">Make Appointment</h1>
                    <h6 class="text-center text-lg-start mt-4" style="color: rgb(255,142,75);">Home
                        <span class="text-center text-lg-start text-secondary"> / Make Appointment</span>
                    </h6>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <img class="img-fluid" src="make-appointment.png" alt="">
                </div>
            </div>
        </div>
    </main>

    <section>
        <div class="mt-5 container shadow p-5 rounded-3">
            <div class="d-lg-flex">
                <h1 style="color: rgb(22,30,84); font-weight: 800;">Make an Appointment</h1>
                <div class="d-flex py-3 ms-auto">
                    <div class="form-check">
                        <input class="form-check-input shadow-none" type="radio" checked name="patient_type">
                        <label class="px-3 p-1 form-check-label" class="px-3" for="patient_type">New Patient</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input shadow-none" type="radio" name="patient_type">
                        <label class="px-3 p-1 form-check-label" for="patient_type">Old Patient</label><br>
                    </div>
                </div>
            </div>
            <form action="appointment2.php" method="post">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 py-3">
                        <label class="" for="" style="color: rgb(22,30,84);">First Name :</label>
                        <span class="text-danger fw-bold fs-4">*</span>
                        <input class="myinput w-100 p-3 my-2 border rounded-3" type="name" name="patient_fname"
                            placeholder="Enter your First Name" required>

                    </div>
                    <div class="col-lg-4 col-md-6 py-3">
                        <label for="" style="color: rgb(22,30,84);">Last Name :</label>
                        <span class="text-danger fw-bold fs-4">*</span>
                        <input class="myinput w-100 p-3 my-2 border rounded-3" type="name" name="patient_lname"
                            placeholder="Enter your Last Name" required>
                    </div>
                    <div class="col-lg-4 col-md-6 py-3">
                        <label class="pb-4" for="" style="color: rgb(22,30,84);">Gender :</label>
                        <span class="text-danger fw-bold fs-4">*</span><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input shadow-none" type="radio" value="M" checked
                                name="patient_gender">
                            <label class="px-3 p-1 form-check-label" for="patient_gender">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input shadow-none" type="radio" value="F" name="patient_gender">
                            <label class="px-3 p-1 form-check-label" for="patient_gender">Female</label><br>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 py-3">
                        <label for="email" style="color: rgb(22,30,84);">Email :</label>
                        <span class="text-danger fw-bold fs-4">*</span>
                        <input class="myinput w-100 p-3 my-2 border rounded-3" type="email" name="patient_email"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="col-lg-4 col-md-6 py-3">
                        <label for="password" style="color: rgb(22,30,84);">Password :</label>
                        <span class="text-danger fw-bold fs-4">*</span>
                        <input class="myinput w-100 p-3 my-2 border rounded-3" type="password" name="patient_pswd"
                            placeholder="Enter your Password" required>
                    </div>
                    <div class="col-lg-4 col-md-6 py-3">
                        <label for="password" style="color: rgb(22,30,84);">Confirm Password :</label>
                        <span class="text-danger fw-bold fs-4">*</span>
                        <input class="myinput w-100 p-3 my-2 border rounded-3" type="password"
                            name="patient_confirm_pswd" placeholder="Enter Confirm Password" required>
                    </div>
                    <div class="col-lg-4 col-md-6 py-3">
                        <label for="" style="color: rgb(22,30,84);">Doctor Department :</label>
                        <span class="text-danger fw-bold fs-4">*</span>
                        <br>
                        <select class="w-100 p-3 mt-2 border rounded-3" name="patient_dept">
                            <option value="Allergists">Allergists</option>
                            <option value="Bllergists">Bllergists</option>
                            <option value="Cllergists">Cllergists</option>
                            <option value="Dllergists">Dllergists</option>
                            <option value="Ellergists">Ellergists</option>
                        </select>

                        <!-- <div class="position-relative myselectinput">
                            <input class="w-100 p-3 mt-2 border rounded-3" type="" placeholder="Select Department">
                            <div class="position-absolute start-0 w-100 d-none shadow-sm" style=" border-radius: 20px;">
                                <div class="overflow-auto" style=" max-height: 200px;">
                                    <button class="option p-3 px-4 rounded-3" onclick="myselectfunction(this.value)"
                                        style="font-size: 15px;" data-value="1" data-selectable>Allergists</button>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="2"
                                        data-selectable>Bllergists</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3"
                                        data-selectable>Cllergists</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="4"
                                        data-selectable>Dllergists</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="5"
                                        data-selectable>Ellergists</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="6"
                                        data-selectable>Fllergists</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="7"
                                        data-selectable>Gllergists</div>
                                </div>
                            </div>
                        </div>
                        <script>
                            function myselectfunction(val) {
                                alert(val);
                            }
                        </script> -->

                        <!-- <select class="" name="patient_dept" id="selectbox1">
                            <option value="1">Select Department</option>
                            <option value="2">Allergists</option>
                            <option value="3">Bllergists</option>
                            <option value="4">Cllergists</option>
                            <option value="5">Dllergists</option>
                            <option value="6">Ellergists</option>
                        </select> -->

                    </div>
                    <div class="col-lg-4 col-md-6 py-3">
                        <label for="" style="color: rgb(22,30,84);">Doctor :</label>
                        <span class="text-danger fw-bold fs-4">*</span>
                        <br>
                        <select class="w-100 p-3 mt-2 border rounded-3" name="patient_doctor">
                            <option value="steven">Steven </option>
                            <option value="Lyon">Lyon </option>
                            <option value="John">John</option>
                            <option value="steven">Steven </option>
                            <option value="Lyon">Lyon </option>
                        </select>
                        <!-- <div class="position-relative myselectinput">
                            <input class="w-100 p-3 mt-2 border rounded-3" name="patient_doctor" type=""
                                placeholder="Select Doctor" value="NULL">
                            <div class="position-absolute start-0 w-100 d-none shadow-sm" style=" border-radius: 20px;">
                                <div class="overflow-auto" style=" max-height: 200px;">
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3"
                                        data-selectable>Steven Lyon</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3"
                                        data-selectable>Steven Lyon</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3"
                                        data-selectable>Steven Lyon</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3"
                                        data-selectable>Steven Lyon</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3"
                                        data-selectable>Steven Lyon</div>
                                    <div class="option p-3 px-4 rounded-3" style="font-size: 15px;" data-value="3"
                                        data-selectable>Steven Lyon</div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-4 py-3">
                        <label for="date" style="color: rgb(22,30,84);">Date :</label>
                        <span class="text-danger fw-bold fs-4">*</span>
                        <input class="myinput w-100 p-3 my-2 border rounded-3 position-relative" type="text"
                            id="datepicker" name="patient_date" required>
                    </div>
                    <div class="py-3">
                        <label for="" style="color: rgb(22,30,84);">Description :</label>
                        <textarea class="w-100 p-3 my-2 border rounded-3" name="patient_description"
                            placeholder="Enter Description" cols="30" rows="1"></textarea>
                    </div>
                    <div class="text-center">
                        <button class="my-5 mb-4 mybutton p-3 px-4 border-0 rounded-3 text-white"
                            style="background: rgb(255,142,75);" type="submit" name="submit"
                            value="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="">
        <div class="container text-center text-xl-start mt-5 pb-5">
            <div class="row py-5">
                <div class="col-md-10 col-lg-12 mx-auto px-xl-5 ">
                    <div class="row">
                        <div class="col-xl-6">
                            <h1 style="color: rgb(22,30,84); font-weight: 800;">ayouu</h1>
                            <p class="text-secondary py-3">Healthcare has a robust presence across the healthcare
                                ecosystem. From
                                routine wellness & preventive health care to innovative life-saving treatments and
                                diagnostic
                                services, We touched more than many lives from many countries, offering the best
                                clinical
                                outcomes.</p>
                        </div>
                        <div class="col-lg-6 col-xl-3 d-flex">
                            <div class="w-100 border px-3 mt-5 text-center" style="border-radius: 20px;">
                                <i class="fa-solid fa-phone p-4 fs-3 rounded-circle"
                                    style="color: rgb(60,196,123); background-color: rgb(235,249,242); margin-top: -30px;">
                                </i>
                                <div class="mt-4">
                                    <a class="text-decoration-none fs-5" href="tel:+905414761900"
                                        style="color: rgb(22,30,84);">+905414761900
                                    </a>
                                </div>
                                <p class="py-2 text-secondary">Call Now and Get a Free Consulting</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 d-flex">
                            <div class="w-100 border px-3 mt-5 text-center" style="border-radius: 20px;">
                                <i class="fa-solid fa-envelope p-4 fs-3 rounded-circle"
                                    style="color: rgb(255,142,75); background-color: rgb(255,243,237); margin-top: -30px;">
                                </i>
                                <div class="mt-4">
                                    <a class="text-decoration-none fs-5" href="mailto:labs@infyom.in"
                                        style="color: rgb(22,30,84);">labs@infyom.in
                                    </a>
                                </div>
                                <p class="py-2 text-secondary">Contact Hospital</p>
                            </div>
                        </div>
                    </div>
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
    <!-- 

    < JavaScript :-
    https://jsfiddle.net/BB3JK/47/  
    <script>
        // Iterate over each select element
        $('select').each(function () {

            // Cache the number of options
            var $this = $(this),
                numberOfOptions = $(this).children('option').length;

            // Hides the select element
            $this.addClass('invisible');

            // Wrap the select element in a div
            $this.wrap('<div class="select"></div>');

            // Insert a styled div to sit over the top of the hidden select element
            $this.after('<div class="styledSelect"></div>');

            // Cache the styled div
            var $styledSelect = $this.next('div.styledSelect');

            // Show the first select option in the styled div
            $styledSelect.text($this.children('option').eq(0).text());

            // Insert an unordered list after the styled div and also cache the list
            var $list = $('<ul />', {
                'class': 'options, list-unstyled'
            }).insertAfter($styledSelect);

            // Insert a list item into the unordered list for each select option
            for (var i = 0; i < numberOfOptions; i++) {
                $('<li />', {
                    text: $this.children('option').eq(i).text(),
                    rel: $this.children('option').eq(i).val()
                }).appendTo($list);
            }
            // Cache the list items
            var $listItems = $list.children('li');

            // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
            $styledSelect.click(function (e) {
                e.stopPropagation();
                $('div.styledSelect.active').each(function () {
                    $(this).removeClass('active').next('ul.options').hide();
                });
                $(this).toggleClass('active').next('ul.options').toggle();
            });

            // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
            // Updates the select element to have the value of the equivalent option
            $listItems.click(function (e) {
                e.stopPropagation();
                $styledSelect.text($(this).text()).removeClass('active');
                $this.val($(this).attr('rel'));
                $list.hide();
                alert($this.val()); Uncomment this for demonstration! 
            });

            // Hides the unordered list when clicking outside of it
            $(document).click(function () {
                $styledSelect.removeClass('active');
                $list.hide();
            });
        });
    </script> -->

</body>

</html>