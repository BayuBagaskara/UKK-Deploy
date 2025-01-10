<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function index()
    {
        return ProductReview::all();
    }

    public function store(Request $request)
    {
        $review = ProductReview::create($request->all());
        return response()->json($review, 201);
    }

    public function update(Request $request, ProductReview $productReview)
    {
        $productReview->update($request->all());
        return response()->json($productReview, 200);
    }

    public function destroy(ProductReview $productReview)
    {
        $productReview->delete();
        return response()->json(null, 204);
    }
}
