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
                <a class="navbar-brand" href="#" style="font-family: Georgia;font-weight: bold; font-size: 25px;"><img
                        src="https://i.ibb.co/JyJBZn4/logo.png" alt="logo" height="65px" style="padding-left: 20px;">
                    Bangladesh Road Transport Authority</a>
                <form class="logreg">

                    <button class="btn btn-outline-dark" type="submit"
                        style="font-family: Josefin Sans;font-weight: bold;"><a href="logout.php"
                            style="color: white; text-decoration: none;">Logout</a></button>
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


    <!--==================banner==========================-->


    <div class="slide-frame">
        <div class="slide-img">
            <div class="img-container" style="width:100%,">

                <img src="https://i.ibb.co/N64rQTY/BRTAIM1-1.jpg" alt="BRTAIM1-1"
                    style="display: block;margin-left: auto;margin-right: auto;">
            </div>
            <div class="img-container" style="width:100%">
                <img src="https://i.ibb.co/HqxvZ4B/BRTAIM1-2.jpg" alt="BRTAIM1-2"
                    style="display: block;margin-left: auto;margin-right: auto;">

            </div>

        </div>

    </div>

    <!--=======================automove===============================-->

    <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("img-container");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 4000); // Change image every 2 seconds
    }
    </script>


    <!--================Instraction==============================-->


    <div class="instraction">
        <div class="textbox">
            <p>
            <h3><b>Welcome to BRTA Service Portal</b></h3>
            BRTA Service Portal (BSP) Bangladesh Road Transport Authority(BRTA) will allow citizen to resister as a
            service recipient as driver, owner, vehicle dealer to register learner driving license, smart card driving
            license, driving license renewal, duplicate driving license and all relevant services.</p>
        </div>
    </div>


    <div class="flex-container">
        <div class="box">
            <h4 class="text-uppercase" style="padding-bottom: 18px;"><b>
                    instructions of the license
                </b>
            </h4>

            <strong>Driver's License:</strong> All drivers in Bangladesh are required to have a valid driver's license
            issued by the
            BRTA. There are different categories of licenses for different types of vehicles, such as motorcycles, cars,
            trucks, and buses.<br>

            <strong>Vehicle Registration:</strong> All motor vehicles must be registered with the BRTA before they can
            be used on the
            roads. This includes providing necessary documents, paying registration fees, and obtaining a registration
            number and certificate.<br>

            <strong>Vehicle Fitness Certificate:</strong> Vehicles in Bangladesh must undergo regular fitness tests to
            ensure they are in
            roadworthy condition. The BRTA issues a fitness certificate after a vehicle passes the required tests for
            safety and emissions.<br>

            <strong>Insurance:</strong> It is mandatory for all motor vehicles in Bangladesh to have third-party
            liability insurance.
            This insurance provides coverage for damages or injuries caused to third parties in the event of an
            accident.<br>

            <strong>Traffic Rules and Signs:</strong> Drivers are expected to follow traffic rules and regulations,
            including obeying
            traffic signals, yielding to pedestrians, maintaining designated speed limits, and using seat belts.<br>

            <strong>Vehicle Emissions:</strong>Bangladesh has regulations in place to control vehicle emissions and air
            pollution.
            Vehicles are required to meet certain emission standards, and periodic emission tests are conducted to
            ensure compliance.<br>

            <strong>Vehicle Taxation:</strong> Vehicle owners are required to pay various taxes and fees, including
            registration fees,
            road taxes, and other levies as prescribed by the BRTA.<br>

            <strong>Vehicle Modifications:</strong> Any modifications to vehicles, such as changes to the engine, body,
            or structure,
            must comply with the regulations set by the BRTA. Unauthorized modifications can result in penalties.<br>
        </div>


        <div class="box">
            <h4 class="text-uppercase"><b>
                    fee for vehicle
                </b>
            </h4>
            <table>
                <tr>
                    <th>Serial</th>
                    <th>Topic of fee's</th>
                    <th>Amount of fee's</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Learner Driving License Fee</td>
                    <td>250</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Learner Driving License Renewal Fee</td>
                    <td>125</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Driving License Proficiency Verification Fee (Each Time)</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Driving license issue fee</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Driving license address change fee</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Driving License Motor Vehicle Class Addition Feee</td>
                    <td>400</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Driving license copy fee</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Public transport driving permit fee</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Reconsideration application fee for deductibility of demerit points </td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Conductor or Supervisor License Issue Fee</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>11.</td>
                    <td> Annual conductor or supervisor license fee</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>12.</td>
                    <td>Registration Certificate Copy Fee</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>13.</td>
                    <td>Modification fee of motor vehicle</td>
                    <td>1050</td>
                </tr>
                <tr>
                    <td>14.</td>
                    <td>Motor vehicle provisional registration fee for the vehicle concerned
                        Half of the reg fee</td>
                    <td>Half of the reg fee</td>
                </tr>

            </table>
        </div>
    </div>


    <!--================== Footer =================--->

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