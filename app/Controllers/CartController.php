<?php

namespace App\Controllers;
use App\Models\Admin_Model;
class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cartItem = new Cart();
        $cartItem->course_name = $request->input('course_name');
        $cartItem->price = $request->input('price');
        $cartItem->save();

        return response()->json(['success' => 'Item added to cart']);
    }
}