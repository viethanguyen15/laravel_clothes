<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser() {
        echo 'user';
    }

    function geAddtUser() {
        echo 'geAddtUser';
    }

    function getEditUser() {
        echo 'getEditUser';
    }
}
