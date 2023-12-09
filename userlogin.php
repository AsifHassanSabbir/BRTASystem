<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" href="design2.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>
<body>

    <!--===========Navbar===================-->


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


    <!--====================LOgin form===================-->


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap">
    <h3 style="font-family: Josefin Sans, sans-serif;
            color: #00000;text-align: center; padding-top: 11%;">User Login </h3>

    <div class="container">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <div class="form_wrapper">
            <div class="form_container">



                <?php
                if (isset($_POST["login"])) {
                    $email = $_POST["email"];
                    $password = $_POST["password"];
                    require_once "database.php";
                    $sql = "SELECT * FROM uses WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if ($user) {
                        if (password_verify($password, $user["password"])) {
                            session_start();
                            $_SESSION["user"] = "yes";
                            header("Location: index.php");
                            die();
                        } else {
                            echo "<div class='alert alert-danger'>Password does not match</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>Email does not match</div>";
                    }
                }
                ?>



                <form action="userlogin.php" method="post">
                    <div class="row clearfix">
                        <div class="">


                            <div class="form-group">
                                <span><i aria-hidden="true" class="fa-solid fa-envelope"></i></span>
                                <input type="text" class="form-control" name="email" placeholder="Email:">
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
                            <div class="form-btn">
                                <input type="submit" value="Login" name="login" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </form>
                <div>
                    <p style="text-decoration: none; font-family: Georgia">Not registered yet <a href="userreg.php"
                            style="color: Red; text-decoration: none;">
                            Register Here
                        </a></p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>