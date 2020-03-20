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
                            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
                            <div class="info">
                                <span class="date">Feb 19, 2018</span>
                            </div>
                        </div>
                        <div class="entry">
                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection