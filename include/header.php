<?php
    require('admin\include\db_config.php');
    require('admin\include\essentials.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Bhoom Homestay</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="facilities.php">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
            </ul>
            <div class="d-flex">
            <div class="d-flex">
                    <?php
                         if(isset($_SESSION['login'])&&  $_SESSION==true){
                            echo<<<data
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-outline-primary dropdown-toggle shadow-sm" data-bs-toggle="dropdown"data-bs-display="static" aria-expanded="false">
                                        $_SESSION[uName]
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-lg-end">
                                        <li><a class="dropdown-item"href="profile.php">Profile</a></li>
                                        <li><a class="dropdown-item"href="booking.php">Bookings</a></li>
                                        <li><a class="dropdown-item"href="logout.php">Logout</a></li>
                                    </ul>
                                </div>
                            data;
                        }
                        else{
                            echo<<<data
                                <button type="button" class="btn btn-outline-primary shadow-sm me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                                <button type="button" class="btn btn-outline-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</button>
                            data;
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</nav>

<!--user login form-->

<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="login-form">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-circle fs-3 me-2"></i>User Login
                    </h5>
                    <button type="Reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none" name="email_mob" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none" name="pass" required>
                    </div>
                    <div class="d-flex align-items-center justify-content-between md-2">
                        <button class="btn btn-dark shadow-none">LOGIN</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--registerstion form-->

<div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="register-form" method="post">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registeration
                    </h5>
                    <button type="Reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <span class="badge round-pill bg-light text-dark mb-3 text-wrap lh-base">
                    Note: your details must match with your ID(AD no, passport, DL,Etc.)
                    that will be required during check-in.
                </span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none" id="name" name="name" required>
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none" id="email" name="email" required> 
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="number" class="form-control shadow-none" id="phone-number" name="phonenum" required>
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Picture</label>
                            <input type="file" class="form-control shadow-none">
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <label class="form-label">Address</label>
                            <textarea class="form-control shadow-none" rows="1" name="address" required></textarea>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Pincode</label>
                            <input type="number" class="form-control shadow-none" id="pincode" name="pincode" required>
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Date of birth</label>
                            <input type="date" class="form-control shadow-none" id="dob" required>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none" id="password" name="pass" required>
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control shadow-none" id="Cpassword" name="cpass" required>
                        </div>
                    </div>
                </div>
                <div class="text center my-1">
                    <button type="submit" class="btn btn-dark shadow-none" value="Register" name="register">REGISTER</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>