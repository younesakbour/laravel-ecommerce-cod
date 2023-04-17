<!DOCTYPE html>
<html lang="en">

<head>
    <title>Yosspow</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.ico">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/templatemo.css">
    <link rel="stylesheet" href="/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="/css/fontawesome.min.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!--
    
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
<style>
    .nav > li > a:hover{
    background-color:rgb(25, 61, 26);
}
form{
        width: 100%
    }
</style>
</head>

<body>

    <x-navbar/>





    <div class="row">    
        <div class="d-flex justify-content-between m-3">  
            <h2 class=" text-white d-inline p-3 bg-success w-auto" >
       <img src="{{ asset('/imgs/categorie').'/'.$data[0]->ico }}" alt="" srcset="" style="max-height: 60px;min-height: 55px">

         

           
   

     


           
             
             <strong class="text-dark"> {{ Str::upper($data[0]->name) }} </strong> 
             
             SECTION </h2>
          
       
        <a href="{{ route('shop') }}" class="btn btn-dark m-3 w-25 float-end d-inline" role="button"> 

            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAACJElEQVR4nO2YsWsUQRTGx0K0yL13MQp692YDErRUjORfiJVC9Ip970Iwhb2VaKG1/gtG0DZdxE5IE23EXptUSgoFuSiHZ0ISeXuR7J53Z+HsnJH3g6+ZefvNfjuzczvnnGEYhmEYhnGomFicqNQZ5xLGRl7apn3uX+NsYxwTwUsJ4/QvUQoznvENCa6T4NserWd9Kczkr1EP9XKjIBG84RnaJNAiwS89Wp664o71XqNt2vd7PbTUq97E67FzHPEMH6iJN0MZkuCieqq3i0VNKueJsTO54I6H8sxmi/F7bb5yzsVCnx4Jvgruy/g65Cz/Ec/wxAs8LMH3kRdYCu07ZEB876V6Nbxv9RoJvnMxOJOOnfSMO6cbY6cOk3cBYnhGDJtecLfPlhtEXr0ZNonhqSsLHcQL7kXSbplB9mLKlQUxvogVggSelxbkv4JSmN3/ICxPKcyWHiRhHPeC2wOXBONGsQ2+dTWspqBtHcPFgATWBoToTN9yR7Ov2f22hPGOKrf2W1kNY2fAu7HmYuEF7vV9mgztbj9+OmjD25kO6j5nNQztAR53owWpMV4sK0i9Wb0Q+zzyMXQQYtyIeh7p3iwsBZ8RhscuNnosDR2kzjgXPciUnABi3CruOPhjcgGrnuFrbhe6TwwP8tux1mhtz7LaUk83CrzAar/fgeIs4U6mYTXdgKsjCZEFmYfLxLBCgi//Sgwr+reQMwzDMAzDMAxXIj8BQaNCLBU02ZEAAAAASUVORK5CYII=">
            go back to Shoop</a>
        </div>
    
        </div >
    </div> 


   
                          
         


   

    

    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

           

            <div class="col-lg-9">
                <div class="row">
                    
                        
                           
                    
                    <div class="col-md-6 pb-4">
                       
                        <div class="d-flex">
                         @isset($data[0])
                             
                       
                            
                         
                         <form action="{{ route('nichan_c',$data[0]->name) }}" method="GET">
                            <div class="row">
                           
                            <select class="form-control" name="trtib" style="display: inline">
                                
                                <option value="featured"  >Featured</option>  
                                <option value="az" selected>A to Z</option>
                                <option  value="price">Price</option>
                                
                            </select>
                            <button type="submit" class="btn btn-success btn-m"  >OK</button>
                            </div>
                         </form>
                         @endisset
                       
                        </div>
                    </div>
                       
                       
             
                   
                   
                
                </div>
                <div class="row">
                @include('user.ff.products.product')
    
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
                                                <a href="#"><img class="img-fluid brand-img" src="/img/brand_01.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="/img/brand_02.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="/img/brand_03.png" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="/img/brand_04.png" alt="Brand Logo"></a>
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