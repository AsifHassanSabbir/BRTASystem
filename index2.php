<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>User Dashboard</title>
</head>
<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">


    <!--================== Navbar=================--->

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-body-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php"
                    style="font-family: Georgia;font-weight: bold; font-size: 25px; color: black; text-decoration: none;"><img
                        src="https://i.ibb.co/JyJBZn4/logo.png" alt="logo" height="65px" style="padding-left: 20px;">
                    Bangladesh Road Transport Authority</a>
                <form class="logreg">

                    <button class="btn btn-outline-dark" type="submit"
                        style="font-family: Josefin Sans;font-weight: bold;"><a href=" adminlogin.php"
                            style="color: white; text-decoration: none;">Login</a></button>

                    <button class="btn btn-outline-dark" type="submit"
                        style="font-family: Josefin Sans; font-weight: bold; "><a href=" adminregistration.php"
                            style="color: white; text-decoration: none;">Registration</a></button>
                </form>
            </div>

            <!--======================Translate===================-->


            <div id="google_translate_element"></div>

            <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en-US'
                }, 'google_translate_element');
            }
            </script>

            <script type="text/javascript"
                src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
            </script>
        </nav>
    </div>

    <div class="middel">
        <h2 style="font-family: Josefin Sans; font-weight: bold; text-align:center; padding-top:8%; padding-bottom:8%">
            You are logout.
        </h2>
        <button class="button button2"><a href=" home.php"
                style="color: black; text-decoration: none; padding-bottom= 10%">Go back to home
                page.</a></button>

    </div>


    <div class="footer">


        <!-- Grid container -->
        <div class="container p-2">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col">
                    <h5 class="text-uppercase mb-3"
                        style="font-family: Josefin Sans;font-weight: bold; font-size: 18px; padding-top: 15px;">
                        Contact</h5>

                    <p><i class="fas fa-home mr-3"></i> Dhanmondhi 32, Dhaka-1209,
                        Bangladesh.</p>
                    <p><i class="fas fa-envelope mr-3"></i> info.brta@govt.bd</p>
                    <p><i class=" fas fa-phone mr-3"></i> 91320, 23456 098 521 <br>
                        [SUNDAY - THURSDAY (9.00 AM - 5.00 PM)]
                    </p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col">
                    <h5 class="text-uppercase mb-3"
                        style="font-family: Josefin Sans;font-weight: bold; font-size: 18px; padding-top: 15px;">
                        IMPORTANT LINKS</h5>

                    <p><a class="link-dark link-offset-2 link-underline link-underline-opacity-0" href="#">Road
                            Transport & Highway Division</a>
                    </p>
                    <p><a class="link-dark link-offset-2 link-underline link-underline-opacity-0" href="#">Bridges
                            Division</a>
                    </p>
                    <p><a class="link-dark link-offset-2 link-underline link-underline-opacity-0" href="#">Bangladesh
                            Division</a>
                    </p>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col">
                    <h5 class="text-uppercase mb-3"
                        style="font-family: Josefin Sans;font-weight: bold; font-size: 18px; padding-top: 15px;">
                        Sign up to BRTA</h5>

                    <div class="form-outline form-dark mb-2" style="font-family: Times New Roman;>
                        <label class=" form-label" for="form5Example2">Email address</label>
                        <input type="email" id="form5Example2" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-outline-dark" style="font-family: Times New Roman;"><a
                            href=" adminregistration.php"
                            style="color: white; text-decoration: none;">Subscribe</a></button>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->


        </footer>

    </div>

    <!-- End of .container -->

    <div class="footer2">
        <p style="color: #ffff; font-family: Josefin Sans;">
            Copyright © 2023 BRTA. All rights reserved.
        </p>
    </div>


</body>