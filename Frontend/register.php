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

    <title>Register | HMS</title>
</head>

<body style="background : rgb(239,243,247);">

    <section>
        <div class="container mx-auto my-5 text-center" style=" max-width: 540px;">
            <img class="img-fluid my-5" src="logo.png" alt="">
            <div class="bg-white rounded-3 text-start shadow p-4 pb-5">
                <form action="register2.php" method="post">
                    <h4 class="py-3 text-center ">Patient Registeration</h4>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label for="name">First Name:</label>
                            <span class="text-danger fw-bold">*</span>
                            <input class="w-100 p-3 my-2 py-2 rounded-3 border" type="text" name="register_fname"
                                placeholder="First Name">
                        </div>
                        <div class="col-md-6">
                            <label for="name">Last Name:</label>
                            <span class="text-danger fw-bold">*</span>
                            <input class="w-100 p-3 my-2 py-2 rounded-3 border" type="text" name="register_lname"
                                placeholder="Last Name">
                        </div>
                        <div class="col-md-6">
                            <label for="mail">Email:</label>
                            <span class="text-danger fw-bold">*</span>
                            <input class="w-100 p-3 my-2 py-2 rounded-3 border" type="email" name="register_email"
                                placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone Number:</label>
                            <span class="text-danger fw-bold">*</span>
                            <input class="w-100 p-3 my-2 py-2 rounded-3 border" type="phone" name="register_phone"
                                placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <label for="pswd">Password:</label>
                            <span class="text-danger fw-bold">*</span>
                            <input class="w-100 p-3 my-2 py-2 rounded-3 border" type="password" name="register_pswd"
                                placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            <label for="pswd">Confirm Password:</label>
                            <span class="text-danger fw-bold">*</span>
                            <input class="w-100 p-3 my-2 py-2 rounded-3 border" type="password" name="register_pswd"
                                placeholder="Confirm Password">
                        </div>
                    </div>
                        <label class="pt-4 pb-2" for="">Gender :</label>
                        <span class="text-danger fw-bold">*</span><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input shadow-none" type="radio" value="M" checked
                                name="register_gender">
                            <label class="px-2 p-1 form-check-label" for="register_gender">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input shadow-none" type="radio" value="F" name="register_gender">
                            <label class="px-2 p-1 form-check-label" for="register_gender">Female</label><br>
                        </div>
                    <button class="my-3 mt-4 rounded-3 w-100 border-0 py-2 text-center text-white bg-primary"
                        type="submit">Submit</button>
                    <span>Already User ?</span>
                    <a class="text-decoration-none" href="login.php">Sign In</a>
                </form>
            </div>
        </div>
    </section>

</body>

</html>