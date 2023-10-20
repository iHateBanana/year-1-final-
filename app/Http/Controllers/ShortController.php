<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ShortController extends Controller
{
    public function index(Service $service)
    {
        return view('short.index', [
            'services' => Service::where('type_id','3')->get(),
        ]);
    }
}
