<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow ">
    <div class="container d-flex justify-content-evenly align-items-center">
        <a class="navbar-brand text-success logo h1 align-self-center" href="/">
          <img src="{{ asset('img/logo1.png') }}" alt="" class ="p-0 m-0"style="width: 250px">
            
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link text-success" href="/">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link text-success " href="{{ route("shop") }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="{{ route("about") }}">About</a>
                    </li>
                  
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
             
             
          
              
                <a class="nav-icon position-relative text-decoration-none" href="{{ route('cart') }}">
                    <i class="fa fa-fw fa-cart-arrow-down text-white mr-1"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-success text-dark">{{ count((array) session('cart')) }}</span>
                </a>
        
            </div>
        </div>

    </div>
</nav>