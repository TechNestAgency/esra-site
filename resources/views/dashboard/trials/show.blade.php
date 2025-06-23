@extends('dashboard.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Trial Request Details</h5>
            <div>
                <a href="{{ route('trials.edit', $trial) }}" class="btn btn-primary">
                    <i class="bx bx-edit"></i> Edit
                </a>
                <form action="{{ route('trials.destroy', $trial) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this trial request?')">
                        <i class="bx bx-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-3">Personal Information</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">Name</th>
                            <td>{{ $trial->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $trial->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $trial->phone }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6 class="mb-3">Trial Information</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">Course Type</th>
                            <td>{{ $trial->course_type }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <span class="badge bg-{{ $trial->status === 'approved' ? 'success' : ($trial->status === 'rejected' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($trial->status) }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Trial Date</th>
                            <td>{{ $trial->trial_date ? $trial->trial_date->format('Y-m-d H:i') : 'Not scheduled' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            @if($trial->notes)
                <div class="mt-4">
                    <h6>Notes</h6>
                    <div class="card">
                        <div class="card-body">
                            {{ $trial->notes }}
                        </div>
                    </div>
                </div>
            @endif

            <div class="mt-4">
                <a href="{{ route('trials.index') }}" class="btn btn-secondary">
                    <i class="bx bx-arrow-back"></i> Back to List
                </a>
            </div>
        </div>
    </div>
</div>
@endsection 