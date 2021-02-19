@extends('layouts.app')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{ __('lang_file.dashboard') }}</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('lang_file.home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang_file.dashboard') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Start -->
    <div class="container-fluid">
        <div class="card-group">
	        <div class="card">
	            <div class="card-body">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="d-flex no-block align-items-center">
	                            <div>
	                                <i class="mdi mdi-emoticon font-20 text-muted"></i>
	                                <p class="font-16 m-b-5">{{ __('lang_file.new_clients') }}</p>
	                            </div>
	                            <div class="ml-auto">
	                                <h1 class="font-light text-right">23</h1>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-12">
	                        <div class="progress">
	                            <div class="progress-bar bg-info" role="progressbar" style="width: 75%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Column -->
	        <!-- Column -->
	        <div class="card">
	            <div class="card-body">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="d-flex no-block align-items-center">
	                            <div>
	                                <i class="mdi mdi-image font-20  text-muted"></i>
	                                <p class="font-16 m-b-5">{{ __('lang_file.new_projects') }}</p>
	                            </div>
	                            <div class="ml-auto">
	                                <h1 class="font-light text-right">169</h1>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-12">
	                        <div class="progress">
	                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Column -->
	        <!-- Column -->
	        <div class="card">
	            <div class="card-body">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="d-flex no-block align-items-center">
	                            <div>
	                                <i class="mdi mdi-currency-eur font-20 text-muted"></i>
	                                <p class="font-16 m-b-5">{{ __('lang_file.new_invoices') }}</p>
	                            </div>
	                            <div class="ml-auto">
	                                <h1 class="font-light text-right">157</h1>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-12">
	                        <div class="progress">
	                            <div class="progress-bar bg-purple" role="progressbar" style="width: 65%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Column -->
	        <!-- Column -->
	        <div class="card">
	            <div class="card-body">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="d-flex no-block align-items-center">
	                            <div>
	                                <i class="mdi mdi-poll font-20 text-muted"></i>
	                                <p class="font-16 m-b-5">{{ __('lang_file.new_sales') }}</p>
	                            </div>
	                            <div class="ml-auto">
	                                <h1 class="font-light text-right">236</h1>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-12">
	                        <div class="progress">
	                            <div class="progress-bar bg-danger" role="progressbar" style="width: 70%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>


	    <div class="row">
	        <!-- column -->
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <h4 class="card-title">{{ __('lang_file.recent_comments') }}</h4>
	                </div>
	                <div class="comment-widgets scrollable ps-container ps-theme-default ps-active-y" style="height:430px;" data-ps-id="bcdefbd7-34d6-2fd2-2bc3-38362ee09835">
	                    <!-- Comment Row -->
	                    <div class="d-flex flex-row comment-row m-t-0">
	                        <div class="p-2">
	                            <img src="../../assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle">
	                        </div>
	                        <div class="comment-text w-100">
	                            <h6 class="font-medium">James Anderson</h6>
	                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
	                            <div class="comment-footer">
	                                <span class="text-muted float-right">April 14, 2016</span>
	                                <span class="label label-rounded label-primary">Pending</span>
	                                <span class="action-icons">
	                                    <a href="javascript:void(0)">
	                                        <i class="ti-pencil-alt"></i>
	                                    </a>
	                                    <a href="javascript:void(0)">
	                                        <i class="ti-check"></i>
	                                    </a>
	                                    <a href="javascript:void(0)">
	                                        <i class="ti-heart"></i>
	                                    </a>
	                                </span>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- Comment Row -->
	                    <div class="d-flex flex-row comment-row">
	                        <div class="p-2">
	                            <img src="../../assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle">
	                        </div>
	                        <div class="comment-text active w-100">
	                            <h6 class="font-medium">Michael Jorden</h6>
	                            <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
	                            <div class="comment-footer ">
	                                <span class="text-muted float-right">April 14, 2016</span>
	                                <span class="label label-success label-rounded">Approved</span>
	                                <span class="action-icons active">
	                                    <a href="javascript:void(0)">
	                                        <i class="ti-pencil-alt"></i>
	                                    </a>
	                                    <a href="javascript:void(0)">
	                                        <i class="icon-close"></i>
	                                    </a>
	                                    <a href="javascript:void(0)">
	                                        <i class="ti-heart text-danger"></i>
	                                    </a>
	                                </span>
	                            </div>
	                        </div>
	                    </div>
	                <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px; height: 430px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 326px;"></div></div></div>
	            </div>
	        </div>
	        <!-- column -->
	        <div class="col-lg-6">
	            <div class="card">
	                <div class="card-body">
	                    <div class="d-flex align-items-center p-b-15">
	                        <div>
	                            <h4 class="card-title m-b-0">{{ __('lang_file.to_do_list') }}</h4>
	                        </div>
	                        <div class="ml-auto">
	                            <div class="dl">
	                                <select class="custom-select border-0 text-muted">
	                                    <option value="0" selected="">August 2018</option>
	                                    <option value="1">May 2018</option>
	                                    <option value="2">March 2018</option>
	                                    <option value="3">June 2018</option>
	                                </select>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="todo-widget scrollable ps-container ps-theme-default" style="height:422px;" data-ps-id="0e78e8a9-d594-f5d8-20da-03dc49545dbf">
	                        <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
	                            <li class="list-group-item todo-item" data-role="task">
	                                <div class="custom-control custom-checkbox">
	                                    <input type="checkbox" class="custom-control-input" id="customCheck">
	                                    <label class="custom-control-label todo-label" for="customCheck">
	                                        <span class="todo-desc">Simply dummy text of the printing and typesetting</span> <span class="badge badge-pill badge-success float-right">Project</span>
	                                    </label>
	                                </div>
	                            </li>
	                            <li class="list-group-item todo-item" data-role="task">
	                                <div class="custom-control custom-checkbox">
	                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
	                                    <label class="custom-control-label todo-label" for="customCheck1">
	                                        <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</span><span class="badge badge-pill badge-danger float-right">Project</span>
	                                    </label>
	                                </div>
	                                
	                            </li>
	                            <li class="list-group-item todo-item" data-role="task">
	                                <div class="custom-control custom-checkbox">
	                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
	                                    <label class="custom-control-label todo-label" for="customCheck2">
	                                        <span class="todo-desc">Ipsum is simply dummy text of the printing</span> <span class="badge badge-pill badge-info float-right">Project</span>
	                                    </label>
	                                </div>
	                                
	                            </li>
	                        </ul>
	                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
	                </div>
	            </div>
	        </div>
	    </div>
    </div>
    <!-- Main Content End -->
@endsection