<?php

namespace App\Models;

use CodeIgniter\Model;

class CartItemModel extends Model
{
    protected $table = 'cart_items';
    protected $allowedFields = ['course_name', 'price', 'session', 'duration'];
}
    