@include('includes.header')
 <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                    <i class="ti-menu ti-close"></i>
                </a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <a href="index.html" class="logo">
                        <span class="logo-text">
                            <h3 style="color: white;">{{ __('lang_file.localization') }}</h3>
                        </span>
                    </a>
                    <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto">

                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">

                    <div class="d-flex" style="align-items: center; padding: 5px;">
                        <select name="lang" id="lang" class="form-control" onchange="changeLanguage(this);" style="width: 10rem;">
                            <option value="en" <?php if (App::isLocale('en')) echo 'selected'; ?>>{{ __('lang_file.en') }}</option>
                            <option value="dr" <?php if (App::isLocale('dr')) echo 'selected'; ?>>{{ __('lang_file.dr') }}</option>
                        </select>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="font-22 mdi mdi-email-outline"></i>

                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                            <span class="with-arrow">
                                <span class="bg-danger"></span>
                            </span>
                            <ul class="list-style-none">
                                <li>
                                    <div class="drop-title text-white bg-danger">
                                        <h4 class="m-b-0 m-t-5">5 {{ __('lang_file.new') }}</h4>
                                        <span class="font-light">{{ __('lang_file.messages') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center message-body">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="user-img">
                                                <img src="{{ asset('assets/images/users/1.jpg') }}" alt="user" class="rounded-circle">
                                                <span class="profile-status online pull-right"></span>
                                            </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">{{ __('lang_file.person_name') }}</h5>
                                                <span class="mail-desc">{{ __('lang_file.see_my_admin') }}</span>
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center link text-dark" href="javascript:void(0);">
                                        <b>{{ __('lang_file.see_all_emails') }}</b>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown border-right">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-bell-outline font-22"></i>
                            <span class="badge badge-pill badge-info noti">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                            <span class="with-arrow">
                                <span class="bg-primary"></span>
                            </span>
                            <ul class="list-style-none">
                                <li>
                                    <div class="drop-title bg-primary text-white">
                                        <h4 class="m-b-0 m-t-5">4 {{ __('lang_file.new') }}</h4>
                                        <span class="font-light">{{ __('lang_file.notification') }}</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-center notifications">
                                        <!-- Message -->
                                        <a href="javascript:void(0)" class="message-item">
                                            <span class="btn btn-danger btn-circle">
                                                <i class="fa fa-link"></i>
                                            </span>
                                            <div class="mail-contnet">
                                                <h5 class="message-title">{{ __('lang_file.admin') }}</h5>
                                                <span class="mail-desc">{{ __('lang_file.see_my_admin') }}</span>
                                                <span class="time">9:30 AM</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center m-b-5 text-dark" href="javascript:void(0);">
                                        <strong>{{ __('lang_file.check_all_notifications') }}</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="rounded-circle" width="40">
                            <span class="m-l-5 font-medium d-none d-sm-inline-block">{{ auth()->user()->name }} {{ auth()->user()->last_name }} <i class="mdi mdi-chevron-down"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                            <span class="with-arrow">
                                <span class="bg-primary"></span>
                            </span>
                            <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                <div class="">
                                    <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="rounded-circle" width="60">
                                </div>
                                <div class="m-l-10">
                                    <h4 class="m-b-0">{{ auth()->user()->name }} {{ auth()->user()->last_name }}</h4>
                                    <p class=" m-b-0">{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                            <div class="profile-dis scrollable">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-user m-r-5 m-l-5"></i> {{ __('lang_file.my_profile') }}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-settings m-r-5 m-l-5"></i> {{ __('lang_file.account_setting') }}</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#logout_modal">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> {{ __('lang_file.logout') }}</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @include('includes.sidebar')
    <div class="page-wrapper">
        
        @yield('content')
        <!-- Main Page End -->

        <footer class="footer text-center">
            {{ __('lang_file.prebared_by') }}
            <a href="#">{{ __('lang_file.person_name') }}</a>.
        </footer>
    </div>

    <!-- Logout Modal Start -->
    <div class="modal fade bs-example-modal-md" id="logout_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" >
            <div class="modal-content">
                <div class="modal-header">
                    <strong>Logout</strong>
                    <button type="button" class="close" data-dismiss="modal"><span data-toggle="tooltip" data-placement="top" title="Close" aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('logout') }}" class="form-horizontal form-label-left">
                        @csrf
                        <h5 class="text-warning ml-3">Are you sure you want to logout?</h5>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>  Yes, Logout</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Logout Modal -->
@include('includes.footer')