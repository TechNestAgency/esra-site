@extends('dashboard.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Enrollment Requests</h5>
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
                            <th>Mobile</th>
                            <th>Course</th>
                            <th>Days/Week</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enrollments as $enrollment)
                            <tr>
                                <td>{{ $enrollment->name }}</td>
                                <td>{{ $enrollment->email }}</td>
                                <td>{{ $enrollment->mobile }}</td>
                                <td>{{ ucfirst($enrollment->course) }}</td>
                                <td>{{ $enrollment->days_per_week }}</td>
                                <td>
                                    <span class="badge bg-{{ $enrollment->status === 'approved' ? 'success' : ($enrollment->status === 'rejected' ? 'danger' : 'warning') }}">
                                        {{ ucfirst($enrollment->status) }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('dashboard.enrollments.show', $enrollment) }}" class="btn btn-sm btn-info">
                                            <i class='bx bx-show'></i>
                                        </a>
                                        <form action="{{ route('dashboard.enrollments.destroy', $enrollment) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this enrollment?')">
                                                <i class='bx bx-trash'></i>
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
                {{ $enrollments->links() }}
            </div>
        </div>
    </div>
</div>
@endsection 