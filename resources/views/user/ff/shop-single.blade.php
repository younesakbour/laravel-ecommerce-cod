<!DOCTYPE html>
<html lang="en">

<head>
    <title>Yosspow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/templatemo.css">
    <link rel="stylesheet" href="/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
<style>
            .nav > li > a:hover{
    background-color:rgb(16, 64, 13);
    border-radius: 8px;
}
</style>
</head>

<body class="bg-dark" >



    <!-- Header -->
    <x-navbar/>


       

<div class="row">    
 <div class="d-flex justify-content-between m-3  ">  
<a  class="text-decoration-none" href="{{ route('category',["category"=> $data[0]->name])}}" >  
        <h2 class=" text-white d-inline p-3 bg-success w-auto" >

        
 
          <img src="{{ asset('imgs/categorie').'/'.$data[0]->ico}}" alt="" srcset="" style="max-height: 60px;min-height: 55px">
 
      
             <strong class="text-dark">{{ Str::upper($data[0]->name) }} </strong>  SECTION
         </h2>
</a>

    <a href="{{ route('shop')}}" class="btn btn-dark m-3  w-25 float-end d-inline" role="button"> 


        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACJElEQVR4nO2YsWsUQRTGx0K0yL13MQp692YDErRUjORfiJVC9Ip970Iwhb2VaKG1/gtG0DZdxE5IE23EXptUSgoFuSiHZ0ISeXuR7J53Z+HsnJH3g6+ZefvNfjuzczvnnGEYhmEYhnGomFicqNQZ5xLGRl7apn3uX+NsYxwTwUsJ4/QvUQoznvENCa6T4NserWd9Kczkr1EP9XKjIBG84RnaJNAiwS89Wp664o71XqNt2vd7PbTUq97E67FzHPEMH6iJN0MZkuCieqq3i0VNKueJsTO54I6H8sxmi/F7bb5yzsVCnx4Jvgruy/g65Cz/Ec/wxAs8LMH3kRdYCu07ZEB876V6Nbxv9RoJvnMxOJOOnfSMO6cbY6cOk3cBYnhGDJtecLfPlhtEXr0ZNonhqSsLHcQL7kXSbplB9mLKlQUxvogVggSelxbkv4JSmN3/ICxPKcyWHiRhHPeC2wOXBONGsQ2+dTWspqBtHcPFgATWBoToTN9yR7Ov2f22hPGOKrf2W1kNY2fAu7HmYuEF7vV9mgztbj9+OmjD25kO6j5nNQztAR53owWpMV4sK0i9Wb0Q+zzyMXQQYtyIeh7p3iwsBZ8RhscuNnosDR2kzjgXPciUnABi3CruOPhjcgGrnuFrbhe6TwwP8tux1mhtz7LaUk83CrzAar/fgeIs4U6mYTXdgKsjCZEFmYfLxLBCgi//Sgwr+reQMwzDMAzDMAxXIj8BQaNCLBU02ZEAAAAASUVORK5CYII=">
       <span> Go Back to Shop</span>
    </a>

    </div >
</div> 
@if(Session::has('success') )
<div class="alert alert-dark p-0 m-0" role="alert">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABVUlEQVR4nO2YS07DMBBA354C4hztEWAFS1RYIihBUPERcA1WcILmSqgbTsANKEjIbDCKNNlETUxq106redJsHDvxi38jg6IoiqIoirKKDIAcmErkUrZSZMAPYCtRlI3oMNvAMTBukCjDSJ2i7pG07QSPwGdDx10xAx5SS9x5CFTjJpVET/5mKJFiVDdTiAwDSpRxmELkegkiVylELjw7/TunLIstce7YYl3xAlzWbM1nsSQGASR2gNea5wboxxDJlyhhJSYxRKYNHXgHvj0lrHwjqcgJcDBHpo2EjSXSNLW+gL2KzHNLCRtrarkWeymzDzwtIGFiLXYkFTcOmd0FJU6JTOboVCHz1nJXy1iTFGWcQmRtksZe4DT+A9ggEbcBRYqpmpR7z5GZyTs6wZZcJJSXD+aflw9DadtZRjUySc4JX/qSapQXdJOYJ7aiKIqiKIpCMP4AxyHDvHGqg1AAAAAASUVORK5CYII=">
    {{ Session::get('success') }}
  </div>
@endif


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



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3 bg-image hover-zoom">
                      
                        <img  src="{{ asset('imgs/'.$data['images'][0]['path'])  }}"alt="Card image cap" id="product-detail" class="w-100">
                    </div>
                    
                    <div class="row">
                        <!--Start Controls-->
                     
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
    
                                        @foreach ($data['images'] as $image )
                                                      <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ asset('imgs/'.$image['path'])  }}"  alt="Product Image 1">
                                            </a>
                                        </div>
                                        @endforeach
                                      
                                    </div>
                                </div>
                                <!--/.First slide-->
               
                       
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                      
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $data[0]->product_name }}</h1>
                            <div class=" d-flex justify-content-between ">  
                           
                        
                            <p class="h3 py-2 text-success  "> $ {{ $data[0]->price }}</p>
                        </div>
                        <p class="py-2">

                            <span class="list-inline-item text-info"> <h6 class="text-dark">Quantite :</h6> {{ $data[0]->quantity }}</span>
                        </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6 >Brand:</h6>
                                </li>
                                <li class="list-inline-item ">
                                    <p class="text-muted text-success"><strong>YOUR BRAND </strong></p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p>
                                {{ $data[0]->description }}
                            </p>
                          

                            <h6>Specification:</h6>
                            <p>
                                @foreach($data['specification'] as  $line) 
                                {{ $line }}<br>
                                
                               @endforeach
                            </p>
                 
                            <form action="{{ route('add_to_cart', $data[0]->id) }}" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    @if ($data[0]->taille =='hoc')
                                        
                                  
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product_size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                        </ul>
                                    </div>
                                    @endif
                                    @if ($data[0]->taille =='num')
                                        
                                  
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product_size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">38</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">40</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">42</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">44</span></li>
                                        </ul>
                                    </div>
                                    @endif
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product_quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                 
                                   
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->




 

    <!-- Start Script -->
    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/templatemo.js"></script>
    <script src="/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>