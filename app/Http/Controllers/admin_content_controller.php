<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagories;
use App\Models\Brands;
use App\Models\products;
use App\Models\UserSignup;
class admin_content_controller extends Controller
{
    //
    public function index(){
        
        
        
          
        return view('adminpanel.admin_dashboard');
        
            
        }
    //catagory
        public function view_catagory(){
            $data= Catagories::all();
            return view('adminpanel.add_catagory', compact('data'));
        }
    
        public function add_catagory(Request $request){
            $data= new Catagories;
            $data->catagory_name= $request['catagory_name'];
            $data-> save();
    
            return redirect()->back()->with('message','Catagory Added successfully');
        }
    
        public function delete_catagory($id){
            $data=Catagories::find($id);
            $data->delete();
            return redirect()->back()->with('message','Catagory Deleted successfully');    
        }

        //brand 
        public function view_brand(){
            $data= Brands::all();
            return view('adminpanel.add_brands', compact('data'));
        }
    
        public function add_brand(Request $request){
            $data= new Brands;
            $data->brand_name= $request['brand_name'];
            $data-> save();
    
            return redirect()->back()->with('message','brand Added successfully');
        }
    
        public function delete_brand($id){
            $data=Brands::find($id);
            $data->delete();
            return redirect()->back()->with('message','brands Deleted successfully');    
        }

        //Product

        public function view_product(){
            
              
            $cat= Catagories::all();
            $app= brands::all();
    
            return view('adminpanel.add_product',compact('cat'),compact('app'));
             
            
                return redirect('adminlogin')->with('message', 'Please login to access the admin panel features.');
        
        
            
        }

        //add product
        public function add_product(Request $request){
            
            $data= new products;
            $data->product_title= $request['product_title'];
            $data->product_description= $request['product_description'];
            $data->price =$request['product_price'];
            $data->days =$request['product_days'];
            $data->discounted_price= $request['product_discount_price'];
            $data->product_capacity= $request['product_capacity'];
            $data->product_lisence= $request['product_lisence'];
            $data->product_gear= $request['product_gear'];
            $data->product_driver= $request['product_driver'];
            $data->catagory_id= $request['product_category'];
            $data->brand_id= $request['product_brand'];
            $data->vendor_name= "Rent Koro";
    
            $image=$request->image;
            $imagename= time().'.'.$image->getClientOriginalExtension();
            $request->image->move('added_products',$imagename);
            $data->image=$imagename;
    
            $data-> save();
    
            return redirect()->back()->with('message','Product Added successfully');
        }

        public function show_products(){
            $product_data = products::all();
           
    
            return view('adminpanel.show_products',compact('product_data'));
        }
    
        public function delete_product($product_id){

            $data=products::where('product_id', $product_id);
            $data->delete();
            return redirect()->back()->with('message','Product Deleted successfully');    
        }
    
        public function edit_product($product_id){
            $data=products::where('product_id', $product_id)->get();
            $cata= Catagories::all();
            $appa= Brands::all();
            return view('adminpanel.edit_products',compact('data', 'cata', 'appa'));
        }

        public function update_product(Request $request, $product_id){
        
            $data=products::find($product_id);
            $data->product_title= $request->product_title;
            $data->product_description= $request->product_description;
            $data->price =$request->product_price;
            $data->days =$request->product_days;
            $data->discounted_price= $request->product_discount_price;

            $data->product_capacity= $request->product_capacity;
            $data->product_lisence= $request->product_lisence;
            $data->product_gear= $request->product_gear;
            $data->product_driver= $request->product_driver;
            
            $data->catagory_id= $request->product_category;
            $data->brand_id= $request->product_brand;
            $data->vendor_name= "Rent Koro";
    
            
            $image=$request->image;
            if ($image){
                
            $imagename= time().'.'.$image->getClientOriginalExtension();
            $request->image->move('added_products',$imagename);
            $data->image=$imagename;
                
            }
            
    
            $data->save();
    
            return redirect()->back()->with('message','Product Updated successfully'); 
    
            
        
            }

            
//customer
        public function Customer()
        {

            $cus_data=UserSignup::all();

        
            return view('adminpanel.Customer',compact('cus_data'));
        }
        public function delete_Customer($cus_id){

            $data=UserSignup::where('id', $cus_id);
            $data->delete();
            return redirect()->back()->with('message','Customer Deleted successfully');    
            }

//test
    
}
