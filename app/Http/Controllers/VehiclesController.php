<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Category;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('backend.admin.vehicles.allvehicles', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.admin.vehicles.addvehicle', compact('categories'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'veh_category_id' =>  'required',
            'reg_no' =>  'required',
            'veh_make' =>  'required',
            'veh_model' =>  'required',
            'veh_desc' =>  'required'
        ]);
        
        $form_data = array(
            'veh_category_id' =>  $request->veh_category_id,
            'reg_no' =>  $request->reg_no,
            'veh_make' =>  $request->veh_make,
            'veh_model' =>  $request->veh_model,
            'veh_desc' =>  $request->veh_desc,
        );
        Vehicle::create($form_data);

        return redirect('admin/vehicles')->with('success', 'Vehicle Added successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('backend.admin.vehicles.viewvehicle', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        // $categories = $this->db->get_where('categories', array('id' => $vehicle->veh_category_id))->result_array();
        $categories = Category::all();
        return view('backend.admin.vehicles.updatevehicle', compact('vehicle','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'veh_category_id' =>  'required',
            'reg_no' =>  'required',
            'veh_make' =>  'required',
            'veh_model' =>  'required',
            'veh_desc' =>  'required'
        ]);
  
        $form_data = $request->all();

        $vehicle->update($form_data);
    
        return redirect()->route('vehicles.index')
            ->with('success','Vehicle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect('admin/vehicles')->with('success', 'Vehicle is successfully deleted');
    }
}
