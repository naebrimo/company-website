<ul class="nav flex-column mb-3">
    <li class="nav-item">
        <a class="nav-link text-capitalize {{ Route::currentRouteNamed('index.dashboard.index') ? 'active' : null }}" href="{{ route('index.dashboard.index') }}">home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-capitalize {{ Route::currentRouteNamed('index.dashboard.pages') ? 'active' : null }}" href="{{ route('index.dashboard.pages') }}">pages</a>
    </li>
    <li class="nav-item text-capitalize">
        <a class="nav-link text-capitalize {{ Route::currentRouteNamed('index.dashboard.carousels') ? 'active' : null }}" href="{{ route('index.dashboard.carousels') }}">carousels</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-capitalize {{ Route::currentRouteNamed('index.dashboard.navlinks') ? 'active' : null }}" href="{{ route('index.dashboard.navlinks') }}">navlinks</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-capitalize {{ Route::currentRouteNamed('index.dashboard.articles') ? 'active' : null }}" href="{{ route('index.dashboard.articles') }}">articles</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-capitalize {{ Route::currentRouteNamed('index.dashboard.career-postings') ? 'active' : null }}" href="{{ route('index.dashboard.career-postings') }}">career postings</a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-capitalize {{ Route::currentRouteNamed('index.dashboard.corporate-news') ? 'active' : null }}" href="{{ route('index.dashboard.corporate-news') }}">corporate news</a>
    </li>

</ul>
