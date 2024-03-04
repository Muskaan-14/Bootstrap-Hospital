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

    <title>Login | HMS</title>
</head>

<body style="background : rgb(239,243,247);">

    <section>
        <div class="container mx-auto mt-5 text-center" style=" max-width: 540px;">
            <img class="img-fluid my-5" src="logo.png" alt="">
            <div class="bg-white rounded-3 text-start shadow p-4 pb-5">
                <form action="login2.php" method="post">
                    <h4 class="py-3 text-center ">Sign In</h4>
                    <label for="mail">Email:</label>
                    <span class="text-danger fw-bold">*</span>
                    <input class="w-100 p-3 my-2 py-2 rounded-3 border" type="email" name="login_email"
                        placeholder="Email">
                    <div class="d-flex mt-3">
                        <label for="pswd">Password:</label>
                        <span class="text-danger fw-bold">*</span>
                        <a class="text-decoration-none ms-auto" href="">Forgot Password ?</a>
                    </div>
                    <input class="w-100 p-3 my-2 py-2 rounded-3 border" type="password" name="login_pswd"
                        placeholder="Password">
                    <input class="mt-3" type="checkbox">
                    <label for="">Remember Me</label>
                    <button class="my-3 rounded-3 w-100 border-0 py-2 text-center text-white bg-primary">Login</button>
                    <span>New Here?</span>
                    <a class="text-decoration-none" href="register.php">Create an Account</a>
                </form>
            </div>
        </div>
    </section>

</body>

</html>