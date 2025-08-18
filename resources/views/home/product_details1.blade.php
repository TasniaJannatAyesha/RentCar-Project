<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>RentKoro</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <link rel="stylesheet" href="home/css/flaticon.css">
   </head>
   <body>
      {{-- <div class="hero_area"> --}}

    @include('home.header')
   
    
      {{-- </div> --}}


  


<section class="hero-wrap hero-wrap-2" 
    style="background: url('/home/images/bac1.jpg') no-repeat center center; 
           background-size: cover; 
           height: 60vh; 
           width: 100%;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start" style="height: 100%;">
            <div class="col-md-9 ftco-animate pb-5">
                <h1 class="mb-3 bread" 
                    style="color: black; 
                           font-size: 4rem;   /* bigger */
                           margin-top: 60px; /* move lower */
                           margin-left: 1px;
                           font-weight: bold;">
                    Car Details
                </h1>
            </div>
        </div>
    </div>
</section>


<!-- Product Section -->
<section class="ftco-section ftco-car-details" style="margin-top: 50px;"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details text-center">

                    <!-- Product Image -->
                    <div class="img">
                        <img src="{{ url('home/added_products/' . $product->image) }}" 
                             alt="Car Image" 
                             style="max-width: 400px; height: auto; display: inline-block; border-radius: 0;">
                    </div>

                    <!-- Product Title -->
                    <div class="text text-center" style="margin-top: 20px;">
                        <span class="subheading">{{$product->brand->brand_name}}</span>
                        <h2>{{$product->product_title}}</h2>
                    </div>

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

     
   
      
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>