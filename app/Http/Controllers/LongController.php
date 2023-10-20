<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class LongController extends Controller
{
    public function index(Service $service)
    {
        return view('long.index', [
            'services' => Service::where('type_id','1')->get(),
        ]);
    }
}
