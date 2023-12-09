<html>

<head>
    <link rel="stylesheet" href="design.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>


    <!--=================Navbar===========-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

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



    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap">
    <h3 style="font-family: Josefin Sans, sans-serif;
            color: #00000;text-align: center; padding-top: 8%;">Register Now</h3>


    <div class="container">
        <form action="adminregistration.php" method="post">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
                integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
                crossorigin="anonymous" referrerpolicy="no-referrer" />
            <div class="form_wrapper">
                <div class="form_container">



                    <?php
                    if (isset($_POST["submit"])) {
                        $keynum = $_POST["keynum"];
                        $fullName = $_POST["fullname"];
                        $phnnumber = $_POST["phnnumber"];
                        $email = $_POST["email"];
                        $password = $_POST["password"];


                        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

                        $errors = array();

                        if (empty($keynum) or empty($fullName) or empty($phnnumber) or empty($email) or empty($password)) {
                            array_push($errors, "All fields are required");
                        }
                        if (empty($keynum) or empty($fullName) or empty($phnnumber) or empty($email) or empty($password)) {
                            array_push($errors, "Admin user name is required");
                        }
                        if (is_numeric($phnnumber) == false) {
                            array_push($errors, "Phone number must be required");
                        }
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            array_push($errors, "Please enter a valid Email");
                        }
                        if (strlen($password) < 8) {
                            array_push($errors, "Password must be at least 8 charactes long");
                        }

                        require_once "database.php";
                        $sql = "SELECT * FROM admin WHERE email = '$email'";
                        $result = mysqli_query($conn, $sql);
                        $rowCount = mysqli_num_rows($result);
                        if ($rowCount > 0) {
                            array_push($errors, "Email already exists!");
                        }
                        if (count($errors) > 0) {
                            foreach ($errors as $error) {
                                echo "<div class='alert alert-danger'>$error</div>";
                            }
                        } else {

                            $sql = "INSERT INTO admin (keynum, name, phone, email, password) VALUES ( ?, ?, ?, ?, ? )";
                            $stmt = mysqli_stmt_init($conn);
                            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                            if ($prepareStmt) {
                                mysqli_stmt_bind_param($stmt, "isiss", $keynum, $fullName, $phnnumber, $email, $passwordHash);
                                mysqli_stmt_execute($stmt);
                                echo "<div class='alert alert-success'>You are registered successfully.</div>";
                            } else {
                                die("Something went wrong");
                            }
                        }
                    }

                    ?>


                    <div class="title_container">


                    </div>
                    <div class="row clearfix">
                        <div class="">

                            <div class="form-group">
                                <span><i aria-hidden="true" class="fa-solid fa-key"></i></span>
                                <input type="text" class="form-control" name="keynum" placeholder="Key Number:">
                            </div>
                            <div class="form-group">
                                <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
                            </div>
                            <div class="form-group">
                                <span><i aria-hidden="true" class="fa fa-phone-alt"></i></span>
                                <input type="text" class="form-control" name="phnnumber" placeholder="Phone Number:" />
                            </div>
                            <div class="form-group">
                                <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email" placeholder="Email:">
                            </div>
                            <div class="row clearfix">
                                <div class="col_half">
                                    <div class="form-group">
                                        <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Register" name="submit" />
                            </div>

                        </div>
                    </div>
                </div>
                <p style="text-decoration: none; font-family: Georgia">Already have a Account? <a href=" adminlogin.php"
                        style="color: Red; text-decoration: none;">Login</a>
                </p>

            </div>

        </form>
    </div>

</body>

</html>