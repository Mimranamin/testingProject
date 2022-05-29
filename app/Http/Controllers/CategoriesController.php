<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Extra;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('backend.admin.categories.allcategories', compact('categories'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $extras = Extra::all();
        return view('backend.admin.categories.addcategory', compact('extras'));
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
            'veh_name' =>  $request->veh_name,
            'max_passanger' =>  $request->max_passanger,
            'max_luggage' =>  $request->max_luggage,
        );
        $form_data['veh_extra_id'] = json_encode($request->veh_extra_id);
        if ($image = $request->file('veh_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $form_data['veh_image'] = "$profileImage";
        }
        Category::create($form_data);

        return redirect('admin/categories')->with('success', 'Category Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('backend.admin.categories.viewcategory', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // $extras = Extras::all();
        // $selected =  json_decode($category->veh_extra_id);
        
        $extras = Extra::all();   // all data present in Extras
        
        $all_extras = array();     // declare all_extras array
        $selected_extras = array();     // declare selected_extras array
        $unselected_extras = array();     // declare unselected_extras array
        $selected_ids = array();     // declare selected_extras array
        
        foreach($extras as $key => $extra) {
            $all_extras[] =$extras[$key]->id;           // all_extras_ids in array
        }
        // dd($all_extras);
        foreach (json_decode($category->veh_extra_id) as $selected){
            $selected_ids[] =$selected;             // selected_extras_ids in array
        }
        // dd($selected_ids);
        foreach($selected_ids as $key => $selected_id) {
            $selected_extras[] =Extra::where('id', $selected_id)->first();  // all_selected_extras_data
        }
        // dd($selected_extras);
		$id_diffr= array_diff($all_extras,$selected_ids); // getting unselected_extras_ids by diffrnce of all & selected ids
        foreach($id_diffr as $key => $id_diff) {
            $unselected_extras[] =Extra::where('id', $id_diff)->first();  // category ids(foreign_ids) present in fares 
        }
        // dd($unselected_extras);
        return view('backend.admin.categories.updatecategory',compact('category','selected_extras','unselected_extras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'veh_name' =>  'required',
            'max_passanger' =>  'required',
            'max_luggage' =>  'required'
        ]);

        $form_data = array(
            'veh_name' =>  $request->veh_name,
            'max_passanger' =>  $request->max_passanger,
            'max_luggage' =>  $request->max_luggage,
        );
        $form_data['veh_extra_id'] = json_encode($request->veh_extra_id);
        
        if ($image = $request->file('veh_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $form_data['veh_image'] = "$profileImage";
        }else{
            unset($form_data['veh_image']);
        }

        $category->update($form_data);
    
        return redirect()->route('categories.index')
            ->with('success','Category updated successfully');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('admin/categories')->with('success', 'Category is successfully deleted');
    }
}
