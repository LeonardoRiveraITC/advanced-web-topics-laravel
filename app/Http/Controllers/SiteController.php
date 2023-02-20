<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class SiteController extends Controller
{
    public function details($id){
        $products=Product::find($id);
        return view('product',compact('products'));
    }
    public function shop(){
        $products=Category::with('relatedProducts')->get();
        //return view ("shop",['products'=>$products]);
        return view('shop',compact('products'));
    }

    public function landingPage(){
        return view("index");
    }
    public function contactPage(){
        return view("contact");
    }
    public function faqPage(){
        return view("faq");
    }
    public function products(){
        //echo '<pre>';
        return $products=Product::all();
        //print_r($products);
        //echo '</pre>';
        //return 'products'; 
    }
}
