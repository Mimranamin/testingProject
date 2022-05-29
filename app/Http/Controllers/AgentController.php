<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function allbookings(Request $request)
    {
        // dd("All Rides");
        return view('backend.agent.bookings.allbookings');
    }
    public function addbookings()
    {
        // dd("addbooking");
        return view('backend.agent.bookings.addbookings');
    }
    public function todayrides()
    {
        // dd("Total Rides");
        return view('backend.agent.rides.todayrides');
    }
    public function commissionreport()
    {
        // dd("Up Coming Rides");
        return view('backend.agent.reports.commissionreport');
    }
    public function paidcommission()
    {
        // dd("Paid Balance Rides");
        return view('backend.agent.reports.paidcommission');
    }
    public function unpaidcommission()
    {
        // dd("UnPaid Balance Rides");
        return view('backend.agent.reports.unpaidcommission');
    }
    public function totalbalance()
    {
        // dd("Total Balance Rides");
        return view('backend.driver.totalbalance');
    }
}
