<?php

namespace Seia\Pages\Http\Controllers;

use Seia\Core\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages::index');
    }
}
