<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class MediumController extends Controller
{
    public function index(Service $service)
    {
        return view('medium.index', [
            'services' => Service::where('type_id','2')->get(),
        ]);
    }
}
