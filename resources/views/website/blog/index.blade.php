@extends('layouts.app')

@section('title', 'Blog - Esra Academy')
@section('meta_description', 'Read our latest articles about Quran, Arabic language, and Islamic studies')
@section('meta_keywords', 'Quran, Arabic, Islamic studies, blog, articles')

@section('content')
<section class="blog-header section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4">Our Blog</h1>
                <p class="lead">Discover insights about Quran, Arabic language, and Islamic studies</p>
            </div>
        </div>
    </div>
</section>

<section class="blog-posts section">
    <div class="container">
        <div class="row">
            @forelse($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        @if($article->image)
                            <img src="{{ asset($article->image) }}" class="card-img-top" alt="{{ $article->title }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($article->content), 150) }}</p>
                            <a href="{{ route('blog.show', $article->slug) }}" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted">
                            {{ $article->published_at->format('F j, Y') }}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No articles found.</p>
                </div>
            @endforelse
        </div>

        <div class="row mt-4">
            <div class="col-12">
                {{ $articles->links() }}
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
    .blog-posts {
        padding: 4rem 0;
    }
    .card {
        transition: transform 0.3s ease;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .pagination {
        justify-content: center;
    }
</style>
@endsection 