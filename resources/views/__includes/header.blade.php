<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark {{ ((count($carousels) > 0) ? 'bg-translucent-blue' : 'bg-primary' ) }}">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="{{ route('index') }}">
                <img src="{{ asset('favicon.png') }}" width="30" height="30" class="d-inline-block align-top" alt="{{ config('app.name') }}">
                {{ config('app.name') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarToggle" class="collapse navbar-collapse">
                <ul id="navbar-nav" class="navbar-nav ml-auto mt-2 mt-lg-0">
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
            </div>
        </div>
    </nav>
</header>
