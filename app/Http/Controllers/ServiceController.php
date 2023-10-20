<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Type;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('service.index', [
            'services' => Service::all(),
            'types' => Type::all()
        ]);
    }

    public function show($id)
    {
        return view ('services.show', [
            'services' => Service::find($id),
            'types' => Type::all(),
        ]);

//        return view('services.show', $service->id);
    }

    public function edit($id)
    {
        $this->authorize('update', Service::class);

        return view('services.edit', [
            'service' => Service::find($id),
            'types' => Type::all()
        ]);
    }

    public function update(Request $request, Service $service)
    {
        $path = $request->file('image')->store('public/images');

        $service->update([
            'title' => $request->title,
            'type_id' => $request->type_id,
            'description' => $request->description,
            'images' => $path,
        ]);

        /*dd($request->all());*/

        return redirect(route('admin.index'));
}
}
