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
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang_file.product_list') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                <h3 class="text-success"><i class="fa fa-check-circle"></i> Success</h3> 
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <div class="row mb-4">
                            <div class="col-lg-7 col-md-8">
                                <h4 class="card-title">{{ __('lang_file.product_list') }}</h4></h6>
                            </div>
                            <div class="col-lg-5 col-md-4">
                                <a href="{{ route('products.create') }}" class="btn btn-primary btn-rounded float-right">{{ __('lang_file.add_product') }}</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th width="5%">#</th>
                                        <th width="10%">{{ __('lang_file.name') }}</th>
                                        <th width="50%">{{ __('lang_file.description') }}</th>
                                        <th width="10%">{{ __('lang_file.price') }}</th>
                                        <th width="25%">{{ __('lang_file.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>
                                                <a href="{{ route('products.edit', $product) }}" class=" btn btn-sm btn-rounded btn-outline-success"><i class="fa fa-edit"></i> {{ __('lang_file.edit_product') }}</a> &nbsp; &nbsp; 
                                                <a href="#" onclick="open_delete_modal('{{ route('products.destroy', $product) }}')" class=" btn btn-sm btn-rounded btn-outline-danger"><i class="fas fa-trash"></i> {{ __('lang_file.delete_product') }}</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal Start -->
    <div class="modal fade bs-example-modal-md" id="delete_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" >
        <div class="modal-content">

            <div class="modal-header">
            <strong>{{ __('lang_file.delete_product') }}</strong>
            <button type="button" class="close" data-dismiss="modal"><span data-toggle="tooltip" data-placement="top" title="Close" aria-hidden="true">×</span>
            </button>
            </a>
            </div>
            <div class="modal-body">
            <form method="post" id="delete_form" class="form-horizontal form-label-left">
                @method('Delete')
                @csrf
                <h5 class="text-warning ml-3">{{ __('lang_file.delete_message') }}</h5>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>  {{ __('lang_file.yes_delete') }}</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> {{ __('lang_file.close') }}</button>
            </div>
        </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection

@section('scripts')
    <script>
        function open_delete_modal(form_action){
            const form = document.getElementById('delete_form');
            $("#delete_modal").modal('show');
            form.action = form_action;
        }
    </script>
@endsection