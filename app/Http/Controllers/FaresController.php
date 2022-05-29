<?php

namespace App\Http\Controllers;

use App\Models\Fare;
use App\Models\Category;
use Illuminate\Http\Request;

class FaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fares = Fare::all();
        return view('backend.admin.fares.allfares', compact('fares'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();   // all data present in categories
        $fares = Fare::all();              // all data present in fares
        $cid = array();
        $fid = array();
        $final_categories = array();
        foreach($categories as $key => $category) {
        $cid[] =$categories[$key]->id;           // categories ids
        }
        foreach($fares as $key => $fare) {
        $fid[] =$fares[$key]->veh_category_id;  // category ids(foreign_ids) present in fares 
        }
		$id_diffr= array_diff($cid,$fid); // that categories ids which are not present in fares
        foreach($id_diffr as $key => $id_diff) {
        $final_categories[] =Category::where('id', $id_diff)->first();  // category ids(foreign_ids) present in fares 
        }

        return view('backend.admin.fares.addfare', compact('final_categories'));
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
            'from' =>  'required',
            'to' =>  'required',
            'price_per_km' =>  'required'
        ]);
        
        $form_data = array(
            'veh_category_id' =>  $request->veh_category_id,
           'from' => implode($request->from, ', '),
           'to' => implode($request->to, ', '),
           'price_per_km' => implode($request->price_per_km, ', '),
        );
        Fares::create($form_data);

        return redirect('fares')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fare  $fares
     * @return \Illuminate\Http\Response
     */
    public function show(Fare $fare)
    {
        return view('backend.admin.fares.viewfare', compact('fare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fare  $fares
     * @return \Illuminate\Http\Response
     */
    public function edit(Fare $fare)
    {
        $vehicle = Category::where('id', $fare->veh_category_id)->first();
        return view('backend.admin.fares.updatefare',compact('fare','vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fare  $fares
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fare $fare)
    {
        $request->validate([
            'from' =>  'required',
            'to' =>  'required',
            'price_per_km' =>  'required'
        ]);
        
        $form_data = array(
           'from' => implode($request->from, ', '),
           'to' => implode($request->to, ', '),
           'price_per_km' => implode($request->price_per_km, ', '),
        );
        
        $fare->update($form_data);
    
        return redirect()->route('fares.index')
            ->with('success','Fare updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fare  $fares
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fare $fare)
    {
        $fare->delete();
        return redirect('fares')->with('success', 'Data is successfully deleted');
    }
}
