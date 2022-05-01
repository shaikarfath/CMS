<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/price_rangs.js"></script>

<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.7/sweetalert2.min.js"
        integrity="sha512-IHQXMp2ha/aGMPumvzKLQEs9OrPhIOaEXxQGV5vnysMtEmNNcmUqk82ywqw7IbbvrzP5R3Hormh60UVDBB98yg=="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#login_form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "ajax/login_ajax.php",
                data: new FormData(this),
                contentType: false,
                data_type: 'json',
                cache: false,
                processData: false,
                beforeSend: function () {
                    //loader();
                },
                success: function (response) {
                    var response = JSON.parse(response);
                    if (response.status === 'success') {
                        window.location.reload();
                    } else if (response.status === 'error') {
                        alertMsg(response.message, 'error');
                    }
                },
                error: function (xhr, error, status) {
                    var response = xhr.responseJSON;
                    console.log(response);
                }
            });
        });

        $('#register_form').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "ajax/registration_ajax.php",
                data: new FormData(this),
                contentType: false,
                data_type: 'json',
                cache: false,
                processData: false,
                beforeSend: function () {
                    //loader();
                },
                success: function (response) {
                    var response = JSON.parse(response);
                    if (response.status === 'success') {
                        window.location.reload();
                    } else if (response.status === 'error') {
                        alertMsg(response.message, 'error');
                    }
                },
                error: function (xhr, error, status) {
                    var response = xhr.responseJSON;
                    console.log(response);
                }
            });
        });
    })

    function loader() {
        Swal.fire({
            allowOutsideClick: false,
            showConfirmButton: false,
            willOpen: () => {
                Swal.showLoading()
            },
        });
    }

    function alertMsg(msg, status = 'success') {
        Swal.fire({
            icon: status,
            title: msg,
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>
