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
                        <h1>William Leong Jee Keen</h1>
                        <span>Managing Partner</span><br>
                        <span class="people-email"><a href="mailto:william@wleong.com.my">william@wleong.com.my</a></span>
                    </div>
                    <h2>Professional Qualification & Membership</h2>
                    <ul>
                        <li>LL.B (Hons) National University of Singapore</li>
                        <li>Advocate & Solicitor, High Court of Malaya </li>
                        <li>Admission to the Malaysian Bar: 11 January 1982</li>
                    </ul>
                    <h2>Experience</h2>
                    <ul>
                        <li>Joseph Tan & Tang (Legal Assistant, 1982-1985; Partner, 1985)</li>
                        <li>Messrs Cheang & Ariff (Partner, 1987)</li>
                    </ul>
                    <h2>Positions held</h2>
                    <ul>
                        <li>Deputy Managing Director of a public listed company</li>
                        <li>Executive Vice-President and Chief Operating Officer of a multinational corporation</li>
                    </ul>
                    <h2>Background</h2>
                    <p>William Leong graduated from the National University of Singapore in 1981 with an LLB (Honours) Degree and was called to the Malaysian Bar on 11th January, 1982.</p>

                    <p>From 1982 to 1985, he was attached to the firm of Messrs. Joseph Tan & Tang as a legal assistant and subsequently, appointed as a Partner in 1985. In 1987, together with four other lawyers, they took over the management of Messrs. Joseph Tan & Tang to form the new legal firm of Messrs. Cheang & Ariff.</p> 

                    <p>William has established himself as a leading corporate, litigation and commercial practitioner with a wide clientele base consisting of public-listed and international companies in Malaysia, many of which are listed amongst the Fortune 500 companies. He has been involved in the major restructuring of various companies and turn-around exercises in Malaysia. Having worked closely with these corporations equipped him with the knowledge and experience to handle business disposals, share issues, bond issues and stock option plans.</p>

                    <p>In 1994, William joined the corporate sector to gain exposure in business and management. He was appointed to the board of several private and public-listed companies and have held several senior executive appointments Deputy Managing Director of a local public-listed company and as Chief Operating Officer and Executive Vice-President of one of the twenty largest corporations in a South-East Asian country.</p>

                    <p>William returned to active practice in 1998 and established Messrs. William Leong & Co. as a boutique firm. Having gained insights in business and management he is able to provide practical and innovative approaches to serve his clients effectively while maintaining a personal relationship with them. The Firm's clients range from international companies to local small business owners as well as individuals.</p>

                    <p>William carved a name for himself in the field of corporate litigation with many of the cases handled by him reported in the law journals and involved in landmark decisions and cases that led to amendments to existing legislations.</p>

                    <p>William is currently a Member of Parliament for Selayang constituency. He has been holding the seat since 2008. He is also a Member of Parliamentary Accountability Committee (PAC). He writes articles during his free time and his writing can be found in various websites and news portal on Malaysian politics and current issues.</p>
                </div>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <img src="{{ asset("images/william_2.jpg") }}" alt="">
                {{-- <div class="profile-info">
                    <h5>William Leong Jee Keen</h5>
                    <span class="people-title">Managing Partner</span>
                    <span class="people-email"><a href="mailto:william@wleong.com.my"><i class="fa fa-envelope ico-shift"></i>william@wleong.com.my</a></span>
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