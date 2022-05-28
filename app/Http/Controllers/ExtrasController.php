<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;

class ExtrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extras = Extra::all();
        return view('backend.admin.extras.allextras', compact('extras'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.extras.addextra');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = array(
            'extra_type' =>  $request->extra_type,
            'extra_name' =>  $request->extra_name,
            'extra_price' =>  $request->extra_price,
            'extra_category' =>  $request->extra_category,
        );
        Extra::create($form_data);

        return redirect('admin/extras')->with('success', 'Extra Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Extra  $extras
     * @return \Illuminate\Http\Response
     */
    public function show(Extra $extra)
    {
        return view('backend.admin.extras.viewextra', compact('extra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Extra  $extras
     * @return \Illuminate\Http\Response
     */
    public function edit(Extra $extra)
    {
        return view('backend.admin.extras.updateextra',compact('extra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Extra  $extras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extra $extra)
    {
        $form_data = array(
            'extra_type' =>  $request->extra_type,
            'extra_name' =>  $request->extra_name,
            'extra_price' =>  $request->extra_price,
            'extra_category' =>  $request->extra_category,
        );
        $form_data = $request->all();

        $extra->update($form_data);
    
        return redirect()->route('extras.index')
            ->with('success','Extra updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Extra  $extras
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extra $extra)
    {
        $extra->delete();
        return redirect('admin/extras')->with('success', 'Extra is successfully deleted');
    }
}
