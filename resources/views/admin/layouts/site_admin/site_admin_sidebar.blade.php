<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('images/admin_image//sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="{{url('/')}}" target="_blank" class="simple-text logo-normal">
            <img src="{{asset('/images/logo-mea-admin.png')}}" alt="" width="80px" height="80px;">
        </a>
    </div>
 <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="nav-item @if($url ?? ''=="blog") active @endif">
                <a class="nav-link" href="{{ route('admin_index') }}">
                    <i class="material-icons">view_module</i>
                    <p>Trips</p>
                </a>
            </li>


            <li class="nav-item @if($url ?? ''=="blog") active @endif">
                <a class="nav-link" href="{{ route('admin_ticket') }}">
                    <i class="material-icons">add</i>
                    <p>Tickets</p>
                </a>
            </li>

            <li class="nav-item @if($url ?? ''=="blog") active @endif">
                <a class="nav-link" href="{{ route('booking') }}">
                    <i class="material-icons">circle</i>
                    <p>Booking</p>
                </a>
            </li>
   

           

            {{-- {{url('logout')}}             --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                    <i class="material-icons">logout</i>
                    <p>Logout</p>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="material-icons"></i>
                    <p></p>
                </a>
            </li>

            {{-- <li class="nav-item @if($url ?? ''=="feedback") active @endif">
                <a class="nav-link" href="{{url('admin/feedback')}}">
                    <i class="material-icons">location_ons</i>
                    <p>Manage Feedback</p>
                </a>
            </li> --}}
            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" href="./notifications.html">--}}
                    {{--<i class="material-icons">notifications</i>--}}
                    {{--<p>Notifications</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item ">--}}
                {{--<a class="nav-link" href="./rtl.html">--}}
                    {{--<i class="material-icons">language</i>--}}
                    {{--<p>RTL Support</p>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item active-pro ">--}}
                {{--<a class="nav-link" href="./upgrade.html">--}}
                    {{--<i class="material-icons">unarchive</i>--}}
                    {{--<p>Upgrade to PRO</p>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>
    </div>
</div>
