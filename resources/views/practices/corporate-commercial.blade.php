@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/corporate_commercial.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/corporate_commercial_mobile.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <h2>Corporate & Commercial</h2>
                <p>With our managing and founding Partner, Mr William Leong Jee Keen having first-hand experience in business and management, our corporate clients will rest assure that they are provided with practical advice and feasible solutions to their dilemmas.</p>
                <h2 style="font-size:20px;">What we do:</h2>
                <ul class="practices-list">
                    <li>Investment</li>
                    <li>Mergers & Acquisition</li>
                    <li>Private Equity</li>
                    <li>Privatisation</li>
                    <li>Strategic Alliance & Joint Ventures</li>
                    <li>Corporate Recovery</li>
                    <li>Debt Capital Markets</li>
                    <li>Due Diligence</li>
                    <li>Financial Institutions</li>
                    <li>Project Finance</li>
                    <li>Property Finance</li>
                    <li>Prospectus</li>
                    <li>Intellectual Property</li>
                    <li>Media & Entertainment Law</li>
                    <li>Commercial Agreements</li>
                </ul>
            </div>
        </div>
        
        @include('includes.practice-areas')
        
    </div>
</div>
@endsection