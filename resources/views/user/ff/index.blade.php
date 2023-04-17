<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
 


    <!-- Header -->
<x-navbar/>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Yosspow</b> eCommerce</h1>
                                
                                <strong>
                                    Discover a new world of online shopping with our ecommerce website, offering the latest products at unbeatable prices. 
                                  
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Proident occaecat</h1>
                                
                                <strong>
                                    Experience hassle-free shopping with our ecommerce website, featuring secure payment options and fast delivery 
                                  
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Repr in voluptate</h1>
                                
                                <strong>
                                    Shop with confidence on our ecommerce website, where customer satisfaction is our top priority.
                                  
                                </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- this is the toggle left and right --}}
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACz0lEQVR4nO2ZyW8TMRTGn8DOJCCxQ9n3C+sJ/j7+GU6jJM+TVhVlKdxaoKVsTYACZTlAAXFLgudi5Kk7nVHU2I7Q9A3KJ+UUR/JP/t6X92yAscb6v6RCqMTIbseCLfXq1TNQWgjBMBZcJR9kn/tRcA7KJDUNQSxYSwNIwX/Fgi+sA7EPPayeghLZKUogkP+OBbuhQtgrkc8bmE99DM5CCey0cRI/ZMSvZ77bhEG20p2snQCqdpKCT6YQyK8NrNEwgj82MO/IwagQalLwOwZiTTb41S3XTsH+tGaQdfQpAhkI5HdNTXz/IyqXne2H/Keagd3F7XarTbVgl0R+bwNCRvyKQxCINAha7GZxux0GIfh9T4hcmhW32+En8WAkO4l8mlGB+GaFcEizwqULUyKfNX9sX/tRcNEDYo0OhOAPDcQXK0Q2zSyRvH0QzeCCc5oRg3iUdrAuEB5pVohMfzSXQtSD8/8yzYqH0B2rZZbwTbNCNNB22yAyaZZANCuXitnpECmEfWmHKtiqbXbwTbNyQFiCoDDJzXRymhWk4DOp/SxBUKikmSliZB9dbj0y4B3VgGNARWoa9uSSymYtbUXkT836t11ROw7EYOadYfIT3xtaJxPm4nfVZrMEBtliarMpOApUpDwvClQIh2PBXtKEwaQGnqQwlhowMK/MSbZVBBNARcqzoFUDjqQwyF6oFhyCUsMge23WP1dNOAhUpDzTycAsG5glejCYppMdJoIJujChXzolMIK1zfpnKoQDQEW5dNIwlnTSsHRhGn7p1G3UTupb+Hh9/aK2KVCRbzolMIK9N69YC7RgtG2QdVxt02tVT+vu2kyTs0BJOr10irnYRmVbH8HaQE0u6TRwF1AnNIy52sz3QmPblStoYzPfuwAy0k/Q+inaFPRcphtY0aBQJmVhyD5+ukpPlonNkC2TmudHkQphp7oFO0b68VhAW38BzuOfiV6uWFAAAAAASUVORK5CYII=">
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACsElEQVR4nO2aa2sTQRSGjzqTNSre8FIv4F28/Eh/j0uTmWxDQdRqRamXorbRaBVvLdL+AW1mvhyZzWSTTcLOLOh4FvJCIGTnwzzMnHffcwjATDPRFCZwQAvW0IJ97SW1G1BVCCX4fS05mo8SfKcna7egSsJ7cFAJvpRCCPZTCb48+N5bqF2DCp3EQ3sK2+YUJn5r1m4CZWF/w0vTNjwKoyXb2m1FV4H8dZJsc9pGR0FTmGZ0BahJCyZtHfwo2iDGcEhJ/iRb24ouASVpye5mBd2sXS9am8II/tSezPddEV0EKsIY6kryB5nVOgo6vYqSPyZ5MjjuTo6XoK2rZfIw2qOgcREOK8FXaF6zJOdOm06YGI4owZ/ThZH8UQYzH112wkj+wl6zz78W6ueAinC8oH1gBH9p13+iByP8CxoFHM3ByPpZqDjMK3stN2jBLKbu5F3QBkZLvmrhP2IDzgAVjbvT7/n9FwrXt+EYbRiZuZOzoDGGk1qydbv+A7ZhDqhowp0cNUAbRoy4k0dBYx+mY2HWMIETQEUYw3Et2RsL08E7sLdwfQtOa8m6dg6wigh7gIyTSf7MgnzBGPYVrk/yjZlrfcg6WfF+6ye5ZL2jWvx2uN3+G4htEmOliaTresuPzAIUlQlM6lSDd4gvxDBBb5GYvIxBfHNGlDzE1KlMcE0k2kb9vHf892jMgsjkpSzJ+kWSvBGQg5BsozSEw82CKI0Ugq0NkqtHBCnlZkE0FvLcECXdLIiwAadySdXRQ5R1s5AQnVIQJdwsPIRkXVfPUNbNgimL4x69gnmuJXvrW0NBpYaO0zV9g6ebOa9fcKHHoKCsm/03YUFvXdbNSMJgSTcjIzQbF+z9oPiHfTZbN8+gSsI+zLvBHwaMS5nTgioK2zCnBXttgiCp8c1MM8Ff0R+y4KAI+IilqQAAAABJRU5ErkJggg==">
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1 text-success">Categories of The Month</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="{{ route('category',["category"=>"smart-watch"])}}"><img src="{{ asset('imgs/static/smartwatch.png') }} " style="min-height: 150px" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Smart Watches</h5>
                <p class="text-center"><a class="btn btn-success" href="{{ route('category',["category"=>"smart-watch"])}}">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="{{ route('category',["category"=>"shoes"])}}"><img src="{{ asset('imgs/static/sbrdila.png') }}" style="min-height: 240px" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
                <p class="text-center"><a class="btn btn-success "  href="{{ route('category',["category"=>"shoes"])}}">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="{{ route('category',["category"=>"hoddies"])}}"><img src="{{ asset('imgs/static/hoddie.png') }}"  style="min-height: 240px;"  class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Heddies</h2>
                <p class="text-center"><a class="btn btn-success" href="{{ route('category',["category"=>"hoddies"])}}">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1 text-success">Featured Product</h1>
                    <p>
                        We pride ourselves on our commitment to quality and customer satisfaction.
                         All of our products are carefully selected to ensure that they meet our high standards of excellence,
                         and our customer service team is always ready to assist you with any questions or concerns you may have.
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ( $data as $item )
                    
                
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a  href="{{ route("single",$item->id) }}">
                            <img src="{{ asset('imgs/'.$item->path) }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                            
                                <li class="text-success text-right">${{ $item->price }}</li>
                                


                            </ul>
                            <a href="{{ route("single",$item->id) }}" class="h2 text-decoration-none text-dark"> {{ $item->product_name  }}</a>
                            <p class="card-text">
                                {{ $item->description  }}
                            </p>
                            <p class="text-muted">Reviews (<strong class="text-danger">{{ $item->reviews }}</strong>)</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
 <x-footer/>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/templatemo.js"></script>
    <script src="js/custom.js"></script>
    <!-- End Script -->
</body>

</html>