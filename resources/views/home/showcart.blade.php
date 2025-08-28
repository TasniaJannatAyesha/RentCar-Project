<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
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
      <link rel="stylesheet" href="home/css/flaticon.css">
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">
        body {
                margin: 0;          
                padding: 0;
            }


        .page-content {
            margin-top: 70px; 
        }


    .center {
        margin: auto;
        width: 50%;
        text-align: center;
        padding: 20px 0;
    }

    table,
    th,
    td {
        border: 0.1pc solid grey;
    }

    .th_deg {
        font-size: 20px;
        padding: 5px;
        background: skyblue;
    }

    .img_deg {
        height: 150px;
        width: 250px;
        padding: 5px;

    }

    .total_deg {
        font-size: 20px;
        padding: 40px;
    }
    
    .hero_area {
            margin: 0;
            padding: 70px 0 0 0; 
         }

       
    nav.navbar.fixed-top {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
         }
      </style>





   </head>
   <body>
      

    @include('home.header')
    
     <div class="page-content">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
    

    @endif

    <div class='center'>
        <table>
            <tr>
                <th class='th_deg'>Car Name</th>
                <th class='th_deg'>Image</th>
                <th class='th_deg'>Booked days</th>
                <th class='th_deg'>Price</th>
                <th class='th_deg'>Action</th>
            </tr>

            <?php $totalprice=0; ?>
            @foreach($cart as $item)
            <tr>
                <td>{{$item->product_title}}</td>
                <td><img class='img_deg' src=" /added_products/{{$item->image}}" alt=""></td>
                <td>{{$item->day}}</td>
                <td>BDT {{$item->price}} </td>

                <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this car from booking?')"
                        href="{{url('remove_cart',$item->id)}}">Remove</a>
                </td>
            </tr>

            <?php $totalprice=$totalprice  + $item->price ?>
            @endforeach
        </table>
        <div>
            <h1 class="total_deg">Total Price : {{$totalprice}} BDT</h1>
        </div>
        <div class="buttons-container">
            <a class="btn btn-primary" href="{{ url('/userpage') }}">Continue Shopping</a>
        </div>

        <div>
            <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed to Order</h1>
            <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On delivery</a>
           
        </div>
    </div>

   

    @include('home.footer')

      
     
      
      {{-- <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div> --}}
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