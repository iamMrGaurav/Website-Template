<?php
include "header.php";
session_start();
if (isset($_POST["register"])) {
    require "userHandle.php";
    require "User.php";
    $user = new User(
        1,
        $_POST["fname"],
        $_POST["lname"],
        $_POST["email"],
        $_POST["phoneNo"],
        $_POST["state"],
        $_POST["city"],
        $_POST["tole"],
        $_POST["username"],
        $_POST["password"],
        3,
        date("Y-m-d")
    );
    $userHandle = new UserHandle();
    $response = json_decode($userHandle->registerUser($user), true);
    if ($response["status"] === "Registration Sucess") {
?>
        <script>
            alert("Registration Sucess");
            window.location.href = "login.php";
        </script>
<?php
    }
}
?>
<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Registration</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End-->
<!--================login_part Area =================-->
<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>Already have an account?</h2>
                        <p>CHorrr Error AYOOOOO!!!</p>
                        <a href="login.php" class="btn_3">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Register Yourself <br>
                            Please fill the registration form!!!</h3>
                        <form class="row contact_form" action="" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="fname" name="fname" value="" placeholder="Firstname">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="lname" name="lname" value="" placeholder="Lastname">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="phonenumber" name="phoneNo" value="" placeholder="PhoneNo">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="state" name="state" value="" placeholder="State">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city" value="" placeholder="City">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="tole" name="tole" value="" placeholder="Tole">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="username" name="username" value="" placeholder="Username">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                            </div>
                            <button type="submit" value="register" name="register" class="btn_3">
                                Register
                            </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--================login_part end =================-->
</main>
<?php include "footer.php";
?>