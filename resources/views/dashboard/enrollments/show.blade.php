@extends('dashboard.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Enrollment Details</h5>
            <a href="{{ route('dashboard.enrollments.index') }}" class="btn btn-primary btn-sm">
                <i class="bx bx-arrow-back"></i> Back to List
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-3">Personal Information</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">Name</th>
                            <td>{{ $enrollment->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $enrollment->email }}</td>
                        </tr>
                        <tr>
                            <th>Mobile</th>
                            <td>{{ $enrollment->mobile }}</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>{{ ucfirst($enrollment->gender) }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h6 class="mb-3">Course Information</h6>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 200px;">Course</th>
                            <td>{{ ucfirst($enrollment->course) }}</td>
                        </tr>
                        <tr>
                            <th>Days per Week</th>
                            <td>{{ $enrollment->days_per_week }}</td>
                        </tr>
                        <tr>
                            <th>Preferred Days</th>
                            <td>
                                @php
                                    $days = is_array($enrollment->preferred_days) 
                                        ? $enrollment->preferred_days 
                                        : json_decode($enrollment->preferred_days, true) ?? explode(',', $enrollment->preferred_days);
                                @endphp
                                {{ is_array($days) ? implode(', ', $days) : $enrollment->preferred_days }}
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <span class="badge bg-{{ $enrollment->status === 'approved' ? 'success' : ($enrollment->status === 'rejected' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($enrollment->status) }}
                                </span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            @if($enrollment->message)
                <div class="row mt-4">
                    <div class="col-12">
                        <h6 class="mb-3">Additional Message</h6>
                        <div class="p-3 bg-light rounded">
                            {{ $enrollment->message }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('dashboard.enrollments.index') }}" class="btn btn-secondary">
                <i class='bx bx-arrow-back'></i> Back to List
            </a>
            <form action="{{ route('dashboard.enrollments.destroy', $enrollment) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this enrollment?')">
                    <i class='bx bx-trash'></i> Delete
                </button>
            </form>
        </div>
    </div>
</div>
@endsection 