@include('partials.header');
@include('partials.nav');

    <div class="contact-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <div class="section-title text-center">
                        <span>Ask Question</span>
                        <h2>Let us hear from you directly!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4 col-sm-12">
                    <div class="info-list">
                        <h4 class="mb-3">Address</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> NAIROBI, KENYA</li>
                            <li><i class="fa fa-phone"></i> (+254) 745 682815</li>
                            <li><i class="fa fa-envelope"></i> support@blogga.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8 col-sm-12">
                    <form method="post" name="myform" class="contact_validate">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Full name
                                    </label>
                                    <input type="text" class="form-control" id="contactName" placeholder="Full name"
                                        name="firstname">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" name="email"
                                        placeholder="hello@domain.com">

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <textarea class="form-control p-3" name="message" rows="5"
                                        placeholder="Tell us what we can help you with!"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary px-4 py-2">
                            Send message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>


    @include('partials.footer')



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="vendor/apexchart/apexcharts.min.js"></script>
    <script src="js/plugins/apex-price.js"></script>




    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/plugins/slick-init.js"></script>

    <script src="js/scripts.js"></script>


</body>


<!-- Mirrored from tendex.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 13:59:39 GMT -->
</html>
