@include('partials.header');
@include('partials.nav');


        <div class="intro1">
            
            <div class="container" style="margin-top: -10px">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-0 col-lg-6 col-12">
                        <div class="intro-form-exchange">

                              
                            <h2>CREATE POST</h2>

                            @include('partials.messages')

                            {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']);  !!}
                       
                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <div class="input-group">
                                    {{ Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Enter title' ]) }}
                        
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Body</label>
                                <div class="input-group">
                                    {{ Form::textarea('body','', ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Enter body text' ]) }}
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">File</label>
                                <div class="input-group">
                                    {{ Form::file('cover_image') }}
                                </div>
                            </div>


                            
                            <br>
 
                            {{ Form::submit('Submit', ['class' => 'btn btn-primary' ]) }}


                           
                            

                           

                            {!! Form::close(); !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
       

     
        @include('partials.footer')



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="vendor/apexchart/apexcharts.min.js"></script>
    <script src="js/plugins/apex-price.js"></script>




    <script src="vendor/slick/slick.min.js"></script>
    <script src="js/plugins/slick-init.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

</body>


<!-- Mirrored from tendex.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 13:59:39 GMT -->
</html>