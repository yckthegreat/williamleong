@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/evan-j-white.jpg") }}')">
    <div>
        <h1>Evan J. White<span class="atty-header-pos">Partner</span></h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/evan-j-white-1.jpg") }}')">
    <div>
        <h1>Evan J. White<span class="atty-header-pos">Partner</span></h1>                
    </div>
</div>

<div id="main" class="grid-container attypage">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <div class="atab" id="tab-jump" style="display: none;">
                <div class="medium-3 colmns">
                    <button class="tablinks" onclick="openAtty(event, 'aoverview')" id="defaultOpen">Overview</button>
                </div>
                </div>
                <div id="aoverview" class="atabcontent">
                    <h2>Legal Practice</h2>
                    <p>Evan is admitted to practice in both New York and New Jersey. His extensive labor and employment law background includes both private practice and government experience.</p>
                    <p>Evan represents employers in matters involving:</p>
                    <ul>
                        <li><strong>Employment discrimination</strong>, including before government agencies, such as the New York State Division of Human Rights, the Equal Employment Opportunity Commission, as well as in lawsuits filed in state and federal courts;</li>
                        <li><strong>Wage-and-hour compliance</strong> and the representation of employers in disputes before the Department of Labor, as well as in state and federal courts;</li>
                        <li><strong>Union disputes and collective bargaining issues</strong>;</li>
                        <li>Labor and employment <strong>due diligence in corporate transactions</strong>, including mergers and acquisitions;</li>
                        <li>Employee disability and <strong>accommodation counseling</strong>.</li>
                    </ul>
                    <p>Evan also helps reduce his clients’ risk of labor and employment-related legal claims through workplace trainings, including <strong>anti-discrimination and harassment training</strong>. In addition, Evan is frequently called upon to lecture on labor and employment matters for a wide range of professional organizations and institutions. <a class="link-pub" href="#apublications">He has also been quoted by several notable publications to comment on newsworthy matters in the area of labor and employment law.</a></p>
                    <p>Evan’s government experience includes service as an Assistant General Counsel for the Mayor’s Office of Labor Relations, which is responsible for municipal labor relations for the City of New York, which employs approximately 300,000 people and 140 individual bargaining units. There, he provided legal counsel and represented the City in collective bargaining negotiations. He also served as a Review Officer for the New York City Office of Labor Relations.  In that capacity, he heard labor grievances between the City of New York and its unions involving issues such as discipline and discharge of City employees and contractual disputes arising from collective bargaining agreements.</p>
                    <p>Previously, Evan practiced employment law at one of New York City’s oldest law firms. There, he represented employers in a broad range of industries including healthcare, higher education, and the automotive industry. He also drafted collective bargaining agreements, employer policies, handbooks, severance agreements, employment contracts, and appeared in federal and state courts and before administrative agencies.</p>
                    <h2> </h2>
                </div>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <h3>Contact</h3>
                <ul class="atty-info">
                    <li><a href="mailto:ewhite@whiteharrislaw.com"><i class="fa fa-envelope ico-shift"></i> ewhite@whiteharrislaw.com</a></li>
                    <li><a href="tel:+1-212-518-3997"><i class="fa fa-phone ico-shift"></i> 212-518-3997 x 1</a></li>						    
                </ul>
                <h3>Bar &amp; Court Admissions</h3>
                <ul>
                    <li>State of New Jersey</li>
                    <li>State of New York</li>
                    <li>United States District Court, Southern District of New York</li>
                    <li>United States District Court, Eastern District of New York</li>
                </ul>
                <h3>Education</h3>
                <ul>
                    <li>J.D., New York Law School (2005)</li>
                    <li>B.A., Lafayette College (2002)</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
								
    function openAtty(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("atabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
@endsection