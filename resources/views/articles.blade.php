@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/news.jpg") }}')">
    <div>
        <h1>Articles</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/news-mobile.jpg") }}')">
    <div>
        <h1>Articles</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <article class="post">
                    <div class="post-head">
                        <h2><a href="{{ route('article') }}">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></h2>
                        <div class="info">
                            <span class="date">Dec 30, 2018</span>
                        </div>
                    </div>
                    <div class="entry">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    </div>
                    <div class="more-options">
                        <a href="{{ route('article') }}" class="btn read-more">Learn more</a>
                    </div>
                </article>

                <article class="post">
                    <div class="post-head">
                        <h2><a href="{{ route('article') }}">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></h2>
                        <div class="info">
                            <span class="date">Dec 30, 2018</span>
                        </div>
                    </div>
                    <div class="entry">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    </div>
                    <div class="more-options">
                        <a href="{{ route('article') }}" class="btn read-more">Learn more</a>
                    </div>
                </article>

                <article class="post">
                    <div class="post-head">
                        <h2><a href="{{ route('article') }}">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></h2>
                        <div class="info">
                            <span class="date">Dec 30, 2018</span>
                        </div>
                    </div>
                    <div class="entry">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    </div>
                    <div class="more-options">
                        <a href="{{ route('article') }}" class="btn read-more">Learn more</a>
                    </div>
                </article>

                <div class='wp-pagenavi'>
                    <span class='pages'>Page 1 of 2</span><span class='current'>1</span><a class="page larger" title="Page 2" href="page/2/index.html">2</a><a class="nextpostslink" rel="next" href="page/2/index.html">Next <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <h3>Recent Articles</h3>
                <ul>
                    <li class="cat-item cat-item-10"><a href="category/firm-news/index.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a>
                    </li>
                    <li class="cat-item cat-item-10"><a href="category/firm-news/index.html">Lorem Ipsum is simply dummy</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection