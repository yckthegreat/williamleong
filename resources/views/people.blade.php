@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/government-investigations.jpg") }}')">
    <div>
        <h1>Our People</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/government-investigations-mobile.jpg") }}')">
    <div>
        <h1>Our People</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell content">
            <div class="spacer" style="padding-right: 0px;">
                <div class="att-list">
                    <div class="large-4 medium-6 small-12 columns single-lawyer">
                        <a href="{{ route('profile') }}">
                            <div class="image-box">
                                <img src="{{ asset("images/james-haliczer-1.jpg") }}" alt="" />
                                <div class="inner-border"></div>
                            </div>
                            <h3><span>James S. Haliczer</span></h3>
                            <div class="hover">
                                <span class="button">View Bio</span>
                            </div>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns single-lawyer">
                        <a href="{{ route('profile') }}">
                            <div class="image-box">
                                <img src="{{ asset("images/Eugene-Pettis-Landing.jpg") }}" alt="" />
                                <div class="inner-border"></div>
                            </div>
                            <h3><span>Eugene K. Pettis</span></h3>
                            <div class="hover">
                                <span class="button">View Bio</span>
                            </div>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns single-lawyer">
                        <a href="{{ route('profile') }}">
                            <div class="image-box">
                                <img src="{{ asset("images/Richard-Schwamm-Landing.jpg") }}" alt="" />
                                <div class="inner-border"></div>
                            </div>
                            <h3><span>Richard B. Schwamm</span></h3>
                            <div class="hover">
                                <span class="button">View Bio</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection