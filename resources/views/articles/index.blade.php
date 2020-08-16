@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

    <div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/news.jpg") }}')">
        <div>
            <span class="h1-span">Articles</span>
        </div>
    </div>

    <div class="banner show-for-small-only" style="background-image: url('{{ asset("images/news-mobile.jpg") }}')">
        <div>
            <span class="h1-span">Articles</span>
        </div>
    </div>

    <div id="main" class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell content">
                <div class="spacer">
                    <article class="post">
                        <div class="post-head">
                            <h2>{{ $article->title }}</h2>
                            <div class="info">
                                <span class="date">{{ $article->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                        <div class="entry">
                            {!! $article->body !!}
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection