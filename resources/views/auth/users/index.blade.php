@extends('layouts.app')

@section('title')
    Users
@endsection
@section('content')
    @section('page-title')
        <h4 class="page-title m-0">{{ __('auth.users') }}</h4>
    @endsection
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-8 col-xl-8 col-sm-8 col-xs-8">
                            <h4 class="mt-0 header-title mb-4">{{ __('auth.users_list') }}</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="btn-group focus-btn-group float-right">
                                <button type="button" class="btn btn-primary"><span class="fa fa-plus-circle"></span> {{ __('common.add_new') }}</button>
                            </div>
                        </div>
                    </div>
                    <livewire:auth.user-management />
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/styles/custom_style.css') }}">
@endsection
