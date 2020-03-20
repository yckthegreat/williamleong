<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            <li class="nav-title">Website</li>

            <li class="nav-item nav-dropdown">
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
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="nav-icon icon-puzzle"></i> Works
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.work.overview') }}">
                            Overview
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.work.category', ['category' => 'all']) }}">
                            All
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.work.category', ['category' => 'commercial']) }}">
                            Commercial
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.work.category', ['category' => 'retail']) }}">
                            Retail
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.work.category', ['category' => 'residential']) }}">
                            Residential
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.work.add') }}">
                            Add New Work
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>