@extends('layouts.master')

@section('content')
<div class="top-spacer"></div>

<div class="banner hide-for-small-only" style="background-image: url('{{ asset("images/the_firm.jpg") }}')">
    <div>
        <h1>Our People</h1>
    </div>
</div>

<div class="banner show-for-small-only" style="background-image: url('{{ asset("images/the_firm_mobile.jpg") }}')">
    <div>
        <h1>Our People</h1>
    </div>
</div>

<div id="main" class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell content">
            <div class="spacer" style="padding-right: 0px;">
                <div class="att-list">
                    @foreach ($people as $ppl)
                        <div class="large-4 medium-6 small-12 columns single-lawyer">
                            <a href="{{ route('people.show', ['people' => $ppl->slug]) }}">
                                <div class="image-box">
                                    <img src="{{ $ppl->image->full_path ?? '' }}" alt="" />
                                    <div class="inner-border"></div>
                                </div>
                                <h3>
                                    <span>{{ $ppl->name }}</span>
                                    <small>{{ $ppl->designation }}</small>
                                </h3>
                                <div class="hover">

                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{-- <div class="large-4 medium-6 small-12 columns single-lawyer">
                        <a href="{{ route('william') }}">
                            <div class="image-box">
                                <img src="{{ asset("images/william.jpg") }}" alt="" />
                                <div class="inner-border"></div>
                            </div>
                            <h3>
                                <span>William Leong Jee Keen</span>
                                <small>Managing Partner</small>
                            </h3>
                            <div class="hover">

                            </div>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns single-lawyer">
                        <a href="{{ route('khairulnisa') }}">
                            <div class="image-box">
                                <img src="{{ asset("images/partner2_2.jpg") }}" alt="" />
                                <div class="inner-border"></div>
                            </div>
                            <h3>
                                <span>Khairulnisa Binti Mohd Mustafa</span>
                                <small>Partner</small>
                            </h3>
                            <div class="hover">

                            </div>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns single-lawyer">
                        <a href="{{ route('jessie') }}">
                            <div class="image-box">
                                <img src="{{ asset("images/partner1.jpg") }}" alt="" />
                                <div class="inner-border"></div>
                            </div>
                            <h3>
                                <span>Jessie Chong Bee Choo</span>
                                <small>Partner</small>
                            </h3>
                            <div class="hover">

                            </div>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns single-lawyer">
                        <a href="{{ route('man') }}">
                            <div class="image-box">
                                <img src="{{ asset("images/man.jpg") }}" alt="" />
                                <div class="inner-border"></div>
                            </div>
                            <h3>
                                <span>Chiew Choon Man</span>
                                <small>Associate</small>
                            </h3>
                            <div class="hover">

                            </div>
                        </a>
                    </div>
                    <div class="large-4 medium-6 small-12 columns single-lawyer">
                        <a href="{{ route('heaw') }}">
                            <div class="image-box">
                                <img src="{{ asset("images/heaw.jpg") }}" alt="" />
                                <div class="inner-border"></div>
                            </div>
                            <h3>
                                <span>Rita Heaw Yu Hoey</span>
                                <small>Associate</small>
                            </h3>
                            <div class="hover">

                            </div>
                        </a>
                    </div> --}}

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection