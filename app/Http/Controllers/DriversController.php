<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('backend.admin.drivers.alldrivers', compact('drivers'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.drivers.adddriver');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Driver  $drivers
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $drivers)
    {
        $data = Driver::findOrFail($id);
        return view('backend.admin.drivers.viewdriver', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Driver  $drivers
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $drivers)
    {
        $data = Driver::findOrFail($id);
        return view('backend.admin.drivers.updatedriver', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Driver  $drivers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $drivers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Driver  $drivers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $drivers)
    {
        $data = Driver::findOrFail($id);
        $data->delete();
        return redirect('drivers')->with('success', 'Data is successfully deleted');
    }
}
