<div class="container fluid bg-white mt-5">
    <div class="row">
        <div class="col lg 4 p-4">
            <h3 class="h=font fw-bold fs-3 mb-2">Bhoom Homestay</h3>
            <p>
                Kasauli is a town and cantonment, located in the Solan district of the Indian state of Himachal Pradesh. 
            </p>
        </div>
        <div class="col lg 4 p-4">
            <h5 class="mb-3">links</h5>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">facilities</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
        </div>
        <div class="col lg 4 p-4">
            <h5 class="mb-3">Follow US</h5>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-instagram"></i> Instagram
            </a><br>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-facebook"></i> Facebook
            </a><br>
            <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-whatsapp"></i> Whatsapp
            </a><br>
        </div>
    </div>
</div>
    
<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Bharti Sharma</h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    //define alert function
    function alert(type, msg) {
        var bs_class = (type == "success") ? "alert-success" : "alert-danger";
        var alertDiv = document.createElement('div');
        alertDiv.classList.add('alert', bs_class, 'alert-dismissible', 'fade', 'show', 'custom-alert');
        alertDiv.setAttribute('role', 'alert');
        alertDiv.innerHTML = '<strong class="me-3">' + msg + '</strong> You should check in on some of those fields below.' +
            '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        document.body.appendChild(alertDiv);
    }

    // Form submission handling
    let register_form = document.getElementById('register-form');
    

    register_form.addEventListener('submit', function(e){
        e.preventDefault();
        let data = new FormData();
        data.append('name',register_form.elements['name'].value);
        data.append('email',register_form.elements['email'].value);
        data.append('phonenum',register_form.elements['phonenum'].value);
        data.append('address',register_form.elements['address'].value);
        data.append('pincode',register_form.elements['pincode'].value);
        data.append('dob',register_form.elements['dob'].value);
        data.append('pass',register_form.elements['pass'].value);
        data.append('cpass',register_form.elements['cpass'].value);
        data.append('register','');
        console.log(data);
        

        var myModal = document.getElementById('RegisterModal'); // Assuming 'registerModal' is the correct modal ID
        var modal = new bootstrap.Modal(myModal); // Ensure proper modal initialization

        modal.hide();
        

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/login_register.php", true);
        console.log(xhr.responseText);

        xhr.onload = function () {
            if (xhr.responseText == 'pass_mismatch') {
                alert('error', 'Password is not matched');
            } else if (xhr.responseText == 'email_already') {
                alert('error', 'Email is already registered');
            } else if (xhr.responseText == 'phone_already') {
                alert('error', 'Phone no. is already registered');
            } else if (xhr.responseText == 'ins_failed') {
                alert('error', 'Registration failed. Server Down');
            } else {
                alert('success', 'Registration Successful');
                register_form.reset();
            }
            console.log(xhr.responseText);
        };

        xhr.send(data);
    });

    //login 
    let login_form = document.getElementById('login-form');

    login_form.addEventListener('submit', function(e){
        e.preventDefault();
        let data = new FormData();
        data.append('email_mob',login_form.elements['email_mob'].value);
        data.append('pass',login_form.elements['pass'].value);
        data.append('login','');
        console.log(data);
        
        var myModal = document.getElementById('loginModal'); // Assuming 'registerModal' is the correct modal ID
        var modal = new bootstrap.Modal(myModal); // Ensure proper modal initialization

        modal.hide();
        

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/login_register.php", true);
        console.log(xhr.responseText);

        xhr.onload = function () {
            console.log(xhr.responseText);
            if (xhr.responseText == 'inv_email_mob') {
                alert('error', 'Invalid Email or phone no.');
            } 
            else if(xhr.responseText == 'inactive'){
                alert('error','Account Suspended! Please conatact Admin!')
            }
            else if(xhr.responseText == 'invalid_pass'){
                alert('error','Icorrect Password');
            }
            else{
                window.location = window.location.pathname;
            }
        };

        xhr.send(data);
    });

    //check login
    // function checkLoginToBook(status, room_id) {
    // if (status) {
    //     window.location.href = 'confirm_booking.php?room_id=' + room_id;
    // } else {
    //     alert('Please Login to Book the Room!');
    // }
// }
</script>