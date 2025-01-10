<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        return Wishlist::all();
    }

    public function store(Request $request)
    {
        $wishlist = Wishlist::create($request->all());
        return response()->json($wishlist, 201);
    }

    public function update(Request $request, Wishlist $wishlist)
    {
        $wishlist->update($request->all());
        return response()->json($wishlist, 200);
    }

    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return response()->json(null, 204);
    }
}
