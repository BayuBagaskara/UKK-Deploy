<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function show(ProductCategory $productCategory)
    {
        
        $products = $productCategory->products;

       
        return view('product_categories.show', compact('productCategory', 'products'));
    }
}