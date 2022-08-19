<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{

    public function index() {
        $title = "Система заявок";

        return view('homepage', compact('title'));

    }

}
