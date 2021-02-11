@extends('layouts.admin.master')
@section('title', 'Update Sub-category')
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
                                <h3 class="page-title">Edit Sub Category</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form action="{{route('subcategory.update', $subcategory->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" id="category" class="form-control select">
                                        <option value="" style="display: none" selected>Select Category</option>
                                        @foreach($categories as $category)
                                            <option @if($subcategory->category_id == $category->id) selected @endif value="{{ $category->id }}"> {{ $category->category_name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Subcategory Name</label>
                                    <input class="form-control" type="text" name="subcategory_name" value="{{ $subcategory->subcategory_name  }}">
                                </div>
                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input class="form-control" type="file" accept="image/*" name="subcategory_image">
                                </div>
                                <div class="form-group">
                                    <div class="avatar">
                                        <img class="avatar-img rounded" alt="" src="{{ asset($subcategory->subcategory_image) }}" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Status</label>
                                    <div class="col-md-10">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="Active" @if($subcategory->status == 'Active') checked @endif value="Active" name="status">
                                            <label for="Active"> Active </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <input type="radio" id="Inactive" @if($subcategory->status == 'Inactive') checked @endif value="Inactive" name="status">
                                            <label for="Inactive"> Inactive </label>
                                        </div>
                                    </div>
                                    @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mt-4">
                                    <button class="btn btn-primary" type="submit">Update Sub-category</button>
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
