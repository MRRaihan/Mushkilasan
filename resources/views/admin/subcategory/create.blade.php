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
                                <h3 class="page-title">Add Sub Category</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form action="{{ route('subcategory.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Category</label>
                                    <select  name="category" id="category"  class="form-control select">
                                        <option value="" style="display: none" selected>Select Category</option>
                                        @foreach($categories as $category)
                                            <option @if(old('category') == $category->id) selected @endif value="{{ $category->id }}"> {{ $category->category_name }} </option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Sub Category Name</label>
                                    <input class="form-control" type="text" name="subcategory_name" value="{{ old('subcategory_name') }}" placeholder="Sub category name">
                                    @error('subcategory_name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Sub Category Image</label>
                                    <input class="form-control" type="file" accept="image/*" name="subcategory_image" id="subcategory_image">
                                    @error('subcategory_image')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label> Status</label>
                                    <div class="col-md-10">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="Active" @if(old('status') == 'Active') checked @endif value="Active" name="status">
                                            <label for="Active"> Active </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <input type="radio" id="Inactive" @if(old('status') == 'Inactive') checked @endif value="Inactive" name="status">
                                            <label for="Inactive"> Inactive </label>
                                        </div>
                                    </div>
                                    @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary">Add Subcategory</button>
                                    <a href="{{ route('subcategory.index') }}" class="btn btn-outline-dark">Cancel</a>
                                </div>
                            </form>
                            <!-- /Form -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
