<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="{{ route('index') }}">
            <img src="{{ asset('favicon.png') }}" width="30" height="30" class="d-inline-block align-top" alt="{{ config('app.name') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarToggle" class="collapse navbar-collapse">
            @if(isset($navlinks) && count($navlinks) > 0 )
                <ul id="navbar-nav" class="navbar-nav ml-auto">
                    @foreach($navlinks as $navlink)
                        <li class="nav-item">
                            @if(count(explode('#',$navlink->href)) == 2)
                                <a class="nav-link text-capitalize" href="{{ implode('#',[route(explode('#', $navlink->href)[0]),explode('#', $navlink->href)[1]]) }}" title="{{ strtoupper($navlink->body) }}">{{ $navlink->body }}</a>
                            @else
                                @if(Route::has($navlink->body))
                                    <a class="nav-link text-capitalize" href="{{ route($navlink->href) }}" title="{{ strtoupper($navlink->body) }}">{{ $navlink->body }}</a>
                                @else
                                    <a class="nav-link text-capitalize" href="{{ implode('', ['#', $navlink->href,]) }}" title="{{ strtoupper($navlink->body) }}">{{ $navlink->body }}</a>
                                @endif
                            @endif
                        </li>
                    @endforeach
                </ul>
            @else
                @if(Auth::guard('admin')->check())
                    @if(Route::currentRouteNamed('index.dashboard*'))
                        <ul class="navbar-nav ml-auto">
                    @else
                        <ul class="navbar-nav mr-auto">
                    @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdownUser" class="nav-link text-capitalize" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                logged in as: {{ Auth::guard('admin')->user()->name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownUser">
                                @if(Route::currentRouteNamed('index.dashboard*'))
                                    <a class="dropdown-item text-capitalize" href="{{ route('index') }}" title="{{ __('preview website') }}">{{ __('preview website') }}</a>
                                @else
                                    <a class="dropdown-item text-capitalize" href="{{ route('index.dashboard.index') }}" title="{{ __('go to dashboard') }}">{{ __('go to dashboard') }}</a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-capitalize" href="{{ route('index.dashboard.logout') }}" title="{{ __('logout') }}">{{ __('logout') }}</a>
                            </div>
                        </li>
                    </ul>
                @endif
            @endif
        </div>
    </div>
    </div>
</nav>
