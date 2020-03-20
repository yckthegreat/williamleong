@extends('layouts.master')

@section('content')
{{-- Slider --}}
<div class="slider-hold">
    <div class="home-slider">
        <div class="slide">
            <div class="slide-thumb" style="background-image: url('{{ asset("images/home2.jpeg") }}');"></div>
            <div class="slide-mobile"><img src="{{ asset("images/home2.jpeg") }}" alt="slider1" /></div>
            <div class="outer">
                <div class="slide-content">
                    <div class="grid-container">
                        <div class="msg-box">
                            <div class="white-line"></div>
                            
                            <div class="box">
                                <span class="slider-h3 slider-blocks">Adapting Yesterday’s Laws <br> to Today’s Workplace</span>
                                <p>Many labor and employment laws were passed in the early and mid-20th century. The workplace has changed a lot since then. We work with businesses to help them apply 20th century employment laws to the 21st century workplace.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div class="slide-thumb" style="background-image: url('{{ asset("images/home3.jpg") }}');"></div>
            <div class="slide-mobile"><img src="{{ asset("images/home3.jpg") }}" alt="slider4" /></div>
            <div class="outer">
                <div class="slide-content">
                    <div class="grid-container">
                        <div class="msg-box">
                            <div class="white-line"></div>
                            
                            <div class="box">
                                <span class="slider-h3 slider-blocks">Fighting Smart</span>
                                <p>Standard litigation tactics can be ineffective, counterproductive, and sometimes even self-destructive, when used to defend employers in court or before governmental agencies. Because our firm only litigates employment disputes, we are well-versed in the unique rules associated with employment law, allowing us to bring a highly-strategic and efficient perspective to litigation.</p>
                            </div>
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
                            <div class="white-line"></div>
                            
                            <div class="box">
                                <span class="slider-h3 slider-blocks">Hitting the Moving Target <br> of Compliance</span>
                                <p>Employment laws are constantly changing and, as a result, so are employers’ compliance obligations. Because of our exclusive focus on labor and employment, we are able to keep our clients apprised of the most recent developments in the law and to help them comply with their legal obligations, without compromising their unique organizational cultures.</p>
                            </div>
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
                <p>William Leong & Co practices exclusively in the area of employment law, representing only employers. The firm counsels employers on how to comply with local, state, and federal employment laws and represents them in court, before government agencies, and in alternative forums such as arbitration and mediation. With a range of experience, including nationally recognized law practices and government, our attorneys utilize creative solutions to reduce our clients’ legal exposure, manage their risk, and advocate aggressively on their behalf.</p>
                <div class="btn-wrap"><a href="firm/index.html" class="btn btn-large">Learn More</a></div>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class="pa grid-container" id="practices">
        <h2>Practice Areas</h2>
        <div class="pa-list">
            <figure>
                <img src="{{ asset("images/area1.png") }}" alt="Arbitration" />
                <figcaption>
                    <div>
                        <h3>Arbitration</h3>
                        <span class="more">Learn More</span>
                    </div>
                    <a href="practices/employment-litigation/index.html"><span>Link to Employment Litigation</span></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area2.png") }}" alt="Construction" />
                <figcaption>
                    <div>
                        <h3>Construction</h3>
                        <span class="more">Learn More</span>
                    </div>
                    <a href="practices/employment-counseling/index.html"><span>Link to Employment Counseling</span></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area3.png") }}" alt="Bankruptcy & Insolvency" />
                <figcaption>
                    <div>
                        <h3>Bankruptcy & Insolvency</h3>
                        <span class="more">Learn More</span>
                    </div>
                    <a href="practices/internal-investigations/index.html"><span>Link to Internal Investigations</span></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area4.png") }}" alt="Corporate" />
                <figcaption>
                    <div>
                        <h3>Corporate</h3>
                        <span class="more">Learn More</span>
                    </div>
                    <a href="practices/government-investigations/index.html"><span>Link to Government Investigations</span></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area5.png") }}" alt="Conveyancing" />
                <figcaption>
                    <div>
                        <h3>Conveyancing</h3>
                        <span class="more">Learn More</span>
                    </div>
                    <a href="practices/employment-compliance/index.html"><span>Link to Employment Law Compliance</span></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area6.png") }}" alt="Debt Recovery" />
                <figcaption>
                    <div>
                        <h3>Debt Recovery</h3>
                        <span class="more">Learn More</span>
                    </div>
                    <a href="practices/workplace-agreements/index.html"><span>Link to Workplace Agreements</span></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area1.png") }}" alt="Trusts" />
                <figcaption>
                    <div>
                        <h3>Trusts</h3>
                        <span class="more">Learn More</span>
                    </div>
                    <a href="practices/workplace-agreements/index.html"><span>Link to Workplace Agreements</span></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area2.png") }}" alt="Probate & Adminstration" />
                <figcaption>
                    <div>
                        <h3>Probate & Adminstration</h3>
                        <span class="more">Learn More</span>
                    </div>
                    <a href="practices/workplace-agreements/index.html"><span>Link to Workplace Agreements</span></a>
                </figcaption>
            </figure>
            <figure>
                <img src="{{ asset("images/area3.png") }}" alt="Employment" />
                <figcaption>
                    <div>
                        <h3>Employment</h3>
                        <span class="more">Learn More</span>
                    </div>
                    <a href="practices/workplace-agreements/index.html"><span>Link to Workplace Agreements</span></a>
                </figcaption>
            </figure>
        </div>
    </section>
    <!-- Practice Areas -->
</div>
{{-- Main content end --}}
@endsection