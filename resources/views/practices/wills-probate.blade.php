@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/wills_probate.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/wills_probate_mobile.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <h2>Wills & Probate</h2>
                <p>With a team of diligent lawyers, we advise and attend to all matters related to administration and distribution of estates of deceased persons. We also assist our clients and their kin to prepare for the inevitable and unpredictable future.</p>
                <h2 style="font-size:20px;">What we do:</h2>
                <ul class="practices-list">
                    <li>Preparation of Will</li>
                    <li>Application for Grant of Probate</li>
                    <li>Application for Letters of Administration</li>
                    <li>Preparation of Power of Attorney</li>
                    <li>Small Estates</li>
                </ul>
            </div>
        </div>
        
        @include('includes.practice-areas')
        
    </div>
</div>
@endsection