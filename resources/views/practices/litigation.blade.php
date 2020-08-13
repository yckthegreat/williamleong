@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/litigation_top.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/litigation_top_mobile.jpg") }}')">
    <div>
        <h1>Practices</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <h2>Litigation</h2>
                <p>Led by our founding and managing partner Mr William Leong Jee Keen, our team of litigation lawyers are committed in representing our clients and protecting their interest in negotiation process, all types of court proceedings in Malaysia and alternative dispute resolutions, mainly arbitration.</p>
                <h2 style="font-size:20px;">What we do:</h2>
                <ul class="practices-list">
                    <li>Corporate</li>
                    <li>Minority Shareholder Rights</li>
                    <li>Shareholder & Partnership Disputes</li>
                    <li>Company & Securities Industrial Matters</li>
                    <li>Construction & Engineering Disputes</li>
                    <li>Distributors & Agency Rights</li>
                    <li>Intellectual Property</li>
                    <li>Media & Entertainment Laws</li>
                    <li>Contractual Claims</li>
                    <li>Arbitration & Dispute Resolution</li>
                    <li>Debt Recovery</li>
                    <li>Charge Actions</li>
                    <li>Executions & Enforcement of Judgments</li>
                    <li>Debt Restructuring</li>
                    <li>Insolvency</li>
                    <li>Bankruptcy and Winding-Up</li>
                    <li>Defamation</li>
                    <li>Slander of Goods</li>
                    <li>Land Disputes</li>
                    <li>Administrative Law</li>
                    <li>Public Interest Litigation</li>
                    <li>Commercial Crime</li>
                </ul>
            </div>
        </div>
        
        @include('includes.practice-areas')
        
    </div>
</div>
@endsection