<?php

namespace App\Http\Controllers;

use App\Models\DiscountCategory;
use Illuminate\Http\Request;

class DiscountCategoryController extends Controller
{
    public function index()
    {
        return DiscountCategory::all();
    }

    public function store(Request $request)
    {
        $discountCategory = DiscountCategory::create($request->all());
        return response()->json($discountCategory, 201);
    }

    public function update(Request $request, DiscountCategory $discountCategory)
    {
        $discountCategory->update($request->all());
        return response()->json($discountCategory, 200);
    }

    public function destroy(DiscountCategory $discountCategory)
    {
        $discountCategory->delete();
        return response()->json(null, 204);
    }
}
