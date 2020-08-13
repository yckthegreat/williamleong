@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

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
                    <div class="profile-big-name">
                        <h1>Khairulnisa binti Mohd Mustafa</h1>
                        <span>Partner</span><br>
                        <span class="people-email"><a href="mailto:nisa@wleong.com.my">nisa@wleong.com.my</a></span>
                    </div>
                    <h2>Professional Qualification & Membership</h2>
                    <ul>
                        <li>LL.B (Hons) Universiti Malaya (UM)</li>
                        <li>Advocate & Solicitor, High Court of Malaya </li>
                        <li>Admission to the Malaysian Bar: 20 June 2003</li>
                    </ul>
                    <h2>Experience</h2>
                    <ul>
                        <li>Messrs Siti Haja Teh, Azreen & Khuan (Legal Assistant, 2003)</li>
                        <li>Messrs Onn & Partners (Legal Assistant, 2003)</li>
                        <li>Messrs Aziz Hon Annuar (Senior Associate, 2008)</li>
                        <li>Messrs William Leong & Co. (Senior Associate, 2014)</li>
                    </ul>
                    <h2>Background</h2>
                    <p>Khairulnisa graduated from University of Malaya in 2002 with a Bachelor of Law (Hons.) Degree. She was admitted to the High Court of Malaya in June 2003. She was retained by Messrs. Siti Haja Teh, Azreen and Khuan upon completing her reading in chambers in the firm. Later she joined Messrs. Onn & Partners before joining Messrs. Aziz Hon Annuar as Senior Associate in their Conveyancing Department.</p>

                    <p>Ms Nisa joined Messrs. William Leong & Co as Senior Associate in February 2014. Her areas of practice are conveyancing, banking, security and housing development. Her portfolio also includes commercial, building and construction laws.</p>

                    <p>With more than a decade experience in legal practice, Nisa is able to provide innovative and practical approaches to meet the challenges and needs of the clients.</p>

                    <p>Nisa's favourite quote comes from Aristotle - "Law is order, and good law is good order". She believes that laws modulate the society through justice, fairness and equality. She applies these principles in dealing with the challenges and demands in her professional and personal life.</p>
                </div>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <img src="{{ asset("images/partner2.jpg") }}" alt="">
                {{-- <div class="profile-info">
                    <h5>Khairulnisa binti Mohd Mustafa</h5>
                    <span class="people-title">Partner</span>
                    <span class="people-email"><a href="mailto:nisa@wleong.com.my"><i class="fa fa-envelope ico-shift"></i>nisa@wleong.com.my</a></span>
                </div> --}}
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