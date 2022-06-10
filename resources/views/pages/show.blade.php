@include('partials.header')
@include('partials.nav')

<div class="blog border-0">
    
    <div class="container">
        @include('partials.messages')
        <div class="row">

             <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="blog-grid">
                                <div class="card">
                                    <img class="img-fluid card-img-top" src="/storage/cover_images/{{$post['cover_image']}}" alt="">
                                    <div class="card-body">
                                            <h4 class="card-title text-warning"> {{strtoupper($post['title'])}}
                                            </h4>
                                            <p>{!!$post['body']!!}</p>

                                            <small style="font-size: 11 px; color:grey;">Written on {{$post['created_at']}} </small> 
                                            
                                            {{-- <small style="font-size: 10px; color:grey;">  Written by  {{auth()->user()->name}} </small> --}}
                                    </div>
                                </div> 
                            </div>
                            
                            
                            @if ( !Auth::guest())

                            @if ( Auth::user()->id == $post['user_id'] )
                                <a href="{{$post['id']}}/edit" class="btn btn-sm btn-primary ">EDIT</a>
                            <br>
                            <br>
                            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST' ])!!}

                            {{ Form::hidden('_method','DELETE') }}

                            {{ Form::submit('Delete', ['class' => 'btn btn-sm btn-danger float-right' ]) }}
                            {!! Form::close(); !!}
                            @endif
                            @endif


                            <br>
               

                        </div>      
                          
        </div>
    </div>
</div>


    
    @include('partials.footer')



    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>    
    <script src="{{ asset('js/scripts.js') }} "></script>
    


</body>


<!-- Mirrored from tendex.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 13:59:39 GMT -->
</html>