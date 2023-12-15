<?php

namespace Modules\Admin\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\app\Models\BusinessSetup;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use DataTables;

class BusinessController extends Controller
{
    /**
     * Display a listing of the Business.
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        if ($request->ajax()) {
            $data = Service::join('business_setups', 'services.id', '=', 'business_setups.service_id')
                ->where('business_setups.user_id', $user->id)->select('*', 'services.name as s_name')
                ->get();
            return DataTables::of($data)
                ->addColumn('service_name', function ($row) {
                    return $row->s_name;
                })->addColumn('action', function ($row) {
                    return '<a href="' . route('business.edit', $row->id) . '"><button class="btn btn-primary">Edit</button></a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin::business_setup.list');
    }

    /**
     * Show the form for creating a new business.
     */
    public function create()
    {
        $services = Service::select('*')->get();
        return view('admin::business_setup.setup-form', ['services' => $services]);
    }

    /**
     * Store a newly created business in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:2',
            'service' => 'required',
            'email' => 'required|email|unique:business_setups',
            'mob_number' => 'required|numeric|digits:10',
            'address' => 'required|string'
        ]);

        $user = Auth::user();
        $newBusiness = new BusinessSetup();
        $newBusiness->name = $request->input('name');
        $newBusiness->user_id = $user->id;
        $newBusiness->email = $request->input('email');
        $newBusiness->service_id = $request->input('service');
        $newBusiness->mob_number = $request->input('mob_number');
        $newBusiness->address = $request->input('address');
        $newBusiness->save();

        return redirect()->route('business.index')->with('success', 'Business setup successfully !');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $businessDetails = BusinessSetup::find($id);
        $services = Service::select('*')->get();
        return view('admin::business_setup.setup-edit-form', ['businessDetails' => $businessDetails, 'services' => $services]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|min:2',
            'service' => 'required',
            'email' => 'required|email|unique:business_setups,email,' . $id,
            'mob_number' => 'required|numeric|digits:10',
            'address' => 'required|string'
        ]);

        $user = Auth::user();
        $newBusiness = BusinessSetup::find($id);
        $newBusiness->name = $request->input('name');
        $newBusiness->email = $request->input('email');
        $newBusiness->service_id = $request->input('service');
        $newBusiness->mob_number = $request->input('mob_number');
        $newBusiness->address = $request->input('address');
        $newBusiness->save();

        return redirect()->route('business.index')->with('success', 'Business updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
