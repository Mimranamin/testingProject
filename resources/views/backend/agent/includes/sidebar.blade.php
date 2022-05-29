
         <div class="sidebar" id="sidebar">
            <div class="sidebar-logo">
               <a href="{{ route('adashboard.index') }}">
               <img src="{{asset('backend\assets\img\bluworld_logo.png')}}" class="img-fluid" alt="">
               </a>
            </div>
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="active">
                        <a href="adashboard"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Bookings </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('bookings.allbookings') }}"> All Bookings </a></li>
                           <li><a href="{{ route('bookings.addbookings') }}"> Add Booking </a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="{{ route('rides.todayrides') }}"><i class="fas fa-border-all"></i> <span>Today Rides</span></a>
                     </li>
                     <li>
                        <a href="{{ route('reports.commissionreport') }}"><i class="fas fa-border-all"></i> <span>Commission Report</span></a>
                     </li>
                     <li>
                        <a href="{{ route('reports.paidcommission') }}"><i class="fas fa-border-all"></i> <span>Paid Commission</span></a>
                     </li>
                     <li>
                        <a href="{{ route('reports.unpaidcommission') }}"><i class="fas fa-border-all"></i> <span>Unpaid Commission</span></a>
                     </li>
                     
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href=""> General Settings </a></li>
                           <li><a href=""> Website Settings </a></li>
                        </ul>
                     </li>
                     <li>
                        <a href=""><i class="fas fa-user-plus"></i> <span>Profile</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-user-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href=""> Login </a></li>
                           <li><a href=""> Register </a></li>
                           <li><a href=""> Forgot Password </a></li>
                           <li><a href=""> Logout </a></li>
                        </ul>
                     </li>
                     <!-- <li class="submenu">
                        <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li class="submenu">
                              <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                              <ul style="display: none;">
                                 <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                 <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0);"> <span>Level 1</span></a>
                           </li>
                        </ul>
                     </li> -->
                  </ul>
               </div>
            </div>
         </div>