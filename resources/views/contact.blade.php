@extends('layouts.master')

@section('pageStyles')
<link href="{{ asset('css/contact/contact.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset('images/contact.jpg') }}')">
    <div>
        <h1>Contact</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset('images/contact-mobile.jpg') }}')">
    <div>
        <h1>Contact</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-8 cell content">
            <div class="spacer">
                <h2>Get In Touch</h2>
                <p>To contact us, or to request additional information, contact us directly by phone or e-mail.</p>
                <p>Please be advised that the transmission of information via this website or by e-mail does not establish an attorney-client relationship.  Until an attorney client relationship has been established, the firm assumes no duty or liability to you and you should not expect that any communications with the firm will remain confidential or that the firm will not maintain an attorney-client relationship with parties whose interests are adverse to yours.</p>
            </div>
        </div>

        <div class="large-4 cell sidebar contact-sidebar">
            <div class="section pages">
                <h3>Address</h3>
                <ul>
                    <li>Phileo Damansara I,<br>812, Jalan 16/11,<br>Pusat Perdagangan Phileo Damansara,<br>46350 Petaling Jaya.</li>
                </ul>

                <h3>Phone Number</h3>
                <ul class="no-arrow">
                    <li><a href="tel:+03-7660 3207"><i class="fa fa-phone ico-shift"></i>03-7660 3207</a></li>
                </ul>

                <h3>Fax</h3>
                <ul class="no-arrow">
                    <li><i class="fa fa-fax ico-shift"></i>03-76653208</li>
                </ul>
            </div>
        </div>
    </div>
</div>    
@endsection