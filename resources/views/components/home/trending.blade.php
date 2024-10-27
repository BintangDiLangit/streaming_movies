<div id="anime-trending">
    <div class="container">
        <section class="block_area block_area_trending">
            <div class="block_area-header">
                <div class="bah-heading">
                    <h2 class="cat-heading">Trending</h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="block_area-content">
                <div class="trending-list" id="trending-home" style="">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper"
                            style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

                            @foreach ($datas as $index => $data )
                                <div class="swiper-slide swiper-slide-active" data-id="{{ $data->slug }}"
                                    style="width: 278.75px; margin-right: 20px;">
                                    <div class="item">
                                        <div class="number">
                                            <span>0{{ $index + 1 }}</span>
                                            <div class="film-title dynamic-name" data-jname="{{ $data->title }}">
                                                {{ $data->title }}</div>
                                        </div>
                                        <a href="{{ route('detail', $data->slug) }}"
                                            class="film-poster trending_poster" id-text="{{ $data->slug }}">
                                            <img data-src="{{ $data->path_thumbnail }}"
                                                class="film-poster-img lazyloaded" title="{{ $data->title }}" alt="{{ $data->title }}"
                                                src="{{ $data->path_thumbnail }}">
                                        </a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="trending-navi">
                        <div class="navi-next" tabindex="0" role="button" aria-label="Next slide"
                            aria-disabled="false">
                            <i class="fas fa-angle-right"></i>
                        </div>
                        <div class="navi-prev swiper-button-disabled" tabindex="-1" role="button"
                            aria-label="Previous slide" aria-disabled="true"><i class="fas fa-angle-left"></i></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
