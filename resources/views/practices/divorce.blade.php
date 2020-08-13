@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/divorce.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/divorce_mobile.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <h2>Divorce</h2>
                <p>Relationship and its breakdown is a sensitive and delicate matter, which is why at William Leong & Co. we aim to provide our clients with practical and cost-effective solutions to make their divorce proceedings as stress-free as possible, from the decision to divorce, up to the final settlement stage. </p>
                <h2 style="font-size:20px;">What we do:</h2>
                <ul class="practices-list">
                    <li>Contested & Uncontested Divorce Petitions</li>
                    <li>Custody of Children</li>
                    <li>Distribution of matrimonial assets</li>
                    <li>Child Adoption</li>
                </ul>
            </div>
        </div>
        
        @include('includes.practice-areas')
        
    </div>
</div>
@endsection