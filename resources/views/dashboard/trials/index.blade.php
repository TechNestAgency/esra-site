@extends('dashboard.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Trial Requests</h5>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Course Type</th>
                            <th>Status</th>
                            <th>Trial Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($trials as $trial)
                            <tr>
                                <td>{{ $trial->name }}</td>
                                <td>{{ $trial->email }}</td>
                                <td>{{ $trial->phone }}</td>
                                <td>{{ $trial->course_type }}</td>
                                <td>
                                    <span class="badge bg-{{ $trial->status === 'approved' ? 'success' : ($trial->status === 'rejected' ? 'danger' : 'warning') }}">
                                        {{ ucfirst($trial->status) }}
                                    </span>
                                </td>
                                <td>{{ $trial->trial_date ? $trial->trial_date->format('Y-m-d H:i') : 'Not scheduled' }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('trials.show', $trial) }}" class="btn btn-sm btn-info">
                                            <i class="bx bx-show"></i>
                                        </a>
                                        <a href="{{ route('trials.edit', $trial) }}" class="btn btn-sm btn-primary">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <form action="{{ route('trials.destroy', $trial) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this trial request?')">
                                                <i class="bx bx-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $trials->links() }}
            </div>
        </div>
    </div>
</div>
@endsection 