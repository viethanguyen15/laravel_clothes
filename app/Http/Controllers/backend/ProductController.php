<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getProduct() {
        echo 'product';
    }

    function getAddProduct() {
        echo 'getAddProduct';
    }

    function getEditProduct() {
        echo 'getEditProduct';
    }
}
