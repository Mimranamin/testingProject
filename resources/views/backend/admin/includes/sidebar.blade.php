
         <div class="sidebar" id="sidebar">
            <div class="sidebar-logo">
               <a href="{{ route('dashboard.index') }}">
               <img src="{{asset('backend\assets\img\bluworld_logo.png')}}" class="img-fluid" alt="">
               </a>
            </div>
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="active">
                        <a href="{{ route('dashboard.index') }}"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Categories </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('categories.index') }}"> All Categories </a></li>
                           <li><a href="{{ route('categories.create') }}"> Add Category </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Vehicles </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('vehicles.index') }}"> All Vehicles </a></li>
                           <li><a href="{{ route('vehicles.create') }}"> Add  Vehicle </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Drivers </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('drivers.index') }}"> All Drivers </a></li>
                           <li><a href="{{ route('drivers.create') }}"> Add  Driver </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Bookings </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('bookings.index') }}"> All Bookings </a></li>
                           <li><a href="{{ route('bookings.create') }}"> Add  Booking </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('customers.index') }}"> All Customers </a></li>
                           <li><a href="{{ route('customers.create') }}"> Add  Customer </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Fares </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('fares.index') }}"> All Fares </a></li>
                           <li><a href="{{ route('fares.create') }}"> Add  Fare </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Extras </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href="{{ route('extras.index') }}"> All Extras </a></li>
                           <li><a href="{{ route('extras.create') }}"> Add  Extra </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-border-all"></i> <span> Payments </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                           <li><a href=""> Payment 1 </a></li>
                           <li><a href=""> Payment 2 </a></li>
                           <li><a href=""> Payment 3 </a></li>
                        </ul>
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