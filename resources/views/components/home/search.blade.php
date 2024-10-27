<div id="main-content">
    <div id="widget-continue-watching"></div>
    <section class="block_area block_area_home">
        <div class="block_area-header">
            <div class="float-left bah-heading mr-4">
                <h2 class="cat-heading">Search film</h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="tab-content">
            <div class="block_area-content block_area-list film_list film_list-grid">
                <div class="film_list-wrap">

                    @foreach ($datas as $index => $data)
                        <div class="flw-item">

                            <div class="film-poster">

                                <img data-src="{{ $data->path_thumbnail }}"
                                    class="film-poster-img lazyloaded" alt="Vlad Love"
                                    src="{{ $data->path_thumbnail }}">
                                <a id-text="Vlad Love" href="{{ route('detail', $data->slug) }}"
                                    class="openPopup film-poster-ahref" data-id="vlad-love-15602"
                                    oldtitle="Vlad Love" title=""><i class="fas fa-play"></i></a>
                            </div>
                            <div class="film-detail">
                                <h3 class="film-name"><a id-text="Vlad Love"
                                        href="https://hianime.io/detail/vlad-love-15602" title="Vlad Love"
                                        class="openPopup dynamic-name" data-jname="{{ $data->title }}">{{ $data->title }}</a>
                                </h3>
                                <div class="fd-infor">
                                    <span class="fdi-item fdi-duration">{{ $data->total_minute }}m</span>

                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endforeach

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
</div>
