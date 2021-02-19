@extends('layouts.app')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{ __('lang_file.products') }}</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('lang_file.home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang_file.create_product') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ __('lang_file.create_product') }}</h4>
                        <form class="m-t-30" method="POSt" action="{{ route('products.store') }}">
                            @php $error = $errors->all(); @endphp
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('lang_file.name') }}</label>
                                <input type="text" name="name" class="form-control" id="name" required="required">
                                @if($errors->any())
                                    <code>{{ $error[0] }}</code>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('lang_file.description') }}</label>
                                <textarea name="description" class="form-control" id="description" required="required"></textarea>
                                @if($errors->any())
                                    <code>{{ $error[1] }}</code>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('lang_file.price') }}</label>
                                <input type="number" class="form-control" name="price" id="price" required="required">
                                @if($errors->any())
                                    <code>{{ $error[2] }}</code>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('lang_file.save_product') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection