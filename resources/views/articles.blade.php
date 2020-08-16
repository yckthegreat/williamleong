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

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                @foreach ($articles as $article)
                    <article class="post">
                        <div class="post-head">
                            <h2><a href="{{ route('article', ['article' => $article->slug]) }}">{{ $article->title }}</a></h2>
                            <div class="info">
                                <span class="date">{{ $article->created_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                        <div class="entry">
                            <p>
                                {{ strip_tags($article->body) > 250 ? substr(strip_tags($article->body), 0 , 250) . "..." : strip_tags($article->body) }}
                            </p>
                        </div>
                        <div class="more-options">
                            <a href="{{ route('article', ['article' => $article->slug]) }}" class="btn read-more">Learn more</a>
                        </div>
                    </article>
                @endforeach

                <div class='wp-pagenavi'>
                    <span class='pages'>Page {{ $articles->lastPage() }} of {{ $articles->total() }}</span>
                    @for($i = 1; $i < $articles->lastPage() + 1; $i++)
                        @if($articles->currentPage() == $i)
                        <span class='current'>{{ $i }}</span>
                        @else
                        <a class="page larger" title="Page {{ $i }}" href="{{ $articles->url($i) }}">{{ $i }}</a>
                        @endif
                    @endfor
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