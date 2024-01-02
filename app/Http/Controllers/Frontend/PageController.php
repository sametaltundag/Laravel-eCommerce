<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function urunler(Request $request){
        $size = $request->size;
        $color = $request->color;
        $startprice = $request->startprice ?? null;
        $endprice = $request->endprice ?? null;

        $products = Product::where('status','1')
        ->where(function($query) use($size,$color,$startprice,$endprice){
            if(!empty($size)){
                $query->where('size',$size);
            }
            if(!empty($color)){
                $query->where('color',$color);
            }
            if(isset($startprice) && isset($endprice)){
                $query->whereBetween('price',[$startprice,$endprice]);
            }
            return $query;
        })
        ->with('category:id,name,slug');

        $minprice = $products->min('price');
        $maxprice = $products->max('price');

        $sizelist = Product::where('status','1')->groupBy('size')->pluck('size')->toArray();
        $colorlist = Product::where('status','1')->groupBy('color')->pluck('color')->toArray();

        $products = $products->paginate(12);
        $categories = Category::where(['status'=>'1','cat_ust' => null])->withCount('items')->get();

        return view('frontend.pages.products', compact('products','categories','minprice','maxprice','sizelist','colorlist'));
    }

    public function urundetay($slug){
        $product = Product::where('status','1')->where('slug',$slug)->first();
        return view('frontend.pages.product', compact('product'));
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
