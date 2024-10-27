<div class="deslide-wrap">
    <div class="container">
        <div id="slider" class="swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper" style="transition-duration: 300ms; transform: translate3d(-11385px, 0px, 0px);">

                @foreach ($datas as $index => $data)
                    <div class="swiper-slide">
                        <div class="deslide-item">
                            <div class="deslide-cover">
                                <div class="deslide-cover-img">
                                    <img class="film-poster-img lazyloaded"
                                        data-src="{{ $data->path_thumbnail }}"
                                        alt="{{ $data->title }}"
                                        src="{{ $data->path_thumbnail }}">
                                </div>
                            </div>
                            <div class="deslide-item-content">
                                <div class="desi-sub-text">#{{ $index + 1 }} Spotlight</div>
                                <div class="desi-head-title dynamic-name" data-jname="鬼滅の刃 柱稽古編">
                                    {{ $data->title }}</div>
                                <div class="sc-detail">
                                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>{{ $data->total_minute }}m</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="desi-description">
                                    {{ $data->description }}</div>
                                <div class="desi-buttons">
                                    <a id-text="Demon Slayer: Kimetsu no Yaiba Hashira Training Arc"
                                        href="{{ route('detail', $data->slug) }}"
                                        class="btn btn-primary btn-radius mr-2 openPopup"><i
                                            class="fas fa-play-circle mr-2"></i>Watch
                                        Now</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            <div class="swiper-navigation">
                <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
                    <i class="fas fa-angle-right"></i>
                </div>
                <div class="swiper-button swiper-button-prev" tabindex="0" role="button"
                    aria-label="Previous slide"><i class="fas fa-angle-left"></i></div>
            </div>
            <div class="clearfix"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</div>
