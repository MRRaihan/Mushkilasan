@extends('layouts.admin.master')
@section('title', 'Update Category')
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
                                <h3 class="page-title">Edit Category</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">
                            <form  action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" type="text" value="{{ $category->category_name }}"  name="category_name" id="category_name" >
                                </div>
                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input class="form-control" type="file"  name="category_image" id="category_image">
                                </div>
                                <div class="form-group">
                                    <div class="avatar">
                                        <img class="rounded" alt="" src="{{ asset($category->category_image) }}">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" name="form_submit" value="submit" type="submit">Update Category</button>

                                    <a href="{{ route('category.index') }}"  class="btn btn-link">Cancel</a>
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
