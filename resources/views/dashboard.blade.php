@include('partials.header');
@include('partials.nav');


<div class="about-one">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="card-body">
                <a href="/create" class="btn btn-primary"> Create Blog</a>
                @if (count($posts) > 0)
                
        <table class="table table-striped">
            <tr>

        
            <th>#</th>
            <th>TITLE</th>
            <th>CREATED AT</th>
            <th>UPDATE AT</th>
            <th>ACTION</th>  
        
          </tr>
            @foreach ($posts as $items)
            
<tbody>

        <tr>
            <td>      {{$items['id']}}   </td>
            <td>      {{$items['title']}}   </td>
            <td>    {{$items['created_at']}}   </td>
            <td>      {{$items['updated_at']}}   </td>
            <td>        <a href="blog/{{$items['id']}}/edit" class="btn btn-primary">EDIT </a> </td>
            <td>    
                {!! Form::open(['action' => ['PostController@destroy', $items->id], 'method' => 'POST', 'class' => 'float-right' ])!!}

                {{ Form::hidden('_method','DELETE') }}

                {{ Form::submit('Delete', ['class' => 'btn btn-danger' ]) }}
                {!! Form::close(); !!}
            


                
            </td>


       
        </tr>
     
 

</tbody>
           
@endforeach
        </table>
        @else
            <p> You have not made any blog so far</p>        
        @endif

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