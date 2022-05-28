<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiclesController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ExtrasController;
use App\Http\Controllers\FaresController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DriverDashboardController;
use App\Http\Controllers\AgentDashboardController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\AgentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//   Artisan Commands
// Route::get('/command', function () {
//       Artisan::call('migrate:fresh');
//       Artisan::call('migrate:fresh');
//       Artisan::call('make:seeder UsersTableSeeder');
//       Artisan::call('config:clear');
// });

//   Front-End Links

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/search_results', 'SimpleController@search_results');
Route::get('/personal_details', 'SimpleController@personal_details');
Route::get('/booking_summary', 'SimpleController@booking_summary');
Route::get('/maptesting', function () {
    return view('index');
});
Route::get('/becomepartner', function () {
    return view('frontend.becomepartner');
});
Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/bookaride', function () {
    return view('frontend.bookaride');
});
Route::get('/travelagency', function () {
    return view('frontend.travelagency');
});
Route::get('/myaccount', function () {
    return view('frontend.myaccount');
});
// Route::get('/bookings', function () {
//     return view('frontend.bookings');
// });
Route::get('/termsandconditions', function () {
    return view('frontend.termsandconditions');
});
Route::get('/howitworks', function () {
    return view('frontend.howitworks');
});
Route::get('/howtodoabooking', function () {
    return view('frontend.howtodoabooking');
});

Route::get('/rides', function () {
    return view('frontend.rides');
});
Route::get('/taxreports', function () {
    return view('frontend.taxreports');
});
Route::get('/vehicleslist', function () {
    return view('frontend.vehicles');
});
Route::get('/reviews', function () {
    return view('frontend.reviews');
});

Route::get('/booking', function () {
    return view('frontend.booking');
});

Route::get('/contactus', function () {
    return view('frontend.contactus');
});
Route::get('/about', function () {
    return view('frontend.about');
});
// Backend Routes
Route::group(['prefix' => 'admin'], function () {
// Route::middleware(['auth'])->group(function () {
    
    Route::resource('/dashboard', AdminDashboardController::class);
    Route::resource('/vehicles', VehiclesController::class);
    Route::resource('/categories',CategoriesController::class);
    Route::resource('/drivers',DriversController::class);
    Route::resource('/fares',FaresController::class);
    Route::resource('/extras',ExtrasController::class);
    Route::resource('/customers',CustomersController::class);
    Route::resource('/bookings',BookingsController::class);
    // });
});
Route::group(['prefix' => 'driver'], function () {
    // Route::middleware(['auth'])->group(function () {
        Route::resource('/ddashboard', DriverDashboardController::class);
        Route::get('/allrides', [ProvisionServer::class, 'allrides'])->name('rides.allrides');
        Route::get('/previousmonthrides', [ProvisionServer::class, 'previousmonthrides'])->name('rides.previousmonthrides');
        Route::get('/monthlyrides', [ProvisionServer::class, 'monthlyrides'])->name('rides.monthlyrides');
        Route::get('/todayrides', [ProvisionServer::class, 'todayrides'])->name('rides.todayrides');
        Route::get('/upcomingrides', [ProvisionServer::class, 'upcomingrides'])->name('rides.upcomingrides');
        Route::get('/totalbalance', [ProvisionServer::class, 'totalbalance'])->name('rides.totalbalance');
        Route::get('/paidbalance', [ProvisionServer::class, 'paidbalance'])->name('rides.paidbalance');
        Route::get('/unpaidbalance', [ProvisionServer::class, 'unpaidbalance'])->name('rides.unpaidbalance');
    // });
});
Route::group(['prefix' => 'agent'], function () {
    // Route::middleware(['auth'])->group(function () {
        Route::resource('/adashboard', AgentDashboardController::class);
        Route::get('/allbookings', [AgentController::class, 'allbookings'])->name('bookings.allbookings');
        Route::get('/addbookings', [AgentController::class, 'addbookings'])->name('bookings.addbookings');
        Route::get('/todayrides', [AgentController::class, 'todayrides'])->name('rides.todayrides');
        Route::get('/commissionreport', [AgentController::class, 'commissionreport'])->name('reports.commissionreport');
        Route::get('/paidcommission', [AgentController::class, 'paidcommission'])->name('reports.paidcommission');
        Route::get('/unpaidcommission', [AgentController::class, 'unpaidcommission'])->name('reports.unpaidcommission');
        
    // });
});
 
// Route::resource('/driver/rides', RideController::class);

Route::get('/booking/total-report', function () {
    return view('backend.bookings.total-report');
});
Route::get('/booking/pending-report', function () {
    return view('backend.bookings.pending-report');
});
Route::get('/booking/inprogress-report', function () {
    return view('backend.bookings.inprogress-report');
});
Route::get('/booking/complete-report', function () {
    return view('backend.bookings.complete-report');
});
Route::get('/booking/reject-report', function () {
    return view('backend.bookings.reject-report');
});
Route::get('/booking/cancel-report', function () {
    return view('backend.bookings.cancel-report');
});