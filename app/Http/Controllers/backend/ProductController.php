<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AddProductRequest;

class ProductController extends Controller
{
    function getProduct() {
        return view('backend.product.listproduct');
    }

    function getAddProduct() {
        return view('backend.product.addproduct');
    }

    function getEditProduct() {
        return view('backend.product.editproduct');
    }

    function postAddProduct(AddProductRequest $r) {
        dd($r->all());
    }

    function postEditProduct(request $r) {

    }

}
