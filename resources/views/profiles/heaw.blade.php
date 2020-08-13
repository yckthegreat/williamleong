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
                        <h1>Rita Heaw Yu Hoey</h1>
                        <span>Associate</span><br>
                        <span class="people-email"><a href="mailto:ritaheaw@wleong.com.my">ritaheaw@wleong.com.my</a></span>
                    </div>
                    <h2>Professional Qualification & Membership</h2>
                    <ul>
                        <li>LL.B (Hons) Multimedia University</li>
                        <li>Advocate & Solicitor, High Court of Malaya </li>
                        <li>Admission to the Malaysian Bar: 25 May 2018</li>
                    </ul>
                    <h2>Background</h2>
                    <p>Rita Heaw graduated from Multimedia University (MMU) in 2017. She completed her pupillage in Messrs. Alvin John & Partners and was admitted as an Advocate & Solicitor to the High Court of Malaya in May 2018. One month later, she officially began her legal practice in the firm.</p>

                    <p>Rita's legal practices in the firm are civil litigation including contractual claims, construction matters and arbitration, corporate and commercial, probate and administration and conveyancing. She also had experience during her attachment and pupillage in family law and employment matters.</p> 

                    <p>Rita strongly believes that keeping an open heart and mind is crucial to self-improvement. Her desire to learn and be exposed to various areas of law are a boon which a young lawyer should possess and cultivate.</p> 

                    <p>Rita is a First Kyu practitioner of Aikido, and enjoys reading, swimming and travelling.</p>
                </div>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <img src="{{ asset("images/heaw.jpg") }}" alt="">
                {{-- <div class="profile-info">
                    <h5>Rita Heaw Yu Hoey</h5>
                    <span class="people-title">Associate</span>
                    <span class="people-email"><a href="mailto:ritaheaw@wleong.com.my"><i class="fa fa-envelope ico-shift"></i>ritaheaw@wleong.com.my</a></span>
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