<!-------------------- Footer -------------------->

<div class="container-fluid footer">
    <div class="row justify-content-evenly px-lg-5">
        <div class="col-lg-3 col-md-4 p-4">
            <h3 class="fw-bold fs-3 mb-3"><img src="Images/Logo.jpeg" class="img-fluid me-2" style="width: 45px; height: auto;">Zenvia</h3>
            <p>
                At Zenvia, we combine elegance, comfort, and world-class service to provide our guests with an unforgettable experience!
            </p>

        </div>
        <div class="col-lg-3 col-md-4  p-4 footer-links">
            <h4 class="mb-3">Quick Links</h4>
            <a href="index.php" class="d-inline-block mb-2 text-light text-decoration-none">Home</a> <br>
            <a href="about.php" class="d-inline-block  mb-2 text-light text-decoration-none">About</a> <br>
            <a href="rooms.php" class="d-inline-block  mb-2 text-light text-decoration-none">Rooms</a> <br>
            <a href="facilities.php" class="d-inline-block  mb-2 text-light text-decoration-none">Facilities</a> <br>
            <a href="gallery.php" class="d-inline-block  mb-2 text-light text-decoration-none">Gallery</a> <br>
            <a href="contact.php" class="d-inline-block  mb-2 text-light text-decoration-none">Contact us</a>
        </div>
        <div class="col-lg-3 col-md-4  p-4">
            <h4 class="mb-0">Contact us</h4>
            <br>
            <a href="tel:" class="d-inline-block mb-3 text-decoration-none text-light"><i class="bi bi-telephone-fill"></i> 765739585</a> <br>          
            <a href="tel:" class="d-inline-block mb-3 text-decoration-none text-light"><i class="bi bi-telephone-fill"></i> 72844055</a> <br>
            <a href="email:" target="_blank" class="d-inline-block text-decoration-none text-light mb-4"><i class="bi bi-envelope-fill"></i> zenviahotel@gmail.com</a>
        </div>
        <div class="col-lg-3 col-md-4  p-4">
            <h4 class="mb-3">Follow us</h4>
                <a href="fb" target="_blank" class="d-inline-block mb-3 text-light text-decoration-none"><i class="bi bi-facebook me-1"></i> Facebook</a> <br>
                <a href="insta" target="_blank" class="d-inline-block mb-3 text-light text-decoration-none"><i class="bi bi-instagram me-1"></i> Instagram</a> <br>
                <a href="tw" target="_blank" class="d-inline-block mb-3 text-light text-decoration-none"><i class="bi bi-instagram me-1"></i> Twitter</a>
        </div>
        </div>
    </div>
</div>

    <h6 class="copyright text-center text-white p-3 m-0">© 2025 Zenvia Hotel. All Rights Reserved</h6>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<!-- Navigation Bar Active -->
<script>

    function setActive()
    {
        let navbar = document.getElementById("nav-bar");
        let a_tags = navbar.getElementsByTagName("a");

        for(let i=0; i<a_tags.length; i++)
        {
            let file = a_tags[i].href.split("/").pop();
            let file_name = file.split(".")[0];

            if(document.location.href.indexOf(file_name) >= 0) {
                a_tags[i].classList.add("active");
            }
        }
    }

    function alert(type, msg, position='body') {
        let bs_class = (type == "success") ? "alert-success" : "alert-danger";
        let element = document.createElement("div");
        element.innerHTML = `
            <div class="alert alert ${bs_class} alert-dismissible fade show" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;

        if(position=='body') {
            document.body.append(element);
            element.classList.add('custom-alert');
        }
        else {
            document.getElementById(position).appendChild(element);
        }

        setTimeout(remAlert, 3000);
    }

    function remAlert() {
        document.getElementsByClassName('alert')[0].remove();
    }

    let register_form = document.getElementById('register-form');

    register_form.addEventListener('submit', (e) => {
        e.preventDefault();

        let data = new FormData();

        data.append('name', register_form.elements['name'].value);
        data.append('email', register_form.elements['email'].value);
        data.append('phonenum', register_form.elements['phonenum'].value);
        data.append('address', register_form.elements['address'].value);
        data.append('dob', register_form.elements['dob'].value);
        data.append('pass', register_form.elements['pass'].value);
        data.append('cpass', register_form.elements['cpass'].value);
        data.append('register', '');

        var myModal = document.getElementById("registerModal")
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/login_register.php", true);

        xhr.onload = function() {
            if(this.responseText == 'pass_mismatch') {
                alert('error', "Password Mismatch!");
            }
            else if(this.responseText == 'email_already') {
                alert('error', "Email is already registered!");
            }
            else if(this.responseText == 'phone_already') {
                alert('error', "Phone Number is already registered!");
            }
            else if(this.responseText == 'ins_failed') {
                alert('error', "Registration Failed! Server Down!");
            }
            else {
                alert('success', "Registration Successful!");
                register_form.reset();
            }
        }
        
        xhr.send(data);
    });

</script>