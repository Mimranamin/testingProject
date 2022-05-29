<?php

namespace App\Http\Controllers;

class RideController extends Controller
{
    public function index()
    {
        return view('backend.driver.rides.allrides');
    }
    public function allrides()
    {
        return view('backend.driver.rides.allrides');
    }
    public function monthlyrides()
    {
        return view('backend.driver.rides.allrides');
    }
    public function todayrides()
    {
        return view('backend.driver.rides.allrides');
    }
    public function upcomingrides()
    {
        return view('backend.driver.rides.allrides');
    }
    public function totalbalance()
    {
        return view('backend.driver.rides.allrides');
    }
    public function paidbalance()
    {
        return view('backend.driver.rides.allrides');
    }
    public function unpaidbalance()
    {
        return view('backend.driver.rides.allrides');
    }
}
