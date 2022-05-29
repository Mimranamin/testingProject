<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\Extra;
use App\Models\Fare;
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function search_results(Request $request) {
        $form_data = array(
            'origin' =>  $request->origin,
            'destination' =>  $request->destination,
            'departure_date_time' => $request->departure_date_time,
            'return_date_time' => $request->return_date_time,
            'travel_mode' => $request->travel_mode,
            'distance' => $request->distance,
            'time' => $request->time,
        );

        $passenger = $request->passenger;
        $luggage = $request->luggage;
        $passenger = (int)$passenger;
        $luggage = (int)$luggage;
        $filtered_categories = Category::where('max_passanger','>=', $passenger)->where('max_luggage','>=', $luggage)->get();
        
        foreach($filtered_categories as  $filtered_category)
        {
            $extras = json_decode($filtered_category->veh_extra_id);
            $c_extra= [];
            foreach( $extras as  $extra)
            {
                $c_extra[] = Extra::find($extra);
            }
            $filtered_category->extra =  $c_extra ;
        }

        //   dd($filtered_categories[0]->fare->from);
        return view('frontend.search-results', compact('filtered_categories','form_data'));
        
        // $filtered_categories = Categories::whereIn('id', $filtered_categories)->get();		
     }
     
    public function personal_details(Request $request) {
        return view('frontend.personal_details');
    } 
    public function booking_summary(Request $request) {
        return view('frontend.booking_summary');
    }
}
