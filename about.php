<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhoom Homestay-About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('include/links.php');?>
    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
    </style>
</head>
<body class="bg-light">
    
    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Kasauli is a town and cantonment, located in the Solan district of the Indian state of Himachal Pradesh. 
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="img/staff.jpg" width="70px">
                    <h4 class="mt-3">4 rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="img/customer.jpg" width="70px">
                    <h4 class="mt-3">250+ customer</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="img/rating.jpg" width="70px">
                    <h4 class="mt-3">150+ rating</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="img/staff.jpg" width="70px">
                    <h4 class="mt-3">2 staff</h4>
                </div>
            </div>
        </div>
    </div>
    
    <?php require('include/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
        var swiper = new Swiper(".mySwiper", {
        spaceBetween: 40,
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