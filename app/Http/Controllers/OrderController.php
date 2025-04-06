<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'product' => 'required|string',
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'birth_time' => 'required',
            'birth_place' => 'required|string|max:255',
            'contact_method' => 'required|string|in:facebook,instagram,whatsapp,viber,telegram',
            'contact_info' => 'required|string|max:255',
        ]);

        Order::create($validated);

        return redirect()->back()->with('success', 'Thank you! We will contact you soon with further instructions.');
    }

    public function testOrders(Request $request)
    {
        if($request->get('token') !== env('API_TOKEN')) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $orders = Order::all();
        return response()->json($orders);
    }
}
