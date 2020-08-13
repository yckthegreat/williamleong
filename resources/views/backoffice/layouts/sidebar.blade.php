<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">

            <li class="nav-title">Website</li>

            {{-- <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-user-follow"></i> People
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.people.overview') }}">
                            Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.people.add') }}">
                            Add New People
                        </a>
                    </li>
                </ul>
            </li> --}}

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-puzzle"></i> Articles
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.articles.overview') }}">
                            Overview
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.articles.add') }}">
                            Add New Article
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>