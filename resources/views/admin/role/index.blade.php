@extends('layouts.admin.master')
@section('title', 'Roles')
@push('css')

@endpush
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Roles</h3>
                    </div>
                    <div class="col-auto text-right">
                        <a href="{{ route('role.create') }}" class="btn btn-primary add-button ml-3">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0 categories_table" >
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($roles as $role)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->status }}</td>
                                            <td class="text-right">
                                                <a href="{{ route('role.edit', encrypt($role->id)) }}" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="far fa-edit mr-1"></i> Edit
                                                </a>
                                                <form class="d-inline-block pull-right" method="post" action="{{ route('role.destroy', $role->id)  }}">
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

