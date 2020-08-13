@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="slider-hold">
    <div class="home-slider">
        <div class="slide">
            <div class="slide-thumb" style="background-image: url('{{ asset("images/william_frontdoor.jpg") }}');"></div>
            <div class="slide-mobile"><img src="{{ asset("images/william_frontdoor.jpg") }}" alt="slider1" /></div>
            <div class="outer">
                <div class="slide-content">
                    <div class="grid-container">
                        <div class="msg-box">
                            {{-- <div class="white-line"></div> --}}
                            
                            {{-- <div class="box">
                                <span class="slider-h3 slider-blocks">Adapting Yesterday’s Laws <br> to Today’s Workplace</span>
                                <p>Many labor and employment laws were passed in the early and mid-20th century. The workplace has changed a lot since then. We work with businesses to help them apply 20th century employment laws to the 21st century workplace.</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-thumb" style="background-image: url('{{ asset("images/IMG_8488.jpg") }}');"></div>
            <div class="slide-mobile"><img src="{{ asset("images/IMG_8488.jpg") }}" alt="slider4" /></div>
            <div class="outer">
                <div class="slide-content">
                    <div class="grid-container">
                        <div class="msg-box">
                            {{-- <div class="white-line"></div> --}}
                            
                            {{-- <div class="box">
                                <span class="slider-h3 slider-blocks">Fighting Smart</span>
                                <p>Standard litigation tactics can be ineffective, counterproductive, and sometimes even self-destructive, when used to defend employers in court or before governmental agencies. Because our firm only litigates employment disputes, we are well-versed in the unique rules associated with employment law, allowing us to bring a highly-strategic and efficient perspective to litigation.</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-thumb" style="background-image: url('{{ asset("images/home1.jpg") }}');"></div>
            <div class="slide-mobile"><img src="{{ asset("images/home1.jpg") }}" alt="slider2" /></div>
            <div class="outer">
                <div class="slide-content">
                    <div class="grid-container">
                        <div class="msg-box">
                            {{-- <div class="white-line"></div>
                            
                            <div class="box">
                                <span class="slider-h3 slider-blocks">Hitting the Moving Target <br> of Compliance</span>
                                <p>Employment laws are constantly changing and, as a result, so are employers’ compliance obligations. Because of our exclusive focus on labor and employment, we are able to keep our clients apprised of the most recent developments in the law and to help them comply with their legal obligations, without compromising their unique organizational cultures.</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Slider end --}}

{{-- Main Content --}}
<div class="home-main">
    <section id="about" style="background-image: url('{{ asset("images/homebg.png") }}')">
        <div class="grid-container">
            <div class="text">
                <h1>About The Firm</h1>
                <p>Advocates & Solicitors. Established since 1998.</p>
                <div class="btn-wrap"><a href="{{ route('firm') }}" class="btn btn-large">Learn More</a></div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section id="meet-our-team" class="pa grid-container">
        <div class="meet-our-team-photo">
            <img src="{{ asset("images/IMG_8502_2.jpg") }}" alt="">
        </div>

        <div class="meet-our-team-description text">
            <p style="text-indent: 40px; font-style: italic; margin: 0; padding-top: 1rem;">
                Devotion to client satisfaction and delivery of services exceeding expectations:
Placing our clients’ perspectives and needs at the top of our priorities, we strive to be our clients’ most trusted advisor and partner through their highs and lows.
            </p>
            <p></p>
            <div class="btn-wrap" style="text-align: center;"><a href="{{ route('people') }}" class="btn btn-large">Learn More</a></div>
        </div>
    </section>
    <section class="pa grid-container" id="practices">
        <h2>Practice Areas</h2>
        <div class="pa-list">
            <figure>
                <img src="{{ asset("images/area1.png") }}" alt="Litigation" />
                <figcaption>
                    <div>
                        <h3>Litigation</h3>
                    </div>
                    <a href="{{ route('litigation') }}"></a>
                </figcaption>
            </figure> 
            <figure>
                <img src="{{ asset("images/area2.png") }}" alt="Corporate & Commercial" />
                <figcaption>
                    <div>
                        <h3>Corporate & Commercial</h3>
                    </div>
                    <a href="{{ route('corporate-commercial') }}"></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area3.png") }}" alt="Property & Conveyancing" />
                <figcaption>
                    <div>
                        <h3>Property & Conveyancing</h3>
                    </div>
                    <a href="{{ route('property-conveyancing') }}"></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area5.png") }}" alt="Consumer & Retail Business" />
                <figcaption>
                    <div>
                        <h3>Consumer & Retail Business</h3>
                    </div>
                    <a href="{{ route('consumer-business') }}"></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area4.png") }}" alt="Wills & Probate" />
                <figcaption>
                    <div>
                        <h3>Wills & Probate</h3>
                    </div>
                    <a href="{{ route('wills-probate') }}"></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area6.png") }}" alt="Divorce" />
                <figcaption>
                    <div>
                        <h3>Divorce</h3>
                    </div>
                    <a href="{{ route('divorce') }}"></a>
                </figcaption>
            </figure>
        </div>
    </section>
    <!-- Practice Areas -->
</div>
{{-- Main content end --}}
@endsection