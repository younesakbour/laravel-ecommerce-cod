<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Yosspow ecommerce </title>

    <!-- Icons font CSS-->
    <link href="/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/css/main.css" rel="stylesheet" media="all">
</head>

<body>
 
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Client information</h2>
                </div>
 
         
                <div class="card-body">
                    <form method="POST" action="{{ route('store') }}">
                        @csrf

                 
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            
                            <div class="value">
                                <div class="row row-space">
                            
                                    <div class="col-2">
                                        <div class="input-group-desc ">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                       
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Adresse</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="adresse">
                                    <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                
                                   
                                    <div class="col-10">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone">
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>
                                    </div>
                                    
                                
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">country</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="country">
                                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">city</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city">
                                    <x-input-error :messages="$errors->get('city')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">zip code </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="zip_code">
                                    <x-input-error :messages="$errors->get('zip_code')" class="mt-2" />
                                </div>
                            </div>
                        </div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
 

</body>
</html>
<!-- end document-->