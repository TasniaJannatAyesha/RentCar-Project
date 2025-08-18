{{-- <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3">Our Available Car Categories</h2>
            </div>
        </div>
        <div class="row">
            @foreach($cat_data as $category)
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <a href="{{ url('/show_category', ['category_id' => $category->id])}}"
                        class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-transportation"></span>
                    </a>
                    <div class="text w-100">
                        <h2 class="heading mb-2">{{$category->catagory_name}}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-3">Our Available Car Categories</h2>
            </div>
        </div>
        <div class="row">
            @foreach($cat_data as $category)
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <a href="{{ url('/show_category', ['category_id' => $category->id])}}"
                        class="icon d-flex align-items-center justify-content-center">
                        <span class="flaticon-transportation"></span>
                    </a>
                    <div class="text w-100">
                        <h2 class="heading mb-2">{{$category->catagory_name}}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>
/* Make the icon background a blue circle */
.services-2 .icon {
    width: 80px;           /* size of the circle */
    height: 80px;
    border-radius: 50%;    /* makes it circular */
    background-color: #007bff; /* blue color */
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;   /* center and spacing */
}

/* Make the icon itself bigger and white */
.services-2 .icon span {
    font-size: 2.5rem;
    color: #ffffff;
}
</style>
