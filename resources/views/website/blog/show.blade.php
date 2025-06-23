@extends('layouts.app')

@section('title', $article->title . ' - Esra Academy')
@section('meta_description', $article->meta_description)
@section('meta_keywords', $article->meta_keywords)

@section('content')
<section class="blog-header section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4">{{ $article->title }}</h1>
                <div class="meta text-muted">
                    Published on {{ $article->published_at->format('F j, Y') }}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-post section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <article>
                    @if($article->image)
                        <img src="{{ asset($article->image) }}" class="img-fluid rounded mb-4" alt="{{ $article->title }}" style="width: 100%; max-height: 400px; object-fit: cover;">
                    @endif

                    <div class="content">
                        {!! $article->content !!}
                    </div>

                    @if($article->meta_keywords)
                        <div class="tags mt-4">
                            @foreach(explode(',', $article->meta_keywords) as $keyword)
                                <span class="badge bg-secondary me-2">{{ trim($keyword) }}</span>
                            @endforeach
                        </div>
                    @endif
                </article>

                <div class="mt-5 text-center">
                    <a href="{{ route('blog.index') }}" class="btn btn-primary">
                        <i class="bi bi-arrow-left me-2"></i>Back to Blog
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('styles')
<style>
    .blog-header {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 4rem 0;
    }
    .blog-post {
        padding: 4rem 0;
    }
    .content {
        font-size: 1.1rem;
        line-height: 1.8;
    }
    .content img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
    }
    .content p {
        margin-bottom: 1.5rem;
    }
    .badge {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
    }
</style>
@endsection 