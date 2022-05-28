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
         <h3 class="page-title">Total Paid Balance</h3>
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

<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-body">
            <div class="table-responsive">
               <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                  
                  <div class="row">
                     <div class="col-sm-12">
                        <table>
                           <tr>
                              <th>Income</th>
                              <th>€</th>
                              <th>€</th>
                           </tr>
                           <!-- <tr>
                              <td>Unpaid Balance</td>
                              <td>250 €</td>
                              <td>250 €</td>
                           </tr> -->
                           <tr>
                              <td>Paid Balance</td>
                              <td>500 €</td>
                              <td>500 €</td>
                           </tr>
                           <tr>
                              <td>Other Balance</td>
                              <td>0 €</td>
                              <td>0 €</td>
                           </tr>
                           
                           <tr>
                              <td>Total Balance</td>
                              <td></td>
                              <td>500 €</td>
                           </tr>
                        </table>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>