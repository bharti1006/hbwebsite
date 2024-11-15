<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhoom Homestay-facilities</title>

    <?php require('include/links.php');?>

    <style>
        .pop:hover{
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>
</head>
<body class="bg-light">
    
    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-item-center mb-2">
                        <h3 class="m-0 ">
                        <i class="bi bi-wifi"></i>
                            wifi
                        </h3>
                    </div>
                    <p>
                        We can provide you to wifi for your enjoyment.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-item-center mb-2">
                        <h3 class="m-0">
                        <i class="bi bi-tv"></i>
                            TV
                        </h3>
                    </div>
                    <p>
                        We can provide you to TV for your entertainment. 
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-item-center mb-2">
                        <h4 class="m-0">
                        <i class="bi bi-music-player">
                            Music system
                        </i>           
                        </h4>
                    </div>
                    <p>
                        We can provide you to music for your party. 
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php require('include/footer.php'); ?>

</body>
</html>