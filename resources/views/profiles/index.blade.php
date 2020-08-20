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
                        <h1>{{ $people->name }}</h1>
                        <span>{{ $people->designation }}</span><br>
                        <span class="people-email"><a href="mailto:{{ $people->email }}">{{ $people->email }}</a></span>
                    </div>
                    @if ($people->qualification)
                        <h2>Professional Qualification & Membership</h2>
                        {!! $people->qualification !!}
                    @endif
                    @if ($people->experience)
                        <h2>Experience</h2>
                        {!! $people->experience !!}
                    @endif
                    @if ($people->position_held)
                        <h2>Position Held</h2>
                        {!! $people->position_held !!}
                    @endif
                    @if ($people->background)
                        <h2>Background</h2>
                        {!! $people->background !!}
                    @endif
                </div>
            </div>
        </div>
        <div class="large-4 cell sidebar">
            <div class="section pages">
                <img src="{{ $people->image->full_path ?? '' }}" alt="">
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