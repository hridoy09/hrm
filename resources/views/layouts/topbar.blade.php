<!-- Topbar Start -->

<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-end mb-0">

@auth('shop')
<li class="dropdown notification-list topbar-dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="fe-bell noti-icon"></i>
        <span class="badge bg-danger rounded-circle noti-icon-badge">{{$shopnotificationscount}}
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-lg">

        <!-- item-->
        <div class="dropdown-item noti-title">
            <h5 class="m-0">
                <span class="float-end">
                    <a class="text-dark" href="{{route('shopnotify.clear')}}">
                        <small>Clear All</small>
                    </a>
                </span>Notification
            </h5>
        </div>

        <div class="noti-scroll" data-simplebar>

            <!-- item-->

            @foreach(@$shopnotifications??[] as $shopnotification)

            <a class="dropdown-item notify-item active py-1 " href="{{route('notifyshop.view', $shopnotification->id)}}">
                <p class="@if ($shopnotification->read_by_shop == null) text-bold @else text-muted @endif mb-0 ms-0 user-msg"
                    style="text-align:justify">{{ $shopnotification->data }}</p>
            </a>
            @endforeach

        </div>

        <!-- All-->
        <a class="dropdown-item text-center text-primary notify-item notify-all" href="{{route('allshopnotify.view')}}">
            View all
            <i class="fe-arrow-right"></i>
        </a>

    </div>
</li>


@else


<li class="dropdown notification-list topbar-dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="fe-bell noti-icon"></i>

        <span class="badge bg-danger rounded-circle noti-icon-badge">{{ $notificationscount }}</span>

    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-lg">

        <!-- item-->
        <div class="dropdown-item noti-title">
            <h5 class="m-0">
                <span class="float-end">
                    <a class="text-dark"
             href="{{route('notify.clear')}}">
                        <small>Clear All</small>
                    </a>
                </span>Notification
            </h5>
        </div>

        <div class="noti-scroll" data-simplebar>
            @foreach ($notifications as $notification)
            <a class="dropdown-item notify-item active py-1 " href="{{ route('notify.view', $notification->id) }}">
                <p class="@if ($notification->read_at == null) text-bold @else text-muted @endif mb-0 ms-0 user-msg"
                    style="text-align:justify">{{ $notification->data }}</p>
            </a>
            @endforeach

            <!-- All-->
            <a class="dropdown-item text-center text-primary notify-item notify-all" href="{{route('allnotify.view')}}">
                View all
                <i class="fe-arrow-right"></i>
            </a>

        </div>
</li>
@endauth



</ul>

<!-- LOGO -->
<div class="logo-box">
    <a class="logo logo-light text-center" href="" @disabled(true)>
        <span class="logo-sm">
            <img src="{{asset('admin/logo')}}/{{$logo->small_logo }}" alt="" height="auto" width="60%">
        </span>
        <span class="logo-lg">
            <img src="{{asset('admin/logo')}}/{{$logo->lg_logo }}" alt="" height="auto" width="50%">
        </span>
    </a>
    <a class="logo logo-dark text-center" href="" @disabled(true)>
        <span class="logo-sm">
            <img src="{{asset('admin/logo')}}/{{$logo->small_logo }}" alt="" height="auto" width="60%">
        </span>
        <span class="logo-lg">
            <img src="{{asset('admin/logo')}}/{{$logo->lg_logo }}" alt="" height="auto" width="70%">
        </span>
    </a>
</div>

<ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
    <li>
        <button class="button-menu-mobile disable-btn waves-effect">
            <i class="fe-menu"></i>
        </button>
    </li>

    <li>
        <h4 class="page-title-main">Dashboard</h4>
    </li>

</ul>

<div class="clearfix"></div>

</div>
<!-- end Topbar -->
