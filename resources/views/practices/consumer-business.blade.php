@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/consumer_retail.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/consumer_retail_mobile.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <h2>Consumer & Retail Business</h2>
                <p>Our lawyers are at the forefront of this constantly evolving market. We strive to provide sound advice and solutions to legal and commercial issues faced by industrial players including multinational and small businesses, developers, manufacturers, suppliers and consumers.</p>
                <h2 style="font-size:20px;">What we do:</h2>
                <ul class="practices-list">
                    <li>Franchises</li>
                    <li>Hire Purchase & Leasing Documentation</li>
                    <li>Small and Medium Industry Business Needs</li>
                    <li>Regulatory Compliance</li>
                    <li>Marketing & Advertising Arrangement</li> 
                    <li>Privacy & Data Protection</li>
                    <li>Tax Advisory</li>
                </ul>
            </div>
        </div>

        @include('includes.practice-areas')

    </div>
</div>
@endsection