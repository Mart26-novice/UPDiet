<!DOCTYPE html>
<html>
    <?php 
        include("../conn/connect.php");

        error_reporting(0);
        session_start(); 
        //MY COMMENT TUGS
        // prevent signin when already logged in
        if(isset($_SESSION["admin"])) header("location:profile.php");
    ?>
    <head>
        <title>Admin - Login.</title>

        <link rel="icon" href="../img/logo.png" type="image/png">

        <link rel="stylesheet" href="../css/base.css" />
        <link rel="stylesheet" href="../css/fonts.css" />
        <link rel="stylesheet" href="../css/a_base.css" />
        <link rel="stylesheet" href="../css/a_signin.css" />
        <link rel="stylesheet" href="../css/a_login.css" />

        <script src="../js/jquery-3.6.4.min.js"></script>
    </head>
    <body>
        <div class="nav">
            <a href="../user/">
                <img src="../img/left-arrow.png">
                <span>Back to user signin</span>
            </a>
        </div>
        <div class="form">
            <div class="form-container">
                <div class="form-label">
                    <span>LOGIN</span>
                </div>
                <div class="h-sep"></div>
                <form class="form-proper">
                    <input id="email" type="text" placeholder="Email">
                    <input id="password" type="password" placeholder="Password">
                    <span id="error-msg" class="error"></span>
                    <button type="button" id="submit">Submit</button>
                    <a id="create" href="signup.php">
                        <img src="../img/left-arrow.png" />
                        <span>Register store.</span>
                    </a>
                </form>
            </div>
        </div>
        <script src="../js/a_login.js"></script>
    </body>
</html>