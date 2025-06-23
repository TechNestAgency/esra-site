<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::where('is_published', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->latest('published_at')
            ->paginate(9);

        return view('website.blog.index', compact('articles'));
    }

    public function show(Article $article)
    {
        if (!$article->is_published || !$article->published_at || $article->published_at->isFuture()) {
            abort(404);
        }

        return view('website.blog.show', compact('article'));
    }
} 