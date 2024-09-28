@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h2 class="edica-page-title" data-aos="fade-up">Категории</h2>
            <section class="featured-categories-section">
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <ul class="post-list">
                            @foreach($categories as $category)
                                <li class="category">
                                    <a href="{{ route('category.post.index', $category->id) }}" class="post-permalink media">
                                        <div class="media-body">
                                            <h6 class="category-title">{{ $category->title }}</h6>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
