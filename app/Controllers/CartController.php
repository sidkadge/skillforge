<?php

namespace App\Controllers;

use App\Models\CartItemModel;
use CodeIgniter\Controller;

class CartController extends Controller
{
    public function add()
    {
        $json = $this->request->getJSON();

        if (!$json || !isset($json->course_name) || !isset($json->price) || !isset($json->session) || !isset($json->duration)) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'Invalid input']);
        }

        $cartItemModel = new CartItemModel();

        $data = [
            'course_name' => $json->course_name,
            'price' => $json->price,
            'session' => $json->session,
            'duration' => $json->duration,
        ];

        $cartItemModel->insert($data);

        return $this->response->setStatusCode(200)->setJSON(['success' => 'Course added to cart successfully']);
    }

    public function viewCart()
    {
        $cartItemModel = new CartItemModel();
        $data['cart_items'] = $cartItemModel->findAll();

        return view('cart_view', $data);
    }
    public function count()
{
    // Example logic to get the cart count
    $cartCount = $this->cart_model->getCartCount(); // Adjust according to your model logic
   
   
}

}