<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function getOrder() {
        echo 'get order';
    }

    function getDetail() {
        echo 'getDetail';
    }

    function getProcessed() {
        echo 'getProcessed';
    }
}
