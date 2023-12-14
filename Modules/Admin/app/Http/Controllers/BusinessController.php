<?php

namespace Modules\Admin\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\app\Models\BusinessSetup;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin::business_setup.setup-form');
    }

    /**
     * Store a newly created resource in storage.
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

        $newBusiness = new BusinessSetup();
        $newBusiness->name = $request->input('name');
        $newBusiness->email = $request->input('email');
        $newBusiness->service = $request->input('service');
        $newBusiness->mob_number = $request->input('mob_number');
        $newBusiness->address = $request->input('address');
        $newBusiness->save();

        return redirect()->route('business.create')->with('success', 'Business setup successfully !');
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
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
