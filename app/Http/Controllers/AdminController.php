<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $this->authorize('index', Service::class);

        return view('admin.index', [
            'services' => Service::all(),
            'types' => Type::all()
        ]);
    }

    public function create(Request $request)
    {
        $this->authorize('create',Service::class);

        return view ('admin.create', [
            'services' => Service::all(),
            'types' => Type::all()
        ]);
    }

    public function store(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:150',
            'short_title' => 'required|string|max:50',
            'description' => 'required',
            'type_id' => 'required',
            'image' => 'required|file',
        ]);

        $path = $request->file('image')->store('public/images');

        Service::create([
            'title' => $request->title,
            'short_title' =>  $request->short_title,
            'description' =>  $request->description,
            'type_id' =>  $request->type_id,
            'images' => $path,
        ]);

        return redirect()->route('admin.index')->with('success', 'New Service created!');
    }

    public function edit($id)
    {
        $this->authorize('update', Service::class);

        return view('admin.edit', [
            'service' => Service::find($id),
            'types' => Type::all()
        ]);
    }

    public function update(Request $request, Service $service)
    {
        $path = $request->file('image')->store('public/images');

        $service->update([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'type_id' => $request->type_id,
            'description' => $request->description,
            'images' => $path,
        ]);

        return redirect(route('admin.index'));


    }

    public function destroy($id)
    {
        $this->authorize('update',Service::class);

        $service = Service::find($id);

        $service->delete();

        return redirect(route('admin.index'));
    }
}
