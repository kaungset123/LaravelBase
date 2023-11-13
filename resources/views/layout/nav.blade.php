  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                   
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                           
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                cart
                                @if(session('items'))
                                    {{count(session('items'))}}
                                @endif
                            </a>
                        </li>
                   
                    @auth
                        <li class="nav-item dropdown">                      
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{auth()->user()->name}}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" style="border: none;">
                                        <i class=""></i> Logout
                                    </button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item dropdown">                      
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Member
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/users/login">Login</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/users/register">Register</a></li>
                            </ul>
                        </li>
                    @endauth
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url('products/create')}}">Product Create</a></li>
                            <li><a class="dropdown-item" href="{{url('products')}}">All Products</a></li>
                        </ul>
                    </li>
                   
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
