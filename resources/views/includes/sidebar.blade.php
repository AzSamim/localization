<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> 
                    <a class="sidebar-link waves-effect waves-dark" href="{{ route('main.home') }}" aria-expanded="true">
                        <i class="mdi mdi-av-timer"></i>
                        <span class="hide-menu">{{ __('lang_file.dashboard') }}</span>
                    </a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-notification-clear-all"></i><span class="hide-menu">{{ __('lang_file.products') }}</span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item"><a href="{{ route('products.index') }}" class="sidebar-link"><i class="mdi mdi-octagram"></i><span class="hide-menu"> {{ __('lang_file.product_list') }}</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
