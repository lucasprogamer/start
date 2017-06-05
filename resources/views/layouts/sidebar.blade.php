<!-- left side start-->
<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="{{ route('dashboard') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>
    </div>

    <div class="logo-icon text-center">
        <a href="{{ route('dashboard') }}"><img src=" {{ asset('images/logo_icon.png') }}" alt=""></a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">

        <!-- visible to small devices only -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media logged-user">
                <img alt="" src="images/photos/user-avatar.png" class="media-object">
                <div class="media-body">
                    <h4><a href="#">{{ Auth::user()->name }}</a></h4>
                    <span>{{ Auth::user()->email }}</span>
                </div>
            </div>

            <h5 class="left-nav-title">Account Information</h5>
            <ul class="nav nav-pills nav-stacked custom-nav">
              <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
          @include('layouts.menu')
        </ul>
        <!--sidebar nav end-->

    </div>
</div>
<!-- left side end-->
