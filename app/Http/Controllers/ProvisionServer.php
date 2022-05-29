<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvisionServer extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function allrides(Request $request)
    {
        // dd("All Rides");
        return view('backend.driver.allrides');
    }
    public function previousmonthrides()
    {
        // dd("Monthly Rides");
        return view('backend.driver.previousmonthrides');
    }
    public function monthlyrides()
    {
        dd("Monthly Rides");
        return view('backend.driver.previousmonthrides');
    }
    public function todayrides()
    {
        // dd("Total Rides");
        return view('backend.driver.todayrides');
    }
    public function upcomingrides()
    {
        // dd("Up Coming Rides");
        return view('backend.driver.upcomingrides');
    }
    public function totalbalance()
    {
        // dd("Total Balance Rides");
        return view('backend.driver.totalbalance');
    }
    public function paidbalance()
    {
        // dd("Paid Balance Rides");
        return view('backend.driver.paidbalance');
    }
    public function unpaidbalance()
    {
        // dd("UnPaid Balance Rides");
        return view('backend.driver.unpaidbalance');
    }
}
