<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bhoom Homestay - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php');?>
<style>
    .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }
    @media screen and (max-width: 575px) {
        .availability-form{
            margin-top: 25px;
            padding: 0 35px;      
        }
    }
    </style>
</head>
<body class="bg-light">
    
    <?php require('include/header.php'); ?>

<!-- Carousel -->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/front3.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="img/front1.jpg" class="w-100 d-block"/>
                </div>
                <div class="swiper-slide">
                    <img src="img/front2.jpg" class="w-100 d-block"/>
                </div>
            </div>
        </div>
    </div>

<!-- check availability form-->
    
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Adults</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">children</label>
                            <select class="form-select shadow-none">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-3 mb-3">
                            <button type="submt" class="btn text-black shadow custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/room1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹500 per night</h6>
                        <div class="features mb-4">
                            <h6 class=" md-1">Features</h6>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               1 Bedroom
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               1 Bathroom
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               2 chairs
                            </span>
                        </div>
                        <div class="Facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               Wifi
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               LED
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               Music Player
                            </span>
                        </div>
                        <div class="Guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-black custom-bg shadow-none">Book now</a>   
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>        
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/room1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹500 per night</h6>
                        <div class="features mb-4">
                            <h6 class=" md-1">Features</h6>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               1 Bedroom
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               1 Bathroom
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               2 chairs
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               Wifi
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               LED
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               Music Player
                            </span>
                        </div>
                        <div class="Guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>   
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>        
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="img/room1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Simple Room Name</h5>
                        <h6 class="mb-4">₹500 per night</h6>
                        <div class="features mb-4">
                            <h6 class=" md-1">Features</h6>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               1 Bedroom
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               1 Bathroom
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               2 chairs
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               Wifi
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               LED
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                               Music Player
                            </span>
                        </div>
                        <div class="Guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                                5 Adults
                            </span>
                            <span class="badge round-pill bg-light text-dark text-wrap">
                                4 Children
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>   
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>        
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

<!--facilities-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Facilities</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <div class="d-flex align-item-center mb-2">
                    <h2 class="m-0">
                    <i class="bi bi-wifi"></i>
                        wifi
                    </h2>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <h3 class="m-0">
                <i class="bi bi-tv"></i>
                    TV
                </h3>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <h4 class="m-0">
                <i class="bi bi-music-player">
                    Music system
                </i>           
                </h4>
            </div>
            <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow -none">More Facilities >>></a>
            </div>
        </div>
    </div>

<!--Reach Us-->
    <?php
        $contact_q = "SELECT * FROM `contact_details` WHERE `s_no`=?";
        $values = [1];
        $contact_r = mysqli_fetch_assoc(select($contact_q,$values,'i'));
        print_r($contact_r);
    ?>

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

    <div class="container">
        <div class="row">            
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe  class="w-100 rounded" height="320px" src="<?php echo $contact_r['iframe'] ?>" loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                        <a href="tel: +<?php echo $contact_r['pn1'] ?>" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1'] ?>
                         </a>
                    <br>
                        <a href="tel: +918629851486" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +918629851486
                    </a>
                </div>                
                <div class="bg-white p-4 rounded mb-4">
                    <h5>follow Us</h5>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-instagram"></i> Instagram
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-facebook"></i> facebook
                            </span>
                        </a>
                            <br>
                        <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-whatsapp"></i> whatsapp
                            </span>
                        </a>
                    <br>
                </div>
            </div>
        </div>
    </div>

<!-- footer -->

    <?php require('include/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>

    var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
        });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
            slidesPerView: 1,
        },
        640:{
            slidesPerView: 2,
        },
        768:{
            slidesPerView: 3,
        },
        1024:{
            slidesPerView: 4,
        },
      }
    });
  </script>
</body>
</html>