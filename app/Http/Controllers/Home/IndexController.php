<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	return view('home.index.index');
    }

    public function cplist()
    {
    	return view('home.index.cplist');
    }
    public function cate()
    {
    	return view('home.index.cate');
    }
}
