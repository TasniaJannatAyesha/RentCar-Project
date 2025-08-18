

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RentKoro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    
    <link rel="stylesheet" href="/home/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/home/css/animate.css">
    <link rel="stylesheet" href="/home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/home/css/magnific-popup.css">
    <link rel="stylesheet" href="/home/css/aos.css">
    <link rel="stylesheet" href="/home/css/ionicons.min.css">
    <link rel="stylesheet" href="/home/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/home/css/jquery.timepicker.css">
    <link rel="stylesheet" href="/home/css/flaticon.css">
    <link rel="stylesheet" href="/home/css/icomoon.css">
    <link rel="stylesheet" href="/home/css/style.css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Rent<span>Koro</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{url('/userpage')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{url('all_catagories')}}" class="nav-link">Categories</a></li>
                <li class="nav-item"><a href="{{url('/all_cars')}}" class="nav-link">Cars</a></li>
                <li class="nav-item"><a href="{{url('profile')}}" class="nav-link">Profile</a></li>
                <li class="nav-item"><a href="{{url('show_cart')}}" class="nav-link">Cart</a></li>

                {{-- <!-- Navbar Search Box -->
                <div style="padding-right: 10px; padding-top:5px;">
                    <form action="{{url('product_search')}}" method="GET">
                        @csrf
                        <input type="text" name="search" placeholder="Search for Cars">
                        <input type="submit" value="search" class="btn btn-outline-primary">
                    </form>
                </div> --}}


                <li class="nav-item"><a href="{{url('/userlogout')}}" class="btn btn-danger">Logout</a></li>
                <li class="nav-item dropdown border-left">
                    <a class="nav-link count-indicator dropdown-toggle" id="accountOptionsDropdown" href="#"
                        data-toggle="dropdown">
                        <!-- Change the icon here (e.g., to a key icon) -->
                        <i class="mdi mdi-key"></i>
                        <span class="count bg-danger"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="accountOptionsDropdown">
                        <h6 class="p-3 mb-0">Other Account options</h6>
                        <div class="dropdown-divider"></div>
                        <!-- Add options for user login, user sign up, vendor login, and vendor signup -->
                        <a class="dropdown-item preview-item" href="{{url('/adminlogin')}}">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-login text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Admin Login</p>
                                <p class="text-muted ellipsis mb-0"> Click here to log in as a user </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item" href="{{url('/adminsignup')}}">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-account-plus text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject mb-1">Admin Sign Up</p>
                                <p class="text-muted ellipsis mb-0"> New user? Sign up here </p>
                            </div>
                        </a>
                       
                </li>
            </ul>
        </div>


</nav>




<body>

    {{-- @if(session('user'))
    @include('home.header')
    @else
    @include('home.header2')
    @endif --}}
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/home/images/bac1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mb-3 bread">Car Details</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        <div class="img rounded" style="background-image: url('{{ asset($product->image) }}');">
                        </div>
                        <div class="text text-center">
                            <span class="subheading">{{$product->brand->brand_name}}</span>
                            <h2>{{$product->product_title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-car"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Driver
                                        <span>{{$product->product_driver}}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-pistons"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Transmission
                                        <span>{{$product->product_gear}}</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-car-seat"></span></div>
                                <div class="text">
                                    <h3 class="heading mb-0 pl-3">
                                        Seats
                                        <span>{{$product->product_capacity}} Persons</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-backpack"></span></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                        href="#pills-description" role="tab" aria-controls="pills-description"
                                        aria-expanded="true">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                        href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                        aria-expanded="true">Description</a>
                                </li>

                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">

                                <!-- contents here -->
                                <style>
                                .centered-list {
                                    text-align: center;
                                    list-style-type: none;
                                    padding: 0;
                                }

                                .centered-list li {
                                    margin: 10px 0;
                                    font-size: 18px;
                                }
                                </style>

                                <div class="text-center">
                                    <ul class="centered-list">
                                        <li>- Vendor: {{$product->vendor_name}}</li>
                                        <li>- Lisence: {{$product->product_lisence}}</li>
                                        <li>- Minimum rent time: {{$product->days}} days</li>
                                        <style>
                                        .green-text {
                                            color: green;
                                        }

                                        .red-text {
                                            color: red;
                                        }
                                        </style>
                                        <li class="red-text">- Original price: <del>{{$product->price}}</del> BDT</li>
                                        <li class="green-text">- Discounted price: {{$product->discounted_price}} BDT
                                        </li>
                                        <p>Please Choose total days</p>
                                    </ul>
                                </div>
                                <form action="{{url('add_cart',$product->product_id)}}" method='Post'>
                                    @csrf

                                    <div class="container d-flex align-items-center justify-content-center"
                                        style="min-height: 10vh;">
                                        <div class='col-md-3'>
                                            <input type="number" name='days' value="{{ $product->days }}"
                                                min="{{ $product->days }}">
                                            <button type="submit" class="btn btn-primary mt-2">Book now</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                                aria-labelledby="pills-manufacturer-tab">

                                <p>{{$product->product_description}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('home.footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="/home/js/jquery.min.js"></script>
    <script src="/home/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/home/js/popper.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/jquery.easing.1.3.js"></script>
    <script src="/home/js/jquery.waypoints.min.js"></script>
    <script src="/home/js/jquery.stellar.min.js"></script>
    <script src="/home/js/owl.carousel.min.js"></script>
    <script src="/home/js/jquery.magnific-popup.min.js"></script>
    <script src="/home/js/aos.js"></script>
    <script src="/home/js/jquery.animateNumber.min.js"></script>
    <script src="/home/js/bootstrap-datepicker.js"></script>
    <script src="/home/js/jquery.timepicker.min.js"></script>
    <script src="/home/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="/home/js/google-map.js"></script>
    <script src="/home/js/main.js"></script>
</body>

</html>



    