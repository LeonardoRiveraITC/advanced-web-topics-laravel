<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function landingPage(){
        return view("index");
    }
    public function contactPage(){
        return view("contact");
    }
    public function faqPage(){
        return view("faq");
    }
}
