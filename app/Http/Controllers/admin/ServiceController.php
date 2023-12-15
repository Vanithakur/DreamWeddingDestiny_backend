<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use DataTables;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::select('*');
            return DataTables::of($data)
                ->addColumn('image', function ($row) {
                    return '<img src="'.$row->image.'" alt="" srcset="" style="width:100px; height:100px;">';
                })
                ->addColumn('action', function ($row) {
                    return '<div class="row"><a href="' . route('service.edit', $row->id) . '"><button class="btn btn-success btn-sm" style="margin: 0px 5px;">Edit</button></a>' .
                        '<form action="' . route("service.delete", $row->id) . '" method="post">' .
                        csrf_field() .
                        method_field("delete") .
                        '<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm(\'Are you sure you want to delete this client?\')" style="width: 70px;">Delete</button>' .
                        '</form></div>';
                })->rawColumns(['image','action'])->make(true);
        }
        return view('admin.service.index');
    }

    /**
     * Show the form for creating a new business.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created business in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:2',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('ServiceImages', 'public');
            $image = "/storage/{$path}";
        }
        $service = new Service();
        $service->name = $request->input('name');
        $service->image = $image;
        $service->save();

        return redirect()->route('service.index')->with('success', 'Service create successfully !');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servicesDetails = Service::find($id);
        return view('admin.service.edit', ['servicesDetails' => $servicesDetails]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:2',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('ServiceImages', 'public');
            $image = "/storage/{$path}";
        }
        $service = Service::find($id);
        $service->name = $request->input('name');
        if ($request->hasFile('image')) {
            $service->image = $image;
        }
        $service->save();

        return redirect()->route('service.index')->with('success', 'Service updated successfully !');
    }

    public function delete($id)
    {
        $model = Service::find($id);

        if (!$model) {
            return redirect()->route('service.index')->with('error', 'This Service is not found!');
        }

        $model->delete();

        return redirect()->route('service.index')->with('success', 'Service deleted successfully !');
    }
}
