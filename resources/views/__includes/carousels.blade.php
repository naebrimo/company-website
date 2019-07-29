@if(isset($carousels) && !is_null($carousels))
    <div id="cover-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($carousels as $i => $carousel)
                <div class="carousel-item @if($i == 0) active @endif">
                    <div class="carousel-image h-32" style="background-image: url({{ asset('img/carousel/'. $carousel->image) }})"></div>
                    @if(!is_null($carousel->caption_title))
                        <div class="carousel-caption">
                            <div class="d-block text-light p-4">
                                <h2 class="text-capitalize">{{ $carousel->caption_title }}</h2>
                                <p class="text-capitalize">{{ $carousel->caption_description }}</p>
                                <a class="btn btn-primary text-capitalize" href="{{ route($carousel->links_href) }}">{{ $carousel->links_body }}</a>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        @if(count($carousels) > 1)
        <a class="carousel-control-prev" href="#cover-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#cover-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        @endif
    </div>
@endif
