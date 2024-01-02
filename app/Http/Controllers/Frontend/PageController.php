<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function urunler(){
        $products = Product::where('status','1')->get();
        return view('frontend.pages.products', compact('products'));
    }

    public function urundetay(){
        return view('frontend.pages.product');
    }
    public function indirimdekiurunler(){
        return view('frontend.pages.products');
    }

    public function hakkimizda(){
        $abouts = About::where('id',1)->first();
        return view('frontend.pages.about',compact('abouts'));
    }

    public function iletisim(){

        return view('frontend.pages.contact');
    }

    public function sepet(){
        return view('frontend.pages.cart');
    }
}
