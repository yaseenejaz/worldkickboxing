<footer>
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-sm-12 col-md-12 col-lg-12">
                <div class="f-logo">
                    <img src="{{ asset('frontend/images/f-log.png') }}">
                </div>
                <div class="f-text">
                    <h4>&#10075;it&#10076;s not just a passion&#44; it&#10076;s OUR way of life&#10076;</h4>
                    <p>Dave Sawyer - WKA World President</p>
                </div>
                <div class="fs-icon">
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-linkedin-in"></i>
                </div>
                <span>Copyright Reserved</span>
            </div>
        </div>
    </div>
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="{{asset('frontend/js/bootstrap-editable.js')}}"></script> -->
<!-- <link href="{{asset('frontend/css/bootstrap-editable.css')}}" rel="stylesheet"> -->

    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/js/jquery.toast.js')}}"></script>

<script>

    jQuery(document).ready(function () {
        jQuery('.icon-menu').on('click', function () {

            jQuery('.nav-kick').slideToggle('fast');
        });
    });
  
</script>
@yield('script')

</body>
</html>
