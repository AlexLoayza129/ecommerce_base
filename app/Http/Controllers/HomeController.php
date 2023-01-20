<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Offer;

class HomeController extends Controller
{
    public function index(){

        $categories = Category::all()->where('deleted_at', '=', null);
        $offers = Offer::all();

        return view('app', [
            'categories' => $categories,
            'offers' => $offers
        ]);
    }
}
