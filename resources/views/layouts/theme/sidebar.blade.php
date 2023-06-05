 <div class="sidebar-wrapper sidebar-theme">
     <nav id="compactSidebar">

         <ul class="menu-categories">

             {{-- @role('Admin')
            <li class="active">
                <a href="{{url('categories')}}" class="menu-toggle" data-active="true">
                    <div class="base-menu">
                        <div class="base-icons">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        </div>
                        <span>CATEGORÍAS</span>
                    </div>
                </a>
            </li>
            @endcan --}}
             <li class="">
                 <a href="{{ url('calls') }}" class="menu-toggle" data-active="false">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                 <path
                                     d="M9 17C9 17 16 18 19 21H20C20.5523 21 21 20.5523 21 20V13.937C21.8626 13.715 22.5 12.9319 22.5 12C22.5 11.0681 21.8626 10.285 21 10.063V4C21 3.44772 20.5523 3 20 3H19C16 6 9 7 9 7H5C3.89543 7 3 7.89543 3 9V15C3 16.1046 3.89543 17 5 17H6L7 22H9V17ZM11 8.6612C11.6833 8.5146 12.5275 8.31193 13.4393 8.04373C15.1175 7.55014 17.25 6.77262 19 5.57458V18.4254C17.25 17.2274 15.1175 16.4499 13.4393 15.9563C12.5275 15.6881 11.6833 15.4854 11 15.3388V8.6612ZM5 9H9V15H5V9Z"
                                     fill="rgba(211,214,229,1)"></path>
                             </svg>
                         </div>
                         <span>LLAMADAS</span>
                     </div>
                 </a>
             </li>
             <li class="">
                 <a href="{{ url('services') }}" class="menu-toggle" data-active="false">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-service">
                                 <circle cx="9" cy="21" r="1"></circle>
                                 <circle cx="20" cy="21" r="1"></circle>
                                 <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                 <line x1="8" y1="8" x2="16" y2="8"></line>
                                 <line x1="8" y1="12" x2="16" y2="12"></line>
                                 <line x1="8" y1="16" x2="14" y2="16"></line>
                             </svg>
                         </div>
                         <span>SERVICIOS</span>
                     </div>
                 </a>
             </li>
             <li class="">
                 <a href="{{ url('roles') }}" class="menu-toggle" data-active="false">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-key">
                                 <path
                                     d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                 </path>
                             </svg>
                         </div>
                         <span>ROLES</span>
                     </div>
                 </a>
             </li>
             <li class="">
                 <a href="{{ url('permisos') }}" class="menu-toggle" data-active="false">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-check-square">
                                 <polyline points="9 11 12 14 22 4"></polyline>
                                 <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                             </svg>
                         </div>
                         <span>PERMISOS</span>
                     </div>
                 </a>
             </li>
             <li class="">
                 <a href="{{ url('asignar') }}" class="menu-toggle" data-active="false">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-eye">
                                 <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                 <circle cx="12" cy="12" r="3"></circle>
                             </svg>
                         </div>
                         <span>ASIGNAR</span>
                     </div>
                 </a>
             </li>
             <li class="">
                 <a href="{{ url('users') }}" class="menu-toggle" data-active="false">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                 <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="9" cy="7" r="4"></circle>
                                 <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                 <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                             </svg>
                         </div>
                         <span>USUARIOS</span>
                     </div>
                 </a>
             </li>
             {{-- <li class="">
    <a href="{{ url('coins') }}" class="menu-toggle" data-active="false">
        <div class="base-menu">
            <div class="base-icons">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-stop-circle"><circle cx="12" cy="12" r="10"></circle><rect x="9" y="9" width="6" height="6"></rect></svg>
         </div>
         <span>MONEDAS</span>
     </div>
 </a>
</li> --}}
             {{-- <li class="">
    <a href="{{url('cashout')}}" class="menu-toggle" data-active="false">
        <div class="base-menu">
            <div class="base-icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
            </div>
            <span>ARQUEOS</span>
        </div>
    </a>
</li> --}}
             <li class="">
                 <a href="{{ url('reports') }}" class="menu-toggle" data-active="false">
                     <div class="base-menu">
                         <div class="base-icons">
                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                 stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
                                 <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                 <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                             </svg>
                         </div>
                         <span>REPORTES</span>
                     </div>
                 </a>
             </li>

         </ul>



     </nav>
 </div>

 <div id="compact_submenuSidebar" class="submenu-sidebar" style="display: none!important">
 </div>
