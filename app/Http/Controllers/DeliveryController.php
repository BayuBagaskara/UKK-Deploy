<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index()
    {
        return Delivery::all();
    }

    public function store(Request $request)
    {
        $delivery = Delivery::create($request->all());
        return response()->json($delivery, 201);
    }

    public function update(Request $request, Delivery $delivery)
    {
        $delivery->update($request->all());
        return response()->json($delivery, 200);
    }

    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        return response()->json(null, 204);
    }
}
