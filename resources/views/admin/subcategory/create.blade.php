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
                            <form  method="post" action="{{ route('subcategory.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control select" name="category_id" id="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option @if(old('category_id') == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Sub Category Name</label>
                                    <input class="form-control" type="text"  name="subcategory_name" id="subcategory_name">
                                </div>
                                <div class="form-group">
                                    <label>Sub Category Image</label>
                                    <input class="form-control" type="file"  name="subcategory_image" id="subcategory_image">
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" name="form_submit" value="submit" type="submit">Add Subcategory</button>
                                    <a href="{{ route('subcategory.index') }}" class="btn btn-link">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
