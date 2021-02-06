@extends('layouts.admin.master')
@section('title', 'Create Category')
@push('css')

@endpush
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">

                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h3 class="page-title">Add Category</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" type="text"  name="category_name" id="category_name" value="{{ old('category_name') }}">
                                </div>
                                @error('category_name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input class="form-control" type="file" accept="image/*" name="category_image" id="category_image">
                                </div>
                                @error('category_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="mt-4">
                                    <button class="btn btn-primary">Add Category</button>
                                    <a href="{{ route('category.index') }}" class="btn btn-link">Cancel</a>
                                </div>
                            </form>
                            <!-- Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
