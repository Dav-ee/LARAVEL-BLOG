@include('partials.header');
@include('partials.nav');


            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-body">
                            <form method="post" name="myform" class="signin_validate row g-3"
                                action="">
                                <div class="col-12">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <input type="text" value=" {{ Auth::user()->name }}" readonly class="form-control"  name="name">
                                </div>
                                <div class="col-12">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <input type="text" value=" {{ Auth::user()->phone }}" readonly class="form-control" 
                                        name="phone">
                                </div>
                                <div class="col-12">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>
                                    <input type="email"  value="{{ Auth::user()->email }}" readonly class="form-control" 
                                        name="email">
                                </div>
                                <div class="col-12">
                                    <label for="joined_on"  class="col-md-4 col-form-label text-md-right">Date Joined</label>
                                    <input type="joined_on"  value="{{ Auth::user()->created_at }}" readonly class="form-control" 
                                        name="joined_on">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>



    @include('partials.footer')

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>


</body>


<!-- Mirrored from tendex.vercel.app/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 13:59:46 GMT -->
</html>