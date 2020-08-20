@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/the_firm.jpg") }}')">
    <div>
        <h1>Articles</h1>
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/the_firm_mobile.jpg") }}')">
    <div>
        <h1>Articles</h1>
    </div>
</div>

<style>
    .square {
        position: relative;
        width: 1.5rem;
        height: 1.5rem;
    }
    .square span {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        height: fit-content;
        margin: auto;
        text-align: center;
        font-size: 70%;
    }
</style>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                @forelse ($articles as $article)
                    <article class="post">
                        <div class="post-head">
                            <h2><a href="{{ route('article', ['article' => $article->slug]) }}">{{ $article->title }}</a></h2>
                            <div class="info">
                                <span class="date">{{ $article->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                        <div class="entry">
                            <p>
                                {!! strip_tags($article->body) > 250 ? substr(strip_tags($article->body), 0 , 250) . "..." : strip_tags($article->body) !!}
                            </p>
                        </div>
                        <div class="more-options">
                            <a href="{{ route('article', ['article' => $article->slug]) }}" class="btn read-more">Learn more</a>
                        </div>
                    </article>
                @empty
                    <h2>No articles</h2>
                @endforelse

                <div class='wp-pagenavi'>
                    <span class='pages'>Page {{ $articles->lastPage() }} of {{ $articles->total() }}</span>
                    @if (count($articles) >= 1)
                        @for($i = 1; $i < $articles->lastPage() + 1; $i++)
                            @if($articles->currentPage() == $i)
                                <div class='current' style="padding: 0;">
                                    <div class="square">
                                        <span>{{ $i }}</span>
                                    </div>
                                </div>
                            @else
                            <a class="page larger" title="Page {{ $i }}" href="{{ $articles->url($i) }}">{{ $i }}</a>
                            @endif
                        @endfor
                    @endif
                    @if($articles->hasMorePages())
                        <a class="nextpostslink" rel="next" href="{{ $articles->nextPageUrl() }}">Next <i class="fa fa-long-arrow-right"></i></a>
                    @endif
                </div>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <h3>Recent Articles</h3>
                <ul>
                    @foreach ($recent_articles as $article)
                    <li class="cat-item cat-item-10">
                        <a href="{{ route('article', ['article' => $article->slug]) }}">
                            {{ $article->title }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection