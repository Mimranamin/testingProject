@extends('backend.admin.main')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
   <p>{{ $message }}</p>
</div>
@endif
<div class="page-header">
   <div class="row">
      <div class="col">
         <h3 class="page-title">Booking List</h3>
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
   <li class="nav-item">
      <a class="nav-link" href="{{ route('bookings.index') }}">All Booking <span class="badge badge-primary">550</span></a>
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
   <li class="nav-item active">
      <a class="nav-link" href="booking/reject-report">Rejected <span class="badge badge-primary">101</span></a>
   </li>
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
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 72.75px;">Date</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 159.859px;">User</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Provider: activate to sort column ascending" style="width: 162.203px;">Provider</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Service: activate to sort column ascending" style="width: 220.344px;">Service</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 60.4375px;">Amount</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 117.641px;">Status</th>
                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Updated: activate to sort column ascending" style="width: 145.688px;">Updated</th>
                              </tr>
                           </thead>
                           <tbody>










<tr role="row" class="odd">
<td class="sorting_1">1</td>
<td>12 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-05.jpg">
</a>
<a href="javascript:void(0);">Annette Silva</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-05.jpg">
</a>
<a href="javascript:void(0);">Maritza Wasson</a>
</span>
</td>
<td>House Cleaning Services</td>
<td>$100</td>
<td>
<label class="badge badge-warning">Rejected</label>
</td>
<td>Yesterday 01:21 PM</td>
</tr><tr role="row" class="even">
<td class="sorting_1">2</td>
<td>11 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-06.jpg">
</a>
<a href="javascript:void(0);">Stephen Wilson</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-06.jpg">
</a>
<a href="javascript:void(0);">Marya Ruiz</a>
</span>
</td>
<td>Computer &amp; Server AMC Service</td>
<td>$80</td>
<td>
<label class="badge badge-warning">Rejected</label>
</td>
<td>Yesterday 01:03 PM</td>
</tr><tr role="row" class="odd">
<td class="sorting_1">3</td>
<td>10 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-07.jpg">
</a>
<a href="javascript:void(0);">Ryan Rodriguez</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-07.jpg">
</a>
<a href="javascript:void(0);">Richard Hughes</a>
</span>
</td>
<td>Interior Designing</td>
<td>$5</td>
<td>
<label class="badge badge-success">Amount refund to Provider</label>
</td>
<td>10 Sep 2020 08:03 PM</td>
</tr><tr role="row" class="even">
<td class="sorting_1">4</td>
<td>9 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-08.jpg">
</a>
<a href="javascript:void(0);">Lucile Devera</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-08.jpg">
</a>
<a href="javascript:void(0);">Nina Wilson</a>
</span>
</td>
<td>Building Construction Services</td>
<td>$75</td>
<td>
<label class="badge badge-warning">Rejected</label>
</td>
<td>9 Sep 2020 09:38 PM</td>
</tr><tr role="row" class="odd">
<td class="sorting_1">5</td>
<td>8 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-09.jpg">
</a>
<a href="javascript:void(0);">Roland Storey</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-09.jpg">
</a>
<a href="javascript:void(0);">David Morrison</a>
</span>
</td>
<td>Commercial Painting Services</td>
<td>$500</td>
<td>
<label class="badge badge-success">Amount refund to Provider</label>
</td>
<td>8 Sep 2020 09:37 PM</td>
</tr><tr role="row" class="even">
<td class="sorting_1">6</td>
<td>7 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-10.jpg">
</a>
<a href="javascript:void(0);">Lindsey Parmley</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-10.jpg">
</a>
<a href="javascript:void(0);">Linda Brooks</a>
</span>
</td>
<td>Plumbing Services</td>
<td>$150</td>
<td>
<label class="badge badge-success">Amount refund to Provider</label>
</td>
<td>7 Sep 2020 06:27 PM</td>
</tr><tr role="row" class="odd">
<td class="sorting_1">7</td>
<td>6 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-01.jpg">
</a>
<a href="javascript:void(0);">Jeffrey Akridge</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-01.jpg">
</a>
<a href="javascript:void(0);">Thomas Herzberg</a>
</span>
</td>
<td>Toughened Glass Fitting Services</td>
<td>$25</td>
<td>
<label class="badge badge-warning">Rejected</label>
</td>
<td>Today 01:38 PM</td>
</tr><tr role="row" class="even">
<td class="sorting_1">8</td>
<td>5 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-02.jpg">
</a>
<a href="javascript:void(0);">Nancy Olson</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-02.jpg">
</a>
<a href="javascript:void(0);">Matthew Garcia</a>
</span>
</td>
<td>Car Repair Services</td>
<td>$50</td>
<td>
<label class="badge badge-success">Amount refund to Provider</label>
</td>
<td>Yesterday 01:35 PM</td>
</tr><tr role="row" class="odd">
<td class="sorting_1">9</td>
<td>4 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-03.jpg">
</a>
<a href="javascript:void(0);">Ramona Kingsley</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-03.jpg">
</a>
<a href="javascript:void(0);">Yolanda Potter</a>
</span>
</td>
<td>Electric Panel Repairing Service</td>
<td>$45</td>
<td>
<label class="badge badge-warning">Rejected</label>
</td>
<td>Yesterday 01:31 PM</td>
</tr><tr role="row" class="even">
<td class="sorting_1">10</td>
<td>3 Sep 2020</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/customer/user-04.jpg">
</a>
<a href="javascript:void(0);">Ricardo Lung</a>
</span>
</td>
<td>
<span class="table-avatar">
<a href="#" class="avatar avatar-sm mr-2">
<img class="avatar-img rounded-circle" alt="" src="https://truelysell-admin.dreamguystech.com/template/assets/img/provider/provider-04.jpg">
</a>
<a href="javascript:void(0);">Ricardo Flemings</a>
</span>
</td>
<td>Steam Car Wash</td>
<td>$14</td>
<td>
<label class="badge badge-success">Amount refund to Provider</label>
</td>
<td>Yesterday 01:29 PM</td>
</tr></tbody>
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