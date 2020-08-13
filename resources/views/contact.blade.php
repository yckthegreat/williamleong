@extends('layouts.master')

@section('pageStyles')
<link href="{{ asset('css/contact/contact.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset('images/contact_top.jpg') }}')">
    <div>
        <h1>Contact</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset('images/contact_top_mobile.jpg') }}')">
    <div>
        <h1>Contact</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <h2>Get In Touch</h2>
                <p>We would like to hear from you! To contact us, or to request additional information, please contact us directly by phone or e-mail.</p>

                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8805716579636!2d101.64145821525206!3d3.1262654541634998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc496948506011%3A0x2d6f24936d1ba4c5!2sWilliam%20Leong%20%26%20Co!5e0!3m2!1sen!2smy!4v1585744456537!5m2!1sen!2smy" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>

        <div class="large-4 cell sidebar contact-sidebar">
            <div class="section pages">
                <h3>Address</h3>
                <ul>
                    <li>Suite 812 & 813,<br>Block E, Phileo Damansara 1,<br>No. 9, Jalan 16/11,<br>46350 Petaling Jaya, Selangor.</li>
                </ul>

                <h3>Office Hours</h3>
                <ul>
                    <li>Monday to Friday: 8.30am- 5.30pm </li>
                </ul>

                <h3>Phone Number</h3>
                <ul>
                    <li><a href="tel:+03-7660 3207">03-7660 3207</a></li>
                </ul>

                <h3>Email</h3>
                <ul>
                    <li><a href="mailto:wlaw@wleong.com.my ">wlaw@wleong.com.my </a></li>
                </ul>

                <h3>Fax</h3>
                <ul>
                    <li>03- 7660 3206</li>
                </ul>
            </div>
        </div>
    </div>
</div>    
@endsection