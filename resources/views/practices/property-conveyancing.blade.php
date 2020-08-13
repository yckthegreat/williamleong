@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/property_conveyancing.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/property_conveyancing_mobile.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <h2>Property & Conveyancing</h2>
                <p>Our conveyancing team is well-versed with all forms of property transactions including drafting and preparing sale and purchase agreements for development projects and sub-sale transactions. We are on the panel of several banks and financial institutions, both conventional and Islamic.</p>
                <h2 style="font-size:20px;">What we do:</h2>
                <ul class="practices-list">
                    <li>Sale & Purchase Agreement</li>
                    <li>Perfection of Transfer & Charge</li>
                    <li>Loans, Securities and Charges</li>
                    <li>Leases & Tenancies</li>
                    <li>Joint Ventures for Property Development</li>
                </ul>
            </div>
        </div>

        @include('includes.practice-areas')
        
    </div>
</div>
@endsection