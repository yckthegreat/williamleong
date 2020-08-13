@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/the_firm.jpg") }}')">
    <div>
        <h1>The Firm</h1>                
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/the_firm_mobile.jpg") }}')">
    <div>
        <h1>The Firm</h1>                
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell content">
            <div class="spacer" style="text-align: justify; padding-right: 0px;">
                <p style="text-indent: 40px">Messrs William Leong started as a sole proprietor law firm in year 1998. Gradually it expanded with the addition of new partners and became William Leong & Co as it is known today. Even with the expansion, our firm remained a boutique law firm, specialising in a niche area of legal practice and serving sophisticated clientele. The exclusive nature of our firm’s practice enables us to focus all our attention and energy into solving our client’s disputes with meticulous work and innovative solutions which are tailor-made to suit each client.</p>
                {{-- <div class="the-firm-group-photo">
                    <img src="{{ asset("images/IMG_8508.jpg") }}" alt="">
                </div> --}}
                <p></p>
                <p style="text-indent: 40px; font-style: italic; color: #b30337;">Our aim is to provide our clients with practical and cost-effective solutions and representation.</p>
                <p style="text-indent: 40px">We have a close-knit team of dynamic lawyers and diligent staff who strive to deliver our clients’ needs at the highest standards. We treat each dispute that comes through our door as a personal challenge which we endeavour to solve with distinction. At William Leong & Co, we recognize the importance of understanding our clients and their priorities to ensure they achieve their goals.</p>
            </div>
        </div>
    </div>
</div>
@endsection