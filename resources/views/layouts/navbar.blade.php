<nav id="menu" class="navigation">   
        <ul id="menu-main-navigation" class="">
            <li class=""><a href="{{ route('firm') }}">The Firm</a></li>
            <li class=""><a href="{{ route('people') }}">Our People</a></li>
            <li class="menu-item-has-children menu-item-331"><a href="#">Practices</a>
                <ul class="sub-menu">
                    <li class=""><a href="{{ route('litigation') }}">Litigation</a></li>
                    <li class=""><a href="{{ route('corporate-commercial') }}">Corporate & Commercial</a></li>
                    <li class=""><a href="{{ route('property-conveyancing') }}">Property & Conveyancing</a></li>
                    <li class=""><a href="{{ route('consumer-business') }}">Consumer & Retail Business</a></li>
                    <li class=""><a href="{{ route('wills-probate') }}">Wills & Probate</a></li>
                    <li class=""><a href="{{ route('divorce') }}">Divorce</a></li>
                </ul>
            </li>
            <li id="menu-item-329" class=" menu-item-329"><a href="{{ route('articles') }}">Articles</a></li>
            <li id="menu-item-142" class=" menu-item-142"><a href="{{ route('contact') }}">Contact</a></li>
        </ul>        
    </nav>
    <!-- Mobile Menu ends here -->
    <header class="Fixed">
        <div class="grid-container">
            <div class="header-wrap">
                <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset("images/wllogo.png") }}" alt="William Leong & Co" /></a></div>
                <a href="#menu" class="mobile-menu"><i class="fa fa-bars"><span class="hide">Mobile Menu</span></i></a>
                <nav id="nav">
                    <ul id="menu-main-navigation-1" class="">
                        <li class=""><a href="{{ route('firm') }}">The Firm</a></li>
                        <li class=""><a href="{{ route('people') }}">Our People</a></li>
                        <li class="menu-item-has-children menu-item-331"><a href="#">Practices</a>
                            <ul class="sub-menu">
                                <li class=""><a href="{{ route('litigation') }}">Litigation</a></li>
                                <li class=""><a href="{{ route('corporate-commercial') }}">Corporate & Commercial</a></li>
                                <li class=""><a href="{{ route('property-conveyancing') }}">Property & Conveyancing</a></li>
                                <li class=""><a href="{{ route('consumer-business') }}">Consumer & Retail Business</a></li>
                                <li class=""><a href="{{ route('wills-probate') }}">Wills & Probate</a></li>
                                <li class=""><a href="{{ route('divorce') }}">Divorce</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="{{ route('articles') }}">Articles</a></li>
                        <li class=""><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>                    
                </nav> 
            </div>
        </div>
    </header>
    <!-- Header -->