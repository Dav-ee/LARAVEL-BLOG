<div id="preloader"><i>.</i><i>.</i><i>.</i></div>

<div id="main-wrapper">

    <div class="header landing @@headerClass">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="brand-logo">
                       <H4> <a href="/dashboard">BLOGGA </a></H4>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ms-auto">

                                    @guest
                                  <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li> 

                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="/blog">Blog</a>
                            </li> 
                        
                        
                                </ul>
                            </div>
                            @if (Route::has('register'))
                            <div class="signin-btn" style="margin-right:5px;">
                                <a class="btn btn-warning" href="/register">Register</a>
                            </div>
                            @endif
                            <div class="signin-btn">
                                <a class="btn btn-primary" href="/login">Login</a>
                            </div>
                        

                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="/dashboard">Dashboard</a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="/blog">Blog</a>
                            </li> 
                         
                        
                            <li class="nav-item">
                                <a class="nav-link" href="/create">Post</a>
                            </li> 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile">
                                     Profile
                                </a> 


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                      


                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>