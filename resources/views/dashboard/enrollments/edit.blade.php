@extends('dashboard.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Enrollment</h5>
            <a href="{{ route('dashboard.enrollments.index') }}" class="btn btn-primary btn-sm">
                <i class="bx bx-arrow-back"></i> Back to List
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.enrollments.update', $enrollment) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $enrollment->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $enrollment->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile" value="{{ old('mobile', $enrollment->mobile) }}" required>
                            @error('mobile')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender" required>
                                <option value="male" {{ old('gender', $enrollment->gender) === 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender', $enrollment->gender) === 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <select class="form-select @error('course') is-invalid @enderror" id="course" name="course" required>
                                <option value="">Select Course</option>
                                <option value="tajweed" {{ old('course', $enrollment->course) === 'tajweed' ? 'selected' : '' }}>Tajweed Essentials</option>
                                <option value="arabic" {{ old('course', $enrollment->course) === 'arabic' ? 'selected' : '' }}>Arabic for Beginners</option>
                                <option value="memorization" {{ old('course', $enrollment->course) === 'memorization' ? 'selected' : '' }}>Quran Memorization</option>
                                <option value="islamic_studies" {{ old('course', $enrollment->course) === 'islamic_studies' ? 'selected' : '' }}>Islamic Studies</option>
                                <option value="hadith" {{ old('course', $enrollment->course) === 'hadith' ? 'selected' : '' }}>Introduction to Hadith</option>
                                <option value="seerah" {{ old('course', $enrollment->course) === 'seerah' ? 'selected' : '' }}>Seerah of the Prophet ﷺ</option>
                            </select>
                            @error('course')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="days_per_week" class="form-label">Days per Week</label>
                            <input type="number" class="form-control @error('days_per_week') is-invalid @enderror" id="days_per_week" name="days_per_week" value="{{ old('days_per_week', $enrollment->days_per_week) }}" min="1" max="7" required>
                            @error('days_per_week')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Preferred Days</label>
                            <div class="row">
                                @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="preferred_days[]" value="{{ strtolower($day) }}" id="day_{{ strtolower($day) }}"
                                                {{ in_array(strtolower($day), old('preferred_days', $enrollment->preferred_days)) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="day_{{ strtolower($day) }}">
                                                {{ $day }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @error('preferred_days')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                <option value="pending" {{ old('status', $enrollment->status) === 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="approved" {{ old('status', $enrollment->status) === 'approved' ? 'selected' : '' }}>Approved</option>
                                <option value="rejected" {{ old('status', $enrollment->status) === 'rejected' ? 'selected' : '' }}>Rejected</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="message" class="form-label">Additional Message</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="3">{{ old('message', $enrollment->message) }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            <i class="bx bx-save"></i> Update Enrollment
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 