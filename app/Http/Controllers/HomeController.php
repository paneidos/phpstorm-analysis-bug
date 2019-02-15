<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        $value = $request->input('XXX');
        return ['value' => $value];
    }
}
