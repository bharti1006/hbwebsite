<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhoom Homestay-Contact</title>
    <?php require('include/links.php');?>
</head>
<body class="bg-light">
    
    <?php require('include/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.Illo voluptatum repellat 
            <br>mollitia officiisbr modi, deleniti dolore repellendus dolorum dignissimos aspernatur.
        </p>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe  class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.74118548552!2d76.97666040000001!3d30.92185770000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f8900252cfb11%3A0x7718df32916e2687!2sSandal%20Bhoom%20Homestay!5e0!3m2!1sen!2sin!4v1714779042974!5m2!1sen!2sin" loading="lazy"></iframe>

                    <h5>Address</h5>
                        <a href="https://maps.app.goo.gl/chS87WsM3JN8RtbF7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                            <i class="bi bi-geo-alt-fill"></i>Sandal Bhoom Homestay ,kasuali
                        </a>
                    <h5 class="mt-4">Call Us</h5>
                        <a href="tel: +918219079733" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +918219079733
                        </a>
                    <br>
                        <a href="tel: +918629851486" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i> +918629851486
                        </a>

                    <h5 class="mt-4">Email</h5>
                        <a href="mailto: dixxusharma@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-envelope-fill"></i> dixxusharma@gmail.com
                        </a>

                    <h5 class="mt-4">follow Us</h5>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-instagram"></i> 
                        </a>    
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="d-inline-block text-dark fs-5">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Send a message </h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Name</label>
                            <input type="text" class="form-control shadow-none" name="name" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Email</label>
                            <input type="email" class="form-control shadow-none" name="email" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">subject</label>
                            <input type="text" class="form-control shadow-none" name="subject" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;" name="message" ></textarea>
                        </div>
                        <button type="submit" class="btn text-dark custom-bg  mt-3 shadow" name="send">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('include/footer.php'); ?>

    <?php 
        if(isset($_POST['send'])){
            $frm_data = filteration($_POST);
            $q = "INSERT INTO `user_queries`( `name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
            $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];
            $res = insert($q, $values, 'ssss');
            if($res==1){
                alert('success','mail sent!');
            }
            else{
                alert('error','servor down try again latter');
            }
        }
    ?>

</body>
</html>