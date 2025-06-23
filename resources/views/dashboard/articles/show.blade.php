@extends('dashboard.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Article Details</h5>
            <div class="d-flex gap-2">
                <a href="{{ route('articles.edit', $article) }}" class="btn btn-primary">
                    <i class="bx bx-edit"></i> Edit
                </a>
                <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this article?')">
                        <i class="bx bx-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h2>{{ $article->title }}</h2>
                    <p class="text-muted">
                        Status: 
                        @if($article->is_published)
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-warning">Draft</span>
                        @endif
                    </p>
                    <p class="text-muted">
                        Published at: {{ $article->published_at ? $article->published_at->format('Y-m-d H:i') : 'Not published' }}
                    </p>
                    <hr>
                    <div class="content">
                        {!! $article->content !!}
                    </div>
                </div>
                <div class="col-md-4">
                    @if($article->image)
                        <div class="card">
                            <img src="{{ asset($article->image) }}" class="card-img-top" alt="{{ $article->title }}">
                        </div>
                    @endif
                    <div class="card mt-3">
                        <div class="card-header">
                            <h6 class="mb-0">Meta Information</h6>
                        </div>
                        <div class="card-body">
                            <p><strong>Meta Description:</strong></p>
                            <p>{{ $article->meta_description ?: 'Not set' }}</p>
                            <p><strong>Meta Keywords:</strong></p>
                            <p>{{ $article->meta_keywords ?: 'Not set' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 