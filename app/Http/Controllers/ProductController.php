<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Product;
use App\Models\ProductSubImage;

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

    public function show($id){

        $product = Product::findOrFail($id);
        $sub_images = ProductSubImage::all()->where('id_product', '=', $product->id);

        if($product->isOffer == 1){
            $query = Offer::select()->where('id_product', '=', $product->id)->get();
            $offer = $query[0];
        }
        
        return view('sections.product.show', [
            'product' => $product,
            'offer' => $offer,
            'sub_images' => $sub_images
        ]);
    }

}
