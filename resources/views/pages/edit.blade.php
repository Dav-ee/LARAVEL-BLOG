@include('partials.header');
@include('partials.nav');


        <div class="intro1">
            
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-0 col-lg-6 col-12">
                        <div class="intro-form-exchange">

                              
                            <h2>EDIT POST</h2>

                            @include('partials.messages')

                            {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']);  !!}
                       
                            <div class="col-12">
                                <label class="form-label">Title</label>
                                <div class="input-group">
                                    {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Enter title' ]) }}
                        
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Body</label>
                                <div class="input-group">
                                    {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Enter body text' ]) }}
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">File</label>
                                <div class="input-group">
                                    {{ Form::file('cover_image') }}
                                </div>
                            </div>




{{ Form::hidden('_method','PUT') }}
<br>
{{ Form::submit('Submit', ['class' => 'btn btn-primary' ]) }}
{!! Form::close(); !!}



                        </div>
                    </div>
                </div>
            </div>
        </div>

    
       

     
        @include('partials.footer')



    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <script src="{{ asset('vendor/apexchart/apexcharts.min.js')}}"></script>
    <script src="{{ asset('js/plugins/apex-price.js')}}"></script>




    <script src="{{ asset('vendor/slick/slick.min.js')}}"></script>
    <script src="{{ asset('js/plugins/slick-init.js')}}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

    <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>

</body>


<!-- Mirrored from tendex.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 13:59:39 GMT -->
</html>