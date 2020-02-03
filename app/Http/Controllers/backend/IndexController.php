<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function getIndex() {
        return view('backend.index');
    }

    function getAbout() {
        return view('backend.about');
    }

    function getContact() {
        return view('backend.contact');
    }
}
