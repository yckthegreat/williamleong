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
                        <h1>Chiew Choon Man</h1>
                        <span>Associate</span><br>
                        <span class="people-email"><a href="mailto:chiew@wleong.com.my">chiew@wleong.com.my</a></span>
                    </div>
                    <h2>Professional Qualification & Membership</h2>
                    <ul>
                        <li>LL.B (Hons) Universiti Utara Malaysia (UUM)</li>
                        <li>Master of Laws, Universiti Malaya (UM)</li>
                        <li>Advocate & Solicitor, High Court of Malaya</li>
                        <li>Admission to the Malaysian Bar: 5 January 2018</li>
                    </ul>
                    <h2>Background</h2>
                    <p>Chiew Choon Man is a graduate from Universiti Utara Malaysia. He started his practice with William Leong & Co after reading in chambers in 2018. He was admitted to the High Court of Malaya in the same year. Chiew completed his master’s degree in law in year 2020.</p> 

                    <p>Chiew’s practice areas are civil litigation and conveyancing. He gained significant exposure and experience in legal practice involving construction law, commercial cases, public interest litigation, probate and administration, as well as criminal cases.</p> 

                    <p>Chiew is a firm believer of social justice and equality. He is active in movements for these causes. Chiew enjoys reading books, particularly memoirs of great leaders. He also likes to watch educational videos that provide expert insight and analysis on various issues.</p>
                </div>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <img src="{{ asset("images/man_2.jpg") }}" alt="">
                {{-- <div class="profile-info">
                    <h5>Chiew Choon Man</h5>
                    <span class="people-title">Associate</span>
                    <span class="people-email"><a href="mailto:chiew@wleong.com.my"><i class="fa fa-envelope ico-shift"></i>chiew@wleong.com.my</a></span>
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