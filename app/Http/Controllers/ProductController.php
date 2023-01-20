<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{

    /**
     * @example
     * This function list all products
     */

    public function list($category_id){

        $products = Product::all()->where('id_category', '=', $category_id);

        return view('sections.product.product-list', ['products' => $products]);
    }

    public function index(){

    }
}
