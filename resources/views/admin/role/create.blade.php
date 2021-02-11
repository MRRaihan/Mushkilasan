@extends('layouts.admin.master')
@section('title', 'Create Role')
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
                                <h3 class="page-title">Add Role</h3>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="card">
                        <div class="card-body">

                            <!-- Form -->
                            <form action="{{ route('role.store') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text"  name="name" id="name" value="{{ old('name') }}">
                                </div>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label> Status</label>
                                    <div class="col-md-10">
                                        <div class="radio radio-info radio-inline">
                                            <input type="radio" id="Active" value="Active" name="status">
                                            <label for="Active"> Active </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <input type="radio" id="Inactive" value="Inactive" name="status">
                                            <label for="Inactive"> Inactive </label>
                                        </div>
                                        @error('status')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <div class="mt-4">
                                    <button class="btn btn-primary">Add Role</button>
                                    <a href="{{ route('role.index') }}" class="btn btn-outline-dark">Cancel</a>
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
