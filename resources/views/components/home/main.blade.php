<div id="main-content">
    <div id="widget-continue-watching"></div>
    <section class="block_area block_area_home">
        <div class="block_area-header">
            <div class="float-left bah-heading mr-4">
                <h2 class="cat-heading">Latest Film</h2>
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
                                    class="film-poster-img lazyloaded" alt="{{ $data->title }}"
                                    src="{{ $data->path_thumbnail }}">
                                <a id-text="{{ $data->title }}" href="{{ route('detail', $data->slug) }}"
                                    class="openPopup film-poster-ahref" data-id="{{ $data->slug }}"
                                    oldtitle="{{ $data->title }}" title=""><i class="fas fa-play"></i></a>
                            </div>
                            <div class="film-detail">
                                <h3 class="film-name"><a id-text="{{ $data->slug }}"
                                        href="https://hianime.io/detail/vlad-love-15602" title="{{ $data->title }}"
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
<div id="main-sidebar">
    <section class="block_area block_area_sidebar block_area-realtime">
        <div class="block_area-header">
            <div class="float-left bah-heading mr-2">
                <h2 class="cat-heading">Top 3</h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="block_area-content">
            <div class="cbox cbox-list cbox-realtime">
                <div class="cbox-content">
                    <div class="tab-content">
                        <div id="top-viewed-day" class="anif-block-ul anif-block-chart tab-pane active">
                            <ul class="ulclear">

                                @foreach ($datas as $index => $data)
                                    <li class="item-top">
                                        <div class="film-number"><span>{{ $index + 1 }}</span></div>
                                        <div class="film-poster" data-id="{{ $data->slug }}">
                                            <img data-src="{{ $data->path_thumbnail }}"
                                                class="film-poster-img ls-is-cached lazyloaded"
                                                alt="{{ $data->title }}"
                                                src="{{ $data->path_thumbnail }}">
                                        </div>
                                        <div class="film-detail">
                                            <h3 class="film-name">
                                                <a href="{{ route('detail', $data->slug) }}"
                                                    title="{{ $data->title }}" class="dynamic-name"
                                                    data-jname="{{ $data->title }}">{{ $data->title }}</a>
                                            </h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div id="top-viewed-week" class="anif-block-ul anif-block-chart tab-pane">
                            <ul class="ulclear">

                                <li class="item-top">
                                    <div class="film-number"><span>1</span></div>
                                    <div class="film-poster item-qtip" data-id="vlad-love-15602">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/vlad-love-15602_poster.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded" alt="Vlad Love"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/vlad-love-15602_poster.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/vlad-love-15602" title="Vlad Love"
                                                class="dynamic-name" data-jname="Vlad Love">Vlad Love</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>2</span></div>
                                    <div class="film-poster item-qtip" data-id="violet-evergarden-extra-episode-201">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/violet-evergarden-extra-episode-201_poster.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Violet Evergarden Extra Episode"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/violet-evergarden-extra-episode-201_poster.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/violet-evergarden-extra-episode-201"
                                                title="Violet Evergarden Extra Episode" class="dynamic-name"
                                                data-jname="Violet Evergarden Extra Episode">Violet
                                                Evergarden Extra Episode</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>3</span></div>
                                    <div class="film-poster item-qtip"
                                        data-id="captain-harlock-arcadia-of-my-youth-1543">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/captain-harlock-arcadia-of-my-youth-1543_poster.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Captain Harlock: Arcadia of my Youth"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/captain-harlock-arcadia-of-my-youth-1543_poster.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/captain-harlock-arcadia-of-my-youth-1543"
                                                title="Captain Harlock: Arcadia of my Youth" class="dynamic-name"
                                                data-jname="Captain Harlock: Arcadia of my Youth">Captain
                                                Harlock: Arcadia of my Youth</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>4</span></div>
                                    <div class="film-poster item-qtip" data-id="voltage-fighter-gowcaizer-ova-17896">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/voltage-fighter-gowcaizer-ova-17896_poster.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Voltage Fighter Gowcaizer: OVA"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/voltage-fighter-gowcaizer-ova-17896_poster.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/voltage-fighter-gowcaizer-ova-17896"
                                                title="Voltage Fighter Gowcaizer: OVA" class="dynamic-name"
                                                data-jname="Voltage Fighter Gowcaizer: OVA">Voltage
                                                Fighter Gowcaizer: OVA</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>5</span></div>
                                    <div class="film-poster item-qtip" data-id="the-rose-of-versailles-200">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/the-rose-of-versailles-200_poster.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="The Rose of Versailles"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/the-rose-of-versailles-200_poster.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/the-rose-of-versailles-200"
                                                title="The Rose of Versailles" class="dynamic-name"
                                                data-jname="The Rose of Versailles">The Rose of
                                                Versailles</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>6</span></div>
                                    <div class="film-poster item-qtip"
                                        data-id="the-case-study-of-vanitas-part-2-17932">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/the-case-study-of-vanitas-part-2-17932_poster.png"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="The Case Study of Vanitas Part 2"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/the-case-study-of-vanitas-part-2-17932_poster.png">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/the-case-study-of-vanitas-part-2-17932"
                                                title="The Case Study of Vanitas Part 2" class="dynamic-name"
                                                data-jname="The Case Study of Vanitas Part 2">The Case
                                                Study of Vanitas Part 2</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>7</span></div>
                                    <div class="film-poster item-qtip" data-id="wz-9233">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/wz-9233_poster.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded" alt="W"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/wz-9233_poster.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/wz-9233" title="W"
                                                class="dynamic-name" data-jname="W">W</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>8</span></div>
                                    <div class="film-poster item-qtip" data-id="virtual-san-looking-9480">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/virtual-san-looking-9480_poster.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Virtual-san Looking"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/virtual-san-looking-9480_poster.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/virtual-san-looking-9480"
                                                title="Virtual-san Looking" class="dynamic-name"
                                                data-jname="Virtual-san Looking">Virtual-san
                                                Looking</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>9</span></div>
                                    <div class="film-poster item-qtip" data-id="violence-jack-slumking-9945">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/violence-jack-slumking-9945_poster.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Violence Jack: Slumking"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/violence-jack-slumking-9945_poster.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/violence-jack-slumking-9945"
                                                title="Violence Jack: Slumking" class="dynamic-name"
                                                data-jname="Violence Jack: Slumking">Violence Jack:
                                                Slumking</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>10</span></div>
                                    <div class="film-poster item-qtip" data-id="vivid-strike-specials-4876">
                                        <img data-src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/vivid-strike-specials-4876_poster.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="ViVid Strike! Specials"
                                            src="https://ani-watch.s3.us-west-1.amazonaws.com/anime_posters/vivid-strike-specials-4876_poster.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/vivid-strike-specials-4876"
                                                title="ViVid Strike! Specials" class="dynamic-name"
                                                data-jname="ViVid Strike! Specials">ViVid Strike!
                                                Specials</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                            </ul>
                        </div>
                        <div id="top-viewed-month" class="anif-block-ul anif-block-chart tab-pane">
                            <ul class="ulclear">

                                <li class="item-top">
                                    <div class="film-number"><span>1</span></div>
                                    <div class="film-poster item-qtip" data-id="shangri-la-frontier-season-2-19324">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/0fc66f9879a3a4a15408c325e1677e17.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Shangri-La Frontier Season 2"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/0fc66f9879a3a4a15408c325e1677e17.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/shangri-la-frontier-season-2-19324"
                                                title="Shangri-La Frontier Season 2" class="dynamic-name"
                                                data-jname="Shangri-La Frontier Season 2">Shangri-La
                                                Frontier Season 2</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>2</span></div>
                                    <div class="film-poster item-qtip" data-id="pop-pop-city-19403">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/675d1f46ca58fa783049fd9d83bb1918.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded" alt="Pop Pop City"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/675d1f46ca58fa783049fd9d83bb1918.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/pop-pop-city-19403"
                                                title="Pop Pop City" class="dynamic-name"
                                                data-jname="Pop Pop City">Pop Pop City</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>3</span></div>
                                    <div class="film-poster item-qtip"
                                        data-id="the-healer-who-was-banished-from-his-party-is-in-fact-the-strongest-19345">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/e756a671806e36e1276a5c4788ad3a9f.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="The Healer Who Was Banished From His Party, Is, in Fact, the Strongest"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/e756a671806e36e1276a5c4788ad3a9f.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/the-healer-who-was-banished-from-his-party-is-in-fact-the-strongest-19345"
                                                title="The Healer Who Was Banished From His Party, Is, in Fact, the Strongest"
                                                class="dynamic-name"
                                                data-jname="The Healer Who Was Banished From His Party, Is, in Fact, the Strongest">The
                                                Healer Who Was Banished From His Party, Is, in Fact, the
                                                Strongest</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>4</span></div>
                                    <div class="film-poster item-qtip" data-id="one-piece-fan-letter-19406">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/08367d0a68b3952cb14a1e72b84aaae3.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="One Piece Fan Letter"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/08367d0a68b3952cb14a1e72b84aaae3.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/one-piece-fan-letter-19406"
                                                title="One Piece Fan Letter" class="dynamic-name"
                                                data-jname="One Piece Fan Letter">One Piece Fan
                                                Letter</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>5</span></div>
                                    <div class="film-poster item-qtip" data-id="neko-ni-tensei-shita-ojisan-19375">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9cbdef8e800f8a96f6574475a2972d98.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Neko ni Tensei shita Ojisan"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9cbdef8e800f8a96f6574475a2972d98.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/neko-ni-tensei-shita-ojisan-19375"
                                                title="Neko ni Tensei shita Ojisan" class="dynamic-name"
                                                data-jname="Neko ni Tensei shita Ojisan">Neko ni
                                                Tensei shita Ojisan</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>6</span></div>
                                    <div class="film-poster item-qtip"
                                        data-id="the-seven-deadly-sins-four-knights-of-the-apocalypse-season-2-19342">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9b25eb117ecc8cf228d361540c7cfd67.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="The Seven Deadly Sins: Four Knights of the Apocalypse Season 2"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9b25eb117ecc8cf228d361540c7cfd67.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/the-seven-deadly-sins-four-knights-of-the-apocalypse-season-2-19342"
                                                title="The Seven Deadly Sins: Four Knights of the Apocalypse Season 2"
                                                class="dynamic-name"
                                                data-jname="The Seven Deadly Sins: Four Knights of the Apocalypse Season 2">The
                                                Seven Deadly Sins: Four Knights of the Apocalypse Season
                                                2</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>7</span></div>
                                    <div class="film-poster item-qtip" data-id="demon-lord-2099-19339">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8bbe3d0785392e3ca5b179e0d281e434.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded" alt="Demon Lord 2099"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8bbe3d0785392e3ca5b179e0d281e434.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/demon-lord-2099-19339"
                                                title="Demon Lord 2099" class="dynamic-name"
                                                data-jname="Demon Lord 2099">Demon Lord 2099</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>8</span></div>
                                    <div class="film-poster item-qtip"
                                        data-id="mobile-suit-gundam-requiem-for-vengeance-19386">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/e9c7b065fcab7e02f14e6995b9bd836d.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Mobile Suit Gundam: Requiem for Vengeance"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/e9c7b065fcab7e02f14e6995b9bd836d.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/mobile-suit-gundam-requiem-for-vengeance-19386"
                                                title="Mobile Suit Gundam: Requiem for Vengeance"
                                                class="dynamic-name"
                                                data-jname="Mobile Suit Gundam: Requiem for Vengeance">Mobile
                                                Suit Gundam: Requiem for Vengeance</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>9</span></div>
                                    <div class="film-poster item-qtip"
                                        data-id="duel-masters-lost-crystal-of-reminiscence-19387">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8bb1a6f47288f688cfbe1135bec8878b.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Duel Masters LOST: Crystal of Reminiscence"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8bb1a6f47288f688cfbe1135bec8878b.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/duel-masters-lost-crystal-of-reminiscence-19387"
                                                title="Duel Masters LOST: Crystal of Reminiscence"
                                                class="dynamic-name"
                                                data-jname="Duel Masters LOST: Crystal of Reminiscence">Duel
                                                Masters LOST: Crystal of Reminiscence</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                                <li class="item-top">
                                    <div class="film-number"><span>10</span></div>
                                    <div class="film-poster item-qtip"
                                        data-id="dorami-chan-wow-the-kid-gang-of-bandits-13458">
                                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/af88c5ee982c019b3458d430b9810c43.jpg"
                                            class="film-poster-img ls-is-cached lazyloaded"
                                            alt="Dorami-chan: Wow, The Kid Gang of Bandits"
                                            src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/af88c5ee982c019b3458d430b9810c43.jpg">
                                    </div>
                                    <div class="film-detail">
                                        <h3 class="film-name">
                                            <a href="https://hianime.io/detail/dorami-chan-wow-the-kid-gang-of-bandits-13458"
                                                title="Dorami-chan: Wow, The Kid Gang of Bandits"
                                                class="dynamic-name"
                                                data-jname="Dorami-chan: Wow, The Kid Gang of Bandits">Dorami-chan:
                                                Wow, The Kid Gang of Bandits</a>
                                        </h3>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>

                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="clearfix"></div>
