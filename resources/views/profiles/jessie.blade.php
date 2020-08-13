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
                        <h1>Jessie Chong Bee Choo</h1>
                        <span>Partner</span><br>
                        <span class="people-email"><a href="mailto:jessie@wleong.com.my">jessie@wleong.com.my</a></span>
                    </div>
                    <h2>Professional Qualification & Membership</h2>
                    <ul>
                        <li>LL.B (Hons) University of London</li>
                        <li>Certificate of Legal Practice</li>
                        <li>Advocate & Solicitor, High Court of Malaya </li>
                        <li>Admission to the Malaysian Bar: 7 February 2014</li>
                    </ul>
                    <h2>Experience</h2>
                    <ul>
                        <li>Messrs William Leong & Co. (Legal Assistant, 2014)</li>
                        <li>Messrs K Y Lim & Partners (Legal Assistant, 2015)</li>
                    </ul>
                    <h2>Background</h2>
                    <p>Jessie Chong Bee Choo graduated from University of London in 2008 with a Bachelor of Laws (Hons) degree. She commenced her pupillage at Messrs Lee Partnership and was admitted as an advocate and solicitors of the High Court on 7 February 2014. After being called to the Malaysian Bar, she then joined Messrs William Leong & Co and handled developer’s project works and conveyancing matters. In year 2015, she joined Messrs K Y LIM & PARTNERS as a legal assistant in conveyancing matters and sub-sale transactions. Subsequently, she joined Messrs William Leong & Co in year 2019 as a partner.</p>

                    <p>Jessie’s primary areas of practice are property, real estate, banking transactions, corporate and commercial as well as probate and administration.</p>

                    <p>Jessie firmly upholds the principle of justice in her legal practice. She constantly strives to ensure that her clients’ interests are well protected and at the same time act fairly to all parties in a transaction.</p>

                    <p>She also believes that anything is possible if you have the right mindset, will and desire to do it, and by putting in the effort to achieve your goals.</p>
                </div>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <img src="{{ asset("images/partner1_2.jpg") }}" alt="">
                {{-- <div class="profile-info">
                    <h5>Jessie Chong Bee Choo</h5>
                    <span class="people-title">Partner</span>
                    <span class="people-email"><a href="mailto:jessie@wleong.com.my"><i class="fa fa-envelope ico-shift"></i>jessie@wleong.com.my</a></span>
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