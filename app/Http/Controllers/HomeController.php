<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Products;
use App\Models\Catagories;
class HomeController extends Controller
{

    public function index()
    {
        return view('home.userpage');
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('dashboard');
        }
    }

    public function all_catagories()
    {
        $cat_data = Catagories::all();
        return view('home.all_catagories', compact('cat_data'));
    }

    public function product_details($product_id)
{
    $product = Products::with('brand')->find($product_id);
    return view('home.product_details', compact('product'));
}
}
