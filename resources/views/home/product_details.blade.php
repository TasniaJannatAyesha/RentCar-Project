<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RentKoro</title>

    <!-- CSS -->
    <link rel="stylesheet" href="home/css/bootstrap.css">
    <link rel="stylesheet" href="home/css/flaticon.css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="home/css/style.css">
    <link rel="stylesheet" href="home/css/responsive.css">
</head>
<body>

    @include('home.header')

    <!-- Hero Section -->
    <section class="hero-wrap hero-wrap-2" 
        style="background: url('/home/images/bac1.jpg') no-repeat center center; 
               background-size: cover; 
               height: 50vh; 
               width: 100%;">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row no-gutters slider-text align-items-end" style="height:100%;">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mb-3 bread" 
                        style="color: white; font-size: 4rem; font-weight: bold; margin-top: 60px;">
                        Car Details
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="ftco-section ftco-car-details mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">

                    <!-- Product Image -->
                    <div class="img mb-3">
                        <img src="{{ url('home/added_products/' . $product->image) }}" 
                             alt="Car Image" 
                             style="max-width: 400px; height: auto; border-radius: 0; display: inline-block;">
                    </div>

                    <!-- Product Title -->
                    <div class="text mb-4">
                        <span class="subheading">{{$product->brand->brand_name}}</span>
                        <h2>{{$product->product_title}}</h2>
                    </div>

                </div>
            </div>

            <!-- Features / Icons -->
            <div class="row text-center mb-5">
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center justify-content-center">
                                <div class="icon d-flex align-items-center justify-content-center mr-2">
                                    <<span class="flaticon-car" style="font-size: 2rem;"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0">Driver: <span>{{$product->product_driver}}</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center justify-content-center">
                                <div class="icon d-flex align-items-center justify-content-center mr-2">
                                    <span class="flaticon-car" style="font-size: 2rem;"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0">Transmission: <span>{{$product->product_gear}}</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center justify-content-center">
                                <div class="icon d-flex align-items-center justify-content-center mr-2">
                                    <span class="flaticon-car" style="font-size: 2rem;"></span>
                                </div>
                                <div class="text">
                                    <h3 class="heading mb-0">Seats: <span>{{$product->product_capacity}} Persons</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs: Features / Description -->
            <div class="row">
                <div class="col-md-12 pills">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="features-tab" data-toggle="tab" href="#features" role="tab"
                               aria-controls="features" aria-selected="true">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab"
                               aria-controls="description" aria-selected="false">Description</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <!-- Features Tab -->
                        <div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
                            <ul class="list-unstyled text-center mb-3">
                                <li>- Vendor: {{$product->vendor_name}}</li>
                                <li>- License: {{$product->product_lisence}}</li>
                                <li>- Minimum rent time: {{$product->days}} days</li>
                                <li class="text-danger">- Original price: <del>{{$product->price}}</del> BDT</li>
                                <li class="text-success">- Discounted price: {{$product->discounted_price}} BDT</li>
                            </ul>
                            <p class="text-center">Please Choose total days</p>
                            <form action="{{url('add_cart',$product->product_id)}}" method="POST">
                                @csrf
                                <div class="d-flex justify-content-center mb-4">
                                    <input type="number" name="days" value="{{ $product->days }}" min="{{ $product->days }}" class="form-control w-25 mr-2">
                                    <button type="submit" class="btn btn-primary">Book now</button>
                                </div>
                            </form>
                        </div>

                        <!-- Description Tab -->
                        <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <p class="text-center">{{$product->product_description}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('home.footer')

    <!-- JS -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <script src="home/js/popper.min.js"></script>
    <script src="home/js/bootstrap.js"></script>
    <script src="home/js/custom.js"></script>

</body>
</html>
