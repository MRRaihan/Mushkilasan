@extends('layouts.admin.master')
@section('title', 'Categories')
@push('css')

@endpush
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Categories</h3>
                    </div>
                    <div class="col-auto text-right">
                        <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                        <a href="{{ route('category.create') }}" class="btn btn-primary add-button ml-3">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">
                    <form action="#" method="post">
                        @csrf
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select">
                                        <option>Select category</option>
                                        <option>Automobile</option>
                                        <option>Construction</option>
                                        <option>Interior</option>
                                        <option>Cleaning</option>
                                        <option>Electrical</option>
                                        <option>Carpentry</option>
                                        <option>Computer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>From Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0 categories_table" >
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category Name</th>
                                        <th>Category Image</th>
                                        <th>Date</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                      <tr>
                                         <td>{{ $serial++ }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td><img class="avatar-sm rounded mr-1" src="{{ asset($category->category_image) }}" alt="Category Image"> </td>
                                        <td>{{ $category->created_at->format('d-m-Y') }}</td>
                                        <td class="text-right">
                                            <a href="{{ route('category.edit', encrypt($category->id)) }}" class="btn btn-sm bg-success-light mr-2">
                                                <i class="far fa-edit mr-1"></i> Edit
                                            </a>
                                            <form class="d-inline-block pull-right" method="post" action="{{ route('category.destroy', $category->id)  }}">
                                                @csrf
                                                @method('delete')
                                                <button class="on-default remove-row btn btn-sm bg-danger-light mr-2 delete_categories" onclick="return confirm('Are you confirm to delete?')"><i class="far fa-trash-alt mr-1"></i> Delete</button>
                                            </form>
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
    </div>
@endsection
@push('scripts')

@endpush
