@include('partials.header');
@include('partials.nav');

<div class="blog border-0">
    <div class="container">
        @include('partials.messages')
        
        <div class="row">
@if(count($posts) > 0)
@foreach($posts as $posted)

             <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="blog-grid">
                                <div class="card">
                                    
                                    <img class="img-fluid card-img-top" src="/storage/cover_images/{{$posted->cover_image}}" alt="">

                                    <a href="/blog/{{$posted['id']}}">
                                        <h4 class="card-title text-warning">{{ strtoupper($posted->title)}}
                                        </h4>
                                    </a>

                                    <p>    <small style="font-size: 10px;">Created on {{$posted->created_at}}</small> <br>
                                        
                                

                                      {{-- <small style="font-size: 10px;">Author: {{auth()->user()->name}}</small> <br> --}}
                                     
                                               <a href="/blog/{{$posted->id}}" style="font-size:12px;">Read More</a>
                                    </p>
                           
                   
                                </div>
                            </div>
                        </div>

@endforeach
{{$posts->links()}}
@else
<p> No blog(s) found</p>    
@endif                 
        
        </div>
    </div>
</div>

    
    @include('partials.footer')



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>    
    <script src="js/scripts.js"></script>
    


</body>


<!-- Mirrored from tendex.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 13:59:39 GMT -->
</html>