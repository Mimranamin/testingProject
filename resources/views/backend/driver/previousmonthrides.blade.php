@extends('backend.driver.main')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
<div class="page-header">
   <div class="row">
      <div class="col">
         <h3 class="page-title">Ride List</h3>
      </div>
      <div class="col-auto text-right">
         <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
         <i class="fas fa-filter"></i>
         </a>
      </div>
   </div>
</div>
<div class="card filter-card" id="filter_inputs">
   <div class="card-body pb-0">
      <form>
         <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
               <div class="form-group">
                  <label class="col-form-label">From Date</label>
                  <div class="cal-icon">
                     <input class="form-control datetimepicker" type="text">
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3">
               <div class="form-group">
                  <label class="col-form-label">To Date</label>
                  <div class="cal-icon">
                     <input class="form-control datetimepicker" type="text">
                  </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3">
               <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Submit</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<ul class="nav nav-tabs menu-tabs">
   <li class="nav-item active">
      <a class="nav-link" href="booking/total-report">All Rides <span class="badge badge-primary">550</span></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="booking/pending-report">Pending <span class="badge badge-primary">125</span></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="booking/inprogress-report">InProgress <span class="badge badge-primary">86</span></a>
   </li>
   <li class="nav-item">
      <a class="nav-link" href="booking/complete-report">Completed <span class="badge badge-primary">89</span></a>
   </li>
   <!-- <li class="nav-item">
      <a class="nav-link" href="booking/reject-report">Rejected <span class="badge badge-primary">101</span></a>
   </li> -->
   <li class="nav-item">
      <a class="nav-link" href="booking/cancel-report">Canceled <span class="badge badge-primary">121</span></a>
   </li>
</ul>
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">
            <div class="table-responsive">
               <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  <div class="row">
                     <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="DataTables_Table_0_length">
                           <label>
                              Show 
                              <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                 <option value="10">10</option>
                                 <option value="25">25</option>
                                 <option value="50">50</option>
                                 <option value="100">100</option>
                              </select>
                              entries
                           </label>
                        </div>
                     </div>
                     <div class="col-sm-12 col-md-6"></div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <table class="table table-hover table-center mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                           <thead>
                              <tr role="row">
                                 <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 8.90625px;">#</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" style="width: 72.75px;">Title</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Booking Status: activate to sort column ascending" style="width: 72.75px;">Ride Status</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Driver Status: activate to sort column ascending" style="width: 72.75px;">Driver Status</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Service Type: activate to sort column ascending" style="width: 220.344px;">Service Type</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Pickup/return date: activate to sort column ascending" style="width: 220.344px;">Pickup/return date</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Client: activate to sort column ascending" style="width: 159.859px;">Client</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 162.203px;">Price</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 60.4375px;">Date</th>
                                 <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 117.641px;">Status</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Updated: activate to sort column ascending" style="width: 145.688px;">Updated</th> -->
                              </tr>
                           </thead>
                           <tbody>
                              <tr role="row" class="odd">
                                 <td class="sorting_1">1</td>
                                 <td>Booking 18903</td>
                                 <td>
                                    <label class="badge badge-dark">Pending</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-dark">Not Assigned</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-primary">Distance</label>
                                 </td>
                                 <td>15 Sep 2020 01:38 PM</td>
                                 <td>
                                    <span class="table-avatar">
                                    <!-- <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-01.jpg">
                                    </a> -->
                                    <a href="javascript:void(0);">Jeffrey Akridge</a>
                                    </span>
                                 </td>
                                 <!-- <td>
                                    <span class="table-avatar">
                                    <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-01.jpg">
                                    </a>
                                    <a href="javascript:void(0);">Thomas Herzberg</a>
                                    </span>
                                 </td> -->
                                 <!-- <td>Toughened Glass Fitting Services</td> -->
                                 <td>$25</td>
                                 
                                 <td>Booking Date <br>
                                    2021/11/23 at 09:39</td>
                              </tr>
                              <tr role="row" class="even">
                                 <td class="sorting_1">2</td>
                                 <td>Booking 18903</td>
                                 <td>
                                    <label class="badge badge-success">Completed</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-success">Thomas Herzberg</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-primary">Distance</label>
                                 </td>
                                 <td>15 Sep 2020 01:38 PM</td>
                                 <td>
                                    <span class="table-avatar">
                                    <!-- <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-01.jpg">
                                    </a> -->
                                    <a href="javascript:void(0);">Jeffrey Akridge</a>
                                    </span>
                                 </td>
                                 <!-- <td>
                                    <span class="table-avatar">
                                    <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-01.jpg">
                                    </a>
                                    <a href="javascript:void(0);">Thomas Herzberg</a>
                                    </span>
                                 </td> -->
                                 <!-- <td>Toughened Glass Fitting Services</td> -->
                                 <td>$25</td>
                                 
                                 <td>Booking Date <br>
                                    2021/11/23 at 09:39</td>
                              </tr>
                              <tr role="row" class="odd">
                                 <td class="sorting_1">3</td>
                                 <td>Booking 18903</td>
                                 <td>
                                    <label class="badge badge-warning">Processing</label>
                                 </td>
                                 </td>
                                 <td>
                                    <label class="badge badge-success">Assigned</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-primary">Distance</label>
                                 </td>
                                 <td>15 Sep 2020 01:38 PM</td>
                                 <td>
                                    <span class="table-avatar">
                                    <!-- <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-01.jpg">
                                    </a> -->
                                    <a href="javascript:void(0);">Jeffrey Akridge</a>
                                    </span>
                                 </td>
                                 <!-- <td>
                                    <span class="table-avatar">
                                    <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-01.jpg">
                                    </a>
                                    <a href="javascript:void(0);">Thomas Herzberg</a>
                                    </span>
                                 </td> -->
                                 <!-- <td>Toughened Glass Fitting Services</td> -->
                                 <td>$25</td>
                                 
                                 <td>Booking Date <br>
                                    2021/11/23 at 09:39</td>
                              </tr>
                              <tr role="row" class="even">
                                 <td class="sorting_1">4</td>
                                 <td>Booking 18903</td>
                                 <td>
                                    <label class="badge badge-dark">Pending</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-dark">Not Assigned</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-primary">Distance</label>
                                 </td>
                                 <td>15 Sep 2020 01:38 PM</td>
                                 <td>
                                    <span class="table-avatar">
                                    <!-- <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-01.jpg">
                                    </a> -->
                                    <a href="javascript:void(0);">Jeffrey Akridge</a>
                                    </span>
                                 </td>
                                 <!-- <td>
                                    <span class="table-avatar">
                                    <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-01.jpg">
                                    </a>
                                    <a href="javascript:void(0);">Thomas Herzberg</a>
                                    </span>
                                 </td> -->
                                 <!-- <td>Toughened Glass Fitting Services</td> -->
                                 <td>$25</td>
                                 
                                 <td>Booking Date <br>
                                    2021/11/23 at 09:39</td>
                              </tr>
                              <tr role="row" class="odd">
                                 <td class="sorting_1">5</td>
                                 <td>Booking 18903</td>
                                 <td>
                                    <label class="badge badge-danger">Rejected</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-dark">Not Assigned</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-primary">Distance</label>
                                 </td>
                                 <td>15 Sep 2020 01:38 PM</td>
                                 <td>
                                    <span class="table-avatar">
                                    <!-- <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-01.jpg">
                                    </a> -->
                                    <a href="javascript:void(0);">Jeffrey Akridge</a>
                                    </span>
                                 </td>
                                 <!-- <td>
                                    <span class="table-avatar">
                                    <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-01.jpg">
                                    </a>
                                    <a href="javascript:void(0);">Thomas Herzberg</a>
                                    </span>
                                 </td> -->
                                 <!-- <td>Toughened Glass Fitting Services</td> -->
                                 <td>$25</td>
                                 
                                 <td>Booking Date <br>
                                    2021/11/23 at 09:39</td>
                              </tr>
                              <tr role="row" class="even">
                                 <td class="sorting_1">6</td>
                                 <td>Booking 18903</td>
                                 <td>
                                    <label class="badge badge-success">Completed</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-success">Jordan</label>
                                 </td>
                                 <td>
                                    <label class="badge badge-primary">Distance</label>
                                 </td>
                                 <td>15 Sep 2020 01:38 PM</td>
                                 <td>
                                    <span class="table-avatar">
                                    <!-- <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-01.jpg">
                                    </a> -->
                                    <a href="javascript:void(0);">Jeffrey Akridge</a>
                                    </span>
                                 </td>
                                 <!-- <td>
                                    <span class="table-avatar">
                                    <a href="#" class="avatar avatar-sm mr-2">
                                    <img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-01.jpg">
                                    </a>
                                    <a href="javascript:void(0);">Thomas Herzberg</a>
                                    </span>
                                 </td> -->
                                 <!-- <td>Toughened Glass Fitting Services</td> -->
                                 <td>$25</td>
                                 
                                 <td>Booking Date <br>
                                    2021/11/23 at 09:39</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
                     </div>
                     <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                           <ul class="pagination">
                              <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                              <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                              <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection