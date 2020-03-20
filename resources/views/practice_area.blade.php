@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/government-investigations.jpg") }}')">
    <div>
        <h1>Arbitration</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/government-investigations-mobile.jpg") }}')">
    <div>
        <h1>Arbitration</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <h2>Defending Employers in Government Investigations</h2>
                <p>There are numerous governmental agencies at the local, state, and federal level that investigate and enforce employment laws, rules, and regulations. They all have different mandates and different procedures for conducting investigations.</p>
                <p>How an employer responds to a governmental agency’s investigation can be critical in determining the outcome. The wrong tactical and strategic decisions at the outset &#8212; such as taking a standardized “one-size-fits-all” approach, or being unduly adversarial or evasive &#8212; can prolong the investigation, expand its scope, may lead to otherwise-preventable litigation, and can result in significant operational disruption and substantially increased costs in terms of time, money, and opportunity. It may also increase the risk of private litigation by current and former employees. And, there may be negative repercussions in terms of public relations. For employers that are government contractors, the stakes are especially high, as legal violations may lead to debarment.</p>
                <p>We work with employers to evaluate the allegations that triggered the government’s investigation, to narrow the scope of the investigation, to minimize the cost and disruption to the employer’s operations, and to conclude the inquiry as rapidly as possible. We also make recommendations on how the employer can revise its policies and procedures to reduce the risk of a similar investigation in the future.</p>
                <h2>Practice Overview</h2>
                <p>We represent employers in audits and investigations by, and in proceedings before:</p>

                <ul>
                    <li>The United States Equal Employment Opportunity Commission;</li>
                    <li>The United States Department of Labor, Wage-Hour Division;</li>
                    <li>The National Labor Relations Board;</li>
                    <li>The New York State Department of Labor, Division of Labor Standards;</li>
                    <li>The New York State Department of Labor, Unemployment Insurance Division;</li>
                    <li>The New York State Division of Human Rights;</li>
                    <li>The New York City Commission on Human Rights;</li>
                    <li>The New York City Office of Labor Policy &amp; Standards;</li>
                    <li>The New York State Workers’ Compensation Board.</li>
                </ul>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <h3>Practice Areas</h3>
                <ul>
                    <li class="page_item page-item-308"><a href="../employment-litigation/index.html">Employment Litigation</a></li>
                    <li class="page_item page-item-305"><a href="../employment-counseling/index.html">Employment Counseling</a></li>
                    <li class="page_item page-item-307"><a href="../internal-investigations/index.html">Internal Investigations</a></li>
                    <li class="page_item page-item-306 current_page_item current_page_item"><a href="index.html" aria-current="page">Government Investigations</a></li>
                    <li class="page_item page-item-303"><a href="../employment-compliance/index.html">Employment Law Compliance</a></li>
                    <li class="page_item page-item-304"><a href="../workplace-agreements/index.html">Workplace Agreements</a></li>
                </ul>
                <div class="select show-for-small-only">
                    <label for="practiceslist" class="hide">Pracitces List Mobile</label>
                    <select id="practiceslist" onchange="location = this.value;">
                        <option selected="selected" disabled="disabled">Select Practice</option>
                        <option value="../employment-litigation/index.html">Employment Litigation</option>
                        <option value="../employment-counseling/index.html">Employment Counseling</option>
                        <option value="../internal-investigations/index.html">Internal Investigations</option>
                        <option value="index.html">Government Investigations</option>
                        <option value="../employment-compliance/index.html">Employment Law Compliance</option>
                        <option value="../workplace-agreements/index.html">Workplace Agreements</option>              
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection