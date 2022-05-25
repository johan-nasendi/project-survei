
 @if(Auth::user()->hasRole('admin'))
 <div class="h-100" data-simplebar>
     <!--- Sidemenu -->
     <div id="sidebar-menu">

         <ul id="side-menu">

             <li class="menu-title">Main Menu</li>

             <li>
                 <a href="{{route('dashboard')}}">
                     <i data-feather="home"></i>
                     <span> Dashboard </span>
                 </a>
             </li>

             <li>
                 <a href="{{route('respondent-identity.index')}}">
                     <i data-feather="users"></i>
                     @php
                     $countmember = DB::table('respondent_identity')->count();
                     @endphp
                     <span class="badge badge-success badge-pill float-right">{{ $countmember }}</span>
                     <span> Responden Users </span>
                 </a>
             </li>
         </ul>
     </div>
     <!-- End Sidebar -->

     <div class="clearfix"></div>

 </div>
} @elseif (Auth::user()->hasRole('member')){
<div class="h-100" data-simplebar>
   <p>Not Sidebar</p>
</div>
}
@endif
<!-- Sidebar -left -->





