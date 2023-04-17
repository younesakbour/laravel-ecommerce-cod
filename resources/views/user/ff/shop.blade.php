<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
<style>
    form{
        width: 100%
    }
    img {
  display: block;
  max-width: 100%;
  height: auto;
}
</style>



    <!-- Header -->
   <x-navbar/>
  
    <!-- Close Header -->
    @if(Session::has('stored') )
    <div class="alert alert-success" role="alert">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACX0lEQVR4nO2YOUtcURiGH0fsIszopBA1GlOkyJ9IYewdlXEBtUqjjpAmkCJFJCC2KawTwSaxUfEnuFXBpTOaQCAkAUeydVH54BUuw53NucuYnAcuzNzlPffc73zbAYfD4XA4HI7/gk5gB8gCCc95+z2sax3cANaBQ+AM2AP6gQywD+R1bZU6Zwz4BfQAzcBTTcjOzQMpoAv4KevUBUmgFxgAJoAp4DuQK7gvrcPLLPBVz0wCQ9JKEgN9wF/gI3AAbAOvC/yiGAndu60ldyytR8SAWeIkQL1P8qfImdTXDAqz6jgxMA1sBahnWqYZKcNy1qUANd8A34BRIqANWAH+KLQ2BqjdADwGfgAbwB1CZEcJ7W4NGu3AW6C1yPUu+YuNFeqSyiuxXQd7ySPgQhb1I6UkaiVOaFj8fw/MXePZbuCDJrGopeTHS0XDSvJRTWS0jguztXELeOWToe8DnzWJhRLaaZUvkeSTfg122+fac73srmcyD4AvOv+ijHZaH8k+VqgkVNGa+f1oAt55JvNQ9Zf9f1bhGHNRLK2sHLGlxD0Wkpf18nacA0+qGCMJnIZdHV+FX3PcUlxZ5lwVbjV0awyzaKjd37p8JFfG/E2qkCvFtGbVu6xF1UWOqpywsiIorKw3zRFueNG4CcwQAxMqJYLCIpVpRk5GzVBQWKcZev7wo1ft6bFyy1YNre6JtPqIcfNhSN3itJzVIk+5zYecEuWUltOgtFLUCRZxfgP3imwHtXi2gyKPTtWypoSW17LJqD7b06QOlIvqng5l5RGfLdOsqgNLrA6Hw+FwOBz/Ope8zoudx7dQCAAAAABJRU5ErkJggg==">
        {{ Session::get('stored') }}
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

    <div class="row mt-4">
        <div class="col-md-8 mx-auto border-bottom rounded p-4">
        
          <hr class="my-1">
          <h5 class="text-center text-white ">Write any country name in the search box </h5>
          <form action="" method="post" class="p-3">
            <div class="input-group">
              <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
              <div class="input-group-append">
               <div class="bg-info h-100 p-3" >   
           Results : <strong id="results"></strong>

            </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
          <div class="list-group" id="show-list">
         
          
            <!-- Here autocomplete list will be display -->
          </div>
        </div>
      </div>

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4 text-success">Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                  
                
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            PRODUCTS
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                            @foreach ( $data2['categories'] as $e )
                            <li><a class="text-decoration-none" href="{{ route('category',["category"=>$e['name'] ])}}">{{ $e['name'] }}</a></li>
                            @endforeach
                           
                           
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                 <h5>All <strong class="text-info">({{ $data2['count'] }})</strong></h5>
                </div>
                <div class="row ">
                @include('user.ff.products.product')
    
                </div>
                <div div="row">
                    <div class="d-flex justify-content-center">
                       
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="img/brand_04.png" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->
 

    <!-- Start Footer -->
    <x-footer data={{ $data2 }} />
    <!-- End Footer -->
    <script>
        $(document).ready(function(){
        
         fetch_customer_data();
        
         function fetch_customer_data(query = '')
         {
          $.ajax({
           url:"{{ route('live_search.action') }}",
           method:'GET',
           data:{query:query},
           dataType:'json',
           success:function(data)
           {
            $('#show-list').html(data.table_data);
            $('#results').text(data.total_data);
           }
          })
         }
        
         $(document).on('keyup', '#search', function(){
          var query = $(this).val();
          fetch_customer_data(query);
         });
        });
        </script>

    <!-- Start Script -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/templatemo.js"></script>
    <script src="js/custom.js"></script>
    <!-- End Script -->
</body>

</html>