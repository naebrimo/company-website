@foreach($navlinks as $navlink)
@if(!Route::has(explode('#', $navlink->href)[0]) && strtolower($navlink->href) != strtolower(config('app.name')))
    <section id="{{ strtolower($navlink->href) }}" class="section">
        <div class="container">
            @if(!is_null($navlink->articles()->get()) && count($navlink->articles()->get()))
                <h3 class="section-title">{{ $navlink->body }}</h3>
                @foreach($navlink->articles()->get() as $article)
                    @if(is_null($article->template))
                        <article class="section-article">
                            @if(!is_null($article->title))
                                <h3 class="article-title text-capitalize">{{ $article->title }}</h3>
                            @endif
                            <div class="article-text text-justify">{!! $article->body !!}</div>
                        </article>
                    @else
                        @include('__includes/articles/'.$article->template)
                    @endif
                @endforeach
            @endif
        </div>
    </section>
@endif
@endforeach
