<html lang="en" data-fp="s9qvajzevi">
<head>
  @include('layouts.head')
</head>
<body>
  <div id="sidebar_menu_bg"></div>
  <div id="sidebar_menu">
    <button class="btn btn-radius btn-sm btn-secondary toggle-sidebar"><i class="fas fa-angle-left mr-2"></i>Close menu</button>
    <div class="sb-setting">
      <div class="header-setting">
        <div class="hs-toggles">
          <a href="/watch2gether" class="hst-item" data-toggle="tooltip" title="" data-original-title="Watch with friends">
            <div class="hst-icon"><i class="zicon zicon-20 zicon-live"></i></div>
            <div class="name"><span>Watch2gether</span></div>
          </a>
          <a href="/random" class="hst-item" data-toggle="tooltip" data-original-title="Watch random anime">
            <div class="hst-icon"><i class="fas fa-random"></i></div>
            <div class="name"><span>Random</span></div>
          </a>
          <div class="hst-item mr-0" data-toggle="tooltip" title="" data-original-title="Select language of anime name to display.">
            <div class="select-anime-name toggle-lang"><span class="en">EN</span><span class="jp">JP</span></div>
            <div class="name"><span>Anime Name</span></div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <div class="sb-donate">
      <div class="hr-community"><a class="btn btn-sm" href="/community/board" title="HiAnime Connect"><i class="fas fa-comments mr-2"></i>Community</a></div>
    </div>
    <ul class="nav sidebar_menu-list">
      <li class="nav-item active"><a class="nav-link" href="/home" title="Home">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="/subbed-anime" title="Subbed Anime">Subbed Anime</a></li>
      <li class="nav-item"><a class="nav-link" href="/dubbed-anime" title="Dubbed Anime">Dubbed Anime</a></li>
      <li class="nav-item"><a class="nav-link" href="/most-popular" title="Most Popular">Most Popular</a></li>
      <li class="nav-item"><a class="nav-link" href="/movie" title="Movies">Movies</a></li>
      <li class="nav-item"><a class="nav-link" href="/tv" title="TV Series">TV Series</a></li>
      <li class="nav-item"><a class="nav-link" href="/ova" title="OVAs">OVAs</a></li>
      <li class="nav-item"><a class="nav-link" href="/ona" title="ONAs">ONAs</a></li>
      <li class="nav-item"><a class="nav-link" href="/special" title="Specials">Specials</a></li>
      <li class="nav-item"><a class="nav-link" href="/events" title="Events">Events</a></li>
      <li class="nav-item"><a class="nav-link" href="/app-download" title="Events">HiAnime App</a></li>
      <li class="nav-item">
        <div class="nav-link" title="Genre"><strong>Genre</strong></div>
        <div class="sidebar_menu-sub show" id="sidebar_subs_genre">
          <ul class="nav color-list sub-menu">

            <li class="nav-item"><a class="nav-link" href="/genre/action">Action</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/adventure">Adventure</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/cars">Cars</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/comedy">Comedy</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/dementia">Dementia</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/demons">Demons</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/drama">Drama</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/ecchi">Ecchi</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/fantasy">Fantasy</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/game">Game</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/harem">Harem</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/historical">Historical</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/horror">Horror</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/isekai">Isekai</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/josei">Josei</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/kids">Kids</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/magic">Magic</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/marial-arts">Martial Arts</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/mecha">Mecha</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/military">Military</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/music">Music</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/mystery">Mystery</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/parody">Parody</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/police">Police</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/psychological">Psychological</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/romance">Romance</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/samurai">Samurai</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/school">School</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/sci-fi">Sci-Fi</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/seinen">Seinen</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/shoujo">Shoujo</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/shoujo-ai">Shoujo Ai</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/shounen">Shounen</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/shounen-ai">Shounen Ai</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/slice-of-life">Slice of Life</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/space">Space</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/sports">Sports</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/super-power">Super Power</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/supernatural">Supernatural</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/thriller">Thriller</a></li>

            <li class="nav-item"><a class="nav-link" href="/genre/vampire">Vampire</a></li>

            <li class="nav-item nav-more">
              <a class="nav-link"><i class="fas fa-plus mr-2"></i>More</a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div id="wrapper">
    <div id="header" class="header-home">
      <div class="container">
        <div id="mobile_menu"><i class="fa fa-bars"></i></div>
        <a href="/" id="logo">
          <img src="/images/logo.png?v=0.1" alt="HiAnime">
          <div class="clearfix"></div>
        </a>
        <div id="search">
          <div class="search-content">
            <form action="/search" autocomplete="off">
              <a href="/filter" class="filter-icon">Filter</a>
              <input type="text" class="form-control search-input" name="keyword" placeholder="Search anime..." required="">
              <button type="submit" class="search-icon"><i class="fas fa-search"></i></button>
            </form>
            <div class="nav search-result-pop" id="search-suggest" style="display: none;">
              <div class="loading-relative" id="search-loading" style="display: none;">
                <div class="loading">
                  <div class="span1"></div>
                  <div class="span2"></div>
                  <div class="span3"></div>
                </div>
              </div>
              <div class="result" style="display:none;"></div>
            </div>
          </div>
        </div>
        <div class="header-group">
          <div class="anw-group">
            <div class="zrg-title"><span class="top">Join now</span><span class="bottom">HiAnime Group</span></div>
            <div class="zrg-list">
              <div class="item"><a href="https://discord.gg/hianime" target="_blank" class="zr-social-button dc-btn"><i class="fab fa-discord"></i></a>
              </div>
              <div class="item"><a href="https://tinyurl.com/2y2yy3ba" target="_blank" class="zr-social-button tl-btn"><i class="fab fa-telegram-plane"></i></a>
              </div>
              <div class="item"><a href="https://new.reddit.com/r/HiAnimeZone/" target="_blank" class="zr-social-button rd-btn"><i class="fab fa-reddit-alien"></i></a></div>
              <div class="item"><a href="https://twitter.com/HiAnimeOfficial" target="_blank" class="zr-social-button tw-btn"><i class="fab fa-twitter"></i></a></div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="header-setting">
          <div class="hs-toggles">
            <a href="/watch2gether" class="hst-item" data-toggle="tooltip" title="" data-original-title="Watch with friends">
              <div class="hst-icon"><i class="zicon zicon-20 zicon-live"></i></div>
              <div class="name"><span>Watch2gether</span></div>
            </a>
            <a href="/random" class="hst-item" data-toggle="tooltip" data-original-title="Watch random anime">
              <div class="hst-icon"><i class="fas fa-random"></i></div>
              <div class="name"><span>Random</span></div>
            </a>
            <div class="hst-item" data-toggle="tooltip" title="" data-original-title="Select language of anime name to display.">
              <div class="select-anime-name toggle-lang"><span class="en">EN</span><span class="jp">JP</span></div>
              <div class="name"><span>Anime Name</span></div>
            </div>
            <a href="/community/board" class="hst-item" data-toggle="tooltip" title="" data-original-title="HiAnime Connect">
              <div class="hst-icon"><i class="fas fa-comments"></i></div>
              <div class="name"><span>Community</span></div>
            </a>
            <div class="clearfix"></div>
          </div>
        </div>

        <div id="pick_menu">
          <div class="pick_menu-ul">
            <ul class="ulclear">
              <li class="pmu-item pmu-item-home">
                <a class="pmu-item-icon" href="/home" title="Home">
                  <img src="/images/pick-home.svg" data-toggle="tooltip" data-placement="right" title="" data-original-title="Home">
                </a>
              </li>
              <li class="pmu-item pmu-item-movies">
                <a class="pmu-item-icon" href="/movie" title="Movies">
                  <img src="/images/pick-movies.svg" data-toggle="tooltip" data-placement="right" title="" data-original-title="Movies">
                </a>
              </li>
              <li class="pmu-item pmu-item-show">
                <a class="pmu-item-icon" href="/tv" title="TV Series">
                  <img src="/images/pick-show.svg" data-toggle="tooltip" data-placement="right" title="" data-original-title="TV Series">
                </a>
              </li>
              <li class="pmu-item pmu-item-popular">
                <a class="pmu-item-icon" href="/most-popular" title="Most Popular">
                  <img src="/images/pick-popular.svg" data-toggle="tooltip" data-placement="right" title="" data-original-title="Most Popular">
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div id="header_right">
          <div class="header_right-user">
            <a data-toggle="modal" data-target="#modallogin" class="btn-user btn btn-sm btn-primary btn-login">Login</a>
          </div>
        </div>
        <div id="mobile_search"><i class="fa fa-search"></i></div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!--Begin: Slider-->
    <div class="deslide-wrap">
      <div class="container">
        <div id="slider" class="swiper-container-initialized swiper-container-horizontal">
          <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-4505px, 0px, 0px);">
            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="9" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyloaded" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/58d0b99666b285d2c484fec5dfaa23f0.jpg" alt="Bleach" src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/58d0b99666b285d2c484fec5dfaa23f0.jpg">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#10 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Bleach">Bleach</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>24m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Oct 5, 2004
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>366</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>366</div>


                        <div class="tick-item tick-eps">366</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    Ichigo Kurosaki is an ordinary high schooler—until his family is attacked by a Hollow, a corrupt spirit that seeks to devour human souls. It is then that he meets a Soul Reaper named Rukia Kuchiki, who gets injured while protecting Ichigo's family from the assailant. To save his family, Ichigo accepts Rukia's offer of taking her powers and becomes a Soul Reaper as a result.

                    However, as Rukia is unable to regain her powers, Ichigo is given the daunting task of hunting down the Hollows that plague their town. However, he is not alone in his fight, as he is later joined by his friends—classmates Orihime Inoue, Yasutora Sado, and Uryuu Ishida—who each have their own unique abilities. As Ichigo and his comrades get used to their new duties and support each other on and off the battlefield, the young Soul Reaper soon learns that the Hollows are not the only real threat to the human world.

                    [Written by MAL Rewrite]
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/bleach-806" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/bleach-806" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide" data-swiper-slide-index="0" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyloaded" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/6b1b090ae52f90441f0e7ed720e86291.jpg" alt="Nige Jouzu no Wakagimi" src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/6b1b090ae52f90441f0e7ed720e86291.jpg">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#1 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Nige Jouzu no Wakagimi">The Elusive Samurai</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>23m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Jul 6, 2024
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>11</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    Eight-year-old Tokiyuki Houjou, the next successor of the Kamakura shogunate, is a young boy lacking talent in everything besides hide-and-seek. One day, his carefree life is abruptly turned upside down when Takauji Ashikaga brutally seizes power from the Kamakuras, ending their reign. Rescued by a self-proclaimed prophetic priest, Tokiyuki manages to escape with his life. Now he must evade those trying to kill him while recruiting comrades who can help him restore the Kamakura Shogunate to its former glory. Set during the Nanboku-chou period of Japanese history, is a tale of redemption, documenting the life of the forgotten hero that altered Japan's destiny by running away.
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/the-elusive-samurai-19233" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/the-elusive-samurai-19233" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide" data-swiper-slide-index="1" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyloaded" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/af1c058948079aabe09de052cc7b4261.jpg" alt="Ranma ½ (2024)" src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/af1c058948079aabe09de052cc7b4261.jpg">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#2 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Ranma ½ (2024)">Ranma 1/2</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>23m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Oct 6, 2024
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>2</div>


                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    Soun Tendou runs the Tendou Martial Arts School accompanied by his three daughters: Akane, Nabiki, and Kasumi. One day, the sisters' lives are turned upside down when their father announces that he has promised one of them to be married to a fellow martial artist's son in hopes of carrying on the family legacy. In addition to their mixed reactions, when the fiancé arrives, the last thing the Tendou family expects is Ranma Saotome and his father, Genma. Ranma has been training in China with his father until an unfortunate accident changed them both. Now, when water touches them, Ranma turns into a girl and Genma into a giant panda. Ranma ½ follows Ranma as he attempts to get along with his newly betrothed, the youngest of the Tendou sisters, Akane. As the two begin to attend the same school, they deal with fellow friends and rivals, all of whom have something to say about their engagement. [Written by MAL Rewrite]
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/ranma-1-2-19335" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/ranma-1-2-19335" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide" data-swiper-slide-index="2" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyloaded" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/1a37292bd09836d9fc282e6a79080979.jpg" alt="Isekai Shikkaku" src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/1a37292bd09836d9fc282e6a79080979.jpg">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#3 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Isekai Shikkaku">No Longer Allowed In Another World</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>23m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Jul 9, 2024
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>12</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    An adventure in another world with cute girls by your side and video game-like powers—sounds like an anime fan's dream, right? Not so for melancholic author Osamu Dazai, who would quite literally prefer to drop dead. Video games haven't even been invented yet when he gets yanked into another world in 1948. Really, all the fantastical adventure he keeps running into is just getting in the way of his poetic dream of finding the perfect place to die. But no matter how much he risks his hide, everything seems to keep turning out okay. Follow a miserable hero like no other in this cheerfully bleak isekai comedy!
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/no-longer-allowed-in-another-world-19247" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/no-longer-allowed-in-another-world-19247" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyloaded" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/d057bc74b98214c7fd9ca6192aa3ce50.jpg" alt="Naze Boku no Sekai wo Daremo Oboeteinai no ka?" src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/d057bc74b98214c7fd9ca6192aa3ce50.jpg">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#4 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Naze Boku no Sekai wo Daremo Oboeteinai no ka?">Why Does Nobody Remember Me in This World?</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>24m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Jul 13, 2024
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>12</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    In a time when the great war between five rival races for supremacy on Earth ended with humanity's victory led by the hero Sid, the world suddenly gets "overwritten" right before the eyes of a boy named Kai. In this rewritten world, Kai witnesses humanity's defeat in the war as a result of Sid's absence—where dragons and demons now rule the land, and Kai himself has become a forgotten existence to all humans. However, after encountering the mysterious girl Rinne, Kai resolves to break free from this rewritten fate. In a world without a hero, he inherits the sword and martial skills of the hero (Sid) and challenges the powerful enemy races that dominate the land.
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/why-does-nobody-remember-me-in-this-world-19240" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/why-does-nobody-remember-me-in-this-world-19240" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyloaded" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/db8603d2f4fa78e1c42f6cf829030a18.jpg" alt="One Piece" src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/db8603d2f4fa78e1c42f6cf829030a18.jpg">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#5 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="One Piece">One Piece</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>24m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Oct 20, 1999
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1122</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1096</div>


                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    Gold Roger was known as the "Pirate King," the strongest and most infamous being to have sailed the Grand Line. The capture and execution of Roger by the World Government brought a change throughout the world. His last words before his death revealed the existence of the greatest treasure in the world, One Piece. It was this revelation that brought about the Grand Age of Pirates, men who dreamed of finding One Piece—which promises an unlimited amount of riches and fame—and quite possibly the pinnacle of glory and the title of the Pirate King.

                    Enter Monkey Luffy, a 17-year-old boy who defies your standard definition of a pirate. Rather than the popular persona of a wicked, hardened, toothless pirate ransacking villages for fun, Luffy's reason for being a pirate is one of pure wonder: the thought of an exciting adventure that leads him to intriguing people and ultimately, the promised treasure. Following in the footsteps of his childhood hero, Luffy and his crew travel across the Grand Line, experiencing crazy adventures, unveiling dark mysteries and battling strong enemies, all in order to reach the most coveted of all fortunes—One Piece.

                    [Written by MAL Rewrite]
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/one-piece-100" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/one-piece-100" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="5" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyloaded" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/1d12830ba58fe5e45677b800ff71afe5.jpg" alt="Maougun Saikyou no Majutsushi wa Ningen datta" src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/1d12830ba58fe5e45677b800ff71afe5.jpg">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#6 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Maougun Saikyou no Majutsushi wa Ningen datta">The Strongest Magician in the Demon Lord's Army Was a Human</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>24m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Jul 3, 2024
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>



                        <div class="tick-item tick-eps">12</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    Under the tutelage of the great demon warlock Romberg, Ike grew up with knowledge regarding an ancient advanced civilization that once ruled the land. Coupled with his innate talent in magical arts, this upbringing allows Ike to quickly rise in the Demon Lord's army ranks, leading his brigade to consecutive victories against humans.

                    However, Ike has a secret—he is a human himself. Despite knowing all too well the consequences if this information is ever to leak, Ike is willing to face such immense danger to achieve his goal: find a way for humans and demons to coexist and stop the war that has been carried on for far too long.
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/the-strongest-magician-in-the-demon-lords-army-was-a-human-19238" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/the-strongest-magician-in-the-demon-lords-army-was-a-human-19238" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide" data-swiper-slide-index="6" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyload" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/8316ad233cd5b69d864064c84f8ca9f5.jpg" alt="Giji Harem">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#7 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Giji Harem">Pseudo Harem</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>24m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Jul 5, 2024
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>



                        <div class="tick-item tick-eps">12</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    Eiji Kitahama, a second year high school student, just wants to be popular. To help him realize this dream, Rin Nanakura, his junior in the drama club, uses her acting skills to create a harem of loving girls for him. Though the various "girls" all show fondness toward Eiji, the affection of the actress behind them is very real. Rin's colorful acting continuously delights Eiji, but will the starlet herself ever make her way into his heart?
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/pseudo-harem-19246" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/pseudo-harem-19246" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide" data-swiper-slide-index="7" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyload" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/46d8e6d3fcd4a016ff5e90f0281eae76.jpg" alt="Kimetsu no Yaiba: Hashira Geiko-hen">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#8 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Kimetsu no Yaiba: Hashira Geiko-hen">Demon Slayer: Kimetsu no Yaiba Hashira Training Arc</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>24m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>May 12, 2024
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>8</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>8</div>


                        <div class="tick-item tick-eps">8</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    Adaptation of the Hashira Training Arc.

                    The Hashira, the Demon Slayer Corps' highest ranking swordsmen and members. The Hashira Training has begun in order to face the forthcoming battle against Muzan Kibutsuji. Each with their own thoughts and hopes held in their hearts, a new story for Tanjiro and the Hashira begins.
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/demon-slayer-kimetsu-no-yaiba-hashira-training-arc-19107" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/demon-slayer-kimetsu-no-yaiba-hashira-training-arc-19107" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide" data-swiper-slide-index="8" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyload" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/b8b1bbc386d81a95c40e236089e11312.jpg" alt="Wind Breaker">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#9 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Wind Breaker">Wind Breaker</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>23m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Apr 5, 2024
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>13</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>13</div>


                        <div class="tick-item tick-eps">13</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    From an early age, Haruka Sakura was made an outcast due to his unconventional appearance and lack of social skills. However, the rough treatment turned him into a proficient fighter, which is now the only thing he prides himself on. Starting at Furin High School, where it is rumored that strength is valued over academics, Sakura has only one goal—taking the top spot.

                    Involved in a street brawl the day before his enrollment, Sakura happens to meet a group of his future schoolmates. Instead of the usual rejection, they fight alongside him, demonstrating that what the school actually cares about is protecting the town of Makochi from any harm—hence why the students call themselves "Bofurin." Surprised by the support and appreciation of the townspeople, Sakura has a hard time accepting their goodwill.

                    Though unfamiliar with kindness being shown to him, Sakura must learn to push past his discomfort when Bofurin is pitted against formidable enemies. After experiencing the feeling of acceptance, he finds himself fighting for the sake of others for the first time.
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/wind-breaker-19136" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/wind-breaker-19136" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide" data-swiper-slide-index="9" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyload" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/58d0b99666b285d2c484fec5dfaa23f0.jpg" alt="Bleach">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#10 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Bleach">Bleach</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>24m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Oct 5, 2004
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>366</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>366</div>


                        <div class="tick-item tick-eps">366</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    Ichigo Kurosaki is an ordinary high schooler—until his family is attacked by a Hollow, a corrupt spirit that seeks to devour human souls. It is then that he meets a Soul Reaper named Rukia Kuchiki, who gets injured while protecting Ichigo's family from the assailant. To save his family, Ichigo accepts Rukia's offer of taking her powers and becomes a Soul Reaper as a result.

                    However, as Rukia is unable to regain her powers, Ichigo is given the daunting task of hunting down the Hollows that plague their town. However, he is not alone in his fight, as he is later joined by his friends—classmates Orihime Inoue, Yasutora Sado, and Uryuu Ishida—who each have their own unique abilities. As Ichigo and his comrades get used to their new duties and support each other on and off the battlefield, the young Soul Reaper soon learns that the Hollows are not the only real threat to the human world.

                    [Written by MAL Rewrite]
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/bleach-806" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/bleach-806" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 901px;">
              <div class="deslide-item">
                <div class="deslide-cover">
                  <div class="deslide-cover-img">
                    <img class="film-poster-img lazyloading" data-src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/6b1b090ae52f90441f0e7ed720e86291.jpg" alt="Nige Jouzu no Wakagimi" src="https://cdn.noitatnemucod.net/thumbnail/1366x768/100/6b1b090ae52f90441f0e7ed720e86291.jpg">
                  </div>
                </div>
                <div class="deslide-item-content">
                  <div class="desi-sub-text">#1 Spotlight</div>
                  <div class="desi-head-title dynamic-name" data-jname="Nige Jouzu no Wakagimi">The Elusive Samurai</div>
                  <div class="sc-detail">
                    <div class="scd-item"><i class="fas fa-play-circle mr-1"></i>TV
                    </div>
                    <div class="scd-item"><i class="fas fa-clock mr-1"></i>23m
                    </div>
                    <div class="scd-item m-hide"><i class="fas fa-calendar mr-1"></i>Jul 6, 2024
                    </div>
                    <div class="scd-item mr-1"><span class="quality">HD</span>
                    </div>
                    <div class="scd-item">
                      <div class="tick">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>11</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="desi-description">
                    Eight-year-old Tokiyuki Houjou, the next successor of the Kamakura shogunate, is a young boy lacking talent in everything besides hide-and-seek. One day, his carefree life is abruptly turned upside down when Takauji Ashikaga brutally seizes power from the Kamakuras, ending their reign. Rescued by a self-proclaimed prophetic priest, Tokiyuki manages to escape with his life. Now he must evade those trying to kill him while recruiting comrades who can help him restore the Kamakura Shogunate to its former glory. Set during the Nanboku-chou period of Japanese history, is a tale of redemption, documenting the life of the forgotten hero that altered Japan's destiny by running away.
                  </div>
                  <div class="desi-buttons">
                    <a href="/watch/the-elusive-samurai-19233" class="btn btn-primary btn-radius mr-2"><i class="fas fa-play-circle mr-2"></i>Watch Now</a>
                    <a href="/the-elusive-samurai-19233" class="btn btn-secondary btn-radius">Detail<i class="fas fa-angle-right ml-2"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 8"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 9"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 10"></span></div>
          <div class="swiper-navigation">
            <div class="swiper-button swiper-button-next" tabindex="0" role="button" aria-label="Next slide"><i class="fas fa-angle-right"></i></div>
            <div class="swiper-button swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"><i class="fas fa-angle-left"></i></div>
          </div>
          <div class="clearfix"></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
      </div>
    </div>
    <!--/End: Slider-->
    <style>
      .intro-app {
        position: relative;
        font-size: 14px;
        margin: 2rem auto;
        max-width: 700px;
        overflow: hidden;
        background: rgb(69, 12, 14);
        background: linear-gradient(148deg, rgba(69, 12, 14, 1) 0%, rgba(163, 23, 28, 1) 100%);
      }

      .intro-app::before {
        content: "";
        position: absolute;
        top: 10px;
        left: 10px;
        right: 10px;
        bottom: 10px;
        border: 1px solid rgba(255, 255, 255, .2);
        z-index: 1;
      }

      .intro-app .ina-flex {
        display: flex;
        align-items: stretch;
        flex-direction: row-reverse;
        position: relative;
        padding: 2rem;
        z-index: 3;
      }

      .intro-app .ina-flex .ina-screen {
        width: 240px;
        flex-shrink: 0;
        position: absolute;
        right: 30px;
        top: 20px;
        animation: app-screen 1s infinite linear;
      }

      @keyframes app-screen {
        0% {
          transform: scale(1.05);
        }

        50% {
          transform: scale(1);
        }

        100% {
          transform: scale(1.05);
        }
      }

      .intro-app .ina-flex .ina-screen img {
        width: 100%;
      }

      .intro-app .ina-flex .ina-content {
        flex-grow: 1;
      }

      .ina-head-lg {
        font-size: 1.6em;
        line-height: 1.4;
        color: #fff;
        font-weight: 600;
        margin-bottom: .5rem;
      }

      .ina-head-md {
        font-size: 1em;
        line-height: 1.4;
        color: #fff;
        font-weight: 500;
        margin-bottom: 1.5rem;
        opacity: .8;
      }

      .is-fea {
        padding: 1rem 0 3rem;
      }

      .is-fea .ina-ul {
        padding: 0;
        margin: 0;
        list-style: none;
      }

      .is-fea .ina-ul li {
        position: relative;
        padding: .5rem 0 .5rem 1.2rem;
        font-size: 15px;
      }

      .is-fea .ina-ul li:before {
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #fff;
        display: block;
        position: absolute;
        top: calc(50% - 3px);
        left: 0;
      }

      .ina-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        max-width: 500px;
      }

      .ina-buttons .btn {
        padding: .75rem 1rem;
        border-radius: .4rem;
        font-size: 14px;
        font-weight: 500;
        max-width: 180px;
        background-color: #fff;
        color: #111 !important;
      }

      @media screen and (max-width: 740px) {
        .intro-app {
          border-radius: 0;
        }

        .intro-app .ina-flex {
          padding: 1.5rem;
          padding-right: 160px;
        }

        .intro-app .ina-flex .ina-screen {
          width: 160px;
          right: -10px;
          top: 10px;
        }

        .ina-head-lg {
          font-size: 1.2em;
        }

        .ina-head-md {
          font-size: .9em;
          margin-bottom: 1rem;
        }

        .ina-buttons .btn {
          padding: 0;
          background-color: transparent;
          color: #fff !important;
          width: auto !important;
        }

        .ina-buttons .btn>div {
          justify-content: flex-start !important;
        }
      }

    </style>
    <div class="intro-app" style="display: none">
      <div class="ina-flex">
        <div class="ina-screen">
          <img src="/images/download-apk.webp">
        </div>
        <div class="ina-content">
          <h1 class="ina-head-lg">BEST Free Anime App</h1>
          <h2 class="ina-head-md">Watch all Anime in HD on your Android devices</h2>
          <div class="ina-buttons">
            <a class="btn" href="/app-download">
              <div class="d-flex align-items-center justify-content-center">
                <span class="mr-3">Download Now</span>
                <i class="fas fa-angle-right"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script>
      if (navigator.userAgent.match(/Android/i)) {
        document.querySelector('.intro-app').style.display = "block"
      }

    </script>
    <div style="margin: 1rem auto; text-align: center">
      <a href="https://1flix.to/" target="_blank"><img alt="1flix" src="https://iili.io/JvfIu1a.gif" style="max-width: 100%"></a>
    </div>
    <!--Begin: trending-->
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
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

                  <div class="swiper-slide item-qtip swiper-slide-active" data-id="100" data-hasqtip="0" aria-describedby="qtip-0" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>01</span>
                        <div class="film-title dynamic-name" data-jname="One Piece">One Piece</div>
                      </div>
                      <a href="/one-piece-100" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bcd84731a3eda4f4a306250769675065.jpg" class="film-poster-img lazyloaded" title="One Piece" alt="One Piece" src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bcd84731a3eda4f4a306250769675065.jpg">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="swiper-slide item-qtip swiper-slide-next" data-id="19319" data-hasqtip="1" aria-describedby="qtip-1" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>02</span>
                        <div class="film-title dynamic-name" data-jname="Dandadan">Dandadan</div>
                      </div>
                      <a href="/dandadan-19319" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/a8b56a7589ff9edb6c86977c31e27a06.jpg" class="film-poster-img lazyloaded" title="Dandadan" alt="Dandadan" src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/a8b56a7589ff9edb6c86977c31e27a06.jpg">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="swiper-slide item-qtip" data-id="19318" data-hasqtip="2" aria-describedby="qtip-2" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>03</span>
                        <div class="film-title dynamic-name" data-jname="Blue Lock vs. U-20 Japan">Blue Lock Season 2</div>
                      </div>
                      <a href="/blue-lock-season-2-19318" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8ed3a4df2e8f22be9916959c96e5e3e2.jpg" class="film-poster-img lazyloaded" title="Blue Lock Season 2" alt="Blue Lock Season 2" src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8ed3a4df2e8f22be9916959c96e5e3e2.jpg">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="swiper-slide item-qtip" data-id="19326" data-hasqtip="3" aria-describedby="qtip-3" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>04</span>
                        <div class="film-title dynamic-name" data-jname="Ao no Hako">Blue Box</div>
                      </div>
                      <a href="/blue-box-19326" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/5f112b1c1f3f41ed87de0c48b6cf4e0d.jpg" class="film-poster-img lazyloaded" title="Blue Box" alt="Blue Box" src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/5f112b1c1f3f41ed87de0c48b6cf4e0d.jpg">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="swiper-slide item-qtip" data-id="19322" data-hasqtip="4" aria-describedby="qtip-4" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>05</span>
                        <div class="film-title dynamic-name" data-jname="Bleach: Sennen Kessen-hen - Soukoku-tan">Bleach: Thousand-Year Blood War - The Conflict</div>
                      </div>
                      <a href="/bleach-thousand-year-blood-war-the-conflict-19322" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/b87a9e986e6e403ffddb520d24f5040a.jpg" class="film-poster-img lazyloaded" title="Bleach: Thousand-Year Blood War - The Conflict" alt="Bleach: Thousand-Year Blood War - The Conflict" src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/b87a9e986e6e403ffddb520d24f5040a.jpg">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="swiper-slide item-qtip" data-id="19340" data-hasqtip="5" aria-describedby="qtip-5" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>06</span>
                        <div class="film-title dynamic-name" data-jname="Rurouni Kenshin: Meiji Kenkaku Romantan - Kyoto Douran">Rurouni Kenshin -Kyoto Disturbance-</div>
                      </div>
                      <a href="/rurouni-kenshin-kyoto-disturbance-19340" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/4c339e5c8107dbda621c214e351f7164.jpg" class="film-poster-img lazyloaded" title="Rurouni Kenshin -Kyoto Disturbance-" alt="Rurouni Kenshin -Kyoto Disturbance-" src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/4c339e5c8107dbda621c214e351f7164.jpg">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="swiper-slide item-qtip" data-id="19301" data-hasqtip="6" aria-describedby="qtip-6" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>07</span>
                        <div class="film-title dynamic-name" data-jname="Re:Zero kara Hajimeru Isekai Seikatsu 3rd Season">Re:ZERO -Starting Life in Another World- Season 3</div>
                      </div>
                      <a href="/rezero-starting-life-in-another-world-season-3-19301" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/fd9a4794949c53baa8ef6ae16f78c7ab.jpg" class="film-poster-img lazyloaded" title="Re:ZERO -Starting Life in Another World- Season 3" alt="Re:ZERO -Starting Life in Another World- Season 3" src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/fd9a4794949c53baa8ef6ae16f78c7ab.jpg">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="swiper-slide item-qtip" data-id="19256" data-hasqtip="7" aria-describedby="qtip-7" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>08</span>
                        <div class="film-title dynamic-name" data-jname="Oshi no Ko 2nd Season">My Star: Season 2</div>
                      </div>
                      <a href="/my-star-season-2-19256" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/2d1cb3f0d6a5eea02851ea80f515b984.jpg" class="film-poster-img lazyloaded" title="My Star: Season 2" alt="My Star: Season 2" src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/2d1cb3f0d6a5eea02851ea80f515b984.jpg">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="swiper-slide item-qtip" data-id="19136" data-hasqtip="8" aria-describedby="qtip-8" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>09</span>
                        <div class="film-title dynamic-name" data-jname="Wind Breaker">Wind Breaker</div>
                      </div>
                      <a href="/wind-breaker-19136" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/d9bb23228e5a641b5a3e9386382dae3a.jpg" class="film-poster-img lazyload" title="Wind Breaker" alt="Wind Breaker">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                  <div class="swiper-slide item-qtip" data-id="19347" data-hasqtip="9" aria-describedby="qtip-9" style="width: 187.75px; margin-right: 20px;">
                    <div class="item">
                      <div class="number">
                        <span>10</span>
                        <div class="film-title dynamic-name" data-jname="Sayounara Ryuusei, Konnichiwa Jinsei">Good Bye, Dragon Life.</div>
                      </div>
                      <a href="/good-bye-dragon-life-19347" class="film-poster">
                        <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/6431fdac6396ff285bf3c69b807a8a9a.jpg" class="film-poster-img lazyload" title="Good Bye, Dragon Life." alt="Good Bye, Dragon Life.">
                      </a>
                      <div class="clearfix"></div>
                    </div>
                  </div>

                </div>
                <div class="clearfix"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
              </div>
              <div class="trending-navi">
                <div class="navi-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><i class="fas fa-angle-right"></i></div>
                <div class="navi-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true"><i class="fas fa-angle-left"></i></div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!--/End: trending-->
    <div class="share-buttons share-buttons-home">
      <div class="container">
        <div class="share-buttons-block">
          <div class="share-icon"></div>
          <div class="sbb-title mr-3">
            <span>Share HiAnime</span>
            <p class="mb-0">to your friends</p>
          </div>
          <div class="sharethis-inline-share-buttons st-center st-has-labels  st-inline-share-buttons st-animated" id="st-1">
            <div class="st-total ">
              <span class="st-label">224k</span>
              <span class="st-shares">
                Shares
              </span>
            </div>
            <div class="st-btn st-first" data-network="telegram" style="display: inline-block;">
              <img alt="telegram sharing button" src="https://platform-cdn.sharethis.com/img/telegram.svg">
              <span class="st-label">Share</span>
            </div>
            <div class="st-btn" data-network="twitter" style="display: inline-block;">
              <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">
              <span class="st-label">Tweet</span>
            </div>
            <div class="st-btn" data-network="facebook" style="display: inline-block;">
              <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">
              <span class="st-label">Share</span>
            </div>
            <div class="st-btn" data-network="reddit" style="display: inline-block;">
              <img alt="reddit sharing button" src="https://platform-cdn.sharethis.com/img/reddit.svg">
              <span class="st-label">Share</span>
            </div>
            <div class="st-btn st-last st-remove-label" data-network="sharethis" style="display: inline-block;">
              <img alt="sharethis sharing button" src="https://platform-cdn.sharethis.com/img/sharethis.svg">
              <span class="st-label">Share</span>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!--Begin: Events-->

    <!--/End: Events-->
    <div id="discussion" class="">
      <div class="container">
        <div class="dis-wrap dis-model">
          <div class="d_w-icon"><img src="/images/discussion.png"></div>
          <div class="d_w-list">
            <div class="display-toggle">
              <div class="to-text">Show Comments</div>
              <div id="display-comment" class="toggle-onoff to-small"><span></span></div>
            </div>
            <ul class="nav nav-tabs pre-tabs pre-tabs-min">
              <li class="nav-item"><a data-toggle="tab" href="#new-comment" class="nav-link cm-tab active show">Newest Comments</a></li>
              <li class="nav-item"><a data-toggle="tab" href="#top-comment" class="nav-link cm-tab">Top
                  Comments</a></li>
            </ul>
            <div class="tab-content" id="comment-widget">
              <div id="top-comment" class="tab-pane">
                <div class="dwl-ul">
                  <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                    <div class="swiper-wrapper" style="transition-duration: 0ms;">


                      <div class="swiper-slide" data-id="19163304">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/one_piece/File8.png" class="user-avatar-img" alt="Spectrumis">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/5096351" target="_blank" class="user-name">Spectrumis</a>
                              <div class="time"> - 7 hours ago</div>

                            </div>
                            <div class="text-cut">i wish they'd stop subbing the ******* songs, jesus christ</div>
                            <div class="on-chapt">
                              <a href="/watch/is-it-wrong-to-try-to-pick-up-girls-in-a-dungeon-v-19323?ep=128746&amp;c_id=19163304&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Is It Wrong to Try to Pick Up Girls in a Dungeon? V</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19165574">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/demon_splayer/File12.jpg" class="user-avatar-img" alt="𝕯𝖊𝖒𝖔𝖓 𝕷𝖔𝖗𝖉">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7322967" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-3"></i>
                                𝕯𝖊𝖒𝖔𝖓 𝕷𝖔𝖗𝖉
                              </a>
                              <div class="time"><span class="role mr-1">Starfish</span>
                                - 2 hours ago</div>

                            </div>
                            <div class="text-cut">Both grannies want the same thing. 🌚</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19165574&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19163409">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/dragon_ball_chibi/mrsatan.png" class="user-avatar-img" alt="Re:Dedita">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7345301" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-4"></i>
                                Re:Dedita
                              </a>
                              <div class="time"><span class="role mr-1">Dolphin</span>
                                - 6 hours ago</div>

                            </div>
                            <div class="text-cut">turbo granny actually a kind spirit who console dead girls spirits. because most girl death she see is after they got r-ped, granny start to eat the D of men. even when Momo was abducted by alien and about to be r-ped that actually the turbo granny come to rescue</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19163409&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19163496">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/dragon_ball/av-db-05.jpeg" class="user-avatar-img" alt="AYO">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/5609909" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-1"></i>
                                AYO
                              </a>
                              <div class="time"><span class="role mr-1">Angelfish</span>
                                - 6 hours ago</div>

                            </div>
                            <div class="text-cut">Still don't know why this anime is getting a lot of hate</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19163496&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19163188">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/one_piece/05.jpg" class="user-avatar-img" alt="ncc1701d">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3793650" target="_blank" class="user-name">ncc1701d</a>
                              <div class="time"> - 7 hours ago</div>

                            </div>
                            <div class="text-cut">As a LN reader, this episode was a total trainwreck. They speed rushed the heck out of this episode. Tldr; Horn has magic that allows her to become Freya so they can switch spots at will. Most of the time when Syr has been interacting with Bell, it has been Freya. Think of it as her RPGing as Syr. The reason Bell rejected Syr was because he is 100% devoted to Ais. They cut his reasoning in this episode so here it is:

                              "But.
                              But.
                              But…
                              Remember.
                              Remember what Welf said.
                              Check.
                              Check what actually lies in my heart.
                              Ask.
                              Ask who it is that I look up to, what I want, what I swore to chase after.
                              Answer.
                              Bell Cranell, natural-born fool, cannot tell a lie."</div>
                            <div class="on-chapt">
                              <a href="/watch/is-it-wrong-to-try-to-pick-up-girls-in-a-dungeon-v-19323?ep=128746&amp;c_id=19163188&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Is It Wrong to Try to Pick Up Girls in a Dungeon? V</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19163690">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/chainsaw/07.png" class="user-avatar-img" alt="SpeedSilver">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/2418584" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-1"></i>
                                SpeedSilver
                              </a>
                              <div class="time"><span class="role mr-1">Angelfish</span>
                                - 6 hours ago</div>

                            </div>
                            <div class="text-cut">to think a romance anime with little bit of sports has better animation than a full-fledged sports anime is unreal man💀</div>
                            <div class="on-chapt">
                              <a href="/watch/blue-box-19326?ep=128749&amp;c_id=19163690&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Blue Box</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19163643">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/sakura/10.jpg" class="user-avatar-img" alt="🐙 Nyamero Kyouko">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7197476" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-2"></i>
                                🐙 Nyamero Kyouko
                              </a>
                              <div class="time"><span class="role mr-1">Crab</span>
                                - 6 hours ago</div>

                            </div>
                            <div class="text-cut">I repeated 5-6 time that last scene to actually understand what they are saying instead lyrics.</div>
                            <div class="on-chapt">
                              <a href="/watch/is-it-wrong-to-try-to-pick-up-girls-in-a-dungeon-v-19323?ep=128746&amp;c_id=19163643&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Is It Wrong to Try to Pick Up Girls in a Dungeon? V</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19159506">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/conan/11.png" class="user-avatar-img" alt="GRIPHHIT">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7934707" target="_blank" class="user-name">GRIPHHIT</a>
                              <div class="time"> - 12 hours ago</div>

                            </div>
                            <div class="text-cut">DUDE THATS CRAZY HE SUUCKED TEATS OF THE TURBO GRANNY</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19159506&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19164212">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_chibi/avatar2-01.png" class="user-avatar-img" alt="junReyGalarion">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/6415336" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-1"></i>
                                junReyGalarion
                              </a>
                              <div class="time"><span class="role mr-1">Angelfish</span>
                                - 4 hours ago</div>

                            </div>
                            <div class="text-cut">The animation is great. He's transformation is good</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19164212&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19163382">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/demon_splayer/File12.jpg" class="user-avatar-img" alt="NeroX">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7525059" target="_blank" class="user-name">NeroX</a>
                              <div class="time"> - 6 hours ago</div>

                            </div>
                            <div class="text-cut">Female characters are so annoying and moronic. It's painful to watch. Such garbage characters...</div>
                            <div class="on-chapt">
                              <a href="/watch/loner-life-in-another-world-19337?ep=128747&amp;c_id=19163382&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Loner Life in Another World</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19164149">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/demon_splayer/File17.jpg" class="user-avatar-img" alt="ScarTalon">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7537592" target="_blank" class="user-name">ScarTalon</a>
                              <div class="time"> - 4 hours ago</div>

                            </div>
                            <div class="text-cut">dang, i did not expect that. A lot of people are ******** on bell for not taking Syr's advances but I actually respect him for it. He could have taken advantage of "syr" but instead he did the right thing and, because of his feelings for ais, said no. He's sticking with his beliefs and feelings. He's setting boundaries and making them clear. It's actually healthy. I feel bad tho so many of these women are chasing this dude and he only wants ais. And hes like 15 or something like that. They are all trying to take advantage of him (id say except for ryuu maybe). Next episode based on that preview title is gonna be interesting</div>
                            <div class="on-chapt">
                              <a href="/watch/is-it-wrong-to-try-to-pick-up-girls-in-a-dungeon-v-19323?ep=128746&amp;c_id=19164149&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Is It Wrong to Try to Pick Up Girls in a Dungeon? V</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19164577">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_chibi/avatar-10.png" class="user-avatar-img" alt="Anupam">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7280163" target="_blank" class="user-name">Anupam</a>
                              <div class="time"> - 4 hours ago</div>

                            </div>
                            <div class="text-cut">THe one piece is real</div>
                            <div class="on-chapt">
                              <a href="/watch/blue-box-19326?ep=128749&amp;c_id=19164577&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Blue Box</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19164293">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/dragon_ball/av-db-03.jpeg" class="user-avatar-img" alt="Tattered_Fury">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7572393" target="_blank" class="user-name">Tattered_Fury</a>
                              <div class="time"> - 4 hours ago</div>

                            </div>
                            <div class="text-cut">If anyone is wondering about the awkward walkaway at the end. They both told each other　さよなら (sayonara) which is technically goodbye, but culturally means more finality. Like a serious goodbye. typically used more when you don't know when you'll see them again or don't have much connections. また明日 Mata ashida is more friendly and means (I will see you tomorrow) this usually means you want to see that person again.
                              TLDR. The verbiage was important because at first it sounds like they are parting ways, then it got corrected to feel more personal. This shows they are actually friends.</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19164293&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19165351">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/spy_family/01.png" class="user-avatar-img" alt="Violet">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/5193767" target="_blank" class="user-name">Violet</a>
                              <div class="time"> - 2 hours ago</div>

                            </div>
                            <div class="text-cut">Hina is more cute</div>
                            <div class="on-chapt">
                              <a href="/watch/blue-box-19326?ep=128749&amp;c_id=19165351&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Blue Box</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19165390">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_chibi/avatar2-09.png" class="user-avatar-img" alt="Doggystyle">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7408664" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-2"></i>
                                Doggystyle
                              </a>
                              <div class="time"><span class="role mr-1">Crab</span>
                                - 2 hours ago</div>

                            </div>
                            <div class="text-cut">Bruh a miIf asking okarun to show him his jewels but he is not showing him lol🙄</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19165390&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19164653">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_chibi/avatar-03.png" class="user-avatar-img" alt="𝕋ℍ𝔸𝕋 𝕆ℕ𝔼 𝔾𝕌𝕐">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7790170" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-1"></i>
                                𝕋ℍ𝔸𝕋 𝕆ℕ𝔼 𝔾𝕌𝕐
                              </a>
                              <div class="time"><span class="role mr-1">Angelfish</span>
                                - 3 hours ago</div>

                            </div>
                            <div class="text-cut">Both granny's want the same thing. 🌚</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19164653&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19163528">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_normal/av-zz-11.jpeg" class="user-avatar-img" alt="Omar">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3025935" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-2"></i>
                                Omar
                              </a>
                              <div class="time"><span class="role mr-1">Crab</span>
                                - 6 hours ago</div>

                            </div>
                            <div class="text-cut">Poor bell he's only 14-15 and hes being sexually assualted constantly</div>
                            <div class="on-chapt">
                              <a href="/watch/is-it-wrong-to-try-to-pick-up-girls-in-a-dungeon-v-19323?ep=128746&amp;c_id=19163528&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Is It Wrong to Try to Pick Up Girls in a Dungeon? V</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19163695">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/jujutsu_kaisen/File4.png" class="user-avatar-img" alt="YourDailyWeeb">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/5500043" target="_blank" class="user-name">YourDailyWeeb</a>
                              <div class="time"> - 6 hours ago</div>

                            </div>
                            <div class="text-cut">LOOOOOOL WHAT A CRAZY CLIFFHANGER</div>
                            <div class="on-chapt">
                              <a href="/watch/blue-box-19326?ep=128749&amp;c_id=19163695&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Blue Box</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>


                    </div>
                    <div class="swiper-scrollbar">
                      <div class="swiper-scrollbar-drag"></div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                  </div>
                </div>
              </div>
              <div id="new-comment" class="tab-pane show active">
                <div class="dwl-ul">
                  <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">


                      <div class="swiper-slide swiper-slide-active" data-id="19166590" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_chibi/avatar2-04.png" class="user-avatar-img" alt="McDonald'sD.Trump">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3032867" target="_blank" class="user-name">McDonald'sD.Trump</a>
                              <div class="time"> - a minute ago</div>

                            </div>
                            <div class="text-cut">WHAT THE Fu... ohhhhh nvm read the name of ep wrong hehe</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19166590&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide swiper-slide-next" data-id="19166588" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/one_piece/user-08.jpeg" class="user-avatar-img" alt="FART">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/1805645" target="_blank" class="user-name">FART</a>
                              <div class="time"> - a minute ago</div>

                            </div>
                            <div class="text-cut">DAYUM</div>
                            <div class="on-chapt">
                              <a href="/watch/my-star-season-2-19256?ep=127051&amp;c_id=19166588&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>My Star: Season 2</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166587" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/one_piece/File1.png" class="user-avatar-img" alt="Reus">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3150360" target="_blank" class="user-name">Reus</a>
                              <div class="time"> - 2 minutes ago</div>

                            </div>
                            <div class="text-cut">i love this anime but why the **** did they had to add shiv ji in their story? and being defeated by a lowly clan?</div>
                            <div class="on-chapt">
                              <a href="/watch/the-eminence-in-shadow-season-2-18505?ep=109303&amp;c_id=19166587&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>The Eminence in Shadow Season 2</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166585" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/one_piece/user-08.jpeg" class="user-avatar-img" alt="Kira">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/2679696" target="_blank" class="user-name">Kira</a>
                              <div class="time"> - 2 minutes ago</div>

                            </div>
                            <div class="text-cut">Here because of one piece fan letter 💌</div>
                            <div class="on-chapt">
                              <a href="/watch/one-piece-100?ep=2662&amp;c_id=19166585&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>One Piece</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166584" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/jujutsu_kaisen/File4.png" class="user-avatar-img" alt="Zsolto">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7360760" target="_blank" class="user-name">Zsolto</a>
                              <div class="time"> - 2 minutes ago</div>

                            </div>
                            <div class="text-cut">Is the Young Master a empath?</div>
                            <div class="on-chapt">
                              <a href="/watch/tsukimichi-moonlit-fantasy-season-2-18877?ep=123152&amp;c_id=19166584&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Tsukimichi -Moonlit Fantasy- Season 2</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166583" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/demon_splayer/File18.jpg" class="user-avatar-img" alt="Tomioka-Giyuu">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3339223" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-1"></i>
                                Tomioka-Giyuu
                              </a>
                              <div class="time"><span class="role mr-1">Angelfish</span>
                                - 2 minutes ago</div>

                            </div>
                            <div class="text-cut">7:29 nice view Temari-sama</div>
                            <div class="on-chapt">
                              <a href="/watch/naruto-677?ep=12415&amp;c_id=19166583&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Naruto</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166580" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/one_piece/18.jpg" class="user-avatar-img" alt="Chopper">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7283310" target="_blank" class="user-name">Chopper</a>
                              <div class="time"> - 2 minutes ago</div>

                            </div>
                            <div class="text-cut">I rememe watching this anime in YouTube small screen TUT re watching in big screen</div>
                            <div class="on-chapt">
                              <a href="/watch/the-world-is-still-beautiful-1035?ep=16663&amp;c_id=19166580&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>The World is Still Beautiful</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166575" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/mha/avatar-18.png" class="user-avatar-img" alt="krishna_ronaldo 🐐">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/2917666" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-4"></i>
                                krishna_ronaldo 🐐
                              </a>
                              <div class="time"><span class="role mr-1">Dolphin</span>
                                - 3 minutes ago</div>

                            </div>
                            <div class="text-cut">15:09 No Apple Seizure</div>
                            <div class="on-chapt">
                              <a href="/watch/death-note-60?ep=1479&amp;c_id=19166575&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Death Note</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166572" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/chainsaw/02.png" class="user-avatar-img" alt="agentfriedpotato">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3866280" target="_blank" class="user-name">agentfriedpotato</a>
                              <div class="time"> - 3 minutes ago</div>

                            </div>
                            <div class="text-cut">so all fellas out there are taking a day off preapring for exams lmfao we sure all are made of carbon</div>
                            <div class="on-chapt">
                              <a href="/watch/365-days-to-the-wedding-19332?ep=128748&amp;c_id=19166572&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>365 Days to the Wedding</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166570" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/jujutsu_kaisen/File10.png" class="user-avatar-img" alt="jㅤㅤ">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/4959762" target="_blank" class="user-name">jㅤㅤ</a>
                              <div class="time"> - 3 minutes ago</div>

                            </div>
                            <div class="text-cut">yo i thought this was a comedy show why am i crying 😭😭😭</div>
                            <div class="on-chapt">
                              <a href="/watch/non-non-biyori-579?ep=11297&amp;c_id=19166570&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Non Non Biyori</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166569" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/one_piece/user-02.jpeg" class="user-avatar-img" alt="⭐arsicira⭐">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3502489" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-1"></i>
                                ⭐arsicira⭐
                              </a>
                              <div class="time"><span class="role mr-1">Angelfish</span>
                                - 3 minutes ago</div>

                            </div>
                            <div class="text-cut">its the smoker/joker himself</div>
                            <div class="on-chapt">
                              <a href="/watch/fire-force-979?ep=16170&amp;c_id=19166569&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Fire Force</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166568" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/one_piece/user-02.jpeg" class="user-avatar-img" alt="Gizwald">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7779688" target="_blank" class="user-name">Gizwald</a>
                              <div class="time"> - 3 minutes ago</div>

                            </div>
                            <div class="text-cut">robin better then the oiron</div>
                            <div class="on-chapt">
                              <a href="/watch/one-piece-100?ep=3063&amp;c_id=19166568&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>One Piece</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166564" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_chibi/avatar-12.png" class="user-avatar-img" alt="Kilo">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/1368244" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-1"></i>
                                Kilo
                              </a>
                              <div class="time"><span class="role mr-1">Angelfish</span>
                                - 4 minutes ago</div>

                            </div>
                            <div class="text-cut">Ts is so heat 😭🔥</div>
                            <div class="on-chapt">
                              <a href="/watch/shangri-la-frontier-18567?ep=119524&amp;c_id=19166564&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Shangri-La Frontier</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166561" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_normal/av-zz-02.jpeg" class="user-avatar-img" alt="Peter">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7934172" target="_blank" class="user-name">Peter</a>
                              <div class="time"> - 4 minutes ago</div>

                            </div>
                            <div class="text-cut">Why eeri didn't use her rewind power on all might it will be cool to see all might in his prime</div>
                            <div class="on-chapt">
                              <a href="/watch/my-hero-academia-season-7-19146?ep=128575&amp;c_id=19166561&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>My Hero Academia Season 7</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166560" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/one_piece/user-08.jpeg" class="user-avatar-img" alt="Mazed">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3241698" target="_blank" class="user-name">Mazed</a>
                              <div class="time"> - 4 minutes ago</div>

                            </div>
                            <div class="text-cut">lmao kiss = baby</div>
                            <div class="on-chapt">
                              <a href="/watch/rezero-starting-life-in-another-world-2nd-season-part-2-15526?ep=51497&amp;c_id=19166560&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Re:Zero - Starting Life in Another World 2nd Season (Part 2)</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166558" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/jujutsu_kaisen/File13.png" class="user-avatar-img" alt="ディープ ⛈️">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3582467" target="_blank" class="user-name is-level-x is-level-a">
                                <i class="badg-level level-a up-4"></i>
                                ディープ ⛈️
                              </a>
                              <div class="time"><span class="role mr-1">Dolphin</span>
                                - 4 minutes ago</div>

                            </div>
                            <div class="text-cut">Well one thing i definitely learnt from this episode is Expect the Unexpected bcz WHAT THE FUÇK 😶🔥</div>
                            <div class="on-chapt">
                              <a href="/watch/bleach-806?ep=14099&amp;c_id=19166558&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Bleach</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166557" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/demon_splayer/File16.jpg" class="user-avatar-img" alt="Parth">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/7943766" target="_blank" class="user-name">Parth</a>
                              <div class="time"> - 4 minutes ago</div>

                            </div>
                            <div class="text-cut">🫡🫡salute to turbo granny</div>
                            <div class="on-chapt">
                              <a href="/watch/dandadan-19319?ep=128750&amp;c_id=19166557&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Dandadan</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>



                      <div class="swiper-slide" data-id="19166555" style="margin-right: 15px;">
                        <div class="dwl-item">
                          <div class="comment-avatar">
                            <div class="user-avatar">
                              <img src="https://cdn.noitatnemucod.net/avatar/100x100/mha/avatar-20.png" class="user-avatar-img" alt="Sensei">
                            </div>
                          </div>
                          <div class="comment-inline">
                            <div class="about">

                              <a href="/community/user/3637558" target="_blank" class="user-name">Sensei</a>
                              <div class="time"> - 5 minutes ago</div>

                            </div>
                            <div class="text-cut">Solo leveling ants lol</div>
                            <div class="on-chapt">
                              <a href="/watch/good-bye-dragon-life-19347?ep=128752&amp;c_id=19166555&amp;c_type=episode"><i class="far fa-file-alt mr-1"></i>Good Bye, Dragon Life.</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>


                    </div>
                    <div class="swiper-scrollbar">
                      <div class="swiper-scrollbar-drag" style="transform: translate3d(0px, 0px, 0px); width: 17.6415px;"></div>
                    </div>
                    <div class="clearfix"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                  </div>
                </div>
              </div>
              <script>
                var swCmTop = null
                  , swCmLatest = null;
                if ($('#top-comment').length > 0) {
                  swCmTop = new Swiper('#top-comment .swiper-container', {
                    slidesPerView: 5
                    , spaceBetween: 20
                    , freeMode: true
                    , scrollbar: {
                      el: "#top-comment .swiper-scrollbar"
                    , }
                    , breakpoints: {
                      300: {
                        slidesPerView: "auto"
                        , spaceBetween: 15
                      , }
                      , 940: {
                        slidesPerView: 4
                        , spaceBetween: 15
                      , }
                      , 1199: {
                        slidesPerView: 4
                        , spaceBetween: 20
                      , }
                      , 1599: {
                        slidesPerView: 5
                        , spaceBetween: 20
                      , },

                    }
                  , });
                }
                if ($('#new-comment').length > 0) {
                  swCmLatest = new Swiper('#new-comment .swiper-container', {
                    slidesPerView: 5
                    , spaceBetween: 20
                    , freeMode: true
                    , scrollbar: {
                      el: "#new-comment .swiper-scrollbar"
                    , }
                    , breakpoints: {
                      300: {
                        slidesPerView: "auto"
                        , spaceBetween: 15
                      , }
                      , 940: {
                        slidesPerView: 4
                        , spaceBetween: 15
                      , }
                      , 1199: {
                        slidesPerView: 4
                        , spaceBetween: 20
                      , }
                      , 1599: {
                        slidesPerView: 5
                        , spaceBetween: 20
                      , },

                    }
                  , });
                }
                $(document).on('shown.bs.tab', '.cm-tab', function() {
                  swCmTop && swCmTop.update();
                  swCmLatest && swCmLatest.update();
                });

              </script>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <!-- Begin: featured -->
    <div id="anime-featured">
      <div class="container">
        <div class="anif-blocks">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="anif-block anif-block-01">
                <div class="anif-block-header">Top Airing</div>
                <div class="anif-block-ul">
                  <ul class="ulclear">


                    <li>
                      <div class="film-poster item-qtip" data-id="100" data-hasqtip="10" aria-describedby="qtip-10">
                        <a href="/one-piece-100">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bcd84731a3eda4f4a306250769675065.jpg" class="film-poster-img lazyload" alt="One Piece">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/one-piece-100" title="One Piece" class="dynamic-name" data-jname="One Piece">One Piece</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1122</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1096</div>


                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="323" data-hasqtip="11" aria-describedby="qtip-11">
                        <a href="/case-closed-323">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/3b185ed9d10aa300bb0cb7fc35b84999.jpg" class="film-poster-img lazyload" alt="Case Closed">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/case-closed-323" title="Case Closed" class="dynamic-name" data-jname="Detective Conan">Case Closed</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1139</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>123</div>


                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="19319" data-hasqtip="12" aria-describedby="qtip-12">
                        <a href="/dandadan-19319">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/a8b56a7589ff9edb6c86977c31e27a06.jpg" class="film-poster-img lazyload" alt="Dandadan">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/dandadan-19319" title="Dandadan" class="dynamic-name" data-jname="Dandadan">Dandadan</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>4</div>


                            <div class="tick-item tick-eps">12</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="19247" data-hasqtip="13" aria-describedby="qtip-13">
                        <a href="/no-longer-allowed-in-another-world-19247">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8b97e75f9de748632c4458eefb3ec8d8.jpg" class="film-poster-img lazyload" alt="No Longer Allowed In Another World">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/no-longer-allowed-in-another-world-19247" title="No Longer Allowed In Another World" class="dynamic-name" data-jname="Isekai Shikkaku">No Longer Allowed In Another World</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>12</div>


                            <div class="tick-item tick-eps">12</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="19322" data-hasqtip="14" aria-describedby="qtip-14">
                        <a href="/bleach-thousand-year-blood-war-the-conflict-19322">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/b87a9e986e6e403ffddb520d24f5040a.jpg" class="film-poster-img lazyload" alt="Bleach: Thousand-Year Blood War - The Conflict">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/bleach-thousand-year-blood-war-the-conflict-19322" title="Bleach: Thousand-Year Blood War - The Conflict" class="dynamic-name" data-jname="Bleach: Sennen Kessen-hen - Soukoku-tan">Bleach: Thousand-Year Blood War - The Conflict</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3</div>



                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="more"><a href="/top-airing">View more <i class="fas fa-angle-right ml-2"></i></a></div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="anif-block anif-block-03">
                <div class="anif-block-header">Most Popular</div>
                <div class="anif-block-ul">
                  <ul class="ulclear">


                    <li>
                      <div class="film-poster item-qtip" data-id="100" data-hasqtip="15" aria-describedby="qtip-15">
                        <a href="/one-piece-100">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bcd84731a3eda4f4a306250769675065.jpg" class="film-poster-img lazyload" alt="One Piece">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/one-piece-100" title="One Piece" class="dynamic-name" data-jname="One Piece">One Piece</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1122</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1096</div>


                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="355" data-hasqtip="16" aria-describedby="qtip-16">
                        <a href="/naruto-shippuden-355">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9cbcf87f54194742e7686119089478f8.jpg" class="film-poster-img lazyload" alt="Naruto: Shippuden">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/naruto-shippuden-355" title="Naruto: Shippuden" class="dynamic-name" data-jname="Naruto: Shippuuden">Naruto: Shippuden</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>500</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>500</div>


                            <div class="tick-item tick-eps">500</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="806" data-hasqtip="17" aria-describedby="qtip-17">
                        <a href="/bleach-806">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bd5ae1d387a59c5abcf5e1a6a616728c.jpg" class="film-poster-img lazyload" alt="Bleach">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/bleach-806" title="Bleach" class="dynamic-name" data-jname="Bleach">Bleach</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>366</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>366</div>


                            <div class="tick-item tick-eps">366</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="18413" data-hasqtip="18" aria-describedby="qtip-18">
                        <a href="/jujutsu-kaisen-2nd-season-18413">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/b51f863b05f30576cf9d85fa9b911bb5.png" class="film-poster-img lazyload" alt="Jujutsu Kaisen 2nd Season">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/jujutsu-kaisen-2nd-season-18413" title="Jujutsu Kaisen 2nd Season" class="dynamic-name" data-jname="Jujutsu Kaisen 2nd Season">Jujutsu Kaisen 2nd Season</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>23</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>23</div>


                            <div class="tick-item tick-eps">23</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="2404" data-hasqtip="19" aria-describedby="qtip-19">
                        <a href="/black-clover-2404">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/f58b0204c20ae3310f65ae7b8cb9987e.jpg" class="film-poster-img lazyload" alt="Black Clover">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/black-clover-2404" title="Black Clover" class="dynamic-name" data-jname="Black Clover">Black Clover</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>170</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>170</div>


                            <div class="tick-item tick-eps">170</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="more"><a href="/most-popular">View more <i class="fas fa-angle-right ml-2"></i></a></div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="anif-block anif-block-02">
                <div class="anif-block-header">Most Favorite</div>
                <div class="anif-block-ul">
                  <ul class="ulclear">


                    <li>
                      <div class="film-poster item-qtip" data-id="100" data-hasqtip="20" aria-describedby="qtip-20">
                        <a href="/one-piece-100">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bcd84731a3eda4f4a306250769675065.jpg" class="film-poster-img lazyload" alt="One Piece">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/one-piece-100" title="One Piece" class="dynamic-name" data-jname="One Piece">One Piece</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1122</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1096</div>


                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="17406" data-hasqtip="21" aria-describedby="qtip-21">
                        <a href="/chainsaw-man-17406">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/b3da1326e07269ddd8d73475c5dabf2c.jpg" class="film-poster-img lazyload" alt="Chainsaw Man">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/chainsaw-man-17406" title="Chainsaw Man" class="dynamic-name" data-jname="Chainsaw Man">Chainsaw Man</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>12</div>


                            <div class="tick-item tick-eps">12</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="534" data-hasqtip="22" aria-describedby="qtip-22">
                        <a href="/jujutsu-kaisen-tv-534">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/82402f796b7d84d7071ab1e03ff7747a.jpg" class="film-poster-img lazyload" alt="Jujutsu Kaisen (TV)">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/jujutsu-kaisen-tv-534" title="Jujutsu Kaisen (TV)" class="dynamic-name" data-jname="Jujutsu Kaisen (TV)">Jujutsu Kaisen (TV)</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>24</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>24</div>


                            <div class="tick-item tick-eps">24</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="18056" data-hasqtip="23" aria-describedby="qtip-23">
                        <a href="/demon-slayer-kimetsu-no-yaiba-swordsmith-village-arc-18056">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/db2f3ce7b9cab7fdc160b005bffb899a.png" class="film-poster-img lazyload" alt="Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/demon-slayer-kimetsu-no-yaiba-swordsmith-village-arc-18056" title="Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc" class="dynamic-name" data-jname="Kimetsu no Yaiba: Katanakaji no Sato-hen">Demon Slayer: Kimetsu no Yaiba Swordsmith Village Arc</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>11</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>11</div>


                            <div class="tick-item tick-eps">11</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="2404" data-hasqtip="24" aria-describedby="qtip-24">
                        <a href="/black-clover-2404">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/f58b0204c20ae3310f65ae7b8cb9987e.jpg" class="film-poster-img lazyload" alt="Black Clover">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/black-clover-2404" title="Black Clover" class="dynamic-name" data-jname="Black Clover">Black Clover</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>170</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>170</div>


                            <div class="tick-item tick-eps">170</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="more"><a href="/most-favorite">View more <i class="fas fa-angle-right ml-2"></i></a></div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <div class="anif-block anif-block-02">
                <div class="anif-block-header">Latest Completed</div>
                <div class="anif-block-ul">
                  <ul class="ulclear">


                    <li>
                      <div class="film-poster item-qtip" data-id="19229" data-hasqtip="25" aria-describedby="qtip-25">
                        <a href="/i-parry-everything-19229">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/009a25ddb8db9e068e16effd7e93f30e.jpg" class="film-poster-img lazyload" alt="I Parry Everything">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/i-parry-everything-19229" title="I Parry Everything" class="dynamic-name" data-jname="Ore wa Subete wo &quot;Parry&quot; suru: Gyaku Kanchigai no Sekai Saikyou wa Boukensha ni Naritai">I Parry Everything</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>9</div>


                            <div class="tick-item tick-eps">12</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="19202" data-hasqtip="26" aria-describedby="qtip-26">
                        <a href="/monogatari-series-off-monster-season-19202">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9d1d71c904700d4c9584c2df518f624a.jpg" class="film-poster-img lazyload" alt="Monogatari Series: Off &amp; Monster Season">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/monogatari-series-off-monster-season-19202" title="Monogatari Series: Off &amp; Monster Season" class="dynamic-name" data-jname="Monogatari Series: Off &amp; Monster Season">Monogatari Series: Off &amp; Monster Season</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>14</div>



                            <div class="tick-item tick-eps">14</div>

                            <span class="dot"></span>
                            <span class="fdi-item">ONA</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="242" data-hasqtip="27" aria-describedby="qtip-27">
                        <a href="/laid-back-camp-242">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/00ae4a23f642388cbd3d297e50ea5ef5.jpg" class="film-poster-img lazyload" alt="Laid-Back Camp">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/laid-back-camp-242" title="Laid-Back Camp" class="dynamic-name" data-jname="Yuru Camp△">Laid-Back Camp</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>12</div>


                            <div class="tick-item tick-eps">12</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="13458" data-hasqtip="28" aria-describedby="qtip-28">
                        <a href="/dorami-chan-wow-the-kid-gang-of-bandits-13458">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/af88c5ee982c019b3458d430b9810c43.jpg" class="film-poster-img lazyload" alt="Dorami-chan: Wow, The Kid Gang of Bandits">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/dorami-chan-wow-the-kid-gang-of-bandits-13458" title="Dorami-chan: Wow, The Kid Gang of Bandits" class="dynamic-name" data-jname="Dorami-chan: Wow, The Kid Gang of Bandits">Dorami-chan: Wow, The Kid Gang of Bandits</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1</div>



                            <span class="dot"></span>
                            <span class="fdi-item">Movie</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                    <li>
                      <div class="film-poster item-qtip" data-id="18465" data-hasqtip="29" aria-describedby="qtip-29">
                        <a href="/level-1-demon-lord-and-one-room-hero-18465">
                          <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/40a75a631e0c29da6d093d4e089a11d0.jpg" class="film-poster-img lazyload" alt="Level 1 Demon Lord and One Room Hero">
                        </a>
                      </div>
                      <div class="film-detail">
                        <h3 class="film-name"><a href="/level-1-demon-lord-and-one-room-hero-18465" title="Level 1 Demon Lord and One Room Hero" class="dynamic-name" data-jname="Lv1 Maou to One Room Yuusha">Level 1 Demon Lord and One Room Hero</a></h3>
                        <div class="fd-infor">
                          <div class="tick">



                            <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                            <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>10</div>


                            <div class="tick-item tick-eps">12</div>

                            <span class="dot"></span>
                            <span class="fdi-item">TV</span>

                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </li>

                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="more"><a href="/completed">View more <i class="fas fa-angle-right ml-2"></i></a></div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="main-wrapper">
      <div class="container">
        <div id="main-content">
          <div id="widget-continue-watching"></div>
          <section class="block_area block_area_home">
            <div class="block_area-header">
              <div class="float-left bah-heading mr-4">
                <h2 class="cat-heading">Latest Episode</h2>
              </div>
              <div class="float-right viewmore"><a class="btn" href="/recently-updated">View more<i class="fas fa-angle-right ml-2"></i></a></div>
              <div class="clearfix"></div>
            </div>
            <div class="tab-content">
              <div class="block_area-content block_area-list film_list film_list-grid">
                <div class="film_list-wrap">

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>2</div>



                        <div class="tick-item tick-eps">25</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bc287b6bffb48aa02170c320e09ecae1.jpg" class="film-poster-img lazyload" alt="Touhai: Ura Rate Mahjong Touhai Roku">
                      <a href="/watch/touhai-ura-rate-mahjong-touhai-roku-19358?w=latest" class="film-poster-ahref item-qtip" data-id="19358" data-hasqtip="30" oldtitle="Touhai: Ura Rate Mahjong Touhai Roku" title="" aria-describedby="qtip-30"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/touhai-ura-rate-mahjong-touhai-roku-19358" title="Touhai: Ura Rate Mahjong Touhai Roku" class="dynamic-name" data-jname="Touhai: Ura Rate Mahjong Touhai Roku">Touhai: Ura Rate Mahjong Touhai Roku</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>115</div>



                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/2147b7dfdac8d45a8ffa0e92da9c4859.jpg" class="film-poster-img lazyload" alt="Chiikawa">
                      <a href="/watch/chiikawa-18003?w=latest" class="film-poster-ahref item-qtip" data-id="18003" data-hasqtip="31" oldtitle="Chiikawa" title="" aria-describedby="qtip-31"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/chiikawa-18003" title="Chiikawa" class="dynamic-name" data-jname="Chiikawa">Chiikawa</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">1m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3</div>



                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9b25eb117ecc8cf228d361540c7cfd67.jpg" class="film-poster-img lazyload" alt="The Seven Deadly Sins: Four Knights of the Apocalypse Season 2">
                      <a href="/watch/the-seven-deadly-sins-four-knights-of-the-apocalypse-season-2-19342?w=latest" class="film-poster-ahref item-qtip" data-id="19342" data-hasqtip="32" oldtitle="The Seven Deadly Sins: Four Knights of the Apocalypse Season 2" title="" aria-describedby="qtip-32"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/the-seven-deadly-sins-four-knights-of-the-apocalypse-season-2-19342" title="The Seven Deadly Sins: Four Knights of the Apocalypse Season 2" class="dynamic-name" data-jname="Nanatsu no Taizai: Mokushiroku no Yonkishi 2nd Season">The Seven Deadly Sins: Four Knights of the Apocalypse Season 2</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>29</div>



                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/6e776c14328ff40935f919c1154ca857.jpg" class="film-poster-img lazyload" alt="Himitsu no AiPri">
                      <a href="/watch/himitsu-no-aipri-19096?w=latest" class="film-poster-ahref item-qtip" data-id="19096" data-hasqtip="33" oldtitle="Himitsu no AiPri" title="" aria-describedby="qtip-33"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/himitsu-no-aipri-19096" title="Himitsu no AiPri" class="dynamic-name" data-jname="Himitsu no AiPri">Himitsu no AiPri</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>6</div>



                        <div class="tick-item tick-eps">12</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/62bedeee4bea3081ef9591aae542d9d1.jpg" class="film-poster-img lazyload" alt="Another Journey to the West">
                      <a href="/watch/another-journey-to-the-west-19402?w=latest" class="film-poster-ahref item-qtip" data-id="19402" data-hasqtip="34" oldtitle="Another Journey to the West" title="" aria-describedby="qtip-34"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/another-journey-to-the-west-19402" title="Another Journey to the West" class="dynamic-name" data-jname="Ji Yao Lu: Qicheng Pian">Another Journey to the West</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">ONA</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>5</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>3</div>


                        <div class="tick-item tick-eps">26</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/82212d29aa7281bfa1d92be7f6454d84.jpg" class="film-poster-img lazyload" alt="TRILLION GAME">
                      <a href="/watch/trillion-game-19362?w=latest" class="film-poster-ahref item-qtip" data-id="19362" data-hasqtip="35" oldtitle="TRILLION GAME" title="" aria-describedby="qtip-35"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/trillion-game-19362" title="TRILLION GAME" class="dynamic-name" data-jname="Trillion Game">TRILLION GAME</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">24m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1</div>


                        <div class="tick-item tick-eps">23</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/4c339e5c8107dbda621c214e351f7164.jpg" class="film-poster-img lazyload" alt="Rurouni Kenshin -Kyoto Disturbance-">
                      <a href="/watch/rurouni-kenshin-kyoto-disturbance-19340?w=latest" class="film-poster-ahref item-qtip" data-id="19340" data-hasqtip="36" oldtitle="Rurouni Kenshin -Kyoto Disturbance-" title="" aria-describedby="qtip-36"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/rurouni-kenshin-kyoto-disturbance-19340" title="Rurouni Kenshin -Kyoto Disturbance-" class="dynamic-name" data-jname="Rurouni Kenshin: Meiji Kenkaku Romantan - Kyoto Douran">Rurouni Kenshin -Kyoto Disturbance-</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">22m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>



                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/6431fdac6396ff285bf3c69b807a8a9a.jpg" class="film-poster-img lazyload" alt="Good Bye, Dragon Life.">
                      <a href="/watch/good-bye-dragon-life-19347?w=latest" class="film-poster-ahref item-qtip" data-id="19347" data-hasqtip="37" oldtitle="Good Bye, Dragon Life." title="" aria-describedby="qtip-37"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/good-bye-dragon-life-19347" title="Good Bye, Dragon Life." class="dynamic-name" data-jname="Sayounara Ryuusei, Konnichiwa Jinsei">Good Bye, Dragon Life.</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">24m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>



                        <div class="tick-item tick-eps">12</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/337e55b7a14ff7079361fe3e4ccd85f2.jpg" class="film-poster-img lazyload" alt="Mechanical Arms">
                      <a href="/watch/mechanical-arms-19354?w=latest" class="film-poster-ahref item-qtip" data-id="19354" data-hasqtip="38" oldtitle="Mechanical Arms" title="" aria-describedby="qtip-38"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/mechanical-arms-19354" title="Mechanical Arms" class="dynamic-name" data-jname="Mecha-ude (TV)">Mechanical Arms</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>5</div>



                        <div class="tick-item tick-eps">25</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/5f112b1c1f3f41ed87de0c48b6cf4e0d.jpg" class="film-poster-img lazyload" alt="Blue Box">
                      <a href="/watch/blue-box-19326?w=latest" class="film-poster-ahref item-qtip" data-id="19326" data-hasqtip="39" oldtitle="Blue Box" title="" aria-describedby="qtip-39"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/blue-box-19326" title="Blue Box" class="dynamic-name" data-jname="Ao no Hako">Blue Box</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>4</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/a8b56a7589ff9edb6c86977c31e27a06.jpg" class="film-poster-img lazyload" alt="Dandadan">
                      <a href="/watch/dandadan-19319?w=latest" class="film-poster-ahref item-qtip" data-id="19319" data-hasqtip="40" oldtitle="Dandadan" title="" aria-describedby="qtip-40"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/dandadan-19319" title="Dandadan" class="dynamic-name" data-jname="Dandadan">Dandadan</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>



                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/c68596383f97465735d8145d9c8a9875.jpg" class="film-poster-img lazyload" alt="365 Days to the Wedding">
                      <a href="/watch/365-days-to-the-wedding-19332?w=latest" class="film-poster-ahref item-qtip" data-id="19332" data-hasqtip="41" oldtitle="365 Days to the Wedding" title="" aria-describedby="qtip-41"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/365-days-to-the-wedding-19332" title="365 Days to the Wedding" class="dynamic-name" data-jname="Kekkon suru tte, Hontou desu ka">365 Days to the Wedding</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>


                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </section>
          <div class="clearfix"></div>
          <section class="block_area block_area_home">
            <div class="block_area-header block_area-header-tabs">
              <div class="float-left bah-heading mr-4">
                <h2 class="cat-heading">New On HiAnime</h2>
              </div>
              <div class="float-right viewmore"><a class="btn" href="/recently-added">View more<i class="fas fa-angle-right ml-2"></i></a></div>
              <div class="clearfix"></div>
            </div>
            <div class="tab-content">
              <div class="block_area-content block_area-list film_list film_list-grid">
                <div class="film_list-wrap">

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>9</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/009a25ddb8db9e068e16effd7e93f30e.jpg" class="film-poster-img lazyload" alt="I Parry Everything">
                      <a href="/watch/i-parry-everything-19229" class="film-poster-ahref item-qtip" data-id="19229" data-hasqtip="42" oldtitle="I Parry Everything" title="" aria-describedby="qtip-42"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/i-parry-everything-19229" title="I Parry Everything" class="dynamic-name" data-jname="Ore wa Subete wo &quot;Parry&quot; suru: Gyaku Kanchigai no Sekai Saikyou wa Boukensha ni Naritai">I Parry Everything</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">24m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">

                      <div class="tick tick-rate">18+</div>


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>14</div>



                        <div class="tick-item tick-eps">14</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9d1d71c904700d4c9584c2df518f624a.jpg" class="film-poster-img lazyload" alt="Monogatari Series: Off &amp; Monster Season">
                      <a href="/watch/monogatari-series-off-monster-season-19202" class="film-poster-ahref item-qtip" data-id="19202" data-hasqtip="43" oldtitle="Monogatari Series: Off &amp; Monster Season" title="" aria-describedby="qtip-43"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/monogatari-series-off-monster-season-19202" title="Monogatari Series: Off &amp; Monster Season" class="dynamic-name" data-jname="Monogatari Series: Off &amp; Monster Season">Monogatari Series: Off &amp; Monster Season</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">ONA</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">25m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>12</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/00ae4a23f642388cbd3d297e50ea5ef5.jpg" class="film-poster-img lazyload" alt="Laid-Back Camp">
                      <a href="/watch/laid-back-camp-242" class="film-poster-ahref item-qtip" data-id="242" data-hasqtip="44" oldtitle="Laid-Back Camp" title="" aria-describedby="qtip-44"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/laid-back-camp-242" title="Laid-Back Camp" class="dynamic-name" data-jname="Yuru Camp△">Laid-Back Camp</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1</div>



                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/af88c5ee982c019b3458d430b9810c43.jpg" class="film-poster-img lazyload" alt="Dorami-chan: Wow, The Kid Gang of Bandits">
                      <a href="/watch/dorami-chan-wow-the-kid-gang-of-bandits-13458" class="film-poster-ahref item-qtip" data-id="13458" data-hasqtip="45" oldtitle="Dorami-chan: Wow, The Kid Gang of Bandits" title="" aria-describedby="qtip-45"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/dorami-chan-wow-the-kid-gang-of-bandits-13458" title="Dorami-chan: Wow, The Kid Gang of Bandits" class="dynamic-name" data-jname="Dorami-chan: Wow, The Kid Gang of Bandits">Dorami-chan: Wow, The Kid Gang of Bandits</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">Movie</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">40m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>10</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/40a75a631e0c29da6d093d4e089a11d0.jpg" class="film-poster-img lazyload" alt="Level 1 Demon Lord and One Room Hero">
                      <a href="/watch/level-1-demon-lord-and-one-room-hero-18465" class="film-poster-ahref item-qtip" data-id="18465" data-hasqtip="46" oldtitle="Level 1 Demon Lord and One Room Hero" title="" aria-describedby="qtip-46"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/level-1-demon-lord-and-one-room-hero-18465" title="Level 1 Demon Lord and One Room Hero" class="dynamic-name" data-jname="Lv1 Maou to One Room Yuusha">Level 1 Demon Lord and One Room Hero</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>6</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/c068a9c8c27a61e66171aecf814868b4.jpg" class="film-poster-img lazyload" alt="Jellyfish Can't Swim in the Night">
                      <a href="/watch/jellyfish-cant-swim-in-the-night-19124" class="film-poster-ahref item-qtip" data-id="19124" data-hasqtip="47" oldtitle="Jellyfish Can't Swim in the Night" title="" aria-describedby="qtip-47"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/jellyfish-cant-swim-in-the-night-19124" title="Jellyfish Can't Swim in the Night" class="dynamic-name" data-jname="Yoru no Kurage wa Oyogenai">Jellyfish Can't Swim in the Night</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">22m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>27</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>18</div>


                        <div class="tick-item tick-eps">27</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/259ca4ad41fd80081677b04a880c7d4b.jpg" class="film-poster-img lazyload" alt="Mission: Yozakura Family">
                      <a href="/watch/mission-yozakura-family-19133" class="film-poster-ahref item-qtip" data-id="19133" data-hasqtip="48" oldtitle="Mission: Yozakura Family" title="" aria-describedby="qtip-48"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/mission-yozakura-family-19133" title="Mission: Yozakura Family" class="dynamic-name" data-jname="Yozakura-san Chi no Daisakusen">Mission: Yozakura Family</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">

                      <div class="tick tick-rate">18+</div>


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>4</div>


                        <div class="tick-item tick-eps">4</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/31391cad058098cf6a14359829468bea.jpg" class="film-poster-img lazyload" alt="Uzumaki: Spiral into Horror">
                      <a href="/watch/uzumaki-spiral-into-horror-15600" class="film-poster-ahref item-qtip" data-id="15600" data-hasqtip="49" oldtitle="Uzumaki: Spiral into Horror" title="" aria-describedby="qtip-49"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/uzumaki-spiral-into-horror-15600" title="Uzumaki: Spiral into Horror" class="dynamic-name" data-jname="Uzumaki">Uzumaki: Spiral into Horror</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">0m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1</div>



                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/08367d0a68b3952cb14a1e72b84aaae3.jpg" class="film-poster-img lazyload" alt="One Piece Fan Letter">
                      <a href="/watch/one-piece-fan-letter-19406" class="film-poster-ahref item-qtip" data-id="19406" data-hasqtip="50" oldtitle="One Piece Fan Letter" title="" aria-describedby="qtip-50"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/one-piece-fan-letter-19406" title="One Piece Fan Letter" class="dynamic-name" data-jname="One Piece Fan Letter">One Piece Fan Letter</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">Special</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">24m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>21</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>20</div>


                        <div class="tick-item tick-eps">21</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/af4938d7388aad3438e443e74b02531e.jpg" class="film-poster-img lazyload" alt="My Hero Academia Season 7">
                      <a href="/watch/my-hero-academia-season-7-19146" class="film-poster-ahref item-qtip" data-id="19146" data-hasqtip="51" oldtitle="My Hero Academia Season 7" title="" aria-describedby="qtip-51"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/my-hero-academia-season-7-19146" title="My Hero Academia Season 7" class="dynamic-name" data-jname="Boku no Hero Academia 7th Season">My Hero Academia Season 7</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">24m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">

                      <div class="tick tick-rate">18+</div>


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>11</div>


                        <div class="tick-item tick-eps">12</div>

                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9ec60e43741263113cd1287467162fb5.jpg" class="film-poster-img lazyload" alt="The Elusive Samurai">
                      <a href="/watch/the-elusive-samurai-19233" class="film-poster-ahref item-qtip" data-id="19233" data-hasqtip="52" oldtitle="The Elusive Samurai" title="" aria-describedby="qtip-52"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/the-elusive-samurai-19233" title="The Elusive Samurai" class="dynamic-name" data-jname="Nige Jouzu no Wakagimi">The Elusive Samurai</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">23m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <div class="tick ltr">



                        <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1</div>


                        <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1</div>


                      </div>

                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/97a276237c3dce81b62af1565488fd37.jpg" class="film-poster-img lazyload" alt="Blue Lock: Episode Nagi">
                      <a href="/watch/blue-lock-episode-nagi-19085" class="film-poster-ahref item-qtip" data-id="19085" data-hasqtip="53" oldtitle="Blue Lock: Episode Nagi" title="" aria-describedby="qtip-53"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/blue-lock-episode-nagi-19085" title="Blue Lock: Episode Nagi" class="dynamic-name" data-jname="Blue Lock: Episode Nagi">Blue Lock: Episode Nagi</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">Movie</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">90m</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>


                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </section>
          <div class="clearfix"></div>
          <div id="schedule-block">
            <section class="block_area block_area_sidebar block_area-schedule schedule-full">
              <div class="block_area-header">
                <div class="float-left bah-heading mr-4">
                  <h2 class="cat-heading">Estimated Schedule</h2>
                </div>
                <div class="float-left bah-time">
                  <span class="current-time"><span id="timezone">(GMT+07:00)</span> <span id="current-date">10/25/2024</span> <span id="clock">01:29:47 PM</span></span>
                </div>
                <!--        <div class="float-right viewmore"><a class="btn" href="#" title="">View all<i-->
                <!--                        class="fas fa-angle-right ml-2"></i></a></div>-->
                <div class="clearfix"></div>
              </div>
              <div class="block_area-content">
                <div class="table_schedule">
                  <div class="table_schedule-date">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                      <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-3940.8px, 0px, 0px);">

                        <div class="swiper-slide day-item" data-date="2024-10-01" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Tue</span>
                            <div class="date">Oct 1</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-02" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Wed</span>
                            <div class="date">Oct 2</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-03" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Thu</span>
                            <div class="date">Oct 3</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-04" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Fri</span>
                            <div class="date">Oct 4</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-05" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Sat</span>
                            <div class="date">Oct 5</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-06" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Sun</span>
                            <div class="date">Oct 6</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-07" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Mon</span>
                            <div class="date">Oct 7</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-08" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Tue</span>
                            <div class="date">Oct 8</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-09" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Wed</span>
                            <div class="date">Oct 9</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-10" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Thu</span>
                            <div class="date">Oct 10</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-11" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Fri</span>
                            <div class="date">Oct 11</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-12" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Sat</span>
                            <div class="date">Oct 12</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-13" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Sun</span>
                            <div class="date">Oct 13</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-14" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Mon</span>
                            <div class="date">Oct 14</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-15" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Tue</span>
                            <div class="date">Oct 15</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-16" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Wed</span>
                            <div class="date">Oct 16</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-17" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Thu</span>
                            <div class="date">Oct 17</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-18" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Fri</span>
                            <div class="date">Oct 18</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-19" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Sat</span>
                            <div class="date">Oct 19</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-20" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Sun</span>
                            <div class="date">Oct 20</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-21" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Mon</span>
                            <div class="date">Oct 21</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-22" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Tue</span>
                            <div class="date">Oct 22</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-23" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Wed</span>
                            <div class="date">Oct 23</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item swiper-slide-prev" data-date="2024-10-24" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Thu</span>
                            <div class="date">Oct 24</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item swiper-slide-active" data-date="2024-10-25" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item active">
                            <span>Fri</span>
                            <div class="date">Oct 25</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item swiper-slide-next" data-date="2024-10-26" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Sat</span>
                            <div class="date">Oct 26</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-27" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Sun</span>
                            <div class="date">Oct 27</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-28" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Mon</span>
                            <div class="date">Oct 28</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-29" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Tue</span>
                            <div class="date">Oct 29</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-30" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Wed</span>
                            <div class="date">Oct 30</div>
                          </div>
                        </div>

                        <div class="swiper-slide day-item" data-date="2024-10-31" style="width: 154.2px; margin-right: 10px;">
                          <div class="tsd-item">
                            <span>Thu</span>
                            <div class="date">Oct 31</div>
                          </div>
                        </div>

                      </div>
                      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="ts-navigation">
                      <button class="btn tsn-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><i class="fas fa-angle-right"></i></button>
                      <button class="btn tsn-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"><i class="fas fa-angle-left"></i></button>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <ul class="ulclear table_schedule-list limit-8">

                    <li>
                      <a href="/good-bye-dragon-life-19347" class="tsl-link">
                        <div class="time">00:00</div>
                        <div class="film-detail">
                          <h3 class="film-name dynamic-name" data-jname="Sayounara Ryuusei, Konnichiwa Jinsei">Good Bye, Dragon Life.</h3>
                          <div class="fd-play">
                            <button type="button" class="btn btn-sm btn-play"><i class="fas fa-play mr-2"></i>Episode 4
                            </button>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="/trillion-game-19362" class="tsl-link">
                        <div class="time">00:45</div>
                        <div class="film-detail">
                          <h3 class="film-name dynamic-name" data-jname="Trillion Game">TRILLION GAME</h3>
                          <div class="fd-play">
                            <button type="button" class="btn btn-sm btn-play"><i class="fas fa-play mr-2"></i>Episode 5
                            </button>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="/rurouni-kenshin-kyoto-disturbance-19340" class="tsl-link">
                        <div class="time">01:00</div>
                        <div class="film-detail">
                          <h3 class="film-name dynamic-name" data-jname="Rurouni Kenshin: Meiji Kenkaku Romantan - Kyoto Douran">Rurouni Kenshin -Kyoto Disturbance-</h3>
                          <div class="fd-play">
                            <button type="button" class="btn btn-sm btn-play"><i class="fas fa-play mr-2"></i>Episode 4
                            </button>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="/25-dimensional-seduction-19245" class="tsl-link">
                        <div class="time">20:30</div>
                        <div class="film-detail">
                          <h3 class="film-name dynamic-name" data-jname="2.5-jigen no Ririsa">2.5 Dimensional Seduction</h3>
                          <div class="fd-play">
                            <button type="button" class="btn btn-sm btn-play"><i class="fas fa-play mr-2"></i>Episode 17
                            </button>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="/magilumiere-co-ltd-19357" class="tsl-link">
                        <div class="time">22:30</div>
                        <div class="film-detail">
                          <h3 class="film-name dynamic-name" data-jname="Kabushikigaisha Magi-Lumière">Magilumiere Co. Ltd.</h3>
                          <div class="fd-play">
                            <button type="button" class="btn btn-sm btn-play"><i class="fas fa-play mr-2"></i>Episode 4
                            </button>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="/dragon-ball-daima-19328" class="tsl-link">
                        <div class="time">23:15</div>
                        <div class="film-detail">
                          <h3 class="film-name dynamic-name" data-jname="Dragon Ball Daima">Dragon Ball Daima</h3>
                          <div class="fd-play">
                            <button type="button" class="btn btn-sm btn-play"><i class="fas fa-play mr-2"></i>Episode 3
                            </button>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="/sword-art-online-alternative-gun-gale-online-ii-19325" class="tsl-link">
                        <div class="time">23:30</div>
                        <div class="film-detail">
                          <h3 class="film-name dynamic-name" data-jname="Sword Art Online Alternative: Gun Gale Online II">Sword Art Online Alternative: Gun Gale Online II</h3>
                          <div class="fd-play">
                            <button type="button" class="btn btn-sm btn-play"><i class="fas fa-play mr-2"></i>Episode 4
                            </button>
                          </div>
                        </div>
                      </a>
                    </li>


                  </ul>
                  <button id="scl-more" class="btn btn-sm btn-block btn-showmore" style="display: none;"></button>
                </div>
              </div>
            </section>
            <script>
              $("#scl-more").click(function() {
                $(this).parent().find(".limit-8").toggleClass("active");
                $(this).toggleClass("active");
              });

              if ($('.table_schedule-list li').length > 7) {
                $('#scl-more').show();
              }

              var scheduleSw = new Swiper('.schedule-full .table_schedule-date .swiper-container', {
                slidesPerView: 7
                , spaceBetween: 10,
                // centeredSlides: true,
                navigation: {
                  nextEl: '.schedule-full .tsn-next'
                  , prevEl: '.schedule-full .tsn-prev'
                , }
                , breakpoints: {
                  320: {
                    slidesPerView: 3
                    , spaceBetween: 10
                  , }
                  , 360: {
                    slidesPerView: 3
                    , spaceBetween: 10
                  , }
                  , 480: {
                    slidesPerView: 3
                    , spaceBetween: 10
                  , }
                  , 640: {
                    slidesPerView: 4
                    , spaceBetween: 10
                  , }
                  , 768: {
                    slidesPerView: 5
                    , spaceBetween: 10
                  , }
                  , 1024: {
                    slidesPerView: 7
                    , spaceBetween: 13
                  , }
                , }
              , });
              scheduleSw.slideTo($(".tsd-item").index($(".tsd-item.active")), 1000);
              setTimeout(function() {
                $(".tsd-item.active").click();
              }, 1000)
              $('.day-item').click(function() {
                var tzOffset = new Date().getTimezoneOffset();
                $('.tsd-item').removeClass('active');
                $(this).find('.tsd-item').addClass('active');
                $.get('/ajax/schedule/list?tzOffset=' + tzOffset + '&date=' + $(this).data('date'), function(res) {
                  if (res) {
                    $('.table_schedule-list').html(res.html);
                    if ($('.table_schedule-list li').length > 7) {
                      $('#scl-more').show();
                    } else {
                      $('#scl-more').hide();
                    }
                  }
                });
              });

              setInterval(showTime, 1000);

              function showTime() {
                var time = new Date();
                var hour = time.getHours();
                var min = time.getMinutes();
                var sec = time.getSeconds();
                var am_pm = "AM";

                if (hour > 12) {
                  hour -= 12;
                  am_pm = "PM";
                }
                if (hour === 0) {
                  hour = 12;
                  am_pm = "AM";
                }

                hour = hour < 10 ? "0" + hour : hour;
                min = min < 10 ? "0" + min : min;
                sec = sec < 10 ? "0" + sec : sec;

                var currentTime = hour + ":" + min + ":" + sec + " " + am_pm;
                $('#clock').html(currentTime);
              }

              var date = new Date();
              $('#current-date').text(date.toLocaleDateString());
              var timezone = date.toString().split(" ")[5];
              $('#timezone').text("(" + timezone.slice(0, timezone.length - 2) + ":" + timezone.slice(-2) + ")");

              showTime();

            </script>
          </div>
          <section class="block_area block_area_home">
            <div class="block_area-header">
              <div class="float-left bah-heading mr-4">
                <h2 class="cat-heading">Top Upcoming</h2>
              </div>
              <div class="float-right viewmore"><a class="btn" href="/top-upcoming">View more<i class="fas fa-angle-right ml-2"></i></a></div>
              <div class="clearfix"></div>
            </div>
            <div class="tab-content">
              <div class="block_area-content block_area-list film_list film_list-grid">
                <div class="film_list-wrap">

                  <div class="flw-item">

                    <div class="film-poster">


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/09fa617c39f5153931af9812fc176154.jpg" class="film-poster-img lazyload" alt="Murder Mystery of the Dead">
                      <a href="/watch/murder-mystery-of-the-dead-19405" class="film-poster-ahref item-qtip" data-id="19405" data-hasqtip="54" oldtitle="Murder Mystery of the Dead" title="" aria-describedby="qtip-54"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/murder-mystery-of-the-dead-19405" title="Murder Mystery of the Dead" class="dynamic-name" data-jname="Murder Mystery of the Dead">Murder Mystery of the Dead</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV (? eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">?</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/65eebbb906e8dab6e9efc4bf096db3fb.jpg" class="film-poster-img lazyload" alt="One Piece Log: Fish-Man Island Saga">
                      <a href="/watch/one-piece-log-fish-man-island-saga-19404" class="film-poster-ahref item-qtip" data-id="19404" data-hasqtip="55" oldtitle="One Piece Log: Fish-Man Island Saga" title="" aria-describedby="qtip-55"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/one-piece-log-fish-man-island-saga-19404" title="One Piece Log: Fish-Man Island Saga" class="dynamic-name" data-jname="One Piece: Gyojin Tou-hen">One Piece Log: Fish-Man Island Saga</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV (21 eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">Oct 27, 2024</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8b3e7ca7f1d6623e986a2ab3cca5c6e6.jpg" class="film-poster-img lazyload" alt="Kagaku x Bouken Survival!">
                      <a href="/watch/kagaku-x-bouken-survival-19376" class="film-poster-ahref item-qtip" data-id="19376" data-hasqtip="56" oldtitle="Kagaku x Bouken Survival!" title="" aria-describedby="qtip-56"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/kagaku-x-bouken-survival-19376" title="Kagaku x Bouken Survival!" class="dynamic-name" data-jname="Kagaku x Bouken Survival!">Kagaku x Bouken Survival!</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV (? eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">Oct 5, 2024</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8a0202e79a2d40bd1ba19187693fce46.jpg" class="film-poster-img lazyload" alt="Genjitsu no Yohane: Sunshine in the Mirror Movie">
                      <a href="/watch/genjitsu-no-yohane-sunshine-in-the-mirror-movie-19394" class="film-poster-ahref item-qtip" data-id="19394" data-hasqtip="57" oldtitle="Genjitsu no Yohane: Sunshine in the Mirror Movie" title="" aria-describedby="qtip-57"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/genjitsu-no-yohane-sunshine-in-the-mirror-movie-19394" title="Genjitsu no Yohane: Sunshine in the Mirror Movie" class="dynamic-name" data-jname="Genjitsu no Yohane: Sunshine in the Mirror Movie">Genjitsu no Yohane: Sunshine in the Mirror Movie</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">Movie (1 eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">Nov 29, 2024</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/5919c430ae29ebb7ff9175043fc2b66c.jpg" class="film-poster-img lazyload" alt="Give It All">
                      <a href="/watch/give-it-all-19393" class="film-poster-ahref item-qtip" data-id="19393" data-hasqtip="58" oldtitle="Give It All" title="" aria-describedby="qtip-58"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/give-it-all-19393" title="Give It All" class="dynamic-name" data-jname="Ganbatte Ikimasshoi">Give It All</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">Movie (1 eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">?</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">

                      <div class="tick tick-rate">18+</div>


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/a4721548991d6cb4887256c53fb61c66.jpg" class="film-poster-img lazyload" alt="Solo Leveling: ReAwakening">
                      <a href="/watch/solo-leveling-reawakening-19392" class="film-poster-ahref item-qtip" data-id="19392" data-hasqtip="59" oldtitle="Solo Leveling: ReAwakening" title="" aria-describedby="qtip-59"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/solo-leveling-reawakening-19392" title="Solo Leveling: ReAwakening" class="dynamic-name" data-jname="Ore dake Level Up na Ken: ReAwakening">Solo Leveling: ReAwakening</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">Movie (1 eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">?</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">

                      <div class="tick tick-rate">18+</div>


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9b17cd8c7479d523d77e5e2cbbb5ad67.jpg" class="film-poster-img lazyload" alt="Attack on Titan: The Last Attack">
                      <a href="/watch/attack-on-titan-the-last-attack-19391" class="film-poster-ahref item-qtip" data-id="19391" data-hasqtip="60" oldtitle="Attack on Titan: The Last Attack" title="" aria-describedby="qtip-60"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/attack-on-titan-the-last-attack-19391" title="Attack on Titan: The Last Attack" class="dynamic-name" data-jname="Shingeki no Kyojin Movie: Kanketsu-hen - The Last Attack">Attack on Titan: The Last Attack</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">Movie (1 eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">?</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/61cb6748bcd1d62e6d36c05aa4800af4.jpg" class="film-poster-img lazyload" alt="Gintama on Theater 2D: Kintama-hen">
                      <a href="/watch/gintama-on-theater-2d-kintama-hen-19389" class="film-poster-ahref item-qtip" data-id="19389" data-hasqtip="61" oldtitle="Gintama on Theater 2D: Kintama-hen" title="" aria-describedby="qtip-61"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/gintama-on-theater-2d-kintama-hen-19389" title="Gintama on Theater 2D: Kintama-hen" class="dynamic-name" data-jname="Gintama on Theater 2D: Kintama-hen">Gintama on Theater 2D: Kintama-hen</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">Movie (1 eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">Nov 22, 2024</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">

                      <div class="tick tick-rate">18+</div>


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/ea454828c29e151861998bada7f07301.jpg" class="film-poster-img lazyload" alt="Beastars Final Season">
                      <a href="/watch/beastars-final-season-19385" class="film-poster-ahref item-qtip" data-id="19385" data-hasqtip="62" oldtitle="Beastars Final Season" title="" aria-describedby="qtip-62"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/beastars-final-season-19385" title="Beastars Final Season" class="dynamic-name" data-jname="Beastars Final Season">Beastars Final Season</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">ONA (? eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">?</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/b8f995d602bf8a2def55ab975f0bb96c.jpg" class="film-poster-img lazyload" alt="Pinkfong-gwa Hogi: Sae Chingu Ninimo">
                      <a href="/watch/pinkfong-gwa-hogi-sae-chingu-ninimo-19384" class="film-poster-ahref item-qtip" data-id="19384" data-hasqtip="63" oldtitle="Pinkfong-gwa Hogi: Sae Chingu Ninimo" title="" aria-describedby="qtip-63"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/pinkfong-gwa-hogi-sae-chingu-ninimo-19384" title="Pinkfong-gwa Hogi: Sae Chingu Ninimo" class="dynamic-name" data-jname="Pinkfong-gwa Hogi: Sae Chingu Ninimo">Pinkfong-gwa Hogi: Sae Chingu Ninimo</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV (? eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">Sep 24, 2024</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/1258fd70e67fdbbb562122c663fd363f.jpg" class="film-poster-img lazyload" alt="Pochaazu">
                      <a href="/watch/pochaazu-19383" class="film-poster-ahref item-qtip" data-id="19383" data-hasqtip="64" oldtitle="Pochaazu" title="" aria-describedby="qtip-64"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/pochaazu-19383" title="Pochaazu" class="dynamic-name" data-jname="Pochaazu">Pochaazu</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV (? eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">?</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="flw-item">

                    <div class="film-poster">


                      <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/6a3930b682c0ba3cc459fc9b6625151a.jpg" class="film-poster-img lazyload" alt="Kumarba Season 2">
                      <a href="/watch/kumarba-season-2-19382" class="film-poster-ahref item-qtip" data-id="19382" data-hasqtip="65" oldtitle="Kumarba Season 2" title="" aria-describedby="qtip-65"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="film-detail">
                      <h3 class="film-name"><a href="/kumarba-season-2-19382" title="Kumarba Season 2" class="dynamic-name" data-jname="Kumarba Season 2">Kumarba Season 2</a></h3>
                      <div class="fd-infor">

                        <span class="fdi-item">TV (? eps)</span>
                        <span class="dot"></span>
                        <span class="fdi-item fdi-duration">Oct 5, 2024</span>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>


                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </section>
        </div>
        <div id="main-sidebar">
          <section class="block_area block_area_sidebar block_area-genres">
            <div class="block_area-header">
              <div class="float-left bah-heading mr-4">
                <h2 class="cat-heading">Genres</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="block_area-content">
              <div class="cbox cbox-genres">
                <ul class="ulclear color-list sb-genre-list sb-genre-less">

                  <li><a href="/genre/action" title="Action">Action</a></li>

                  <li><a href="/genre/adventure" title="Adventure">Adventure</a></li>

                  <li><a href="/genre/cars" title="Cars">Cars</a></li>

                  <li><a href="/genre/comedy" title="Comedy">Comedy</a></li>

                  <li><a href="/genre/dementia" title="Dementia">Dementia</a></li>

                  <li><a href="/genre/demons" title="Demons">Demons</a></li>

                  <li><a href="/genre/drama" title="Drama">Drama</a></li>

                  <li><a href="/genre/ecchi" title="Ecchi">Ecchi</a></li>

                  <li><a href="/genre/fantasy" title="Fantasy">Fantasy</a></li>

                  <li><a href="/genre/game" title="Game">Game</a></li>

                  <li><a href="/genre/harem" title="Harem">Harem</a></li>

                  <li><a href="/genre/historical" title="Historical">Historical</a></li>

                  <li><a href="/genre/horror" title="Horror">Horror</a></li>

                  <li><a href="/genre/isekai" title="Isekai">Isekai</a></li>

                  <li><a href="/genre/josei" title="Josei">Josei</a></li>

                  <li><a href="/genre/kids" title="Kids">Kids</a></li>

                  <li><a href="/genre/magic" title="Magic">Magic</a></li>

                  <li><a href="/genre/marial-arts" title="Martial Arts">Martial Arts</a></li>

                  <li><a href="/genre/mecha" title="Mecha">Mecha</a></li>

                  <li><a href="/genre/military" title="Military">Military</a></li>

                  <li><a href="/genre/music" title="Music">Music</a></li>

                  <li><a href="/genre/mystery" title="Mystery">Mystery</a></li>

                  <li><a href="/genre/parody" title="Parody">Parody</a></li>

                  <li><a href="/genre/police" title="Police">Police</a></li>

                  <li><a href="/genre/psychological" title="Psychological">Psychological</a></li>

                  <li><a href="/genre/romance" title="Romance">Romance</a></li>

                  <li><a href="/genre/samurai" title="Samurai">Samurai</a></li>

                  <li><a href="/genre/school" title="School">School</a></li>

                  <li><a href="/genre/sci-fi" title="Sci-Fi">Sci-Fi</a></li>

                  <li><a href="/genre/seinen" title="Seinen">Seinen</a></li>

                  <li><a href="/genre/shoujo" title="Shoujo">Shoujo</a></li>

                  <li><a href="/genre/shoujo-ai" title="Shoujo Ai">Shoujo Ai</a></li>

                  <li><a href="/genre/shounen" title="Shounen">Shounen</a></li>

                  <li><a href="/genre/shounen-ai" title="Shounen Ai">Shounen Ai</a></li>

                  <li><a href="/genre/slice-of-life" title="Slice of Life">Slice of Life</a></li>

                  <li><a href="/genre/space" title="Space">Space</a></li>

                  <li><a href="/genre/sports" title="Sports">Sports</a></li>

                  <li><a href="/genre/super-power" title="Super Power">Super Power</a></li>

                  <li><a href="/genre/supernatural" title="Supernatural">Supernatural</a></li>

                  <li><a href="/genre/thriller" title="Thriller">Thriller</a></li>

                  <li><a href="/genre/vampire" title="Vampire">Vampire</a></li>

                </ul>
                <div class="clearfix"></div>
                <button class="btn btn-sm btn-block btn-showmore mt-2"></button>
              </div>
            </div>
          </section>
          <section class="block_area block_area_sidebar block_area-realtime">
            <div class="block_area-header">
              <div class="float-left bah-heading mr-2">
                <h2 class="cat-heading">Top 10</h2>
              </div>
              <div class="float-right bah-tab-min">
                <ul class="nav nav-pills nav-fill nav-tabs anw-tabs">
                  <li class="nav-item"><a data-toggle="tab" href="#top-viewed-day" class="nav-link active">Today</a>
                  </li>
                  <li class="nav-item"><a data-toggle="tab" href="#top-viewed-week" class="nav-link">Week</a></li>
                  <li class="nav-item"><a data-toggle="tab" href="#top-viewed-month" class="nav-link">Month</a></li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="block_area-content">
              <div class="cbox cbox-list cbox-realtime">
                <div class="cbox-content">
                  <div class="tab-content">
                    <div id="top-viewed-day" class="anif-block-ul anif-block-chart tab-pane active">
                      <ul class="ulclear">

                        <li class="item-top">
                          <div class="film-number"><span>01</span></div>
                          <div class="film-poster item-qtip" data-id="19319" data-hasqtip="66" aria-describedby="qtip-66">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/a8b56a7589ff9edb6c86977c31e27a06.jpg" class="film-poster-img lazyload" alt="Dandadan">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/dandadan-19319" title="Dandadan" class="dynamic-name" data-jname="Dandadan">Dandadan</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>4</div>


                                <div class="tick-item tick-eps">12</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="item-top">
                          <div class="film-number"><span>02</span></div>
                          <div class="film-poster item-qtip" data-id="100" data-hasqtip="67" aria-describedby="qtip-67">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bcd84731a3eda4f4a306250769675065.jpg" class="film-poster-img lazyload" alt="One Piece">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/one-piece-100" title="One Piece" class="dynamic-name" data-jname="One Piece">One Piece</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1122</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1096</div>


                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="item-top">
                          <div class="film-number"><span>03</span></div>
                          <div class="film-poster item-qtip" data-id="19347" data-hasqtip="68" aria-describedby="qtip-68">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/6431fdac6396ff285bf3c69b807a8a9a.jpg" class="film-poster-img lazyload" alt="Sayounara Ryuusei, Konnichiwa Jinsei">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/good-bye-dragon-life-19347" title="Sayounara Ryuusei, Konnichiwa Jinsei" class="dynamic-name" data-jname="Sayounara Ryuusei, Konnichiwa Jinsei">Good Bye, Dragon Life.</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>



                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>04</span></div>
                          <div class="film-poster item-qtip" data-id="19337" data-hasqtip="69" aria-describedby="qtip-69">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/5dc640871a61596483b630918f8c2e04.jpg" class="film-poster-img lazyload" alt="Hitoribocchi no Isekai Kouryaku">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/loner-life-in-another-world-19337" title="Hitoribocchi no Isekai Kouryaku" class="dynamic-name" data-jname="Hitoribocchi no Isekai Kouryaku">Loner Life in Another World</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>5</div>



                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>05</span></div>
                          <div class="film-poster item-qtip" data-id="806" data-hasqtip="70" aria-describedby="qtip-70">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bd5ae1d387a59c5abcf5e1a6a616728c.jpg" class="film-poster-img lazyload" alt="Bleach">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/bleach-806" title="Bleach" class="dynamic-name" data-jname="Bleach">Bleach</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>366</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>366</div>


                                <div class="tick-item tick-eps">366</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>06</span></div>
                          <div class="film-poster item-qtip" data-id="19326" data-hasqtip="71" aria-describedby="qtip-71">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/5f112b1c1f3f41ed87de0c48b6cf4e0d.jpg" class="film-poster-img lazyload" alt="Ao no Hako">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/blue-box-19326" title="Ao no Hako" class="dynamic-name" data-jname="Ao no Hako">Blue Box</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>5</div>



                                <div class="tick-item tick-eps">25</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>07</span></div>
                          <div class="film-poster item-qtip" data-id="19323" data-hasqtip="72" aria-describedby="qtip-72">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/7160c39e5ed8edf2a301392f12a66659.jpg" class="film-poster-img lazyload" alt="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka V: Houjou no Megami-hen">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/is-it-wrong-to-try-to-pick-up-girls-in-a-dungeon-v-19323" title="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka V: Houjou no Megami-hen" class="dynamic-name" data-jname="Dungeon ni Deai wo Motomeru no wa Machigatteiru Darou ka V: Houjou no Megami-hen">Is It Wrong to Try to Pick Up Girls in a Dungeon? V</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>



                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>08</span></div>
                          <div class="film-poster item-qtip" data-id="355" data-hasqtip="73" aria-describedby="qtip-73">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9cbcf87f54194742e7686119089478f8.jpg" class="film-poster-img lazyload" alt="Naruto: Shippuuden">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/naruto-shippuden-355" title="Naruto: Shippuuden" class="dynamic-name" data-jname="Naruto: Shippuuden">Naruto: Shippuden</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>500</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>500</div>


                                <div class="tick-item tick-eps">500</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>09</span></div>
                          <div class="film-poster item-qtip" data-id="19301" data-hasqtip="74" aria-describedby="qtip-74">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/fd9a4794949c53baa8ef6ae16f78c7ab.jpg" class="film-poster-img lazyload" alt="Re:Zero kara Hajimeru Isekai Seikatsu 3rd Season">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/rezero-starting-life-in-another-world-season-3-19301" title="Re:Zero kara Hajimeru Isekai Seikatsu 3rd Season" class="dynamic-name" data-jname="Re:Zero kara Hajimeru Isekai Seikatsu 3rd Season">Re:ZERO -Starting Life in Another World- Season 3</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1</div>


                                <div class="tick-item tick-eps">16</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>10</span></div>
                          <div class="film-poster item-qtip" data-id="19318" data-hasqtip="75" aria-describedby="qtip-75">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8ed3a4df2e8f22be9916959c96e5e3e2.jpg" class="film-poster-img lazyload" alt="Blue Lock vs. U-20 Japan">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/blue-lock-season-2-19318" title="Blue Lock vs. U-20 Japan" class="dynamic-name" data-jname="Blue Lock vs. U-20 Japan">Blue Lock Season 2</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1</div>


                                <div class="tick-item tick-eps">14</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                      </ul>
                    </div>
                    <div id="top-viewed-week" class="anif-block-ul anif-block-chart tab-pane">
                      <ul class="ulclear">

                        <li class="item-top">
                          <div class="film-number"><span>01</span></div>
                          <div class="film-poster item-qtip" data-id="100" data-hasqtip="76" aria-describedby="qtip-76">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bcd84731a3eda4f4a306250769675065.jpg" class="film-poster-img lazyload" alt="One Piece">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/one-piece-100" title="One Piece" class="dynamic-name" data-jname="One Piece">One Piece</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1122</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1096</div>


                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="item-top">
                          <div class="film-number"><span>02</span></div>
                          <div class="film-poster item-qtip" data-id="19319" data-hasqtip="77" aria-describedby="qtip-77">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/a8b56a7589ff9edb6c86977c31e27a06.jpg" class="film-poster-img lazyload" alt="Dandadan">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/dandadan-19319" title="Dandadan" class="dynamic-name" data-jname="Dandadan">Dandadan</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>4</div>


                                <div class="tick-item tick-eps">12</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="item-top">
                          <div class="film-number"><span>03</span></div>
                          <div class="film-poster item-qtip" data-id="19318" data-hasqtip="78" aria-describedby="qtip-78">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8ed3a4df2e8f22be9916959c96e5e3e2.jpg" class="film-poster-img lazyload" alt="Blue Lock vs. U-20 Japan">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/blue-lock-season-2-19318" title="Blue Lock vs. U-20 Japan" class="dynamic-name" data-jname="Blue Lock vs. U-20 Japan">Blue Lock Season 2</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1</div>


                                <div class="tick-item tick-eps">14</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>04</span></div>
                          <div class="film-poster item-qtip" data-id="19322" data-hasqtip="79" aria-describedby="qtip-79">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/b87a9e986e6e403ffddb520d24f5040a.jpg" class="film-poster-img lazyload" alt="Bleach: Sennen Kessen-hen - Soukoku-tan">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/bleach-thousand-year-blood-war-the-conflict-19322" title="Bleach: Sennen Kessen-hen - Soukoku-tan" class="dynamic-name" data-jname="Bleach: Sennen Kessen-hen - Soukoku-tan">Bleach: Thousand-Year Blood War - The Conflict</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3</div>



                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>05</span></div>
                          <div class="film-poster item-qtip" data-id="806" data-hasqtip="80" aria-describedby="qtip-80">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bd5ae1d387a59c5abcf5e1a6a616728c.jpg" class="film-poster-img lazyload" alt="Bleach">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/bleach-806" title="Bleach" class="dynamic-name" data-jname="Bleach">Bleach</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>366</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>366</div>


                                <div class="tick-item tick-eps">366</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>06</span></div>
                          <div class="film-poster item-qtip" data-id="355" data-hasqtip="81" aria-describedby="qtip-81">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9cbcf87f54194742e7686119089478f8.jpg" class="film-poster-img lazyload" alt="Naruto: Shippuuden">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/naruto-shippuden-355" title="Naruto: Shippuuden" class="dynamic-name" data-jname="Naruto: Shippuuden">Naruto: Shippuden</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>500</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>500</div>


                                <div class="tick-item tick-eps">500</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>07</span></div>
                          <div class="film-poster item-qtip" data-id="19146" data-hasqtip="82" aria-describedby="qtip-82">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/af4938d7388aad3438e443e74b02531e.jpg" class="film-poster-img lazyload" alt="Boku no Hero Academia 7th Season">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/my-hero-academia-season-7-19146" title="Boku no Hero Academia 7th Season" class="dynamic-name" data-jname="Boku no Hero Academia 7th Season">My Hero Academia Season 7</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>21</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>20</div>


                                <div class="tick-item tick-eps">21</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>08</span></div>
                          <div class="film-poster item-qtip" data-id="19406" data-hasqtip="83" aria-describedby="qtip-83">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/08367d0a68b3952cb14a1e72b84aaae3.jpg" class="film-poster-img lazyload" alt="One Piece Fan Letter">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/one-piece-fan-letter-19406" title="One Piece Fan Letter" class="dynamic-name" data-jname="One Piece Fan Letter">One Piece Fan Letter</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1</div>



                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>09</span></div>
                          <div class="film-poster item-qtip" data-id="19301" data-hasqtip="84" aria-describedby="qtip-84">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/fd9a4794949c53baa8ef6ae16f78c7ab.jpg" class="film-poster-img lazyload" alt="Re:Zero kara Hajimeru Isekai Seikatsu 3rd Season">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/rezero-starting-life-in-another-world-season-3-19301" title="Re:Zero kara Hajimeru Isekai Seikatsu 3rd Season" class="dynamic-name" data-jname="Re:Zero kara Hajimeru Isekai Seikatsu 3rd Season">Re:ZERO -Starting Life in Another World- Season 3</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1</div>


                                <div class="tick-item tick-eps">16</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>10</span></div>
                          <div class="film-poster item-qtip" data-id="2404" data-hasqtip="85" aria-describedby="qtip-85">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/f58b0204c20ae3310f65ae7b8cb9987e.jpg" class="film-poster-img lazyload" alt="Black Clover">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/black-clover-2404" title="Black Clover" class="dynamic-name" data-jname="Black Clover">Black Clover</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>170</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>170</div>


                                <div class="tick-item tick-eps">170</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                      </ul>
                    </div>
                    <div id="top-viewed-month" class="anif-block-ul anif-block-chart tab-pane">
                      <ul class="ulclear">

                        <li class="item-top">
                          <div class="film-number"><span>01</span></div>
                          <div class="film-poster item-qtip" data-id="100" data-hasqtip="86" aria-describedby="qtip-86">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bcd84731a3eda4f4a306250769675065.jpg" class="film-poster-img lazyload" alt="One Piece">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/one-piece-100" title="One Piece" class="dynamic-name" data-jname="One Piece">One Piece</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>1122</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1096</div>


                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="item-top">
                          <div class="film-number"><span>02</span></div>
                          <div class="film-poster item-qtip" data-id="806" data-hasqtip="87" aria-describedby="qtip-87">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/bd5ae1d387a59c5abcf5e1a6a616728c.jpg" class="film-poster-img lazyload" alt="Bleach">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/bleach-806" title="Bleach" class="dynamic-name" data-jname="Bleach">Bleach</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>366</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>366</div>


                                <div class="tick-item tick-eps">366</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="item-top">
                          <div class="film-number"><span>03</span></div>
                          <div class="film-poster item-qtip" data-id="19319" data-hasqtip="88" aria-describedby="qtip-88">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/a8b56a7589ff9edb6c86977c31e27a06.jpg" class="film-poster-img lazyload" alt="Dandadan">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/dandadan-19319" title="Dandadan" class="dynamic-name" data-jname="Dandadan">Dandadan</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>4</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>4</div>


                                <div class="tick-item tick-eps">12</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>04</span></div>
                          <div class="film-poster item-qtip" data-id="19322" data-hasqtip="89" aria-describedby="qtip-89">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/b87a9e986e6e403ffddb520d24f5040a.jpg" class="film-poster-img lazyload" alt="Bleach: Sennen Kessen-hen - Soukoku-tan">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/bleach-thousand-year-blood-war-the-conflict-19322" title="Bleach: Sennen Kessen-hen - Soukoku-tan" class="dynamic-name" data-jname="Bleach: Sennen Kessen-hen - Soukoku-tan">Bleach: Thousand-Year Blood War - The Conflict</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3</div>



                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>05</span></div>
                          <div class="film-poster item-qtip" data-id="19318" data-hasqtip="90" aria-describedby="qtip-90">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/8ed3a4df2e8f22be9916959c96e5e3e2.jpg" class="film-poster-img lazyload" alt="Blue Lock vs. U-20 Japan">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/blue-lock-season-2-19318" title="Blue Lock vs. U-20 Japan" class="dynamic-name" data-jname="Blue Lock vs. U-20 Japan">Blue Lock Season 2</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>3</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>1</div>


                                <div class="tick-item tick-eps">14</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>06</span></div>
                          <div class="film-poster item-qtip" data-id="19146" data-hasqtip="91" aria-describedby="qtip-91">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/af4938d7388aad3438e443e74b02531e.jpg" class="film-poster-img lazyload" alt="Boku no Hero Academia 7th Season">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/my-hero-academia-season-7-19146" title="Boku no Hero Academia 7th Season" class="dynamic-name" data-jname="Boku no Hero Academia 7th Season">My Hero Academia Season 7</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>21</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>20</div>


                                <div class="tick-item tick-eps">21</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>07</span></div>
                          <div class="film-poster item-qtip" data-id="355" data-hasqtip="92" aria-describedby="qtip-92">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/9cbcf87f54194742e7686119089478f8.jpg" class="film-poster-img lazyload" alt="Naruto: Shippuuden">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/naruto-shippuden-355" title="Naruto: Shippuuden" class="dynamic-name" data-jname="Naruto: Shippuuden">Naruto: Shippuden</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>500</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>500</div>


                                <div class="tick-item tick-eps">500</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>08</span></div>
                          <div class="film-poster item-qtip" data-id="2404" data-hasqtip="93" aria-describedby="qtip-93">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/f58b0204c20ae3310f65ae7b8cb9987e.jpg" class="film-poster-img lazyload" alt="Black Clover">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/black-clover-2404" title="Black Clover" class="dynamic-name" data-jname="Black Clover">Black Clover</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>170</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>170</div>


                                <div class="tick-item tick-eps">170</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>09</span></div>
                          <div class="film-poster item-qtip" data-id="19239" data-hasqtip="94" aria-describedby="qtip-94">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/14a6029b0f2759923a4d2fa957765fe4.jpg" class="film-poster-img lazyload" alt="Tsue to Tsurugi no Wistoria">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/wistoria-wand-and-sword-19239" title="Tsue to Tsurugi no Wistoria" class="dynamic-name" data-jname="Tsue to Tsurugi no Wistoria">Wistoria: Wand and Sword</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>12</div>


                                <div class="tick-item tick-dub"><i class="fas fa-microphone mr-1"></i>12</div>


                                <div class="tick-item tick-eps">12</div>

                              </div>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                        </li>

                        <li class="">
                          <div class="film-number"><span>10</span></div>
                          <div class="film-poster item-qtip" data-id="19337" data-hasqtip="95" aria-describedby="qtip-95">
                            <img data-src="https://cdn.noitatnemucod.net/thumbnail/300x400/100/5dc640871a61596483b630918f8c2e04.jpg" class="film-poster-img lazyload" alt="Hitoribocchi no Isekai Kouryaku">
                          </div>
                          <div class="film-detail">
                            <h3 class="film-name">
                              <a href="/loner-life-in-another-world-19337" title="Hitoribocchi no Isekai Kouryaku" class="dynamic-name" data-jname="Hitoribocchi no Isekai Kouryaku">Loner Life in Another World</a>
                            </h3>
                            <div class="fd-infor">
                              <div class="tick">



                                <div class="tick-item tick-sub"><i class="fas fa-closed-captioning mr-1"></i>5</div>



                              </div>
                            </div>
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
          <section class="block_area block_area_sidebar block_area-connecting">
            <div class="block_area-header">
              <div class="float-left bah-heading mr-2">
                <h2 class="cat-heading">Trending Posts</h2>
              </div>
              <div class="float-right viewmore"><a class="btn" href="/community/board" title="View more">View more<i class="fas fa-angle-right ml-2"></i></a></div>
              <div class="clearfix"></div>
            </div>
            <div class="block_area-content">
              <div class="zr-connect zr-connect-list">
                <div class="connecting-list">

                  <div class="item">
                    <div class="gi-top d-flex justify-content-between align-items-center">
                      <div class="ztag">
                        <span class="zt-yellow mr-2">#Question</span>
                        <div class="time d-inline"><span><i class="dot mr-2"></i>3 hours ago</span></div>
                      </div>
                      <div class="gi-stats d-flex align-items-center">
                        <div class="ml-4"><i class="fas fa-comment mr-1"></i>81</div>
                      </div>
                    </div>
                    <h4 class="item-name"><a href="/community/post/guys-yall-gotta-help-me-237019" title="GUYS Y'ALL GOTTA HELP ME!!">GUYS Y'ALL GOTTA HELP ME!!</a></h4>
                    <div class="subject">
                      <div>MY 10th boards are near and I can't concentrate on my studies. Gimme some tips pls(asking genuinely).</div>
                    </div>
                    <div class="cn-owner">
                      <div class="profile-avatar">
                        <img src="https://cdn.noitatnemucod.net/avatar/100x100/jujutsu_kaisen/File4.png" alt="Gojo">
                      </div>


                      <a href="/community/user/7359868" target="_blank" class="user-name">Gojo</a>


                    </div>
                  </div>

                  <div class="item">
                    <div class="gi-top d-flex justify-content-between align-items-center">
                      <div class="ztag">
                        <span class="zt-blue mr-2">#General</span>
                        <div class="time d-inline"><span><i class="dot mr-2"></i>3 hours ago</span></div>
                      </div>
                      <div class="gi-stats d-flex align-items-center">
                        <div class="ml-4"><i class="fas fa-comment mr-1"></i>33</div>
                      </div>
                    </div>
                    <h4 class="item-name"><a href="/community/post/would-you-rather-237021" title="Would you rather...?">Would you rather...?</a></h4>
                    <div class="subject">
                      <div>after watching the latest episode of Dan da Dan, i have question to you all

                        Would you rather

                        1. Have your Weenie still intact and continue live normally
                        OR
                        2. Sacrifice your Weenie (including the pair of egg) for OP Power

                        lets say the OP power include super strength, super speed, and flying
                        not include any projectile skill like spitting fire or energy beam</div>
                    </div>
                    <div class="cn-owner">
                      <div class="profile-avatar">
                        <img src="https://cdn.noitatnemucod.net/avatar/100x100/dragon_ball_chibi/mrsatan.png" alt="Re:Dedita">
                      </div>


                      <a href="/community/user/7345301" target="_blank" class="user-name is-level-x is-level-a">
                        <i class="badg-level level-a up-4"></i>
                        Re:Dedita

                        <span>Dolphin</span>

                      </a>


                    </div>
                  </div>

                  <div class="item">
                    <div class="gi-top d-flex justify-content-between align-items-center">
                      <div class="ztag">
                        <span class="zt-purple mr-2">#Discussion</span>
                        <div class="time d-inline"><span><i class="dot mr-2"></i>12 hours ago</span></div>
                      </div>
                      <div class="gi-stats d-flex align-items-center">
                        <div class="ml-4"><i class="fas fa-comment mr-1"></i>175</div>
                      </div>
                    </div>
                    <h4 class="item-name"><a href="/community/post/throw-ur-phone-out-the-window-and-go-to-gym-236997" title="THROW UR PHONE OUT THE WINDOW AND GO TO GYM">THROW UR PHONE OUT THE WINDOW AND GO TO GYM</a></h4>
                    <div class="subject">
                      <div>Ya all gen-z lifeless dudes need 4-5 hour's of motivation video just to do 30 minutes of workout or any kind of activity like how lazy are ya all</div>
                    </div>
                    <div class="cn-owner">
                      <div class="profile-avatar">
                        <img src="https://cdn.noitatnemucod.net/avatar/100x100/demon_splayer/File20.jpg" alt="Kaneki-kun">
                      </div>


                      <a href="/community/user/1079170" target="_blank" class="user-name is-level-x is-level-a">
                        <i class="badg-level level-a up-4"></i>
                        Kaneki-kun

                        <span>Dolphin</span>

                      </a>


                    </div>
                  </div>

                  <div class="item">
                    <div class="gi-top d-flex justify-content-between align-items-center">
                      <div class="ztag">
                        <span class="zt-blue mr-2">#General</span>
                        <div class="time d-inline"><span><i class="dot mr-2"></i>19 hours ago</span></div>
                      </div>
                      <div class="gi-stats d-flex align-items-center">
                        <div class="ml-4"><i class="fas fa-comment mr-1"></i>352</div>
                      </div>
                    </div>
                    <h4 class="item-name"><a href="/community/post/top-5-waifus-236933" title="TOP 5 Waifus">TOP 5 Waifus</a></h4>
                    <div class="subject">
                      <div>Tell me ur top 5 WAIFUS (If u want, TOP 10 fav female characters)</div>
                    </div>
                    <div class="cn-owner">
                      <div class="profile-avatar">
                        <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_normal/av-zz-01.jpeg" alt="Max">
                      </div>


                      <a href="/community/user/7335725" target="_blank" class="user-name is-level-x is-level-a">
                        <i class="badg-level level-a up-4"></i>
                        Max

                        <span>Dolphin</span>

                      </a>


                    </div>
                  </div>

                  <div class="item">
                    <div class="gi-top d-flex justify-content-between align-items-center">
                      <div class="ztag">
                        <span class="zt-green mr-2">#Suggestion</span>
                        <div class="time d-inline"><span><i class="dot mr-2"></i>21 hours ago</span></div>
                      </div>
                      <div class="gi-stats d-flex align-items-center">
                        <div class="ml-4"><i class="fas fa-comment mr-1"></i>300</div>
                      </div>
                    </div>
                    <h4 class="item-name"><a href="/community/post/giving-free-suggestions-series-no9-236924" title="GIVING FREE SUGGESTIONS SERIES NO.9">GIVING FREE SUGGESTIONS SERIES NO.9</a></h4>
                    <div class="subject">
                      <div>## Under this post free suggestion will be given ....let me know your taste and genra

                        ## 2nd tier , 1st tier , masterpiece and lgendary sh!ts will be recommended

                        ##people who took suugestions but never watch them aren't welcomed</div>
                    </div>
                    <div class="cn-owner">
                      <div class="profile-avatar">
                        <img src="https://cdn.noitatnemucod.net/avatar/100x100/mha/avatar-22.png" alt="SIR OG RAJMA">
                      </div>


                      <a href="/community/user/7256282" target="_blank" class="user-name is-level-x is-level-a">
                        <i class="badg-level level-a up-3"></i>
                        SIR OG RAJMA

                        <span>Starfish</span>

                      </a>


                    </div>
                  </div>

                  <div class="item">
                    <div class="gi-top d-flex justify-content-between align-items-center">
                      <div class="ztag">
                        <span class="zt-blue mr-2">#General</span>
                        <div class="time d-inline"><span><i class="dot mr-2"></i>21 hours ago</span></div>
                      </div>
                      <div class="gi-stats d-flex align-items-center">
                        <div class="ml-4"><i class="fas fa-comment mr-1"></i>258</div>
                      </div>
                    </div>
                    <h4 class="item-name"><a href="/community/post/type-any-sentence-in-comments-and-add-this-emoji-at-the-end-236925" title="Type any sentence in comments and add this &quot;😏&quot;  emoji at the end">Type any sentence in comments and add this "😏" emoji at the end</a></h4>
                    <div class="subject">
                      <div>‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎ ‎</div>
                    </div>
                    <div class="cn-owner">
                      <div class="profile-avatar">
                        <img src="https://cdn.noitatnemucod.net/avatar/100x100/zoro_normal/av-zz-12.jpeg" alt="✦✦𝗞𝗔𝗧𝗔𝗡𝗔✦✦">
                      </div>


                      <a href="/community/user/2031120" target="_blank" class="user-name is-level-x is-level-a">
                        <i class="badg-level level-a up-4"></i>
                        ✦✦𝗞𝗔𝗧𝗔𝗡𝗔✦✦

                        <span>Dolphin</span>

                      </a>


                    </div>
                  </div>

                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div id="footer">
      <div id="footer-about">
        <div class="container">
          <div class="footer-top">
            <a href="/home" class="footer-logo">
              <img src="/images/logo.png?v=0.1" alt="HiAnime">
              <div class="clearfix"></div>
            </a>
            <div class="footer-joingroup">
              <div class="anw-group">
                <div class="zrg-title"><span class="top">Join now</span><span class="bottom">HiAnime Group</span>
                </div>
                <div class="zrg-list">
                  <div class="item"><a href="https://discord.gg/hianime" target="_blank" class="zr-social-button dc-btn"><i class="fab fa-discord"></i></a>
                  </div>
                  <div class="item"><a href="https://tinyurl.com/2y2yy3ba" target="_blank" class="zr-social-button tl-btn"><i class="fab fa-telegram-plane"></i></a></div>
                  <div class="item"><a href="https://new.reddit.com/r/HiAnimeZone/" target="_blank" class="zr-social-button rd-btn"><i class="fab fa-reddit-alien"></i></a>
                  </div>
                  <div class="item"><a href="https://twitter.com/HiAnimeOfficial" target="_blank" class="zr-social-button tw-btn"><i class="fab fa-twitter"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="footer-az">
            <div class="block mb-3">
              <span class="ftaz">A-Z LIST</span><span class="size-s">Searching anime order by alphabet name A to Z.</span>
            </div>
            <ul class="ulclear az-list">
              <li><a href="/az-list">All</a></li>
              <li><a href="/az-list/other">#</a></li>
              <li><a href="/az-list/0-9">0-9</a></li>

              <li><a href="/az-list/A">A</a>
              </li>

              <li><a href="/az-list/B">B</a>
              </li>

              <li><a href="/az-list/C">C</a>
              </li>

              <li><a href="/az-list/D">D</a>
              </li>

              <li><a href="/az-list/E">E</a>
              </li>

              <li><a href="/az-list/F">F</a>
              </li>

              <li><a href="/az-list/G">G</a>
              </li>

              <li><a href="/az-list/H">H</a>
              </li>

              <li><a href="/az-list/I">I</a>
              </li>

              <li><a href="/az-list/J">J</a>
              </li>

              <li><a href="/az-list/K">K</a>
              </li>

              <li><a href="/az-list/L">L</a>
              </li>

              <li><a href="/az-list/M">M</a>
              </li>

              <li><a href="/az-list/N">N</a>
              </li>

              <li><a href="/az-list/O">O</a>
              </li>

              <li><a href="/az-list/P">P</a>
              </li>

              <li><a href="/az-list/Q">Q</a>
              </li>

              <li><a href="/az-list/R">R</a>
              </li>

              <li><a href="/az-list/S">S</a>
              </li>

              <li><a href="/az-list/T">T</a>
              </li>

              <li><a href="/az-list/U">U</a>
              </li>

              <li><a href="/az-list/V">V</a>
              </li>

              <li><a href="/az-list/W">W</a>
              </li>

              <li><a href="/az-list/X">X</a>
              </li>

              <li><a href="/az-list/Y">Y</a>
              </li>

              <li><a href="/az-list/Z">Z</a>
              </li>

            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="footer-links">
            <ul class="ulclear">
              <li><a href="/terms" title="Terms of service">Terms of service</a></li>
              <li><a href="/dmca" title="DMCA">DMCA</a></li>
              <li><a href="/contact" title="Contact">Contact</a></li>
              <li><a href="/app-download" title="HiAnime App">HiAnime App</a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="about-text">
            HiAnime does not store any files on our server, we only linked to the media which is hosted on 3rd party
            services.
          </div>
          <p class="copyright">© HiAnime.to. All rights reserved.</p>
        </div>
      </div>
    </div>
    <div class="modal fade premodal" id="actionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"></div>
    <div id="totop"><i class="fas fa-chevron-up"></i></div>

  </div>
  <div class="modal fade premodal premodal-login" id="modallogin" tabindex="-1" role="dialog" aria-labelledby="modallogintitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="tab-content">
          <div id="modal-tab-login" class="tab-pane active">
            <div class="modal-header">
              <h5 class="modal-title" id="modallogintitle">Welcome back!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="alert alert-danger mb-3" id="login-error" style="display: none;"></div>
              <form class="preform" id="login-form" method="post">
                <div class="form-group">
                  <label class="prelabel" for="email">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="name@email.com" name="email" required="">
                </div>
                <div class="form-group">
                  <label class="prelabel" for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="">
                </div>
                <div class="form-check custom-control custom-checkbox">
                  <div class="float-left">
                    <input type="checkbox" class="custom-control-input" name="remember" value="1" id="remember" checked="">
                    <label class="custom-control-label" for="remember">Remember me</label>
                  </div>
                  <div class="float-right">
                    <a href="javascript:;" class="link-highlight text-forgot forgot-tab-link">Forgot password?</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div data-theme="dark" class="g-recaptcha mb-3 mt-3" id="login-recaptcha">
                  <div style="width: 304px; height: 78px;">
                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-i58k8nfoq762" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdCdH8pAAAAAMV9Qy_K16Fvm4pWGYWrAEpjRjgD&amp;co=aHR0cHM6Ly9oaWFuaW1lLnRvOjQ0Mw..&amp;hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;theme=dark&amp;size=normal&amp;cb=2ao4ns4zavro"></iframe></div><textarea id="g-recaptcha-response-3" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                  </div><iframe style="display: none;"></iframe>
                </div>
                <div class="form-group login-btn mb-0">
                  <button id="btn-login" class="btn btn-primary btn-block">Login</button>
                  <div class="loading-relative" id="login-loading" style="display: none;">
                    <div class="loading">
                      <div class="span1"></div>
                      <div class="span2"></div>
                      <div class="span3"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer text-center">
              Don't have an account? <a class="link-highlight register-tab-link" title="Register">Register</a> or <a class="link-highlight verify-tab-link" title="Account Verification">Verify</a>
            </div>
          </div>
          <div id="modal-tab-register" class="tab-pane fade">
            <div class="modal-header">
              <h5 class="modal-title" id="modallogintitle2">Create an Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="alert alert-danger mb-3" id="register-error" style="display: none;"></div>
              <div class="alert alert-success mb-3" id="register-success" style="display: none;">
                An email has been sent to your email address containing an activation link. Please check your email and click on the link to activate your account (It may get in the email spam box).
              </div>
              <form class="preform" method="post" id="register-form">
                <div class="form-group">
                  <label class="prelabel" for="re-username">Your name</label>
                  <input type="text" class="form-control" id="re-username" placeholder="Name" name="name" required="">
                </div>
                <div class="form-group">
                  <label class="prelabel" for="re-email">Email address</label>
                  <input type="email" class="form-control" id="re-email" placeholder="name@email.com" name="email" required="">
                </div>
                <div class="form-group">
                  <label class="prelabel" for="re-password">Password</label>
                  <input type="password" class="form-control" id="re-password" placeholder="Password" name="password" required="">
                </div>
                <div class="form-group">
                  <label class="prelabel" for="re-confirmpassword">Confirm Password</label>
                  <input type="password" class="form-control" id="re-confirmpassword" placeholder="Confirm Password" required="">
                </div>
                <div data-theme="dark" class="g-recaptcha mb-3" id="register-recaptcha">
                  <div style="width: 304px; height: 78px;">
                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-uwytys11zncb" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdCdH8pAAAAAMV9Qy_K16Fvm4pWGYWrAEpjRjgD&amp;co=aHR0cHM6Ly9oaWFuaW1lLnRvOjQ0Mw..&amp;hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;theme=dark&amp;size=normal&amp;cb=3cyi0qrfp7ne"></iframe></div><textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                  </div>
                </div>
                <div class="form-group login-btn mb-0">
                  <button id="btn-register" class="btn btn-primary btn-block">Register</button>
                  <div class="loading-relative" id="register-loading" style="display: none;">
                    <div class="loading">
                      <div class="span1"></div>
                      <div class="span2"></div>
                      <div class="span3"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer text-center">
              Have an account? <a class="link-highlight login-tab-link" title="Login">Login</a>
            </div>
          </div>
          <div id="modal-tab-forgot" class="tab-pane fade">
            <div class="modal-header">
              <h5 class="modal-title" id="modallogintitle3">Reset Password</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" style="padding-bottom: 20px;">
              <form class="preform" method="post" id="forgot-form">
                <div class="alert alert-success mb-3" id="forgot-success" style="display:none"></div>
                <div class="alert alert-danger mb-3" id="forgot-error" style="display:none"></div>
                <div class="form-group">
                  <label class="prelabel" for="forgot-email">Your Email</label>
                  <input required="" type="text" class="form-control" id="forgot-email" name="email" placeholder="name@email.com">
                </div>
                <div data-theme="dark" class="g-recaptcha mb-3" id="forgot-recaptcha">
                  <div style="width: 304px; height: 78px;">
                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-y2ccbbnio6r7" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdCdH8pAAAAAMV9Qy_K16Fvm4pWGYWrAEpjRjgD&amp;co=aHR0cHM6Ly9oaWFuaW1lLnRvOjQ0Mw..&amp;hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;theme=dark&amp;size=normal&amp;cb=le4qm5dnoufo"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                  </div>
                </div>
                <div class="form-group login-btn mb-0">
                  <button class="btn btn-primary btn-block">Submit</button>
                  <div class="loading-relative" id="forgot-loading" style="display: none;">
                    <div class="loading">
                      <div class="span1"></div>
                      <div class="span2"></div>
                      <div class="span3"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer text-center">
              <a class="link-highlight login-tab-link" title=""><i class="fas fa-angle-left mr-2"></i>Back to Sign-in</a>
            </div>
          </div>
          <div id="modal-tab-verify" class="tab-pane fade">
            <div class="modal-header">
              <h5 class="modal-title" id="modallogintitle3">Send Verification Email</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" style="padding-bottom: 20px;">
              <form class="preform" method="post" id="verify-form">
                <div class="alert alert-success mb-3" id="verify-success" style="display:none"></div>
                <div class="alert alert-danger mb-3" id="verify-error" style="display:none"></div>
                <div class="form-group">
                  <label class="prelabel" for="verify-email">Your Email</label>
                  <input required="" type="text" class="form-control" id="verify-email" name="email" placeholder="name@email.com">
                </div>
                <div data-theme="dark" class="g-recaptcha mb-3" id="verify-recaptcha">
                  <div style="width: 304px; height: 78px;">
                    <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-9pw7jkdbdaqi" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdCdH8pAAAAAMV9Qy_K16Fvm4pWGYWrAEpjRjgD&amp;co=aHR0cHM6Ly9oaWFuaW1lLnRvOjQ0Mw..&amp;hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;theme=dark&amp;size=normal&amp;cb=ox2lldu6klqb"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                  </div>
                </div>
                <div class="form-group login-btn mb-0">
                  <button class="btn btn-primary btn-block">Submit</button>
                  <div class="loading-relative" id="verify-loading" style="display: none;">
                    <div class="loading">
                      <div class="span1"></div>
                      <div class="span2"></div>
                      <div class="span3"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer text-center">
              <a class="link-highlight login-tab-link" title=""><i class="fas fa-angle-left mr-2"></i>Back to Sign-in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var recaptchaSiteKey = '6Lc7dH8pAAAAAIGw-BOEYDAZvcs3afxf6XHaLsQL'
      , recaptchaV2SiteKey = '6LdCdH8pAAAAAMV9Qy_K16Fvm4pWGYWrAEpjRjgD';

  </script>
  <script src="https://www.google.com/recaptcha/api.js?render=6Lc7dH8pAAAAAIGw-BOEYDAZvcs3afxf6XHaLsQL&amp;hl=en"></script>

  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=64a3d891df473b0019d1b0da&amp;product=inline-share-buttons&amp;source=platform" async="async"></script>
  <script src="https://cdn.socket.io/4.5.4/socket.io.min.js" integrity="sha384-/KNQL8Nu5gCHLqwqfQjA689Hhoqgi2S84SNUxC3roTe4EhJ9AfLkp8QiQcU8AMzI" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/app.min.js?v=1.4"></script>
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js?v=0.5');
      });
    }
    $('.anime-request-link').click(function(e) {
      e.preventDefault();
      if (isLoggedIn) {
        window.location.href = $(this).attr('href');
      } else {
        $('#modallogin').modal('show');
      }
    });

  </script>
  <script data-cfasync="false" type="text/javascript">
    (function($, document) {
      for ($._Fj = $.BD; $._Fj < $.Fu; $._Fj += $.x) {
        switch ($._Fj) {
          case $.GE:
            try {
              window[$.h];
            } catch (n) {
              delete window[$.h], window[$.h] = j;
            }
            break;
          case $.DD:
            window[C] = document, [$.A, $.B, $.C, $.D, $.E, $.F, $.G, $.H, $.I, $.J][$.k](function(n) {
              document[n] = function() {
                return i[$.w][$.y][n][$.Ch](window[$.y], arguments);
              };
            }), [$.a, $.b, $.c][$.k](function(n) {
              Object[$.e](document, n, $.$($.Ci, function() {
                return window[$.y][n];
              }, $.BF, !$.x));
            }), document[$.j] = function() {
              return arguments[$.BD] = arguments[$.BD][$.CE](new RegExp($.CH, $.CI), C), i[$.w][$.y][$.j][$.CA](window[$.y], arguments[$.BD]);
            };
            break;
          case $.Fy:
            try {
              window[$.f];
            } catch (n) {
              delete window[$.f], window[$.f] = b;
            }
            break;
          case $.Cg:
            var C = $.d + f[$.Bn]()[$.Bw]($.Bz)[$.CB]($.CC);
            break;
          case $.Fs:
            try {
              window[$.g];
            } catch (n) {
              delete window[$.g], window[$.g] = z;
            }
            break;
          case $.GA:
            try {
              t = window[$.u];
            } catch (n) {
              delete window[$.u], window[$.u] = $.$($.CJ, $.$(), $.Cp, function(n, t) {
                return this[$.CJ][n] = k(t);
              }, $.Cr, function(n) {
                return this[$.CJ][$.Ca](n) ? this[$.CJ][n] : void $.BD;
              }, $.Cn, function(n) {
                return delete this[$.CJ][n];
              }, $.Cm, function() {
                return this[$.CJ] = $.$();
              }), t = window[$.u];
            }
            break;
          case $.CC:
            i[$.l][$.p] = $.BA, i[$.l][$.q] = $.BB, i[$.l][$.r] = $.BB, i[$.l][$.s] = $.BC, i[$.l][$.t] = $.BD, i[$.i] = $.m, a[$.J]($.z)[$.BD][$.Bt](i), k = i[$.w][$.BE], Object[$.e](k, $.n, $.$($.BF, !$.x)), b = i[$.w][$.f], c = i[$.w][$.BG], d = window[$.o], g = i[$.w][
              [$.Bo, $.Bp, $.Bq, $.Br][$.Bu]($.Bv)
            ], e = i[$.w][$.BH], f = i[$.w][$.BI], h = i[$.w][$.BJ], j = i[$.w][$.h], l = i[$.w][$.Ba], m = i[$.w][$.Bb], n = i[$.w][$.Bc], o = i[$.w][$.Bd], p = i[$.w][$.Be], q = i[$.w][$.Bf], r = i[$.w][$.Bg], s = i[$.w][$.Bh], u = i[$.w][$.Bi], v = i[$.w][$.Bj], x = i[$.w][$.Bk], y = i[$.w][$.Bl], z = i[$.w][$.g], A = i[$.w][$.Bm];
            break;
          case $.x:
            try {
              i = window[$.y][$.A]($.Bs);
            } catch (n) {
              for ($._D = $.BD; $._D < $.CC; $._D += $.x) {
                switch ($._D) {
                  case $.x:
                    B[$.Cc] = $.Ce, i = B[$.Cf];
                    break;
                  case $.BD:
                    var B = (a[$.a] ? a[$.a][$.Ck] : a[$.c] || a[$.Co])[$.Cq]();
                    break;
                }
              }
            }
            break;
          case $.Fv:
            ! function(r) {
              for ($._E = $.BD; $._E < $.Cg; $._E += $.x) {
                switch ($._E) {
                  case $.CC:
                    u.m = r, u.c = e, u.d = function(n, t, r) {
                      u.o(n, t) || Object[$.e](n, t, $.$($.BF, !$.x, $.Cl, !$.BD, $.Ci, r));
                    }, u.n = function(n) {
                      for ($._C = $.BD; $._C < $.CC; $._C += $.x) {
                        switch ($._C) {
                          case $.x:
                            return u.d(t, $.Cb, t), t;
                            break;
                          case $.BD:
                            var t = n && n[$.Cd] ? function() {
                              return n[$.Cj];
                            } : function() {
                              return n;
                            };
                            break;
                        }
                      }
                    }, u.o = function(n, t) {
                      return Object[$.CG][$.Ca][$.CA](n, t);
                    }, u.p = $.Bv, u(u.s = $.By);
                    break;
                  case $.x:
                    function u(n) {
                      for ($._B = $.BD; $._B < $.Cg; $._B += $.x) {
                        switch ($._B) {
                          case $.CC:
                            return r[n][$.CA](t[$.Bx], t, t[$.Bx], u), t.l = !$.BD, t[$.Bx];
                            break;
                          case $.x:
                            var t = e[n] = $.$($.CD, n, $.CF, !$.x, $.Bx, $.$());
                            break;
                          case $.BD:
                            if (e[n]) return e[n][$.Bx];
                            break;
                        }
                      }
                    }
                    break;
                  case $.BD:
                    var e = $.$();
                    break;
                }
              }
            }([function(n, t, r) {
              for ($._h = $.BD; $._h < $.Cg; $._h += $.x) {
                switch ($._h) {
                  case $.CC:
                    t.e = 6551527, t.a = 6534229, t.v = 3, t.w = 1, t.h = 30, t.y = 1, t._ = true, t.g = g[$.ac](b('eyJhZGJsb2NrIjp7fSwiZXhjbHVkZXMiOiIifQ==')), t.O = 1, t.k = 'Ly9uYWJhdXhvdS5uZXQvNS82NTUxNTI3', t.S = 'bmFiYXV4b3UubmV0', t.A = 2, t.P = $.It * 1709640189, t.M = 'V2@%YSU2B]G~', t.T = 'lzm', t.B = '9b0hr7q27v5', t.N = 'qt26qa10D7zcvy4ydKix0je7viMrn16cufmQu4jnlqt2', t.I = '1d2K7pkL2bvOjdkXpp2', t.C = 'dx6abaz4jsz', t.z = '_avzhhq', t.R = '_ezoxowkf', t.D = true;
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._F = $.BD; $._F < $.Cg; $._F += $.x) {
                switch ($._F) {
                  case $.CC:
                    t.H = $.Hy, t.F = $.Hz, t.L = $.IA, t.G = $.IB, t.X = $.IC, t.U = $.BD, t.Y = $.x, t.K = $.CC, t.Z = $.ID;
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, u) {
              for ($._Dx = $.BD; $._Dx < $.GA; $._Dx += $.x) {
                switch ($._Dx) {
                  case $.Cg:
                    var p = !$.x;
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Dn] = function() {
                      return $.aH + m.e + $.cA;
                    }, t.J = function() {
                      return $.ah + m.e;
                    }, t.$ = function() {
                      return ($.BD, h.Q)();
                    }, t.W = function() {
                      return [($.BD, o.V)(d.nn[$.EB], d[$.HA][$.EB]), ($.BD, o.V)(d[$.Fg][$.EB], d[$.HA][$.EB])][$.Bu]($.cJ);
                    }, t.tn = function() {
                      for ($._Br = $.BD; $._Br < $.CC; $._Br += $.x) {
                        switch ($._Br) {
                          case $.x:
                            n.id = a.en, window[$.Jk](n, $.ab);
                            break;
                          case $.BD:
                            var n = $.$()
                              , t = r(function() {
                                ($.BD, w.rn)() && (v(t), b());
                              }, $.ae);
                            break;
                        }
                      }
                    }, t.un = b, t.in = function(c) {
                      return new f[$.Cj](function(t, u) {
                        var i = new e()[$.bx]()
                          , o = r(function() {
                            for ($._Di = $.BD; $._Di < $.CC; $._Di += $.x) {
                              switch ($._Di) {
                                case $.x:
                                  n ? (v(o), $.ei === n && u(new Error($.Df)), p && (c || ($.BD, w[$.Dz])(), t(n)), t()) : i + l.L < new e()[$.bx]() && (v(o), u(new Error($.fz)));
                                  break;
                                case $.BD:
                                  var n = ($.BD, h.Q)();
                                  break;
                              }
                            }
                          }, $.ae);
                      });
                    }, t.cn = function() {
                      for ($._Ct = $.BD; $._Ct < $.CC; $._Ct += $.x) {
                        switch ($._Ct) {
                          case $.x:
                            if (n) p = !$.BD, ($.BD, h.an)(n);
                            else var t = r(function() {
                              ($.BD, w.rn)() && (v(t), b(!$.BD));
                            }, $.ae);
                            break;
                          case $.BD:
                            var n = ($.BD, y.fn)();
                            break;
                        }
                      }
                    };
                    break;
                  case $.DD:
                    function b(t) {
                      for ($._Ds = $.BD; $._Ds < $.CC; $._Ds += $.x) {
                        switch ($._Ds) {
                          case $.x:
                            r[$.Jn](_.dn, $.HD + ($.BD, w.vn)()), t && r[$.Jo](_.sn, _.ln), r[$.Jo](_.wn, s.hn[m.O]), r[$.Js] = function() {
                              if ($.bF === r[$.cB]) {
                                for ($._Dn = $.BD; $._Dn < $.CC; $._Dn += $.x) {
                                  switch ($._Dn) {
                                    case $.x:
                                      n[$.k](function(n) {
                                        for ($._Bs = $.BD; $._Bs < $.CC; $._Bs += $.x) {
                                          switch ($._Bs) {
                                            case $.x:
                                              u[r] = e;
                                              break;
                                            case $.BD:
                                              var t = n[$.HH]($.fB)
                                                , r = t[$.dH]()[$.fE]()
                                                , e = t[$.Bu]($.fB);
                                              break;
                                          }
                                        }
                                      }), u[_.mn] ? (p = !$.BD, ($.BD, h.an)(u[_.mn]), t && ($.BD, y.yn)(u[_.mn])) : u[_._n] && ($.BD, h.an)(u[_._n]), t || ($.BD, h.pn)();
                                      break;
                                    case $.BD:
                                      var n = r[$.eA]()[$.ej]()[$.HH](new RegExp($.fD, $.Bv))
                                        , u = $.$();
                                      break;
                                  }
                                }
                              }
                            }, r[$.Gz] = function() {
                              t && (p = !$.BD, ($.BD, h.an)($.dI));
                            }, ($.BD, h.bn)(), r[$.Jp]();
                            break;
                          case $.BD:
                            var r = new window[$.ai]();
                            break;
                        }
                      }
                    }
                    break;
                  case $.CC:
                    var i, o = u($.Cg)
                      , c = u($.Fs)
                      , f = (i = c) && i[$.Cd] ? i : $.$($.Cj, i)
                      , a = u($.DD)
                      , d = u($.Ft)
                      , s = u($.Fu)
                      , l = u($.x)
                      , w = u($.Fv)
                      , h = u($.Fw)
                      , m = u($.BD)
                      , y = u($.Fx)
                      , _ = u($.Fy);
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Cp = $.BD; $._Cp < $.GA; $._Cp += $.x) {
                switch ($._Cp) {
                  case $.Cg:
                    function a(n) {
                      for ($._Bz = $.BD; $._Bz < $.CC; $._Bz += $.x) {
                        switch ($._Bz) {
                          case $.x:
                            return e <= t && t <= u ? t - e : o <= t && t <= c ? t - o + i : $.BD;
                            break;
                          case $.BD:
                            var t = n[$.Bw]()[$.bl]($.BD);
                            break;
                        }
                      }
                    }
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Do] = a, t[$.n] = d, t.gn = function(n, u) {
                      return n[$.HH]($.Bv)[$.aJ](function(n, t) {
                        for ($._Bj = $.BD; $._Bj < $.CC; $._Bj += $.x) {
                          switch ($._Bj) {
                            case $.x:
                              return d(e);
                              break;
                            case $.BD:
                              var r = (u + $.x) * (t + $.x)
                                , e = (a(n) + r) % f;
                              break;
                          }
                        }
                      })[$.Bu]($.Bv);
                    }, t.jn = function(n, u) {
                      return n[$.HH]($.Bv)[$.aJ](function(n, t) {
                        for ($._Bu = $.BD; $._Bu < $.CC; $._Bu += $.x) {
                          switch ($._Bu) {
                            case $.x:
                              return d(e);
                              break;
                            case $.BD:
                              var r = u[t % (u[$.HB] - $.x)]
                                , e = (a(n) + a(r)) % f;
                              break;
                          }
                        }
                      })[$.Bu]($.Bv);
                    }, t.V = function(n, c) {
                      return n[$.HH]($.Bv)[$.aJ](function(n, t) {
                        for ($._Bp = $.BD; $._Bp < $.CC; $._Bp += $.x) {
                          switch ($._Bp) {
                            case $.x:
                              return d(o);
                              break;
                            case $.BD:
                              var r = c[t % (c[$.HB] - $.x)]
                                , e = a(r)
                                , u = a(n)
                                , i = u - e
                                , o = i < $.BD ? i + f : i;
                              break;
                          }
                        }
                      })[$.Bu]($.Bv);
                    };
                    break;
                  case $.DD:
                    function d(n) {
                      return n <= $.GE ? k[$.n](n + e) : n <= $.Jg ? k[$.n](n + o - i) : k[$.n](e);
                    }
                    break;
                  case $.CC:
                    var e = $.Cu
                      , u = $.Cv
                      , i = u - e + $.x
                      , o = $.Cw
                      , c = $.Cx
                      , f = c - o + $.x + i;
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(t, r, u) {
              for ($._Dh = $.BD; $._Dh < $.GA; $._Dh += $.x) {
                switch ($._Dh) {
                  case $.Cg:
                    r.Sn = f[$.Bn]()[$.Bw]($.Bz)[$.CB]($.CC), r.kn = f[$.Bn]()[$.Bw]($.Bz)[$.CB]($.CC), r.en = f[$.Bn]()[$.Bw]($.Bz)[$.CB]($.CC), r.On = f[$.Bn]()[$.Bw]($.Bz)[$.CB]($.CC);
                    break;
                  case $.x:
                    Object[$.e](r, $.Cd, $.$($.Iy, !$.BD)), r.On = r.en = r.kn = r.Sn = r.xn = r.An = void $.BD;
                    break;
                  case $.DD:
                    c && (c[$.B](a, function t(r) {
                      c[$.C](a, t), [($.BD, i.qn)(n[$.dk]), ($.BD, i.En)(window[$.bk][$.r]), ($.BD, i.Pn)(new e()), ($.BD, i.Mn)(window[$.cb][$.cj]), ($.BD, i.Tn)(n[$.dr] || n[$.el])][$.k](function(t) {
                        for ($._Cz = $.BD; $._Cz < $.CC; $._Cz += $.x) {
                          switch ($._Cz) {
                            case $.x:
                              q(function() {
                                for ($._Cr = $.BD; $._Cr < $.CC; $._Cr += $.x) {
                                  switch ($._Cr) {
                                    case $.x:
                                      n.id = r[$.be], n[$.Iy] = t, window[$.Jk](n, $.ab), ($.BD, o[$.Dq])($.fp + t);
                                      break;
                                    case $.BD:
                                      var n = $.$();
                                      break;
                                  }
                                }
                              }, n);
                              break;
                            case $.BD:
                              var n = m($.Fv * f[$.Bn](), $.Fv);
                              break;
                          }
                        }
                      });
                    }), c[$.B](d, function n(t) {
                      for ($._Bn = $.BD; $._Bn < $.GA; $._Bn += $.x) {
                        switch ($._Bn) {
                          case $.Cg:
                            var e = window[$.cb][$.cj]
                              , u = new window[$.ai]();
                            break;
                          case $.x:
                            var r = $.$();
                            break;
                          case $.DD:
                            u[$.Jn]($.Id, e), u[$.Js] = function() {
                              r[$.Di] = u[$.eA](), window[$.Jk](r, $.ab);
                            }, u[$.Gz] = function() {
                              r[$.Di] = $.cu, window[$.Jk](r, $.ab);
                            }, u[$.Jp]();
                            break;
                          case $.CC:
                            r.id = t[$.be];
                            break;
                          case $.BD:
                            c[$.C](d, n);
                            break;
                        }
                      }
                    }));
                    break;
                  case $.CC:
                    var i = u($.Fz)
                      , o = u($.GA)
                      , c = $.Ct != typeof document ? document[$.a] : null
                      , a = r.An = $.Jt
                      , d = r.xn = $.Ju;
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Bq = $.BD; $._Bq < $.Cg; $._Bq += $.x) {
                switch ($._Bq) {
                  case $.CC:
                    var e = [];
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Dp] = function() {
                      return e;
                    }, t[$.Dq] = function(n) {
                      e[$.CB](-$.x)[$.bJ]() !== n && e[$.az](n);
                    };
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Dv = $.BD; $._Dv < $.Cg; $._Dv += $.x) {
                switch ($._Dv) {
                  case $.CC:
                    var e = r($.GB)
                      , u = r($.Fu)
                      , i = r($.x)
                      , o = r($.BD)
                      , c = r($.GA)
                      , f = r($.GC);
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Dr] = function(n) {
                      for ($._y = $.BD; $._y < $.CC; $._y += $.x) {
                        switch ($._y) {
                          case $.x:
                            return d[$.ak] = f, d[$.bA] = a, d;
                            break;
                          case $.BD:
                            var t = document[$.ba]
                              , r = document[$.c] || $.$()
                              , e = window[$.bs] || t[$.cd] || r[$.cd]
                              , u = window[$.bt] || t[$.ce] || r[$.ce]
                              , i = t[$.bu] || r[$.bu] || $.BD
                              , o = t[$.bv] || r[$.bv] || $.BD
                              , c = n[$.bi]()
                              , f = c[$.ak] + (e - i)
                              , a = c[$.bA] + (u - o)
                              , d = $.$();
                            break;
                        }
                      }
                    }, t[$.Ds] = function(n) {
                      for ($._k = $.BD; $._k < $.CC; $._k += $.x) {
                        switch ($._k) {
                          case $.x:
                            return h[$.CG][$.CB][$.CA](t);
                            break;
                          case $.BD:
                            var t = document[$.E](n);
                            break;
                        }
                      }
                    }, t[$.Dt] = function n(t, r) {
                      for ($._l = $.BD; $._l < $.Cg; $._l += $.x) {
                        switch ($._l) {
                          case $.CC:
                            return n(t[$.Ck], r);
                            break;
                          case $.x:
                            if (t[$.bI] === r) return t;
                            break;
                          case $.BD:
                            if (!t) return null;
                            break;
                        }
                      }
                    }, t[$.Du] = function(n) {
                      for ($._Dq = $.BD; $._Dq < $.DD; $._Dq += $.x) {
                        switch ($._Dq) {
                          case $.Cg:
                            return !$.x;
                            break;
                          case $.x:
                            for (; n[$.Ck];) r[$.az](n[$.Ck]), n = n[$.Ck];
                            break;
                          case $.CC:
                            for (var e = $.BD; e < t[$.HB]; e++)
                              for (var u = $.BD; u < r[$.HB]; u++)
                                if (t[e] === r[u]) return !$.BD;
                            break;
                          case $.BD:
                            var t = (o.g[$.dA] || $.Bv)[$.HH]($.IC)[$.ag](function(n) {
                                return n;
                              })[$.aJ](function(n) {
                                return [][$.CB][$.CA](document[$.E](n));
                              })[$.cD](function(n, t) {
                                return n[$.bH](t);
                              }, [])
                              , r = [n];
                            break;
                        }
                      }
                    }, t.Bn = function() {
                      for ($._Bl = $.BD; $._Bl < $.CC; $._Bl += $.x) {
                        switch ($._Bl) {
                          case $.x:
                            t.sd = f.In, t[$.bB] = c[$.Dp], t[$.bC] = o.C, t[$.bD] = o.N, t[$.Fg] = o.I, ($.BD, e.Cn)(n, i.H, o.e, o.P, o.a, t);
                            break;
                          case $.BD:
                            var n = $.bG + ($.x === o.A ? $.cx : $.cy) + $.df + u.Nn[o.O]
                              , t = $.$();
                            break;
                        }
                      }
                    }, t.zn = function() {
                      for ($._Ba = $.BD; $._Ba < $.CC; $._Ba += $.x) {
                        switch ($._Ba) {
                          case $.x:
                            return ($.BD, e[$.EG])(n, o.a) || ($.BD, e[$.EG])(n, o.e);
                            break;
                          case $.BD:
                            var n = u.Rn[o.O];
                            break;
                        }
                      }
                    }, t.Dn = function() {
                      for ($._q = $.BD; $._q < $.CC; $._q += $.x) {
                        switch ($._q) {
                          case $.x:
                            return ($.BD, e[$.EG])(n, o.a);
                            break;
                          case $.BD:
                            var n = u.Rn[o.O];
                            break;
                        }
                      }
                    }, t.Hn = function() {
                      return !u.Rn[o.O];
                    }, t.Fn = function() {
                      for ($._Cy = $.BD; $._Cy < $.Cg; $._Cy += $.x) {
                        switch ($._Cy) {
                          case $.CC:
                            try {
                              document[$.ba][$.Bt](r), [$.f, $.h, $.g, $.BI][$.k](function(t) {
                                try {
                                  window[t];
                                } catch (n) {
                                  delete window[t], window[t] = r[$.w][t];
                                }
                              }), document[$.ba][$.br](r);
                            } catch (n) {}
                            break;
                          case $.x:
                            r[$.l][$.t] = $.BD, r[$.l][$.r] = $.BB, r[$.l][$.q] = $.BB, r[$.i] = $.m;
                            break;
                          case $.BD:
                            var r = document[$.A]($.Bs);
                            break;
                        }
                      }
                    };
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._G = $.BD; $._G < $.Cg; $._G += $.x) {
                switch ($._G) {
                  case $.CC:
                    t.Ln = $.IE, t.Gn = $.IF, t.sn = $.IG, t.ln = $.IH, t.Xn = $.II, t.Un = $.IJ, t.Yn = $.Ia, t.Kn = $.Ib, t.Zn = $.Ic, t.dn = $.Id, t.Jn = $.Ie, t.wn = $.If, t.mn = $.Ig, t._n = $.Ih;
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._j = $.BD; $._j < $.GA; $._j += $.x) {
                switch ($._j) {
                  case $.Cg:
                    var o = l || i[$.Cj];
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.DD:
                    t[$.Cj] = o;
                    break;
                  case $.CC:
                    var e, u = r($.GD)
                      , i = (e = u) && e[$.Cd] ? e : $.$($.Cj, e);
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Du = $.BD; $._Du < $.Cg; $._Du += $.x) {
                switch ($._Du) {
                  case $.CC:
                    var u = r($.Cg)
                      , s = r($.Fv)
                      , l = r($.BD)
                      , f = t.$n = new j($.am, $.Bv)
                      , i = ($.Ct != typeof document ? document : $.$($.a, null))[$.a]
                      , w = $.Cy
                      , y = $.Cz
                      , _ = $.DA
                      , p = $.DB;
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t.$n = void $.BD, t.Qn = function(e, u, i) {
                      for ($._Cf = $.BD; $._Cf < $.CC; $._Cf += $.x) {
                        switch ($._Cf) {
                          case $.x:
                            return e[$.EB] = o[c], e[$.HB] = o[$.HB]
                              , function(n) {
                                for ($._CC = $.BD; $._CC < $.CC; $._CC += $.x) {
                                  switch ($._CC) {
                                    case $.x:
                                      if (t === u)
                                        for (; r--;) c = (c += i) >= o[$.HB] ? $.BD : c, e[$.EB] = o[c];
                                      break;
                                    case $.BD:
                                      var t = n && n[$.bE] && n[$.bE].id
                                        , r = n && n[$.bE] && n[$.bE][$.Iy];
                                      break;
                                  }
                                }
                              };
                            break;
                          case $.BD:
                            var o = e[$.Fh][$.HH](f)[$.ag](function(n) {
                                return !f[$.Jv](n);
                              })
                              , c = $.BD;
                            break;
                        }
                      }
                    }, t[$.Dv] = function(d, v) {
                      return function(n) {
                        for ($._Dl = $.BD; $._Dl < $.CC; $._Dl += $.x) {
                          switch ($._Dl) {
                            case $.x:
                              if (t === v) try {
                                for ($._DC = $.BD; $._DC < $.CC; $._DC += $.x) {
                                  switch ($._DC) {
                                    case $.x:
                                      d[$.EA] = m(a / l.y, $.Fv) + $.x, d[$.ED] = d[$.ED] ? d[$.ED] : new e(i)[$.bx](), d[$.EB] = ($.BD, s[$.Dx])(c + l.M);
                                      break;
                                    case $.BD:
                                      var u = d[$.ED] ? new e(d[$.ED])[$.Bw]() : r[$.HH](w)[$.dn](function(n) {
                                          return n[$.fr]($.fu);
                                        })
                                        , i = u[$.HH](y)[$.bJ]()
                                        , o = new e(i)[$.eb]()[$.HH](_)
                                        , c = o[$.dH]()
                                        , f = o[$.dH]()[$.HH](p)
                                        , a = f[$.dH]();
                                      break;
                                  }
                                }
                              } catch (n) {
                                d[$.EB] = $.cu;
                              }
                              break;
                            case $.BD:
                              var t = n && n[$.bE] && n[$.bE].id
                                , r = n && n[$.bE] && n[$.bE][$.Di];
                              break;
                          }
                        }
                      };
                    }, t.Wn = function(n, t) {
                      for ($._f = $.BD; $._f < $.CC; $._f += $.x) {
                        switch ($._f) {
                          case $.x:
                            r[$.be] = n, i[$.F](r);
                            break;
                          case $.BD:
                            var r = new Event(t);
                            break;
                        }
                      }
                    }, t.Vn = function(r, n) {
                      return h[$.Ch](null, $.$($.HB, n))[$.aJ](function(n, t) {
                        return ($.BD, u.gn)(r, t);
                      })[$.Bu]($.ff);
                    };
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, u) {
              for ($._EG = $.BD; $._EG < $.GE; $._EG += $.x) {
                switch ($._EG) {
                  case $.Fy:
                    function p(n, t) {
                      return n + (m[$.EB] = $.bj * m[$.EB] % $.ch, m[$.EB] % (t - n));
                    }
                    break;
                  case $.Cg:
                    function w(n) {
                      for ($._Cc = $.BD; $._Cc < $.CC; $._Cc += $.x) {
                        switch ($._Cc) {
                          case $.x:
                            return h[$.Ji](n);
                            break;
                          case $.BD:
                            if (h[$.Jh](n)) {
                              for ($._CF = $.BD; $._CF < $.CC; $._CF += $.x) {
                                switch ($._CF) {
                                  case $.x:
                                    return r;
                                    break;
                                  case $.BD:
                                    for (var t = $.BD, r = h(n[$.HB]); t < n[$.HB]; t++) r[t] = n[t];
                                    break;
                                }
                              }
                            }
                            break;
                        }
                      }
                    }
                    break;
                  case $.Fs:
                    ! function t() {
                      for ($._EA = $.BD; $._EA < $.GA; $._EA += $.x) {
                        switch ($._EA) {
                          case $.Cg:
                            var u = r(function() {
                              if ($.Bv !== m[$.EB]) {
                                for ($._Dt = $.BD; $._Dt < $.Cg; $._Dt += $.x) {
                                  switch ($._Dt) {
                                    case $.CC:
                                      m[$.EC] = !$.BD, m[$.EB] = $.Bv;
                                      break;
                                    case $.x:
                                      try {
                                        for ($._Do = $.BD; $._Do < $.CC; $._Do += $.x) {
                                          switch ($._Do) {
                                            case $.x:
                                              q(function() {
                                                if (!_) {
                                                  for ($._Cd = $.BD; $._Cd < $.CC; $._Cd += $.x) {
                                                    switch ($._Cd) {
                                                      case $.x:
                                                        m[$.ED] += n, t(), ($.BD, i.pn)(), ($.BD, d.tn)();
                                                        break;
                                                      case $.BD:
                                                        var n = new e()[$.bx]() - y[$.bx]();
                                                        break;
                                                    }
                                                  }
                                                }
                                              }, $.DI);
                                              break;
                                            case $.BD:
                                              if (h(m[$.EA])[$.ek]($.BD)[$.k](function(n) {
                                                  for ($._Dg = $.BD; $._Dg < $.Cg; $._Dg += $.x) {
                                                    switch ($._Dg) {
                                                      case $.CC:
                                                        h(t)[$.ek]($.BD)[$.k](function(n) {
                                                          m[$.Bn] += k[$.n](p($.Cw, $.Cx));
                                                        });
                                                        break;
                                                      case $.x:
                                                        var t = p($.Fs, $.Fw);
                                                        break;
                                                      case $.BD:
                                                        m[$.Bn] = $.Bv;
                                                        break;
                                                    }
                                                  }
                                                }), ($.BD, a.Dn)()) return;
                                              break;
                                          }
                                        }
                                      } catch (n) {}
                                      break;
                                    case $.BD:
                                      if (v(u), window[$.C]($.Gy, n), $.cu === m[$.EB]) return void(m[$.EC] = !$.BD);
                                      break;
                                  }
                                }
                              }
                            }, $.ae);
                            break;
                          case $.x:
                            y = new e();
                            break;
                          case $.DD:
                            window[$.B]($.Gy, n);
                            break;
                          case $.CC:
                            var n = ($.BD, o[$.Dv])(m, c.en);
                            break;
                          case $.BD:
                            m[$.EC] = !$.x;
                            break;
                        }
                      }
                    }();
                    break;
                  case $.GA:
                    m[$.Bn] = $.Bv, m[$.EA] = $.Bv, m[$.EB] = $.Bv, m[$.EC] = void $.BD, m[$.ED] = null, m[$.EE] = ($.BD, s.V)(l.T, l.B);
                    break;
                  case $.CC:
                    var i = u($.Fw)
                      , o = u($.GE)
                      , c = u($.DD)
                      , a = u($.GF)
                      , d = u($.CC)
                      , s = u($.Cg)
                      , l = u($.BD);
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Dw] = void $.BD, t[$.Dx] = function(n) {
                      return n[$.HH]($.Bv)[$.cD](function(n, t) {
                        return (n << $.GA) - n + t[$.bl]($.BD) & $.ch;
                      }, $.BD);
                    }, t.vn = function() {
                      return [m[$.Bn], m[$.EE]][$.Bu]($.cJ);
                    }, t[$.Dy] = function() {
                      for ($._Co = $.BD; $._Co < $.CC; $._Co += $.x) {
                        switch ($._Co) {
                          case $.x:
                            return [][$.bH](w(h(n)))[$.aJ](function(n) {
                              return t[f[$.Bn]() * t[$.HB] | $.BD];
                            })[$.Bu]($.Bv);
                            break;
                          case $.BD:
                            var t = [][$.bH](w($.cF))
                              , n = $.DD + ($.Fz * f[$.Bn]() | $.BD);
                            break;
                        }
                      }
                    }, t.rn = function() {
                      return m[$.EC];
                    }, t[$.Dz] = function() {
                      _ = !$.BD;
                    };
                    break;
                  case $.GF:
                    var y = new e()
                      , _ = !$.x;
                    break;
                  case $.DD:
                    var m = t[$.Dw] = $.$();
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._I = $.BD; $._I < $.GE; $._I += $.x) {
                switch ($._I) {
                  case $.Fy:
                    var s = t.hn = $.$();
                    break;
                  case $.Cg:
                    var e = t.tt = $.x
                      , u = t.rt = $.CC
                      , i = (t.et = $.Cg, t.ut = $.DD)
                      , o = t.it = $.GA
                      , c = t.ot = $.Cg
                      , f = t.ct = $.GF
                      , a = t.ft = $.Fy
                      , d = t.Nn = $.$();
                    break;
                  case $.Fs:
                    s[e] = $.Gv, s[u] = $.Gw, s[i] = $.Gx, s[o] = $.Gx, s[c] = $.Gx;
                    break;
                  case $.GA:
                    var v = t.Rn = $.$();
                    break;
                  case $.CC:
                    t.nt = $.x;
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.GF:
                    v[e] = $.Gs, v[a] = $.Gt, v[c] = $.Gu, v[u] = $.Gr;
                    break;
                  case $.DD:
                    d[e] = $.Gl, d[i] = $.Gm, d[o] = $.Gn, d[c] = $.Go, d[f] = $.Gp, d[a] = $.Gq, d[u] = $.Gr;
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Ez = $.BD; $._Ez < $.Fs; $._Ez += $.x) {
                switch ($._Ez) {
                  case $.Fy:
                    s[$.k](function(n) {
                      for ($._Ce = $.BD; $._Ce < $.DD; $._Ce += $.x) {
                        switch ($._Ce) {
                          case $.Cg:
                            try {
                              n[d] = n[d] || [];
                            } catch (n) {}
                            break;
                          case $.x:
                            var t = n[$.y][$.ba][$.cC].fp;
                            break;
                          case $.CC:
                            n[t] = n[t] || [];
                            break;
                          case $.BD:
                            n[$.y][$.ba][$.cC].fp || (n[$.y][$.ba][$.cC].fp = f[$.Bn]()[$.Bw]($.Bz)[$.CB]($.CC));
                            break;
                        }
                      }
                    });
                    break;
                  case $.Cg:
                    v && v[$.Gz] && (e = v[$.Gz]);
                    break;
                  case $.GA:
                    function o(n, e) {
                      return n && e ? s[$.k](function(n) {
                        for ($._Cs = $.BD; $._Cs < $.Cg; $._Cs += $.x) {
                          switch ($._Cs) {
                            case $.CC:
                              try {
                                n[d] = n[d][$.ag](function(n) {
                                  for ($._Bw = $.BD; $._Bw < $.CC; $._Bw += $.x) {
                                    switch ($._Bw) {
                                      case $.x:
                                        return t || r;
                                        break;
                                      case $.BD:
                                        var t = n[$.bm] !== n
                                          , r = n[$.bn] !== e;
                                        break;
                                    }
                                  }
                                });
                              } catch (n) {}
                              break;
                            case $.x:
                              n[t] = n[t][$.ag](function(n) {
                                for ($._Bv = $.BD; $._Bv < $.CC; $._Bv += $.x) {
                                  switch ($._Bv) {
                                    case $.x:
                                      return t || r;
                                      break;
                                    case $.BD:
                                      var t = n[$.bm] !== n
                                        , r = n[$.bn] !== e;
                                      break;
                                  }
                                }
                              });
                              break;
                            case $.BD:
                              var t = n[$.y][$.ba][$.cC].fp;
                              break;
                          }
                        }
                      }) : (l[$.k](function(e) {
                        s[$.k](function(n) {
                          for ($._Em = $.BD; $._Em < $.Cg; $._Em += $.x) {
                            switch ($._Em) {
                              case $.CC:
                                try {
                                  n[d] = n[d][$.ag](function(n) {
                                    for ($._Ec = $.BD; $._Ec < $.CC; $._Ec += $.x) {
                                      switch ($._Ec) {
                                        case $.x:
                                          return t || r;
                                          break;
                                        case $.BD:
                                          var t = n[$.bm] !== e[$.bm]
                                            , r = n[$.bn] !== e[$.bn];
                                          break;
                                      }
                                    }
                                  });
                                } catch (n) {}
                                break;
                              case $.x:
                                n[t] = n[t][$.ag](function(n) {
                                  for ($._EI = $.BD; $._EI < $.CC; $._EI += $.x) {
                                    switch ($._EI) {
                                      case $.x:
                                        return t || r;
                                        break;
                                      case $.BD:
                                        var t = n[$.bm] !== e[$.bm]
                                          , r = n[$.bn] !== e[$.bn];
                                        break;
                                    }
                                  }
                                });
                                break;
                              case $.BD:
                                var t = n[$.y][$.ba][$.cC].fp;
                                break;
                            }
                          }
                        });
                      }), u[$.k](function(n) {
                        window[n] = !$.x;
                      }), u = [], l = [], null);
                    }
                    break;
                  case $.CC:
                    var d = $.DC
                      , v = document[$.a]
                      , s = [window]
                      , u = []
                      , l = []
                      , e = function() {};
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t.Cn = function(n, t, r) {
                      for ($._Cm = $.BD; $._Cm < $.Cg; $._Cm += $.x) {
                        switch ($._Cm) {
                          case $.CC:
                            try {
                              for ($._CH = $.BD; $._CH < $.CC; $._CH += $.x) {
                                switch ($._CH) {
                                  case $.x:
                                    a[$.bm] = n, a[$.Ej] = t, a[$.bn] = r, a[$.bo] = f ? f[$.bo] : u, a[$.bp] = o, a[$.bq] = e, (a[$.by] = i) && i[$.dG] && (a[$.dG] = i[$.dG]), l[$.az](a), s[$.k](function(n) {
                                      for ($._Bf = $.BD; $._Bf < $.Cg; $._Bf += $.x) {
                                        switch ($._Bf) {
                                          case $.CC:
                                            try {
                                              n[d][$.az](a);
                                            } catch (n) {}
                                            break;
                                          case $.x:
                                            n[t][$.az](a);
                                            break;
                                          case $.BD:
                                            var t = n[$.y][$.ba][$.cC].fp || d;
                                            break;
                                        }
                                      }
                                    });
                                    break;
                                  case $.BD:
                                    var c = window[$.y][$.ba][$.cC].fp || d
                                      , f = window[c][$.ag](function(n) {
                                        return n[$.bn] === r && n[$.bo];
                                      })[$.dH]()
                                      , a = $.$();
                                    break;
                                }
                              }
                            } catch (n) {}
                            break;
                          case $.x:
                            try {
                              o = v[$.i][$.HH]($.Jm)[$.CC];
                            } catch (n) {}
                            break;
                          case $.BD:
                            var e = $.Cg < arguments[$.HB] && void $.BD !== arguments[$.Cg] ? arguments[$.Cg] : $.BD
                              , u = $.DD < arguments[$.HB] && void $.BD !== arguments[$.DD] ? arguments[$.DD] : $.BD
                              , i = arguments[$.GA]
                              , o = void $.BD;
                            break;
                        }
                      }
                    }, t.at = function(n) {
                      u[$.az](n), window[n] = !$.BD;
                    }, t[$.EF] = o, t[$.EG] = function(n, t) {
                      for ($._Cn = $.BD; $._Cn < $.CC; $._Cn += $.x) {
                        switch ($._Cn) {
                          case $.x:
                            return !$.x;
                            break;
                          case $.BD:
                            for (var r = c(), e = $.BD; e < r[$.HB]; e++)
                              if (r[e][$.bn] === t && r[e][$.bm] === n) return !$.BD;
                            break;
                        }
                      }
                    }, t[$.EH] = c, t[$.EI] = function() {
                      try {
                        o(), e(), e = function() {};
                      } catch (n) {}
                    }, t.dt = function(e, t) {
                      s[$.aJ](function(n) {
                        for ($._CJ = $.BD; $._CJ < $.CC; $._CJ += $.x) {
                          switch ($._CJ) {
                            case $.x:
                              return r[$.ag](function(n) {
                                return -$.x < e[$.aI](n[$.bn]);
                              });
                              break;
                            case $.BD:
                              var t = n[$.y][$.ba][$.cC].fp || d
                                , r = n[t] || [];
                              break;
                          }
                        }
                      })[$.cD](function(n, t) {
                        return n[$.bH](t);
                      }, [])[$.k](function(n) {
                        try {
                          n[$.by].sd(t);
                        } catch (n) {}
                      });
                    };
                    break;
                  case $.GF:
                    function c() {
                      for ($._EH = $.BD; $._EH < $.Cg; $._EH += $.x) {
                        switch ($._EH) {
                          case $.CC:
                            return u;
                            break;
                          case $.x:
                            try {
                              for ($._Dr = $.BD; $._Dr < $.CC; $._Dr += $.x) {
                                switch ($._Dr) {
                                  case $.x:
                                    for (t = $.BD; t < s[$.HB]; t++) r(t);
                                    break;
                                  case $.BD:
                                    var r = function(n) {
                                      for (var o = s[n][d] || [], t = function(i) {
                                          $.BD < u[$.ag](function(n) {
                                            for ($._Bo = $.BD; $._Bo < $.CC; $._Bo += $.x) {
                                              switch ($._Bo) {
                                                case $.x:
                                                  return e && u;
                                                  break;
                                                case $.BD:
                                                  var t = n[$.bm]
                                                    , r = n[$.bn]
                                                    , e = t === o[i][$.bm]
                                                    , u = r === o[i][$.bn];
                                                  break;
                                              }
                                            }
                                          })[$.HB] || u[$.az](o[i]);
                                        }, r = $.BD; r < o[$.HB]; r++) t(r);
                                    };
                                    break;
                                }
                              }
                            } catch (n) {}
                            break;
                          case $.BD:
                            for (var u = [], n = function(n) {
                                for (var t = s[n][$.y][$.ba][$.cC].fp, o = s[n][t] || [], r = function(i) {
                                    $.BD < u[$.ag](function(n) {
                                      for ($._Bm = $.BD; $._Bm < $.CC; $._Bm += $.x) {
                                        switch ($._Bm) {
                                          case $.x:
                                            return e && u;
                                            break;
                                          case $.BD:
                                            var t = n[$.bm]
                                              , r = n[$.bn]
                                              , e = t === o[i][$.bm]
                                              , u = r === o[i][$.bn];
                                            break;
                                        }
                                      }
                                    })[$.HB] || u[$.az](o[i]);
                                  }, e = $.BD; e < o[$.HB]; e++) r(e);
                              }, t = $.BD; t < s[$.HB]; t++) n(t);
                            break;
                        }
                      }
                    }
                    break;
                  case $.DD:
                    try {
                      for (var i = s[$.CB](-$.x)[$.bJ](); i && i !== i[$.ak] && i[$.ak][$.bk][$.r];) s[$.az](i[$.ak]), i = i[$.ak];
                    } catch (n) {}
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._EF = $.BD; $._EF < $.GE; $._EF += $.x) {
                switch ($._EF) {
                  case $.Fy:
                    function p() {
                      for ($._J = $.BD; $._J < $.CC; $._J += $.x) {
                        switch ($._J) {
                          case $.x:
                            return n[$.l][$.q] = $.BB, n[$.l][$.r] = $.BB, n[$.l][$.t] = $.BD, n;
                            break;
                          case $.BD:
                            var n = document[$.A]($.Bs);
                            break;
                        }
                      }
                    }
                    break;
                  case $.Cg:
                    function u(n) {
                      return n && n[$.Cd] ? n : $.$($.Cj, n);
                    }
                    break;
                  case $.Fs:
                    function o() {
                      v && i[$.k](function(n) {
                        return n(v);
                      });
                    }
                    break;
                  case $.GA:
                    function y() {
                      for ($._ED = $.BD; $._ED < $.CC; $._ED += $.x) {
                        switch ($._ED) {
                          case $.x:
                            return $.HD + v + $.Jm + r + $.Jm;
                            break;
                          case $.BD:
                            var n = [$.Ha, $.Br, $.Hb, $.Hc, $.Hd, $.He, $.Hf, $.Hg]
                              , e = [$.Hh, $.Hi, $.Hj, $.Hk, $.Hl]
                              , t = [$.Hm, $.Hn, $.Ho, $.Hp, $.Hq, $.Hr, $.Hs, $.Ht, $.Hu, $.Hv, $.Hw, $.Hx]
                              , r = n[f[$.Jj](f[$.Bn]() * n[$.HB])][$.CE](new RegExp($.Ha, $.CI), function() {
                                for ($._Ck = $.BD; $._Ck < $.CC; $._Ck += $.x) {
                                  switch ($._Ck) {
                                    case $.x:
                                      return t[n];
                                      break;
                                    case $.BD:
                                      var n = f[$.Jj](f[$.Bn]() * t[$.HB]);
                                      break;
                                  }
                                }
                              })[$.CE](new RegExp($.Br, $.CI), function() {
                                for ($._Dw = $.BD; $._Dw < $.CC; $._Dw += $.x) {
                                  switch ($._Dw) {
                                    case $.x:
                                      return ($.Bv + t + f[$.Jj](f[$.Bn]() * r))[$.CB](-$.x * t[$.HB]);
                                      break;
                                    case $.BD:
                                      var n = f[$.Jj](f[$.Bn]() * e[$.HB])
                                        , t = e[n]
                                        , r = f[$.fH]($.Fv, t[$.HB]);
                                      break;
                                  }
                                }
                              });
                            break;
                        }
                      }
                    }
                    break;
                  case $.CC:
                    var e = u(r($.Gg))
                      , d = u(r($.Gb));
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.EJ] = y, t.vt = function() {
                      return y()[$.CB]($.BD, -$.x) + $.cv;
                    }, t[$.Ea] = function() {
                      for ($._x = $.BD; $._x < $.CC; $._x += $.x) {
                        switch ($._x) {
                          case $.x:
                            return $.HD + v + $.Jm + n + $.cG;
                            break;
                          case $.BD:
                            var n = f[$.Bn]()[$.Bw]($.Bz)[$.CB]($.CC);
                            break;
                        }
                      }
                    }, t.st = _, t.lt = p, t.In = function(n) {
                      for ($._a = $.BD; $._a < $.CC; $._a += $.x) {
                        switch ($._a) {
                          case $.x:
                            v = n, o();
                            break;
                          case $.BD:
                            if (!n) return;
                            break;
                        }
                      }
                    }, t[$.Eb] = o, t.$ = function() {
                      return v;
                    }, t.wt = function(n) {
                      i[$.az](n), v && n(v);
                    }, t.ht = function(u, i) {
                      for ($._Dk = $.BD; $._Dk < $.DD; $._Dk += $.x) {
                        switch ($._Dk) {
                          case $.Cg:
                            return window[$.B]($.Gy, function n(t) {
                              for ($._Df = $.BD; $._Df < $.CC; $._Df += $.x) {
                                switch ($._Df) {
                                  case $.x:
                                    if (r === f)
                                      if (null === t[$.bE][r]) {
                                        for ($._Cu = $.BD; $._Cu < $.CC; $._Cu += $.x) {
                                          switch ($._Cu) {
                                            case $.x:
                                              e[r] = i ? $.$($.fe, $.fd, $.DH, u, $.fq, d[$.Cj][$.an][$.cb][$.cj]) : u, a[$.w][$.Jk](e, $.ab), c = w, o[$.k](function(n) {
                                                return n();
                                              });
                                              break;
                                            case $.BD:
                                              var e = $.$();
                                              break;
                                          }
                                        }
                                      } else a[$.Ck][$.br](a), window[$.C]($.Gy, n), c = h;
                                    break;
                                  case $.BD:
                                    var r = Object[$.aa](t[$.bE])[$.bJ]();
                                    break;
                                }
                              }
                            }), a[$.i] = n, (document[$.c] || document[$.ba])[$.Bt](a), c = l, t.mt = function() {
                              return c === h;
                            }, t.yt = function(n) {
                              return $.Fm != typeof n ? null : c === h ? n() : o[$.az](n);
                            }, t;
                            break;
                          case $.x:
                            var o = []
                              , c = s
                              , n = y()
                              , f = _(n)
                              , a = p();
                            break;
                          case $.CC:
                            function t() {
                              for ($._Bg = $.BD; $._Bg < $.CC; $._Bg += $.x) {
                                switch ($._Bg) {
                                  case $.x:
                                    return null;
                                    break;
                                  case $.BD:
                                    if (c === h) {
                                      for ($._Bc = $.BD; $._Bc < $.CC; $._Bc += $.x) {
                                        switch ($._Bc) {
                                          case $.x:
                                            d[$.Cj][$.an][$.cb][$.cj] = n;
                                            break;
                                          case $.BD:
                                            if (c = m, !i) return ($.BD, e[$.Cj])(n, $.eu);
                                            break;
                                        }
                                      }
                                    }
                                    break;
                                }
                              }
                            }
                            break;
                          case $.BD:
                            if (!v) return null;
                            break;
                        }
                      }
                    };
                    break;
                  case $.GF:
                    function _(n) {
                      return n[$.HH]($.Jm)[$.CB]($.Cg)[$.Bu]($.Jm)[$.HH]($.Bv)[$.cD](function(n, t, r) {
                        for ($._By = $.BD; $._By < $.CC; $._By += $.x) {
                          switch ($._By) {
                            case $.x:
                              return n + t[$.bl]($.BD) * e;
                              break;
                            case $.BD:
                              var e = f[$.fH](r + $.x, $.Fy);
                              break;
                          }
                        }
                      }, $.ec)[$.Bw]($.Bz);
                    }
                    break;
                  case $.DD:
                    var v = void $.BD
                      , s = $.BD
                      , l = $.x
                      , w = $.CC
                      , h = $.Cg
                      , m = $.DD
                      , i = [];
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, r, e) {
              for ($._Fc = $.BD; $._Fc < $.Fu; $._Fc += $.x) {
                switch ($._Fc) {
                  case $.GE:
                    function x(n, t, r, e) {
                      for ($._Da = $.BD; $._Da < $.Cg; $._Da += $.x) {
                        switch ($._Da) {
                          case $.CC:
                            return ($.BD, f.qt)(o, n, t, r, e)[$.cH](function(n) {
                              return ($.BD, s.St)(v.e, u), n;
                            })[$.fG](function(n) {
                              throw ($.BD, s.xt)(v.e, u, o), n;
                            });
                            break;
                          case $.x:
                            var u = $.JB
                              , i = ($.BD, w[$.Dy])()
                              , o = $.HD + ($.BD, a.$)() + $.Jm + i + $.dj;
                            break;
                          case $.BD:
                            ($.BD, l[$.Dq])($.at);
                            break;
                        }
                      }
                    }
                    break;
                  case $.DD:
                    b.c = k, b.p = S;
                    break;
                  case $.Fy:
                    function k(n, t) {
                      for ($._DI = $.BD; $._DI < $.Cg; $._DI += $.x) {
                        switch ($._DI) {
                          case $.CC:
                            return ($.BD, f.kt)(u, t)[$.cH](function(n) {
                              return ($.BD, s.St)(v.e, r), n;
                            })[$.fG](function(n) {
                              throw ($.BD, s.xt)(v.e, r, u), n;
                            });
                            break;
                          case $.x:
                            var r = $.Iz
                              , e = ($.BD, w[$.Dy])()
                              , u = $.HD + ($.BD, a.$)() + $.Jm + e + $.dl + c(n);
                            break;
                          case $.BD:
                            ($.BD, l[$.Dq])($.ar);
                            break;
                        }
                      }
                    }
                    break;
                  case $.Cg:
                    var m = new j($.GI, $.CD)
                      , y = new j($.GJ)
                      , _ = new j($.Ga)
                      , p = [$.Fl, v.e[$.Bw]($.Bz)][$.Bu]($.Bv)
                      , b = $.$();
                    break;
                  case $.Fs:
                    function S(n, t) {
                      for ($._DJ = $.BD; $._DJ < $.Cg; $._DJ += $.x) {
                        switch ($._DJ) {
                          case $.CC:
                            return ($.BD, f.At)(u, t)[$.cH](function(n) {
                              return ($.BD, s.St)(v.e, r), n;
                            })[$.fG](function(n) {
                              throw ($.BD, s.xt)(v.e, r, u), n;
                            });
                            break;
                          case $.x:
                            var r = $.JA
                              , e = ($.BD, w[$.Dy])()
                              , u = $.HD + ($.BD, a.$)() + $.Jm + e + $.dm + c(n);
                            break;
                          case $.BD:
                            ($.BD, l[$.Dq])($.as);
                            break;
                        }
                      }
                    }
                    break;
                  case $.GA:
                    var g = [b.x = x, b.f = A];
                    break;
                  case $.CC:
                    var u, f = e($.GG)
                      , o = e($.GC)
                      , a = e($.CC)
                      , d = e($.Fy)
                      , v = e($.BD)
                      , s = e($.GH)
                      , l = e($.GA)
                      , w = e($.Fv)
                      , i = e($.Fs)
                      , h = (u = i) && u[$.Cd] ? u : $.$($.Cj, u);
                    break;
                  case $.x:
                    Object[$.e](r, $.Cd, $.$($.Iy, !$.BD)), r._t = function(n) {
                      for ($._BG = $.BD; $._BG < $.CC; $._BG += $.x) {
                        switch ($._BG) {
                          case $.x:
                            return $.HD + ($.BD, a.$)() + $.Jm + t + $.eJ + r;
                            break;
                          case $.BD:
                            var t = ($.BD, w[$.Dy])()
                              , r = c(O(n));
                            break;
                        }
                      }
                    }, r.pt = k, r.bt = S, r.gt = x, r.jt = A, r.Ot = function(n, r, e, u) {
                      for ($._Fa = $.BD; $._Fa < $.DD; $._Fa += $.x) {
                        switch ($._Fa) {
                          case $.Cg:
                            return ($.BD, l[$.Dq])(e + $.DB + n)
                              , function n(r, e, u, i, o) {
                                for ($._FF = $.BD; $._FF < $.CC; $._FF += $.x) {
                                  switch ($._FF) {
                                    case $.x:
                                      return i && i !== d.Kn ? c ? c(e, u, i, o)[$.cH](function(n) {
                                        return n;
                                      })[$.fG](function() {
                                        return n(r, e, u, i, o);
                                      }) : x(e, u, i, o) : c ? b[c](e, u || $.gG)[$.cH](function(n) {
                                        return t[p] = c, n;
                                      })[$.fG](function() {
                                        return n(r, e, u, i, o);
                                      }) : new h[$.Cj](function(n, t) {
                                        return t();
                                      });
                                      break;
                                    case $.BD:
                                      var c = r[$.dH]();
                                      break;
                                  }
                                }
                              }(i, n, r, e, u)[$.cH](function(n) {
                                return n && n[$.Di] ? n : $.$($.cB, $.bF, $.Di, n);
                              });
                            break;
                          case $.x:
                            var i = (e = e ? e[$.cw]() : $.Bv) && e !== d.Kn ? [][$.bH](g) : (o = [t[p]][$.bH](Object[$.aa](b)), o[$.ag](function(n, t) {
                              return n && o[$.aI](n) === t;
                            }));
                            break;
                          case $.CC:
                            var o;
                            break;
                          case $.BD:
                            n = O(n);
                            break;
                        }
                      }
                    };
                    break;
                  case $.Fv:
                    function A(n, t, r, e) {
                      for ($._Db = $.BD; $._Db < $.Cg; $._Db += $.x) {
                        switch ($._Db) {
                          case $.CC:
                            return ($.BD, f.Et)(i, n, t, r, e)[$.cH](function(n) {
                              return ($.BD, s.St)(v.e, u), n;
                            })[$.fG](function(n) {
                              throw ($.BD, s.xt)(v.e, u, i), n;
                            });
                            break;
                          case $.x:
                            var u = $.JC
                              , i = ($.BD, o.vt)();
                            break;
                          case $.BD:
                            ($.BD, l[$.Dq])($.ax), ($.BD, o.In)(($.BD, a.$)());
                            break;
                        }
                      }
                    }
                    break;
                  case $.GF:
                    function O(n) {
                      return m[$.Jv](n) ? n : y[$.Jv](n) ? $.da + n : _[$.Jv](n) ? $.HD + window[$.cb][$.fa] + n : window[$.cb][$.cj][$.HH]($.Jm)[$.CB]($.BD, -$.x)[$.bH](n)[$.Bu]($.Jm);
                    }
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(fl, gl) {
              for ($._Bt = $.BD; $._Bt < $.DD; $._Bt += $.x) {
                switch ($._Bt) {
                  case $.Cg:
                    fl[$.Bx] = hl;
                    break;
                  case $.x:
                    hl = function() {
                      return this;
                    }();
                    break;
                  case $.CC:
                    try {
                      hl = hl || Function($.ad)() || eval($.cE);
                    } catch (n) {
                      $.eF == typeof window && (hl = window);
                    }
                    break;
                  case $.BD:
                    var hl;
                    break;
                }
              }
            }, function(n, t, e) {
              for ($._FA = $.BD; $._FA < $.Fy; $._FA += $.x) {
                switch ($._FA) {
                  case $.GA:
                    function u() {
                      if (!g) var o = r(function() {
                        if (($.BD, d.Dn)()) v(o);
                        else if (j) {
                          for ($._Dm = $.BD; $._Dm < $.CC; $._Dm += $.x) {
                            switch ($._Dm) {
                              case $.x:
                                v(o);
                                break;
                              case $.BD:
                                try {
                                  for ($._De = $.BD; $._De < $.DD; $._De += $.x) {
                                    switch ($._De) {
                                      case $.Cg:
                                        g !== i && (g = i, ($.BD, m.dt)([l.e, l.a], g));
                                        break;
                                      case $.x:
                                        j = $.Bv, p[$.Fh] = e, y[$.Fh] = r, _[$.Fh] = ($.BD, w.Vn)(u, s.Z), [y, _, p][$.k](function(n) {
                                          ($.BD, w.Qn)(n, a.kn, b);
                                        });
                                        break;
                                      case $.CC:
                                        var i = [($.BD, f.V)(y[$.EB], _[$.EB]), ($.BD, f.V)(p[$.EB], _[$.EB])][$.Bu]($.cJ);
                                        break;
                                      case $.BD:
                                        var n = j[$.HH](w.$n)[$.ag](function(n) {
                                            return !w.$n[$.Jv](n);
                                          })
                                          , t = c(n, $.Cg)
                                          , r = t[$.BD]
                                          , e = t[$.x]
                                          , u = t[$.CC];
                                        break;
                                    }
                                  }
                                } catch (n) {}
                                break;
                            }
                          }
                        }
                      }, $.ae);
                    }
                    break;
                  case $.CC:
                    var c = function(n, t) {
                      for ($._Eu = $.BD; $._Eu < $.Cg; $._Eu += $.x) {
                        switch ($._Eu) {
                          case $.CC:
                            throw new TypeError($.Jw);
                            break;
                          case $.x:
                            if (Symbol[$.aG] in Object(n)) return function(n, t) {
                              for ($._Ep = $.BD; $._Ep < $.Cg; $._Ep += $.x) {
                                switch ($._Ep) {
                                  case $.CC:
                                    return r;
                                    break;
                                  case $.x:
                                    try {
                                      for (var o, c = n[Symbol[$.aG]](); !(e = (o = c[$.fj]())[$.fo]) && (r[$.az](o[$.Iy]), !t || r[$.HB] !== t); e = !$.BD);
                                    } catch (n) {
                                      u = !$.BD, i = n;
                                    } finally {
                                      try {
                                        !e && c[$.gI] && c[$.gI]();
                                      } finally {
                                        if (u) throw i;
                                      }
                                    }
                                    break;
                                  case $.BD:
                                    var r = []
                                      , e = !$.BD
                                      , u = !$.x
                                      , i = void $.BD;
                                    break;
                                }
                              }
                            }(n, t);
                            break;
                          case $.BD:
                            if (h[$.Jh](n)) return n;
                            break;
                        }
                      }
                    };
                    break;
                  case $.Cg:
                    t.pn = u, t.Q = function() {
                      return g;
                    }, t.bn = function() {
                      g = $.Bv;
                    }, t.an = function(n) {
                      n && (j = n);
                    };
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.GF:
                    u();
                    break;
                  case $.DD:
                    var f = e($.Cg)
                      , a = e($.DD)
                      , d = e($.GF)
                      , s = e($.x)
                      , l = e($.BD)
                      , w = e($.GE)
                      , m = e($.GB)
                      , y = $.$()
                      , _ = $.$()
                      , p = $.$()
                      , b = $.x
                      , g = $.Bv
                      , j = $.Bv;
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Bd = $.BD; $._Bd < $.Cg; $._Bd += $.x) {
                switch ($._Bd) {
                  case $.CC:
                    var e, u = r($.Gb)
                      , i = (e = u) && e[$.Cd] ? e : $.$($.Cj, e);
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Cj] = function(n, t, r) {
                      for ($._BF = $.BD; $._BF < $.DD; $._BF += $.x) {
                        switch ($._BF) {
                          case $.Cg:
                            return e[$.Ck][$.br](e), u;
                            break;
                          case $.x:
                            e[$.l][$.q] = $.BB, e[$.l][$.r] = $.BB, e[$.l][$.t] = $.BD, e[$.i] = $.m, (i[$.Cj][$.Jq][$.c] || i[$.Cj][$.ao])[$.Bt](e);
                            break;
                          case $.CC:
                            var u = e[$.w][$.Jn][$.CA](i[$.Cj][$.an], n, t, r);
                            break;
                          case $.BD:
                            var e = i[$.Cj][$.Jq][$.A]($.Bs);
                            break;
                        }
                      }
                    };
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(t, r, e) {
              for ($._Dj = $.BD; $._Dj < $.GA; $._Dj += $.x) {
                switch ($._Dj) {
                  case $.Cg:
                    function o() {
                      for ($._Ca = $.BD; $._Ca < $.CC; $._Ca += $.x) {
                        switch ($._Ca) {
                          case $.x:
                            try {
                              u[$.A] = t[$.A];
                            } catch (n) {
                              for ($._Bx = $.BD; $._Bx < $.CC; $._Bx += $.x) {
                                switch ($._Bx) {
                                  case $.x:
                                    u[$.A] = r && r[$.ed][$.A];
                                    break;
                                  case $.BD:
                                    var r = [][$.dn][$.CA](t[$.J]($.Bs), function(n) {
                                      return $.m === n[$.i];
                                    });
                                    break;
                                }
                              }
                            }
                            break;
                          case $.BD:
                            var t = u[$.Jq];
                            break;
                        }
                      }
                    }
                    break;
                  case $.x:
                    Object[$.e](r, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.DD:
                    $.Ct != typeof window && (u[$.an] = window, void $.BD !== window[$.bk] && (u[$.ck] = window[$.bk])), $.Ct != typeof document && (u[$.Jq] = document, u[$.ao] = document[i]), void $.BD !== n && (u[$.Jb] = n), o(), u[$.Ec] = function() {
                      for ($._CE = $.BD; $._CE < $.CC; $._CE += $.x) {
                        switch ($._CE) {
                          case $.x:
                            try {
                              for ($._Bb = $.BD; $._Bb < $.CC; $._Bb += $.x) {
                                switch ($._Bb) {
                                  case $.x:
                                    return n[$.Co][$.Bt](t), t[$.Ck] !== n[$.Co] ? !$.x : (t[$.Ck][$.br](t), u[$.an] = window[$.ak], u[$.Jq] = u[$.an][$.y], o(), !$.BD);
                                    break;
                                  case $.BD:
                                    var n = window[$.ak][$.y]
                                      , t = n[$.A]($.au);
                                    break;
                                }
                              }
                            } catch (n) {
                              return !$.x;
                            }
                            break;
                          case $.BD:
                            if (!window[$.ak]) return null;
                            break;
                        }
                      }
                    }, u[$.Ed] = function() {
                      try {
                        return u[$.Jq][$.a][$.Ck] !== u[$.Jq][$.Co] && (u[$.ee] = u[$.Jq][$.a][$.Ck], u[$.ee][$.l][$.p] && $.Hu !== u[$.ee][$.l][$.p] || (u[$.ee][$.l][$.p] = $.ft), !$.BD);
                      } catch (n) {
                        return !$.x;
                      }
                    }, r[$.Cj] = u;
                    break;
                  case $.CC:
                    var u = $.$()
                      , i = $.HC[$.HH]($.Bv)[$.af]()[$.Bu]($.Bv);
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, r, u) {
              for ($._FB = $.BD; $._FB < $.GF; $._FB += $.x) {
                switch ($._FB) {
                  case $.GA:
                    function s(n) {
                      for ($._b = $.BD; $._b < $.CC; $._b += $.x) {
                        switch ($._b) {
                          case $.x:
                            return [
                              [i, t][$.Bu](a), [i, t][$.Bu](c)
                            ];
                            break;
                          case $.BD:
                            var t = m(n, $.Fv)[$.Bw]($.Bz);
                            break;
                        }
                      }
                    }
                    break;
                  case $.CC:
                    var f = function(n, t) {
                      for ($._Ev = $.BD; $._Ev < $.Cg; $._Ev += $.x) {
                        switch ($._Ev) {
                          case $.CC:
                            throw new TypeError($.Jw);
                            break;
                          case $.x:
                            if (Symbol[$.aG] in Object(n)) return function(n, t) {
                              for ($._Eq = $.BD; $._Eq < $.Cg; $._Eq += $.x) {
                                switch ($._Eq) {
                                  case $.CC:
                                    return r;
                                    break;
                                  case $.x:
                                    try {
                                      for (var o, c = n[Symbol[$.aG]](); !(e = (o = c[$.fj]())[$.fo]) && (r[$.az](o[$.Iy]), !t || r[$.HB] !== t); e = !$.BD);
                                    } catch (n) {
                                      u = !$.BD, i = n;
                                    } finally {
                                      try {
                                        !e && c[$.gI] && c[$.gI]();
                                      } finally {
                                        if (u) throw i;
                                      }
                                    }
                                    break;
                                  case $.BD:
                                    var r = []
                                      , e = !$.BD
                                      , u = !$.x
                                      , i = void $.BD;
                                    break;
                                }
                              }
                            }(n, t);
                            break;
                          case $.BD:
                            if (h[$.Jh](n)) return n;
                            break;
                        }
                      }
                    };
                    break;
                  case $.Cg:
                    r.Pt = function(n, r) {
                      for ($._e = $.BD; $._e < $.CC; $._e += $.x) {
                        switch ($._e) {
                          case $.x:
                            t[i] = $.BD, t[o] = r;
                            break;
                          case $.BD:
                            var e = s(n)
                              , u = f(e, $.CC)
                              , i = u[$.BD]
                              , o = u[$.x];
                            break;
                        }
                      }
                    }, r.Mt = function(n) {
                      for ($._s = $.BD; $._s < $.Cg; $._s += $.x) {
                        switch ($._s) {
                          case $.CC:
                            return t[u] = o + $.x, c;
                            break;
                          case $.x: {
                            for ($._r = $.BD; $._r < $.CC; $._r += $.x) {
                              switch ($._r) {
                                case $.x:
                                  if (!c) return null;
                                  break;
                                case $.BD:
                                  if (d <= o) return delete t[u], delete t[i], null;
                                  break;
                              }
                            }
                          }
                          break;
                        case $.BD:
                          var r = s(n)
                            , e = f(r, $.CC)
                            , u = e[$.BD]
                            , i = e[$.x]
                            , o = m(t[u], $.Fv) || $.BD
                            , c = t[i];
                          break;
                        }
                      }
                    }, r.yn = function(n) {
                      for ($._BD = $.BD; $._BD < $.CC; $._BD += $.x) {
                        switch ($._BD) {
                          case $.x:
                            try {
                              t[o] = r + $.IC + n;
                            } catch (n) {}
                            break;
                          case $.BD:
                            var r = new e()[$.bx]();
                            break;
                        }
                      }
                    }, r.fn = function() {
                      try {
                        for ($._Bi = $.BD; $._Bi < $.Cg; $._Bi += $.x) {
                          switch ($._Bi) {
                            case $.CC:
                              return m(u, $.Fv) + v < new e()[$.bx]() ? (delete t[o], $.Bv) : i;
                              break;
                            case $.x:
                              var n = t[o][$.HH]($.IC)
                                , r = f(n, $.CC)
                                , u = r[$.BD]
                                , i = r[$.x];
                              break;
                            case $.BD:
                              if (!t[o]) return $.Bv;
                              break;
                          }
                        }
                      } catch (n) {
                        return $.Bv;
                      }
                    };
                    break;
                  case $.x:
                    Object[$.e](r, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.DD:
                    var i = $.DE
                      , o = $.DF
                      , c = $.DG
                      , a = $.DH
                      , d = $.Cg
                      , v = $.DI;
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._c = $.BD; $._c < $.GF; $._c += $.x) {
                switch ($._c) {
                  case $.GA:
                    u[$.l][$.HE] = i, u[$.l][$.HF] = o;
                    break;
                  case $.CC:
                    t.Tt = $.Ii, t.Bt = $.Hz, t.Nt = $.Ij, t.It = $.Ik, t.Ct = [$.JD, $.JE, $.JF, $.JG, $.JH, $.JI], t.zt = $.Il, t.Rt = $.BA;
                    break;
                  case $.Cg:
                    var e = t.Dt = $.JJ
                      , u = t.Ht = document[$.A](e)
                      , i = t.Ft = $.Jx
                      , o = t.Lt = $.Jy;
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.DD:
                    t.Gt = $.Im, t.Xt = [$.JJ, $.Ja, $.Hs, $.Jb, $.Ix], t.Ut = [$.Jc, $.Jd, $.Je], t.Yt = $.In, t.Kt = $.Io, t.Zt = !$.BD, t.Jt = !$.x, t.$t = $.Ip, t.Qt = $.Iq, t.Wt = $.Ir, t.Vt = $.Is;
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Cl = $.BD; $._Cl < $.CC; $._Cl += $.x) {
                switch ($._Cl) {
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Cj] = function(n) {
                      try {
                        return n[$.HH]($.Jm)[$.CC][$.HH]($.cJ)[$.CB](-$.CC)[$.Bu]($.cJ)[$.fE]();
                      } catch (n) {
                        return $.Bv;
                      }
                    };
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Eg = $.BD; $._Eg < $.Fy; $._Eg += $.x) {
                switch ($._Eg) {
                  case $.GA:
                    function O(n) {
                      for ($._BC = $.BD; $._BC < $.DD; $._BC += $.x) {
                        switch ($._BC) {
                          case $.Cg:
                            r[$.Gz] = function() {
                              ($.BD, o.er)(), g();
                            }, r[$.Js] = function() {
                              ($.BD, o.er)();
                            }, r[$.i] = $.ay + t + $.bw + a.a, (document[$.c] || document[$.ba])[$.Bt](r);
                            break;
                          case $.x:
                            ($.BD, o.rr)(t);
                            break;
                          case $.CC:
                            var r = document[$.A]($.au);
                            break;
                          case $.BD:
                            var t = n || b(a.S);
                            break;
                        }
                      }
                    }
                    break;
                  case $.CC:
                    function p(n) {
                      return n && n[$.Cd] ? n : $.$($.Cj, n);
                    }
                    break;
                  case $.Cg:
                    function g(n) {
                      return ($.BD, e.zn)() ? null : (($.BD, v[$.Dq])($.dd), ($.BD, e.Fn)(), j(n));
                    }
                    break;
                  case $.x:
                    var i = r($.CC)
                      , e = r($.GF)
                      , o = r($.Gc)
                      , c = r($.x)
                      , a = r($.BD)
                      , u = r($.DD)
                      , d = p(r($.Jf))
                      , v = r($.GA)
                      , s = r($.Gd)
                      , l = r($.GE)
                      , w = r($.Fv)
                      , h = p(r($.Jg))
                      , m = r($.Fy)
                      , y = r($.Fu)
                      , _ = r($.GB);
                    break;
                  case $.GF:
                    ($.BD, e.Bn)(), window[a.z] = g, window[a.R] = g, q(g, c.F), ($.BD, l.Wn)(u.en, u.xn), ($.BD, l.Wn)(u.Sn, u.An), ($.BD, d[$.Cj])(), a.D && a.O === y.tt && function() {
                      try {
                        ($.BD, o.nr)() && ($.BD, o.tr)(a.a), ($.BD, i.cn)(), ($.BD, i.in)(!$.BD)[$.cH](function(n) {
                          O(n);
                        })[$.fG](function() {
                          O();
                        });
                      } catch (n) {
                        return O();
                      }
                    }();
                    break;
                  case $.DD:
                    function j(u) {
                      return a.O === y.tt && ($.BD, o.nr)() && ($.BD, o.tr)(a.e), ($.BD, w.rn)() ? (($.BD, i.un)(), window[c.G] = s.Ot, ($.BD, i.in)()[$.cH](function(n) {
                        for ($._EE = $.BD; $._EE < $.CC; $._EE += $.x) {
                          switch ($._EE) {
                            case $.x:
                              ($.BD, h[$.Cj])(a.O, u)[$.cH](function() {
                                ($.BD, _.dt)([a.e, a.a], ($.BD, i.$)());
                              });
                              break;
                            case $.BD:
                              if (n && a.O === y.tt) {
                                for ($._EC = $.BD; $._EC < $.CC; $._EC += $.x) {
                                  switch ($._EC) {
                                    case $.x:
                                      return e[$.Jn]($.Ib, $.HD + n), e[$.Jo](m.Gn, a.e), ($.BD, o.rr)(n), e[$.Js] = function() {
                                        for ($._Dy = $.BD; $._Dy < $.CC; $._Dy += $.x) {
                                          switch ($._Dy) {
                                            case $.x:
                                              t[$.Js] = u, t[$.Bt](r), (document[$.c] || document[$.ba])[$.Bt](t), q(function() {
                                                void $.BD !== t && (t[$.Ck][$.br](t), ($.BD, o.er)());
                                              });
                                              break;
                                            case $.BD:
                                              var n, t = document[$.A]($.au)
                                                , r = document[$.j](e[$.Di][$.CE](new RegExp($.fx, $.CI), (n = $.d + f[$.Bn]()[$.Bw]($.Bz)[$.CB]($.CC), window[n] = window[$.y], n)));
                                              break;
                                          }
                                        }
                                      }, void e[$.Jp]();
                                      break;
                                    case $.BD:
                                      var e = new window[$.ai]();
                                      break;
                                  }
                                }
                              }
                              break;
                          }
                        }
                      })) : q(j, $.ae);
                    }
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              (function(i) {
                ! function(d, v) {
                  for ($._FJ = $.BD; $._FJ < $.GA; $._FJ += $.x) {
                    switch ($._FJ) {
                      case $.Cg:
                        function o(t) {
                          return l(function(n) {
                            n(t);
                          });
                        }
                        break;
                      case $.x:
                        function l(f, a) {
                          return (a = function r(e, u, i, o, c, n) {
                            for ($._FH = $.BD; $._FH < $.DD; $._FH += $.x) {
                              switch ($._FH) {
                                case $.Cg:
                                  function t(t) {
                                    return function(n) {
                                      c && (c = $.BD, r(s, t, n));
                                    };
                                  }
                                  break;
                                case $.x:
                                  if (i && s(d, i) | s(v, i)) try {
                                    c = i[$.cH];
                                  } catch (n) {
                                    u = $.BD, i = n;
                                  }
                                  break;
                                case $.CC:
                                  if (s(d, c)) try {
                                    c[$.CA](i, t($.x), u = t($.BD));
                                  } catch (n) {
                                    u(n);
                                  } else
                                    for (a = function(r, n) {
                                        return s(d, r = u ? r : n) ? l(function(n, t) {
                                          w(this, n, t, i, r);
                                        }) : f;
                                      }, n = $.BD; n < o[$.HB];) c = o[n++], s(d, e = c[u]) ? w(c.p, c.r, c.j, i, e) : (u ? c.r : c.j)(i);
                                  break;
                                case $.BD:
                                  if (o = r.q, e != s) return l(function(n, t) {
                                    o[$.az]($.$($.Ix, this, $.fk, n, $.Iv, t, $.x, e, $.BD, u));
                                  });
                                  break;
                              }
                            }
                          }).q = [], f[$.CA](f = $.$($.cH, function(n, t) {
                            return a(n, t);
                          }, $.fG, function(n) {
                            return a($.BD, n);
                          }), function(n) {
                            a(s, $.x, n);
                          }, function(n) {
                            a(s, $.BD, n);
                          }), f;
                        }
                        break;
                      case $.DD:
                        (n[$.Bx] = l)[$.ci] = o, l[$.bf] = function(r) {
                          return l(function(n, t) {
                            t(r);
                          });
                        }, l[$.bg] = function(n) {
                          return l(function(r, e, u, i) {
                            i = [], u = n[$.HB] || r(i), n[$.aJ](function(n, t) {
                              o(n)[$.cH](function(n) {
                                i[t] = n, --u || r(i);
                              }, e);
                            });
                          });
                        }, l[$.bh] = function(n) {
                          return l(function(t, r) {
                            n[$.aJ](function(n) {
                              o(n)[$.cH](t, r);
                            });
                          });
                        };
                        break;
                      case $.CC:
                        function w(n, t, r, e, u) {
                          i(function() {
                            try {
                              u = (e = u(e)) && s(v, e) | s(d, e) && e[$.cH], s(d, u) ? e == n ? r(TypeError()) : u[$.CA](e, t, r) : t(e);
                            } catch (n) {
                              r(n);
                            }
                          });
                        }
                        break;
                      case $.BD:
                        function s(n, t) {
                          return (typeof t)[$.BD] == n;
                        }
                        break;
                    }
                  }
                }($.Dk, $.gh);
              } [$.CA](t, r($.gi)[$.aE]));
            }, function(n, o, c) {
              (function(n) {
                for ($._Cq = $.BD; $._Cq < $.Cg; $._Cq += $.x) {
                  switch ($._Cq) {
                    case $.CC:
                      o[$.Bf] = function() {
                        return new i(e[$.CA](q, t, arguments), u);
                      }, o[$.Bg] = function() {
                        return new i(e[$.CA](r, t, arguments), v);
                      }, o[$.Bi] = o[$.Bj] = function(n) {
                        n && n[$.aq]();
                      }, i[$.CG][$.ap] = i[$.CG][$.cI] = function() {}, i[$.CG][$.aq] = function() {
                        this[$.bd][$.CA](t, this[$.bc]);
                      }, o[$.aB] = function(n, t) {
                        u(n[$.cl]), n[$.ca] = t;
                      }, o[$.aC] = function(n) {
                        u(n[$.cl]), n[$.ca] = -$.x;
                      }, o[$.aD] = o[$.bb] = function(n) {
                        for ($._Ch = $.BD; $._Ch < $.Cg; $._Ch += $.x) {
                          switch ($._Ch) {
                            case $.CC:
                              $.BD <= t && (n[$.cl] = q(function() {
                                n[$.fF] && n[$.fF]();
                              }, t));
                              break;
                            case $.x:
                              var t = n[$.ca];
                              break;
                            case $.BD:
                              u(n[$.cl]);
                              break;
                          }
                        }
                      }, c($.Jr), o[$.aE] = $.Ct != typeof self && self[$.aE] || void $.BD !== n && n[$.aE] || this && this[$.aE], o[$.aF] = $.Ct != typeof self && self[$.aF] || void $.BD !== n && n[$.aF] || this && this[$.aF];
                      break;
                    case $.x:
                      function i(n, t) {
                        this[$.bc] = n, this[$.bd] = t;
                      }
                      break;
                    case $.BD:
                      var t = void $.BD !== n && n || $.Ct != typeof self && self || window
                        , e = Function[$.CG][$.Ch];
                      break;
                  }
                }
              } [$.CA](o, c($.fw)));
            }, function(n, t, r) {
              (function(n, m) {
                ! function(r, e) {
                  for ($._Fi = $.BD; $._Fi < $.DD; $._Fi += $.x) {
                    switch ($._Fi) {
                      case $.Cg:
                        function w(n) {
                          if (d) q(w, $.BD, n);
                          else {
                            for ($._DH = $.BD; $._DH < $.CC; $._DH += $.x) {
                              switch ($._DH) {
                                case $.x:
                                  if (t) {
                                    for ($._DG = $.BD; $._DG < $.CC; $._DG += $.x) {
                                      switch ($._DG) {
                                        case $.x:
                                          try {
                                            ! function(n) {
                                              for ($._CI = $.BD; $._CI < $.CC; $._CI += $.x) {
                                                switch ($._CI) {
                                                  case $.x:
                                                    switch (r[$.HB]) {
                                                      case $.BD:
                                                        t();
                                                        break;
                                                      case $.x:
                                                        t(r[$.BD]);
                                                        break;
                                                      case $.CC:
                                                        t(r[$.BD], r[$.x]);
                                                        break;
                                                      case $.Cg:
                                                        t(r[$.BD], r[$.x], r[$.CC]);
                                                        break;
                                                      default:
                                                        t[$.Ch](e, r);
                                                    }
                                                    break;
                                                  case $.BD:
                                                    var t = n[$.ef]
                                                      , r = n[$.eg];
                                                    break;
                                                }
                                              }
                                            }(t);
                                          } finally {
                                            l(n), d = !$.x;
                                          }
                                          break;
                                        case $.BD:
                                          d = !$.BD;
                                          break;
                                      }
                                    }
                                  }
                                  break;
                                case $.BD:
                                  var t = a[n];
                                  break;
                              }
                            }
                          }
                        }
                        break;
                      case $.x:
                        if (!r[$.aE]) {
                          for ($._Fh = $.BD; $._Fh < $.CC; $._Fh += $.x) {
                            switch ($._Fh) {
                              case $.x:
                                s = s && s[$.Bf] ? s : r, $.cc === $.$()[$.Bw][$.CA](r[$.eE]) ? u = function(n) {
                                  m[$.Ee](function() {
                                    w(n);
                                  });
                                } : ! function() {
                                  if (r[$.Jk] && !r[$.fy]) {
                                    for ($._Dz = $.BD; $._Dz < $.CC; $._Dz += $.x) {
                                      switch ($._Dz) {
                                        case $.x:
                                          return r[$.gD] = function() {
                                            n = !$.x;
                                          }, r[$.Jk]($.Bv, $.ab), r[$.gD] = t, n;
                                          break;
                                        case $.BD:
                                          var n = !$.BD
                                            , t = r[$.gD];
                                          break;
                                      }
                                    }
                                  }
                                }() ? r[$.Bk] ? ((t = new x())[$.ga][$.gD] = function(n) {
                                  w(n[$.bE]);
                                }, u = function(n) {
                                  t[$.gb][$.Jk](n);
                                }) : v && $.gg in v[$.A]($.au) ? (i = v[$.ba], u = function(n) {
                                  for ($._Fe = $.BD; $._Fe < $.CC; $._Fe += $.x) {
                                    switch ($._Fe) {
                                      case $.x:
                                        t[$.gg] = function() {
                                          w(n), t[$.gg] = null, i[$.br](t), t = null;
                                        }, i[$.Bt](t);
                                        break;
                                      case $.BD:
                                        var t = v[$.A]($.au);
                                        break;
                                    }
                                  }
                                }) : u = function(n) {
                                  q(w, $.BD, n);
                                } : (o = $.gj + f[$.Bn]() + $.gl, n = function(n) {
                                  n[$.gk] === r && $.gn == typeof n[$.bE] && $.BD === n[$.bE][$.aI](o) && w(+n[$.bE][$.CB](o[$.HB]));
                                }, r[$.B] ? r[$.B]($.Gy, n, !$.x) : r[$.gm]($.gD, n), u = function(n) {
                                  r[$.Jk](o + n, $.ab);
                                }), s[$.aE] = function(n) {
                                  for ($._DB = $.BD; $._DB < $.DD; $._DB += $.x) {
                                    switch ($._DB) {
                                      case $.Cg:
                                        return a[c] = e, u(c), c++;
                                        break;
                                      case $.x:
                                        for (var t = new h(arguments[$.HB] - $.x), r = $.BD; r < t[$.HB]; r++) t[r] = arguments[r + $.x];
                                        break;
                                      case $.CC:
                                        var e = $.$($.ef, n, $.eg, t);
                                        break;
                                      case $.BD:
                                        $.Fm != typeof n && (n = new Function($.Bv + n));
                                        break;
                                    }
                                  }
                                }, s[$.aF] = l;
                                break;
                              case $.BD:
                                var u, i, t, o, n, c = $.x
                                  , a = $.$()
                                  , d = !$.x
                                  , v = r[$.y]
                                  , s = Object[$.dB] && Object[$.dB](r);
                                break;
                            }
                          }
                        }
                        break;
                      case $.CC:
                        function l(n) {
                          delete a[n];
                        }
                        break;
                      case $.BD:
                        $.Cs;
                        break;
                    }
                  }
                }($.Ct == typeof self ? void $.BD === n ? this : n : self);
              } [$.CA](t, r($.fw), r($.go)));
            }, function(n, t) {
              for ($._DD = $.BD; $._DD < $.Fu; $._DD += $.x) {
                switch ($._DD) {
                  case $.GE:
                    function y() {}
                    break;
                  case $.DD:
                    ! function() {
                      for ($._BH = $.BD; $._BH < $.CC; $._BH += $.x) {
                        switch ($._BH) {
                          case $.x:
                            try {
                              e = $.Fm == typeof u ? u : c;
                            } catch (n) {
                              e = c;
                            }
                            break;
                          case $.BD:
                            try {
                              r = $.Fm == typeof q ? q : o;
                            } catch (n) {
                              r = o;
                            }
                            break;
                        }
                      }
                    }();
                    break;
                  case $.Fy:
                    function w() {
                      if (!v) {
                        for ($._Cw = $.BD; $._Cw < $.DD; $._Cw += $.x) {
                          switch ($._Cw) {
                            case $.Cg:
                              a = null, v = !$.x
                                , function(t) {
                                  for ($._Ci = $.BD; $._Ci < $.Cg; $._Ci += $.x) {
                                    switch ($._Ci) {
                                      case $.CC:
                                        try {
                                          e(t);
                                        } catch (n) {
                                          try {
                                            return e[$.CA](null, t);
                                          } catch (n) {
                                            return e[$.CA](this, t);
                                          }
                                        }
                                        break;
                                      case $.x:
                                        if ((e === c || !e) && u) return (e = u)(t);
                                        break;
                                      case $.BD:
                                        if (e === u) return u(t);
                                        break;
                                    }
                                  }
                                }(n);
                              break;
                            case $.x:
                              v = !$.BD;
                              break;
                            case $.CC:
                              for (var t = d[$.HB]; t;) {
                                for ($._Cb = $.BD; $._Cb < $.CC; $._Cb += $.x) {
                                  switch ($._Cb) {
                                    case $.x:
                                      s = -$.x, t = d[$.HB];
                                      break;
                                    case $.BD:
                                      for (a = d, d = []; ++s < t;) a && a[s][$.HG]();
                                      break;
                                  }
                                }
                              }
                              break;
                            case $.BD:
                              var n = f(l);
                              break;
                          }
                        }
                      }
                    }
                    break;
                  case $.Cg:
                    function f(t) {
                      for ($._CA = $.BD; $._CA < $.Cg; $._CA += $.x) {
                        switch ($._CA) {
                          case $.CC:
                            try {
                              return r(t, $.BD);
                            } catch (n) {
                              try {
                                return r[$.CA](null, t, $.BD);
                              } catch (n) {
                                return r[$.CA](this, t, $.BD);
                              }
                            }
                            break;
                          case $.x:
                            if ((r === o || !r) && q) return (r = q)(t, $.BD);
                            break;
                          case $.BD:
                            if (r === q) return q(t, $.BD);
                            break;
                        }
                      }
                    }
                    break;
                  case $.Fs:
                    function m(n, t) {
                      this[$.Jz] = n, this[$.aA] = t;
                    }
                    break;
                  case $.GA:
                    var a, d = []
                      , v = !$.x
                      , s = -$.x;
                    break;
                  case $.CC:
                    function c() {
                      throw new Error($.HJ);
                    }
                    break;
                  case $.x:
                    function o() {
                      throw new Error($.HI);
                    }
                    break;
                  case $.Fv:
                    i[$.Ee] = function(n) {
                      for ($._CG = $.BD; $._CG < $.Cg; $._CG += $.x) {
                        switch ($._CG) {
                          case $.CC:
                            d[$.az](new m(n, t)), $.x !== d[$.HB] || v || f(w);
                            break;
                          case $.x:
                            if ($.x < arguments[$.HB])
                              for (var r = $.x; r < arguments[$.HB]; r++) t[r - $.x] = arguments[r];
                            break;
                          case $.BD:
                            var t = new h(arguments[$.HB] - $.x);
                            break;
                        }
                      }
                    }, m[$.CG][$.HG] = function() {
                      this[$.Jz][$.Ch](null, this[$.aA]);
                    }, i[$.Ef] = $.Eg, i[$.Eg] = !$.BD, i[$.Eh] = $.$(), i[$.Ei] = [], i[$.Ej] = $.Bv, i[$.Ek] = $.$(), i.on = y, i[$.El] = y, i[$.Em] = y, i[$.En] = y, i[$.Eo] = y, i[$.Ep] = y, i[$.Eq] = y, i[$.Er] = y, i[$.Es] = y, i[$.Et] = function(n) {
                      return [];
                    }, i[$.Eu] = function(n) {
                      throw new Error($.av);
                    }, i[$.Ev] = function() {
                      return $.Jm;
                    }, i[$.Ew] = function(n) {
                      throw new Error($.aw);
                    }, i[$.Ex] = function() {
                      return $.BD;
                    };
                    break;
                  case $.GF:
                    function l() {
                      v && a && (v = !$.x, a[$.HB] ? d = a[$.bH](d) : s = -$.x, d[$.HB] && w());
                    }
                    break;
                  case $.BD:
                    var r, e, i = n[$.Bx] = $.$();
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._EB = $.BD; $._EB < $.DD; $._EB += $.x) {
                switch ($._EB) {
                  case $.Cg:
                    function d(n, t) {
                      try {
                        for ($._Bh = $.BD; $._Bh < $.CC; $._Bh += $.x) {
                          switch ($._Bh) {
                            case $.x:
                              return n[$.aI](r) + o;
                              break;
                            case $.BD:
                              var r = n[$.ag](function(n) {
                                return -$.x < n[$.aI](t);
                              })[$.dH]();
                              break;
                          }
                        }
                      } catch (n) {
                        return $.BD;
                      }
                    }
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t.qn = function(n) {
                      for ($._i = $.BD; $._i < $.CC; $._i += $.x) {
                        switch ($._i) {
                          case $.x:
                            return $.x;
                            break;
                          case $.BD: {
                            for ($._g = $.BD; $._g < $.CC; $._g += $.x) {
                              switch ($._g) {
                                case $.x:
                                  if (i[$.Jv](n)) return $.CC;
                                  break;
                                case $.BD:
                                  if (u[$.Jv](n)) return $.Cg;
                                  break;
                              }
                            }
                          }
                          break;
                        }
                      }
                    }, t.En = function(n) {
                      return d(c, n);
                    }, t.Pn = function(n) {
                      return d(f, n[$.bz]());
                    }, t.Tn = function(n) {
                      return d(a, n);
                    }, t.Mn = function(n) {
                      return n[$.HH]($.Jm)[$.CB]($.x)[$.ag](function(n) {
                        return n;
                      })[$.dH]()[$.HH]($.cJ)[$.CB](-$.CC)[$.Bu]($.cJ)[$.fE]()[$.HH]($.Bv)[$.cD](function(n, t) {
                        return n + ($.BD, e[$.Do])(t);
                      }, $.BD) % $.GF + $.x;
                    };
                    break;
                  case $.CC:
                    var e = r($.Cg)
                      , u = new j($.Ge, $.CD)
                      , i = new j($.Gf, $.CD)
                      , o = $.CC
                      , c = [
                        [$.Ey]
                        , [$.Ez, $.FA, $.FB]
                        , [$.FC, $.FD]
                        , [$.FE, $.FF, $.FG]
                        , [$.FH, $.FI]
                      ]
                      , f = [
                        [$.FJ]
                        , [-$.Fn]
                        , [-$.Fo]
                        , [-$.Fp, -$.Fq]
                        , [$.Fa, $.FB, -$.FJ, -$.Fr]
                      ]
                      , a = [
                        [$.Fb]
                        , [$.Fc]
                        , [$.Fd]
                        , [$.Fe]
                        , [$.Ff]
                      ];
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._p = $.BD; $._p < $.GF; $._p += $.x) {
                switch ($._p) {
                  case $.GA:
                    f[$.Fh] = ($.BD, i.Vn)(o.C, d), a[$.Fh] = o.I, window[$.B]($.Gy, ($.BD, i.Qn)(f, e.Sn, u.Z)), window[$.B]($.Gy, ($.BD, i.Qn)(a, e.Sn, $.x));
                    break;
                  case $.CC:
                    var e = r($.DD)
                      , u = r($.x)
                      , i = r($.GE)
                      , o = r($.BD)
                      , c = t.nn = $.$()
                      , f = t[$.HA] = $.$()
                      , a = t[$.Fg] = $.$();
                    break;
                  case $.Cg:
                    c[$.Fh] = o.N, window[$.B]($.Gy, ($.BD, i.Qn)(c, e.Sn, $.x));
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Fg] = t[$.HA] = t.nn = void $.BD;
                    break;
                  case $.DD:
                    var d = c[$.HB] * u.Z;
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._DF = $.BD; $._DF < $.Fv; $._DF += $.x) {
                switch ($._DF) {
                  case $.GE:
                    function j() {
                      l && (window[$.C](a.Yt, l, a.Zt), l = void $.BD), y();
                    }
                    break;
                  case $.DD:
                    function m() {
                      for ($._DE = $.BD; $._DE < $.Cg; $._DE += $.x) {
                        switch ($._DE) {
                          case $.CC:
                            s = n[$.aJ](function(n) {
                              for ($._z = $.BD; $._z < $.CC; $._z += $.x) {
                                switch ($._z) {
                                  case $.x:
                                    return o[$.p] = a.Rt, o[$.ak] = r + $.dC, o[$.bA] = e + $.dC, o[$.q] = u + $.dC, o[$.r] = i + $.dC, _(o);
                                    break;
                                  case $.BD:
                                    var t = ($.BD, c[$.Dr])(n)
                                      , r = t[$.ak]
                                      , e = t[$.bA]
                                      , u = t[$.cf]
                                      , i = t[$.cg]
                                      , o = $.$();
                                    break;
                                }
                              }
                            }), w = q(m, a.Tt);
                            break;
                          case $.x:
                            var n = ($.BD, c[$.Ds])(a.It)[$.ag](function(n) {
                              for ($._Cv = $.BD; $._Cv < $.CC; $._Cv += $.x) {
                                switch ($._Cv) {
                                  case $.x:
                                    return !a.Ct[$.eq](function(n) {
                                      return [t, r][$.Bu](a.zt) === n;
                                    });
                                    break;
                                  case $.BD:
                                    var t = n[$.cf]
                                      , r = n[$.cg];
                                    break;
                                }
                              }
                            });
                            break;
                          case $.BD:
                            y();
                            break;
                        }
                      }
                    }
                    break;
                  case $.Fy:
                    function p(n, t) {
                      for ($._o = $.BD; $._o < $.CC; $._o += $.x) {
                        switch ($._o) {
                          case $.x:
                            return f[$.Jj](e);
                            break;
                          case $.BD:
                            var r = t - n
                              , e = f[$.Bn]() * r + n;
                            break;
                        }
                      }
                    }
                    break;
                  case $.Cg:
                    var s = []
                      , l = void $.BD
                      , w = void $.BD
                      , h = b(v.S);
                    break;
                  case $.Fs:
                    function g(n) {
                      return n[p($.BD, n[$.HB])];
                    }
                    break;
                  case $.GA:
                    function y() {
                      s = s[$.ag](function(n) {
                        return n[$.Ck] && n[$.Ck][$.br](n), !$.x;
                      }), w && u(w);
                    }
                    break;
                  case $.CC:
                    var e, i = r($.Gg)
                      , o = (e = i) && e[$.Cd] ? e : $.$($.Cj, e)
                      , c = r($.GF)
                      , a = r($.Gh)
                      , d = r($.Gi)
                      , v = r($.BD);
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t.ur = m, t.ir = y, t.or = _, t.tr = function(r) {
                      for ($._Cj = $.BD; $._Cj < $.Cg; $._Cj += $.x) {
                        switch ($._Cj) {
                          case $.CC:
                            l = function(n) {
                              ($.BD, d[$.Fi])(r) && (n[$.dg](), n[$.dh](), j(), (document[$.c] || document[$.ba])[$.Bt](e[$.ct]));
                            }, window[$.B](a.Yt, l, a.Zt), e[$.Ip][$.B](a.Kt, function(n) {
                              for ($._CB = $.BD; $._CB < $.Cg; $._CB += $.x) {
                                switch ($._CB) {
                                  case $.CC:
                                    t && r === v.a && ($.BD, d[$.Fj])(r), e[$.ct][$.eB]();
                                    break;
                                  case $.x:
                                    var t = ($.BD, o[$.Cj])($.HD + h + $.fC + r);
                                    break;
                                  case $.BD:
                                    n[$.dg](), n[$.dh](), n[$.di]();
                                    break;
                                }
                              }
                            }, a.Zt);
                            break;
                          case $.x:
                            var e = function(n) {
                              for ($._BE = $.BD; $._BE < $.GF; $._BE += $.x) {
                                switch ($._BE) {
                                  case $.GA:
                                    return o[$.ct] = e, o[$.Ip] = i, o;
                                    break;
                                  case $.CC:
                                    var i = e[$.J]($.Cb)[$.BD];
                                    break;
                                  case $.Cg:
                                    i[$.cs] = a.Gt, i[$.l][$.p] = $.db, i[$.l][$.HE] = p($.dp, $.dq), i[$.l][$.q] = p($.eC, $.eD) + $.do, i[$.l][$.r] = p($.eC, $.eD) + $.do, i[$.l][$.ak] = p($.BD, $.DD) + $.dC, i[$.l][$.dD] = p($.BD, $.DD) + $.dC, i[$.l][$.bA] = p($.BD, $.DD) + $.dC, i[$.l][$.dE] = p($.BD, $.DD) + $.dC;
                                    break;
                                  case $.x:
                                    e[$.Cc] = u;
                                    break;
                                  case $.DD:
                                    var o = $.$();
                                    break;
                                  case $.BD:
                                    var t = g(a.Xt)
                                      , r = g(a.Ut)
                                      , e = document[$.A](t)
                                      , u = r[$.CE]($.dJ, n);
                                    break;
                                }
                              }
                            }($.HD + h + $.fC + r);
                            break;
                          case $.BD:
                            ($.BD, d[$.Fi])(r) && m();
                            break;
                        }
                      }
                    }, t.er = j, t.nr = function() {
                      return void $.BD === l;
                    }, t.rr = function(n) {
                      h = n;
                    };
                    break;
                  case $.GF:
                    function _(t) {
                      for ($._Be = $.BD; $._Be < $.CC; $._Be += $.x) {
                        switch ($._Be) {
                          case $.x:
                            return Object[$.aa](t)[$.k](function(n) {
                              r[$.l][n] = t[n];
                            }), (document[$.c] || document[$.ba])[$.Bt](r), r;
                            break;
                          case $.BD:
                            var r = a.Ht[$.Cq](a.Jt);
                            break;
                        }
                      }
                    }
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, r, u) {
              for ($._FC = $.BD; $._FC < $.Fs; $._FC += $.x) {
                switch ($._FC) {
                  case $.Fy:
                    window[c] || (window[c] = $.$());
                    break;
                  case $.Cg:
                    r.cr = function() {
                      for ($._Bk = $.BD; $._Bk < $.GA; $._Bk += $.x) {
                        switch ($._Bk) {
                          case $.Cg:
                            if (o && c) return !$.BD;
                            break;
                          case $.x:
                            if (r + s < new e()[$.bx]()) return _(new e()[$.bx](), $.BD, $.BD), $.BD < d.v;
                            break;
                          case $.DD:
                            return !$.x;
                            break;
                          case $.CC:
                            var o = i < d.v
                              , c = u + l < new e()[$.bx]();
                            break;
                          case $.BD:
                            var n = y()
                              , t = f(n, $.Cg)
                              , r = t[$.BD]
                              , u = t[$.x]
                              , i = t[$.CC];
                            break;
                        }
                      }
                    }, r.fr = function() {
                      for ($._m = $.BD; $._m < $.CC; $._m += $.x) {
                        switch ($._m) {
                          case $.x:
                            _(r, new e()[$.bx](), u + $.x);
                            break;
                          case $.BD:
                            var n = y()
                              , t = f(n, $.Cg)
                              , r = t[$.BD]
                              , u = t[$.CC];
                            break;
                        }
                      }
                    }, r[$.Fi] = function(n) {
                      for ($._BJ = $.BD; $._BJ < $.CC; $._BJ += $.x) {
                        switch ($._BJ) {
                          case $.x:
                            return !$.BD;
                            break;
                          case $.BD:
                            try {
                              for ($._BA = $.BD; $._BA < $.CC; $._BA += $.x) {
                                switch ($._BA) {
                                  case $.x:
                                    if (u) return new e()[$.bx]() > m(u, $.Fv);
                                    break;
                                  case $.BD:
                                    var r = $.Bv + o + n
                                      , u = w[r] || t[r];
                                    break;
                                }
                              }
                            } catch (n) {}
                            break;
                        }
                      }
                    }, r[$.Fj] = function(n) {
                      for ($._u = $.BD; $._u < $.DD; $._u += $.x) {
                        switch ($._u) {
                          case $.Cg:
                            try {
                              w[u] = r;
                            } catch (n) {}
                            break;
                          case $.x:
                            window[c][n] = !$.BD;
                            break;
                          case $.CC:
                            try {
                              t[u] = r;
                            } catch (n) {}
                            break;
                          case $.BD:
                            var r = new e()[$.bx]() + $.DI
                              , u = $.Bv + o + n;
                            break;
                        }
                      }
                    };
                    break;
                  case $.GA:
                    function y() {
                      for ($._v = $.BD; $._v < $.GA; $._v += $.x) {
                        switch ($._v) {
                          case $.Cg:
                            var r = n[$.HH](a.X)
                              , u = f(r, $.Cg)
                              , i = u[$.BD]
                              , o = u[$.x]
                              , c = u[$.CC];
                            break;
                          case $.x:
                            try {
                              n = t[v] || $.Bv;
                            } catch (n) {}
                            break;
                          case $.DD:
                            return [m(i, $.Fv) || new e()[$.bx](), m(c, $.Fv) || $.BD, m(o, $.Fv) || $.BD];
                            break;
                          case $.CC:
                            try {
                              n || (n = w[v] || $.Bv);
                            } catch (n) {}
                            break;
                          case $.BD:
                            var n = void $.BD;
                            break;
                        }
                      }
                    }
                    break;
                  case $.CC:
                    var f = function(n, t) {
                      for ($._Ew = $.BD; $._Ew < $.Cg; $._Ew += $.x) {
                        switch ($._Ew) {
                          case $.CC:
                            throw new TypeError($.Jw);
                            break;
                          case $.x:
                            if (Symbol[$.aG] in Object(n)) return function(n, t) {
                              for ($._Er = $.BD; $._Er < $.Cg; $._Er += $.x) {
                                switch ($._Er) {
                                  case $.CC:
                                    return r;
                                    break;
                                  case $.x:
                                    try {
                                      for (var o, c = n[Symbol[$.aG]](); !(e = (o = c[$.fj]())[$.fo]) && (r[$.az](o[$.Iy]), !t || r[$.HB] !== t); e = !$.BD);
                                    } catch (n) {
                                      u = !$.BD, i = n;
                                    } finally {
                                      try {
                                        !e && c[$.gI] && c[$.gI]();
                                      } finally {
                                        if (u) throw i;
                                      }
                                    }
                                    break;
                                  case $.BD:
                                    var r = []
                                      , e = !$.BD
                                      , u = !$.x
                                      , i = void $.BD;
                                    break;
                                }
                              }
                            }(n, t);
                            break;
                          case $.BD:
                            if (h[$.Jh](n)) return n;
                            break;
                        }
                      }
                    };
                    break;
                  case $.x:
                    Object[$.e](r, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.GF:
                    function _(n, r, e) {
                      for ($._n = $.BD; $._n < $.Cg; $._n += $.x) {
                        switch ($._n) {
                          case $.CC:
                            try {
                              w[v] = u;
                            } catch (n) {}
                            break;
                          case $.x:
                            try {
                              t[v] = u;
                            } catch (n) {}
                            break;
                          case $.BD:
                            var u = [n, e, r][$.Bu](a.X);
                            break;
                        }
                      }
                    }
                    break;
                  case $.DD:
                    var i = u($.Gj)
                      , a = u($.x)
                      , d = u($.BD)
                      , o = $.DJ
                      , v = $.Fk + d.e + $.al
                      , c = $.Da
                      , s = d.w * i.ar
                      , l = d.h * i.dr;
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._H = $.BD; $._H < $.Cg; $._H += $.x) {
                switch ($._H) {
                  case $.CC:
                    t.dr = $.It, t.ar = $.Iu;
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Ei = $.BD; $._Ei < $.GA; $._Ei += $.x) {
                switch ($._Ei) {
                  case $.Cg:
                    function i(n) {
                      for ($._Ef = $.BD; $._Ef < $.CC; $._Ef += $.x) {
                        switch ($._Ef) {
                          case $.x:
                            i !== l && i !== w || (t === h ? (d[$.cn] = m, d[$.eG] = s.O, d[$.cr] = s.e, d[$.eH] = s.a) : t !== _ || !o || f && !a || (d[$.cn] = p, d[$.cp] = o, ($.BD, v.Ot)(r, c, u, e)[$.cH](function(n) {
                              for ($._Dp = $.BD; $._Dp < $.CC; $._Dp += $.x) {
                                switch ($._Dp) {
                                  case $.x:
                                    t[$.cn] = g, t[$.cm] = r, t[$.cp] = o, t[$.bE] = n, j(i, t);
                                    break;
                                  case $.BD:
                                    var t = $.$();
                                    break;
                                }
                              }
                            })[$.fG](function(n) {
                              for ($._EJ = $.BD; $._EJ < $.CC; $._EJ += $.x) {
                                switch ($._EJ) {
                                  case $.x:
                                    t[$.cn] = b, t[$.cm] = r, t[$.cp] = o, t[$.cu] = n && n[$.Gy], j(i, t);
                                    break;
                                  case $.BD:
                                    var t = $.$();
                                    break;
                                }
                              }
                            })), d[$.cn] && j(i, d));
                            break;
                          case $.BD:
                            var r = n && n[$.bE] && n[$.bE][$.cm]
                              , t = n && n[$.bE] && n[$.bE][$.cn]
                              , e = n && n[$.bE] && n[$.bE][$.c]
                              , u = n && n[$.bE] && n[$.bE][$.co]
                              , i = n && n[$.bE] && n[$.bE][$.Jl]
                              , o = n && n[$.bE] && n[$.bE][$.cp]
                              , c = n && n[$.bE] && n[$.bE][$.cq]
                              , f = n && n[$.bE] && n[$.bE][$.cr]
                              , a = f === s.e || f === s.a
                              , d = $.$();
                            break;
                        }
                      }
                    }
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Cj] = function() {
                      for ($._BI = $.BD; $._BI < $.CC; $._BI += $.x) {
                        switch ($._BI) {
                          case $.x:
                            window[$.B]($.Gy, i);
                            break;
                          case $.BD:
                            try {
                              (e = new y(l))[$.B]($.Gy, i), (u = new y(w))[$.B]($.Gy, i);
                            } catch (n) {}
                            break;
                        }
                      }
                    };
                    break;
                  case $.DD:
                    function j(n, t) {
                      for ($._t = $.BD; $._t < $.CC; $._t += $.x) {
                        switch ($._t) {
                          case $.x:
                            window[$.Jk](t, $.ab);
                            break;
                          case $.BD:
                            switch (t[$.Jl] = n) {
                              case w:
                                u[$.Jk](t);
                                break;
                              case l:
                              default:
                                e[$.Jk](t);
                            }
                            break;
                        }
                      }
                    }
                    break;
                  case $.CC:
                    var v = r($.Gd)
                      , s = r($.BD)
                      , l = $.Db
                      , w = $.Dc
                      , h = $.Dd
                      , m = $.De
                      , _ = $.Df
                      , p = $.Dg
                      , b = $.Dh
                      , g = $.Di
                      , e = void $.BD
                      , u = void $.BD;
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._FG = $.BD; $._FG < $.Fy; $._FG += $.x) {
                switch ($._FG) {
                  case $.GA:
                    function x(n) {
                      return z(b(n)[$.HH]($.Bv)[$.aJ](function(n) {
                        return $.do + ($.Hi + n[$.bl]($.BD)[$.Bw]($.Fw))[$.CB](-$.CC);
                      })[$.Bu]($.Bv));
                    }
                    break;
                  case $.CC:
                    var j = $.Fm == typeof Symbol && $.aj == typeof Symbol[$.aG] ? function(n) {
                      return typeof n;
                    } : function(n) {
                      return n && $.Fm == typeof Symbol && n[$.fl] === Symbol && n !== Symbol[$.CG] ? $.aj : typeof n;
                    };
                    break;
                  case $.Cg:
                    t.kt = function(n, o) {
                      return new v[$.Cj](function(e, u) {
                        for ($._Eo = $.BD; $._Eo < $.CC; $._Eo += $.x) {
                          switch ($._Eo) {
                            case $.x:
                              i[$.cj] = n, i[$.cs] = O.Qt, i[$.cn] = O.Vt, i[$.dF] = O.Wt, document[$.Co][$.de](i, document[$.Co][$.Cf]), i[$.Js] = function() {
                                for ($._Ej = $.BD; $._Ej < $.CC; $._Ej += $.x) {
                                  switch ($._Ej) {
                                    case $.x:
                                      var t, r;
                                      break;
                                    case $.BD:
                                      try {
                                        for ($._Ea = $.BD; $._Ea < $.CC; $._Ea += $.x) {
                                          switch ($._Ea) {
                                            case $.x:
                                              i[$.Ck][$.br](i), o === S.Yn ? e(A(n)) : e(x(n));
                                              break;
                                            case $.BD:
                                              var n = (t = i[$.cj], ((r = h[$.CG][$.CB][$.CA](document[$.fm])[$.ag](function(n) {
                                                return n[$.cj] === t;
                                              })[$.bJ]()[$.gB])[$.BD][$.gC][$.fr]($.gE) ? r[$.BD][$.l][$.gH] : r[$.CC][$.l][$.gH])[$.CB]($.x, -$.x));
                                              break;
                                          }
                                        }
                                      } catch (n) {
                                        u();
                                      }
                                      break;
                                  }
                                }
                              }, i[$.Gz] = function() {
                                i[$.Ck][$.br](i), u();
                              };
                              break;
                            case $.BD:
                              var i = document[$.A](O.$t);
                              break;
                          }
                        }
                      });
                    }, t.At = function(t, w) {
                      return new v[$.Cj](function(s, n) {
                        for ($._FE = $.BD; $._FE < $.CC; $._FE += $.x) {
                          switch ($._FE) {
                            case $.x:
                              l[$.dF] = $.dc, l[$.i] = t, l[$.Js] = function() {
                                for ($._Ey = $.BD; $._Ey < $.Fy; $._Ey += $.x) {
                                  switch ($._Ey) {
                                    case $.GA:
                                      var d = c(i[$.Bu]($.Bv)[$.fJ]($.BD, u))
                                        , v = w === S.Yn ? A(d) : x(d);
                                      break;
                                    case $.CC:
                                      var t = n[$.eo]($.et);
                                      break;
                                    case $.Cg:
                                      t[$.ea](l, $.BD, $.BD);
                                      break;
                                    case $.x:
                                      n[$.q] = l[$.q], n[$.r] = l[$.r];
                                      break;
                                    case $.GF:
                                      return s(v);
                                      break;
                                    case $.DD:
                                      for (var r = t[$.ep]($.BD, $.BD, l[$.q], l[$.r]), e = r[$.bE], u = e[$.CB]($.BD, $.GB)[$.ag](function(n, t) {
                                          return (t + $.x) % $.DD;
                                        })[$.af]()[$.cD](function(n, t, r) {
                                          return n + t * f[$.fH]($.gA, r);
                                        }, $.BD), i = [], o = $.GB; o < e[$.HB]; o++)
                                        if ((o + $.x) % $.DD) {
                                          for ($._Et = $.BD; $._Et < $.CC; $._Et += $.x) {
                                            switch ($._Et) {
                                              case $.x:
                                                (w === S.Yn || $.Jf <= a) && i[$.az](k[$.n](a));
                                                break;
                                              case $.BD:
                                                var a = e[o];
                                                break;
                                            }
                                          }
                                        } break;
                                    case $.BD:
                                      var n = document[$.A]($.es);
                                      break;
                                  }
                                }
                              }, l[$.Gz] = function() {
                                return n();
                              };
                              break;
                            case $.BD:
                              var l = new Image();
                              break;
                          }
                        }
                      });
                    }, t.qt = function(u, i) {
                      for ($._El = $.BD; $._El < $.CC; $._El += $.x) {
                        switch ($._El) {
                          case $.x:
                            return new v[$.Cj](function(t, r) {
                              for ($._Ee = $.BD; $._Ee < $.CC; $._Ee += $.x) {
                                switch ($._Ee) {
                                  case $.x:
                                    if (e[$.Jn](a, u), e[$.cq] = f, e[$.cz] = !$.BD, e[$.Jo](S.Ln, c(o(i))), e[$.Js] = function() {
                                        for ($._Dc = $.BD; $._Dc < $.CC; $._Dc += $.x) {
                                          switch ($._Dc) {
                                            case $.x:
                                              n[$.cB] = e[$.cB], n[$.Di] = f === S.Un ? g[$.fb](e[$.Di]) : e[$.Di], $.BD <= [$.bF, $.eh][$.aI](e[$.cB]) ? t(n) : r(new Error($.ew + e[$.cB] + $.df + e[$.fc] + $.fg + i));
                                              break;
                                            case $.BD:
                                              var n = $.$();
                                              break;
                                          }
                                        }
                                      }, e[$.Gz] = function() {
                                        r(new Error($.ew + e[$.cB] + $.df + e[$.fc] + $.fg + i));
                                      }, a === S.Zn) {
                                      for ($._Eb = $.BD; $._Eb < $.CC; $._Eb += $.x) {
                                        switch ($._Eb) {
                                          case $.x:
                                            e[$.Jo](S.sn, S.Xn), e[$.Jp](n);
                                            break;
                                          case $.BD:
                                            var n = $.eF === (void $.BD === d ? $.Ct : j(d)) ? g[$.fb](d) : d;
                                            break;
                                        }
                                      }
                                    } else e[$.Jp]();
                                    break;
                                  case $.BD:
                                    var e = new window[$.ai]();
                                    break;
                                }
                              }
                            });
                            break;
                          case $.BD:
                            var f = $.CC < arguments[$.HB] && void $.BD !== arguments[$.CC] ? arguments[$.CC] : S.Un
                              , a = $.Cg < arguments[$.HB] && void $.BD !== arguments[$.Cg] ? arguments[$.Cg] : S.Kn
                              , d = $.DD < arguments[$.HB] && void $.BD !== arguments[$.DD] ? arguments[$.DD] : $.$();
                            break;
                        }
                      }
                    }, t.Et = function(t, m) {
                      for ($._En = $.BD; $._En < $.CC; $._En += $.x) {
                        switch ($._En) {
                          case $.x:
                            return new v[$.Cj](function(f, a) {
                              for ($._Ek = $.BD; $._Ek < $.Cg; $._Ek += $.x) {
                                switch ($._Ek) {
                                  case $.CC:
                                    window[$.B]($.Gy, n), v[$.i] = t, (document[$.c] || document[$.ba])[$.Bt](v), w = q(h, O.Nt), l = q(h, O.Bt);
                                    break;
                                  case $.x:
                                    function n(n) {
                                      for ($._Eh = $.BD; $._Eh < $.CC; $._Eh += $.x) {
                                        switch ($._Eh) {
                                          case $.x:
                                            if (t === d)
                                              if (u(w), null === n[$.bE][t]) {
                                                for ($._Dd = $.BD; $._Dd < $.CC; $._Dd += $.x) {
                                                  switch ($._Dd) {
                                                    case $.x:
                                                      r[t] = $.$($.fe, $.fh, $.cm, c(o(m)), $.co, _, $.c, $.eF === (void $.BD === p ? $.Ct : j(p)) ? g[$.fb](p) : p), _ === S.Zn && (r[t][$.fs] = g[$.fb]($.$($.IG, S.Xn))), v[$.w][$.Jk](r, $.ab);
                                                      break;
                                                    case $.BD:
                                                      var r = $.$();
                                                      break;
                                                  }
                                                }
                                              } else {
                                                for ($._Ed = $.BD; $._Ed < $.Cg; $._Ed += $.x) {
                                                  switch ($._Ed) {
                                                    case $.CC:
                                                      e[$.cB] = i[$.gF], e[$.Di] = y === S.Yn ? A(i[$.c]) : x(i[$.c]), $.BD <= [$.bF, $.eh][$.aI](e[$.cB]) ? f(e) : a(new Error($.ew + e[$.cB] + $.fg + m));
                                                      break;
                                                    case $.x:
                                                      var e = $.$()
                                                        , i = g[$.ac](b(n[$.bE][t]));
                                                      break;
                                                    case $.BD:
                                                      s = !$.BD, h(), u(l);
                                                      break;
                                                  }
                                                }
                                              } break;
                                          case $.BD:
                                            var t = Object[$.aa](n[$.bE])[$.bJ]();
                                            break;
                                        }
                                      }
                                    }
                                    break;
                                  case $.BD:
                                    var d = ($.BD, i.st)(t)
                                      , v = ($.BD, i.lt)()
                                      , s = !$.x
                                      , l = void $.BD
                                      , w = void $.BD
                                      , h = function() {
                                        try {
                                          v[$.Ck][$.br](v), window[$.C]($.Gy, n), s || a(new Error($.er));
                                        } catch (n) {}
                                      };
                                    break;
                                }
                              }
                            });
                            break;
                          case $.BD:
                            var y = $.CC < arguments[$.HB] && void $.BD !== arguments[$.CC] ? arguments[$.CC] : S.Un
                              , _ = $.Cg < arguments[$.HB] && void $.BD !== arguments[$.Cg] ? arguments[$.Cg] : S.Kn
                              , p = $.DD < arguments[$.HB] && void $.BD !== arguments[$.DD] ? arguments[$.DD] : $.$();
                            break;
                        }
                      }
                    };
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.GF:
                    function A(n) {
                      for ($._BB = $.BD; $._BB < $.CC; $._BB += $.x) {
                        switch ($._BB) {
                          case $.x:
                            return new p(t)[$.aJ](function(n, t) {
                              return r[$.bl](t);
                            });
                            break;
                          case $.BD:
                            var r = b(n)
                              , t = new s(r[$.HB]);
                            break;
                        }
                      }
                    }
                    break;
                  case $.DD:
                    var e, O = r($.Gh)
                      , S = r($.Fy)
                      , i = r($.GC)
                      , a = r($.Fs)
                      , v = (e = a) && e[$.Cd] ? e : $.$($.Cj, e);
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(r, u, i) {
              for ($._FD = $.BD; $._FD < $.Fs; $._FD += $.x) {
                switch ($._FD) {
                  case $.Fy:
                    s.mr = $.Dl, s.yr = $.DG, s._r = $.Iv, s.pr = $.Iw, s.br = $.Ix, s.gr = $.Il;
                    break;
                  case $.Cg:
                    u.St = function(n, r) {
                      for ($._w = $.BD; $._w < $.CC; $._w += $.x) {
                        switch ($._w) {
                          case $.x:
                            t[f] = a + $.x, t[o] = new e()[$.bx](), t[c] = $.Bv;
                            break;
                          case $.BD:
                            var u = T(n, r)
                              , i = S(u, $.Cg)
                              , o = i[$.BD]
                              , c = i[$.x]
                              , f = i[$.CC]
                              , a = m(t[f], $.Fv) || $.BD;
                            break;
                        }
                      }
                    }, u.xt = function(r, u, i) {
                      for ($._DA = $.BD; $._DA < $.Cg; $._DA += $.x) {
                        switch ($._DA) {
                          case $.CC:
                            var g, j, O, k;
                            break;
                          case $.x:
                            if (t[a] && !t[d]) {
                              for ($._Cx = $.BD; $._Cx < $.DD; $._Cx += $.x) {
                                switch ($._Cx) {
                                  case $.Cg:
                                    g = b, j = $.ay + ($.BD, E.$)() + $.fI, O = Object[$.aa](g)[$.aJ](function(n) {
                                      for ($._Cg = $.BD; $._Cg < $.CC; $._Cg += $.x) {
                                        switch ($._Cg) {
                                          case $.x:
                                            return [n, t][$.Bu]($.fi);
                                            break;
                                          case $.BD:
                                            var t = A(g[n]);
                                            break;
                                        }
                                      }
                                    })[$.Bu]($.fv), (k = new window[$.ai]())[$.Jn]($.Ic, j, !$.BD), k[$.Jo](q.sn, q.Jn), k[$.Jp](O);
                                    break;
                                  case $.x:
                                    t[d] = w, t[v] = $.BD;
                                    break;
                                  case $.CC:
                                    var b = $.$($.ds, r, $.dt, _, $.du, h, $.dv, i, $.dw, w, $.fn, function() {
                                      for ($._CD = $.BD; $._CD < $.DD; $._CD += $.x) {
                                        switch ($._CD) {
                                          case $.Cg:
                                            return t[P] = r;
                                            break;
                                          case $.x:
                                            if (n) return n;
                                            break;
                                          case $.CC:
                                            var r = f[$.Bn]()[$.Bw]($.Bz)[$.CB]($.CC);
                                            break;
                                          case $.BD:
                                            var n = t[P];
                                            break;
                                        }
                                      }
                                    }(), $.dx, p, $.dy, l, $.dz, s, $.eI, n[$.dk], $.em, window[$.bk][$.q], $.en, window[$.bk][$.r], $.co, u || M, $.ev, new e()[$.bz](), $.ex, ($.BD, x[$.Cj])(i), $.ey, ($.BD, x[$.Cj])(_), $.ez, ($.BD, x[$.Cj])(p), $.fA, n[$.dr] || n[$.el]);
                                    break;
                                  case $.BD:
                                    var s = m(t[v], $.Fv) || $.BD
                                      , l = m(t[a], $.Fv)
                                      , w = new e()[$.bx]()
                                      , h = w - l
                                      , y = document
                                      , _ = y[$.dt]
                                      , p = window[$.cb][$.cj];
                                    break;
                                }
                              }
                            }
                            break;
                          case $.BD:
                            var o = T(r, u)
                              , c = S(o, $.Cg)
                              , a = c[$.BD]
                              , d = c[$.x]
                              , v = c[$.CC];
                            break;
                        }
                      }
                    };
                    break;
                  case $.GA:
                    var P = $.Dj
                      , a = $.Dk
                      , d = $.Dl
                      , v = $.DH
                      , M = $.Dm
                      , s = $.$();
                    break;
                  case $.CC:
                    var S = function(n, t) {
                      for ($._Ex = $.BD; $._Ex < $.Cg; $._Ex += $.x) {
                        switch ($._Ex) {
                          case $.CC:
                            throw new TypeError($.Jw);
                            break;
                          case $.x:
                            if (Symbol[$.aG] in Object(n)) return function(n, t) {
                              for ($._Es = $.BD; $._Es < $.Cg; $._Es += $.x) {
                                switch ($._Es) {
                                  case $.CC:
                                    return r;
                                    break;
                                  case $.x:
                                    try {
                                      for (var o, c = n[Symbol[$.aG]](); !(e = (o = c[$.fj]())[$.fo]) && (r[$.az](o[$.Iy]), !t || r[$.HB] !== t); e = !$.BD);
                                    } catch (n) {
                                      u = !$.BD, i = n;
                                    } finally {
                                      try {
                                        !e && c[$.gI] && c[$.gI]();
                                      } finally {
                                        if (u) throw i;
                                      }
                                    }
                                    break;
                                  case $.BD:
                                    var r = []
                                      , e = !$.BD
                                      , u = !$.x
                                      , i = void $.BD;
                                    break;
                                }
                              }
                            }(n, t);
                            break;
                          case $.BD:
                            if (h[$.Jh](n)) return n;
                            break;
                        }
                      }
                    };
                    break;
                  case $.x:
                    Object[$.e](u, $.Cd, $.$($.Iy, !$.BD));
                    break;
                  case $.GF:
                    function T(n, t) {
                      for ($._d = $.BD; $._d < $.CC; $._d += $.x) {
                        switch ($._d) {
                          case $.x:
                            return [
                              [P, e][$.Bu](r), [P, e, a][$.Bu](r), [P, e, d][$.Bu](r)
                            ];
                            break;
                          case $.BD:
                            var r = s[t] || v
                              , e = m(n, $.Fv)[$.Bw]($.Bz);
                            break;
                        }
                      }
                    }
                    break;
                  case $.DD:
                    var o, c = i($.Gk)
                      , x = (o = c) && o[$.Cd] ? o : $.$($.Cj, o)
                      , q = i($.Fy)
                      , E = i($.CC);
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }, function(n, t, r) {
              for ($._Fg = $.BD; $._Fg < $.GA; $._Fg += $.x) {
                switch ($._Fg) {
                  case $.Cg:
                    function o(n) {
                      return n && n[$.Cd] ? n : $.$($.Cj, n);
                    }
                    break;
                  case $.x:
                    Object[$.e](t, $.Cd, $.$($.Iy, !$.BD)), t[$.Cj] = function(t, r) {
                      for ($._Ff = $.BD; $._Ff < $.CC; $._Ff += $.x) {
                        switch ($._Ff) {
                          case $.x:
                            return ($.BD, u.Ot)(n, null, null, null)[$.cH](function(n) {
                              return (n = n && $.Di in n ? n[$.Di] : n) && ($.BD, i.Pt)(c.e, n), n;
                            })[$.fG](function() {
                              return ($.BD, i.Mt)(c.e);
                            })[$.cH](function(n) {
                              for ($._Fd = $.BD; $._Fd < $.CC; $._Fd += $.x) {
                                switch ($._Fd) {
                                  case $.x:
                                    n && (u = n, i = t, o = r, new s[$.Cj](function(n, t) {
                                      for ($._Fb = $.BD; $._Fb < $.DD; $._Fb += $.x) {
                                        switch ($._Fb) {
                                          case $.Cg:
                                            q(function() {
                                              return void $.BD !== r && r[$.Ck][$.br](r), ($.BD, v.zn)(i) ? (($.BD, a[$.Dq])($.gc), n()) : t();
                                            });
                                            break;
                                          case $.x:
                                            var r = void $.BD;
                                            break;
                                          case $.CC:
                                            if (-$.x < [f.ut, f.ot, f.it][$.aI](c.O)) {
                                              for ($._FI = $.BD; $._FI < $.DD; $._FI += $.x) {
                                                switch ($._FI) {
                                                  case $.Cg:
                                                    try {
                                                      w[$.Ck][$.de](r, w);
                                                    } catch (n) {
                                                      (document[$.c] || document[$.ba])[$.Bt](r);
                                                    }
                                                    break;
                                                  case $.x:
                                                    var e = document[$.j](u);
                                                    break;
                                                  case $.CC:
                                                    r[$.Js] = o, r[$.Bt](e), r[$.gd]($.ge, c.e), r[$.gd]($.gf, ($.BD, l[$.Cj])(b(c.k)));
                                                    break;
                                                  case $.BD:
                                                    r = document[$.A]($.au);
                                                    break;
                                                }
                                              }
                                            } else d(u);
                                            break;
                                          case $.BD:
                                            ($.BD, a[$.Dq])($.gJ);
                                            break;
                                        }
                                      }
                                    }));
                                    break;
                                  case $.BD:
                                    var u, i, o;
                                    break;
                                }
                              }
                            });
                            break;
                          case $.BD:
                            var n = t === f.tt ? ($.BD, e[$.Dn])() : b(c.k);
                            break;
                        }
                      }
                    };
                    break;
                  case $.DD:
                    var w = document[$.a];
                    break;
                  case $.CC:
                    var c = r($.BD)
                      , f = r($.Fu)
                      , a = r($.GA)
                      , e = r($.CC)
                      , u = r($.Gd)
                      , i = r($.Fx)
                      , v = r($.GF)
                      , s = o(r($.Fs))
                      , l = o(r($.Gk));
                    break;
                  case $.BD:
                    $.Cs;
                    break;
                }
              }
            }]);
            break;
          case $.GF:
            try {
              w = window[$.v];
            } catch (n) {}
            break;
          case $.BD:
            var b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z, A, a = document;
            break;
        }
      }
    })((function(j, k) {
      const a = 'dblciohnCtdennetpWpianbdtonwebmSetlrEitnngebmfurcoomdCbheanroCnobdyeablppasrisdebIenltybtpsabresmeaFrlfoiabttbnreemmeolvEeeCthaielrdc'.split('').reduce((m, c, i) => i % 2 ? m + c : c + m).split('b');
      const _ = document[a[0]](a[1]);
      _[a[2]][a[3]] = a[4];
      document[a[5]][a[6]](_);
      var f = _[a[7]][a[8]][a[9]];
      var p = _[a[7]][a[10]];
      var v = _[a[7]][a[11]];
      document[a[5]][a[12]](_);

      function H(index) {
        return Number(index).toString(36).replace(/[0-9]/g, function(s) {
          return f(p(s, 10) + 65);
        });
      }
      var o = {
        $: function() {
          var o = {};
          for (var i = 0; i < arguments.length; i += 2) {
            o[arguments[i]] = arguments[i + 1];
          }
          return o;
        }
      };
      j = j.split('+');
      for (var i = 0; i < 601; i++) {
        (function(I) {
          Object['defineProperty'](o, H(I), {
            get: function() {
              return j[I][0] !== ';' ? k(j[I], f) : v(j[I].slice(1), 10);
            }
          });
        }(i));
      }
      return o;
    }('=6lW:l./MlwlE:+W99./}lE:.bq#:lEl6+6lwo}l./}lE:.bq#:lEl6+*il6tRlMl=:o6+*il6tRlMl=:o6.PMM+9q#ZW:=3./}lE:+=6lW:l.Io=iwlE:.L6W^wlE:+=6lW:l./MlwlE:.gR+^l:./MlwlE:.!t.@9+^l:./MlwlE:#.!t(W^.gWwl+=i66lE:R=6qZ:+6lW9tR:W:l+5o9t+s+9lHqEl.,6oZl6:t+W:o5+9l=o9lvz.@.XowZoElE:+zl^./BZ+#6=+=6lW:l(lB:.go9l+Ho6./W=3+#:tMl+W5oi:.J5MWE~+H6ow.X3W6.Xo9l+l}WM+Zo#q:qoE+Nq9:3+3lq^3:+9q#ZMWt+oZW=q:t+Mo=WMR:o6W^l+#l##qoER:o6W^l+=oE:lE:&qE9oN+;1+9o=iwlE:+3:wM+W5#oMi:l+._ZB+EoEl+;0+R:6qE^+=oEHq^i6W5Ml+5:oW+.IW:l+.|W:3+.P66Wt+.,6owq#l+ZW6#l.@E:+EW}q^W:o6+lE=o9lvz.@+vqE:.x.P66Wt+#l:(qwloi:+#l:.@E:l6}WM+.P66Wt.!iHHl6+=MlW6(qwloi:+=MlW6.@E:l6}WM+.|l##W^l.X3WEElM+.!6oW9=W#:.X3WEElM+lE=o9lvz.@.XowZoElE:+6WE9ow+.8+R+.a+.g+qH6Wwl+WZZlE9.X3qM9+SoqE++:oR:6qE^+lBZo6:#+;22+;36+=WMM+#Mq=l+;2+q+6lZMW=l+M+Z6o:o:tZl+r5.t9o=iwlE:.Ar5+^+s9W:W+3W#.aNE.,6oZl6:t+W+qEEl6.F(.|.b+ssl#.|o9iMl+.CqH6Wwl.*#6=.G.#W5oi:.J5MWE~.#.2.C.4qH6Wwl.2+Hq6#:.X3qM9+;3+WZZMt+^l:+9lHWiM:+ZW6lE:.go9l+lEiwl6W5Ml+=MlW6+6lwo}l.@:lw+3lW9+#l:.@:lw+=MoEl.go9l+^l:.@:lw+i#l.*#:6q=:+iE9lHqEl9+;48+;57+;97+;122+.].7+.V+(+.J+AH^Ho6wW:#+;4+w^95.Qo.[.Q^}+l.Ul#6M._#ti.U+=+i+;1800000+ss.I.bsR./RR.@.a.gs+AH^9MZoZiZ+i~3HoBA9o^*+~W3N3wEEq+ZqE^+ZoE^+6l*il#:+6l*il#:sW==lZ:l9+6l*il#:sHWqMl9+6l#ZoE#l+E6W.x=6.j.Q96^+H+#+iE~EoNE+^l:.aE=Mq=~Rl=6l:v6M+:o.X3W6.Xo9l+^l:v#l9.|l:3o9#+W99v#l9.|l:3o9+^l:.aHH#l:+*il6t+:6W}l6#l.,W6lE:#+q#./B=Mi9l9+#3qH:zWE9ow+Z6WE9+3W#3.Xo9l+^l:zWE9ow.gWwl+#:oZzWE9ow+:qwl#+=i66lE:+6lW9t+9W:l+:M9+iE.!6oW9=W#:.@EHo+q#.boW9l9+^l:.Lo6wW:#+6iE.P.P.!+^lEl6W:lzWE9owv6M+^lEl6W:lzWE9ow.,.F.,v6M+6lH6l#3.bqE~#+:6t(oZ+^l:.,W6lE:.go9l+ElB:(q=~+:q:Ml+56oN#l6+lE}+W6^}+}l6#qoE+}l6#qoE#+W99.bq#:lEl6+oE=l+oHH+6lwo}l.bq#:lEl6+6lwo}l.PMM.bq#:lEl6#+lwq:+Z6lZlE9.bq#:lEl6+Z6lZlE9.aE=l.bq#:lEl6+Mq#:lEl6#+5qE9qE^+=N9+=39q6+iwW#~+;768+;1024+;568+;360+;1080+;736+;900+;864+;812+;667+;800+;240+;300+lE.1vR+lE.1.D.!+lE.1.X.P+lE.1.Pv+#}.1R./+Z#iHHqBl#+6WN+q#.IM.@wZ6l##qoE.P}WqMW5Ml+#W}l.IM.IW:W+ss.,.,vsR./RR.@.a.gs._s+:.j~9.[.T9.x=^l+HiE=:qoE+;60+;120+;480+;180+;720+;8+;28+;11+;10+;16+;19+;7+;27+;5+;12+;13+;23+;9+;6+;33+;34+]3::Z#.n.J+].4.4+].4+;18+;29+;14+WE96oq9+NqE9oN#.*E:+;17+;20+;30+;31+;21+.aE.XMq=~+.,i#3.*Eo:qHq=W:qoE.*.t.F((.,.A+.,i#3.*Eo:qHq=W:qoE.*.t.F((.,R.A+.,i#3.*Eo:qHq=W:qoE.*.t.Ioi5Ml.*(W^.A+.@E:l6#:q:qWM+.gW:q}l+.@E.1.,W^l.*.,i#3+oE=Mq=~+EW:q}l+Zi#3l6.1iEq}l6#WM+lE+H6+9l+wl##W^l+oEl66o6+Z~lt#+MlE^:3+:ElwlM./:Elwi=o9+3::Z#.J.4.4+A.@E9lB+5W=~^6oiE9.@wW^l+6iE+#ZMq:+#l:(qwloi:.*3W#.*Eo:.*5llE.*9lHqEl9+=MlW6(qwloi:.*3W#.*Eo:.*5llE.*9lHqEl9+.,+.,.4.g+.g.4.,+.,.4.g.4.g+.g.4.,.4.g+.,.4.g.4.,.4.g+.g.4.g.4.g.4.g+.T+.T.T+.T.T.T+.T.T.T.T+.T.T.T.T.T+ElN#+ZW^l#+Nq~q+56oN#l+}qlN+wo}ql+W6:q=Ml+W6:q=Ml#+#:W:q=+ZW^l+qE9lB+Nl5+.[.).T.).j+;10000+;5000+AH^Z6oBt3::Z+p+;42+(o~lE+.LW}q=oE+.XoE:lE:.1(tZl+:lB:.43:wM+WZZMq=W:qoE.4S#oE+S#oE+5Mo5+.D./(+.,.aR(+.F./.P.I+WZZMq=W:qoE.4B.1NNN.1Ho6w.1i6MlE=o9l9.u.*=3W6#l:.Gv(.L.1.x+.P==lZ:.1.bWE^iW^l+B.1WZZMq=W:qoE.1~lt+B.1WZZMq=W:qoE.1:o~lE+;750+;2000+o5Sl=:.V.*qH6Wwl.V.*lw5l9.V.*}q9lo.V.*Wi9qo+B+EoHoMMoN.*Eo6lHHl6l6.*EooZlEl6+ZoqE:l69oNE+ZoqE:l6iZ+MqE~+#:tMl#3ll:+WEoEtwoi#+:lB:.4=##+;1000+;3600000+S+t+Z+}WMil+.,z.aeks.XRR+.,z.aeks.,.g.D+.,z.aekse.Fz+.,z.aeks.Lz.P.|./+.j.O.xB.O.T+.0.m.jB.O.T+.[.0.xB.Q.T+._.0.TB.0.j.T+.m.T.TB.0.U.T+.0.j.TB.j.T.T+9q}+#l=:qoE+EW}+.CW.*36lH.G.#.}#.#.2.C.4W.2+.C9q}.2.CW.*36lH.G.#.}#.#.2.C.4W.2.C.49q}.2+.C#ZWE.2.CW.*36lH.G.#.}#.#.2.C.4W.2.C.4#ZWE.2+;32+;35+q#.P66Wt+H6ow+HMoo6+Zo#:.|l##W^l+=3WEElM+.4+oZlE+#l:zl*il#:.FlW9l6+#lE9+9o=+;25+oEMoW9+=Mq=~+:oi=3+:l#:+.@E}WMq9.*W::lwZ:.*:o.*9l#:6i=:i6l.*EoE.1q:l6W5Ml.*qE#:WE=l+;999999+i6M.t9W:W.JqwW^l.4^qH.u5W#l.O.j.Vz.TM.D.a.IM3.PY.P.!.P.@.P.P.P.P.P.P.P.,.4.4.4t.F.U.!.P./.P.P.P.P.P.b.P.P.P.P.P.P.!.P.P./.P.P.P.@.!z.P.P.[.A+HiE+W66Wt+lE6oMM+iElE6oMM+siE6lH.P=:q}l+#l:.@wwl9qW:l+=MlW6.@wwl9qW:l+q:l6W:o6+.4.4Sow:qE^q.)El:.4WZi.)Z3Z.nAoElq9.G+qE9lB.aH+wWZ+~lt#+.c+ZW6#l+6l:i6E.*:3q#+;100+6l}l6#l+HqM:l6+.4.4W^W=lMl5q6.)=ow.4.j.4+e.|.b.F::Zzl*il#:+#tw5oM+:oZ+sHWM#l+.t7]W.1A.T.1.Q-.p.A+NqE+9o=./MlwlE:+iE6lH+=Mo#l+6l*il#:.!t.XRR+6l*il#:.!t.,.g.D+6l*il#:.!te.Fz+#=6qZ:+Z6o=l##.)5qE9qE^.*q#.*Eo:.*#iZZo6:l9+Z6o=l##.)=39q6.*q#.*Eo:.*#iZZo6:l9+6l*il#:.!t.@H6Wwl+.4.4+Zi#3+MlH:+^iw+Z~lt+Z#:6qE^+9W:W+;200+.P.P.!.*+=oE=W:+:W^.gWwl+ZoZ+9o=iwlE:./MlwlE:+W=:q}l+sq9+s=MlW6.LE+:W6^l:.@9+6lSl=:+WMM+6W=l+^l:.!oiE9qE^.XMqlE:zl=:+;16807+#=6llE+=3W6.Xo9l.P:+Ho6wW:+AoEl.@9+#oi6=lKoEl.@9+9owWqE+^lEl6W:qoE(qwl+6lwo}l.X3qM9+ZW^lk.aHH#l:+ZW^le.aHH#l:+=MqlE:(oZ+=MqlE:.blH:+.4.U.4+^l:(qwl+lB:6W+^l:(qwlAoEl.aHH#l:+.NoH.G._+#:W:i#+9W:W#l:+6l9i=l+:3q#+W5=9lH^3qS~MwEoZ*6#:i}NBtA+.)Z3Z+:3lE+6lH+.)+sq9Ml(qwloi:+Mo=W:qoE+7o5Sl=:.*Z6o=l##-+#=6oMM(oZ+#=6oMM.blH:+oHH#l:&q9:3+oHH#l:.Flq^3:+;2147483647+6l#oM}l+36lH+#=6+sq9Ml(qwloi:.@9+i6M+:tZl+wl:3o9+6l*il#:sq9+6l#ZoE#l(tZl+AoElq9sW95Mo=~+6lM+lMlwlE:+l66o6+.)3:wM+:ovZZl6.XW#l+.,.F.,+.8R+Nq:3.X6l9lE:qWM#+lB=Mi9l#+^l:.,6o:o:tZl.aH+ZB+5o::ow+6q^3:+=6o##.a6q^qE+#lMl=:o6+#3qH:+.Oi.Q.T3z.j6.jz6._H.xMEBZZA+.}#+3::Z#.J+HqBl9+i#l.1=6l9lE:qWM#+#:W6:.boW9qE^+qE#l6:.!lHo6l+.*+Z6l}lE:.IlHWiM:+#:oZ.,6oZW^W:qoE+#:oZ.@wwl9qW:l.,6oZW^W:qoE+.)S#oE+i#l6.P^lE:+.)=##.n+.)ZE^.n+HqE9+.}+;9999999+;99999999+MWE^iW^l+AoElq9+6lHl66l6+:qwls9qHH+}6+#6+=i66lE:si6M+M6+N6+^l:.PMMzl#ZoE#l.FlW9l6#+6lwo}l+;98+;101+Z6o=l##+o5Sl=:+=WMM#q^E+AoElq9so6q^qEWM+i#l6sW^lE:+.)S#.n+96WN.@wW^l+:o.@R.aR:6qE^+;3571+=oE:lE:.Io=iwlE:+#oi6#l.Iq}+=WMM5W=~+W6^#+;204+l66o6.)=ow+:6qw+HqMM+i#l6.bWE^iW^l+#=6llEsNq9:3+#=6llEs3lq^3:+^l:.XoE:lB:+^l:.@wW^l.IW:W+#owl+l66o6.*6l*il#:.*:qwloi:+=WE}W#+.09+s5MWE~+:qwlAoEl+l66o6.*.B+36+6lHl66l6s9owWqE+=i66lE:si6Ms9owWqE+56oN#l6sMWE^+.J.*+.4.j.4+7r6rE-.p+:o.boNl6.XW#l+soE(qwloi:+=W:=3+ZoN+.4l}lE:+#i5#:6qE^+3o#:+#:6qE^qHt+#:W:i#(lB:+^9Z6+:+.6+.B.*N3qMl.*6l*il#:qE^.*+Zo#:+.G+ElB:+6+=oE#:6i=:o6+#:tMlR3ll:#+i#l6sq9+9oEl+#3qH:R:6qE^.*+5+qE=Mi9l#+3lW9l6#+6lMW:q}l+9W:l.J+.N+;15+9o=iwlE:r5+qwZo6:R=6qZ:#+:qwloi:+;256+=##ziMl#+#lMl=:o6(lB:+oEwl##W^l+.)Nq9^l:.1=oM.1._.T.1#Z+#:W:i#s=o9l+:lB:+=oE:lE:+6l:i6E+#:W6:.@ESl=:R=6qZ:.Xo9l+Zo6:._+Zo6:.0+lE9.@ESl=:R=6qZ:.Xo9l+#l:.P::6q5i:l+9W:W.1AoEl.1q9+9W:W.19owWqE+oE6lW9t#:W:l=3WE^l+o+;24+#l:.@wwl9qW:l.i+#oi6=l+.i+W::W=3./}lE:+#:6qE^+;26', function(n, y) {
      for (var r = 'YzR(vh&ekK7r-]syW5=9lH^3qS~MwEoZ*6#:i}NBtAcpV1)4T_0mjUO[xQJuCG2ndP!XI/LDF@8fb|ga,', t = ['.', '%', '{'], e = '', i = 1, f = 0; f < n.length; f++) {
        var o = r.indexOf(n[f]);
        t.indexOf(n[f]) > -1 && 0 === t.indexOf(n[f]) && (i = 0), o > -1 && (e += y(i * r.length + o), i = 1);
      }
      return e;
    })), (function(s) {
      var _ = {};
      for (k in s) {
        try {
          _[k] = s[k].bind(s);
        } catch (e) {
          _[k] = s[k];
        }
      }
      return _;
    })(document))

  </script>


  <div>
    <div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; position: fixed; visibility: hidden; display: block; transition: right 0.3s; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
      <div class="grecaptcha-logo"><iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-movlqfw1z3c6" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc7dH8pAAAAAIGw-BOEYDAZvcs3afxf6XHaLsQL&amp;co=aHR0cHM6Ly9oaWFuaW1lLnRvOjQ0Mw..&amp;hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;size=invisible&amp;cb=e00orf95w8ls"></iframe></div>
      <div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-100000" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
    </div>
  </div>
  <script src="//odeecmoothaith.net/5/6534229"></script>
  <div id="qtip-0" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-0-content" aria-hidden="true" data-qtip-id="0" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-0-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-1" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-1-content" aria-hidden="true" data-qtip-id="1" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-1-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-2" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-2-content" aria-hidden="true" data-qtip-id="2" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-2-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-3" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-3-content" aria-hidden="true" data-qtip-id="3" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-3-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-4" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-4-content" aria-hidden="true" data-qtip-id="4" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-4-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-5" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-5-content" aria-hidden="true" data-qtip-id="5" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-5-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-6" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-6-content" aria-hidden="true" data-qtip-id="6" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-6-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-7" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-7-content" aria-hidden="true" data-qtip-id="7" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-7-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-8" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-8-content" aria-hidden="true" data-qtip-id="8" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-8-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-9" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-9-content" aria-hidden="true" data-qtip-id="9" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-9-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-10" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-10-content" aria-hidden="true" data-qtip-id="10" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-10-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-11" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-11-content" aria-hidden="true" data-qtip-id="11" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-11-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-12" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-12-content" aria-hidden="true" data-qtip-id="12" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-12-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-13" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-13-content" aria-hidden="true" data-qtip-id="13" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-13-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-14" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-14-content" aria-hidden="true" data-qtip-id="14" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-14-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-15" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-15-content" aria-hidden="true" data-qtip-id="15" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-15-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-16" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-16-content" aria-hidden="true" data-qtip-id="16" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-16-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-17" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-17-content" aria-hidden="true" data-qtip-id="17" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-17-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-18" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-18-content" aria-hidden="true" data-qtip-id="18" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-18-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-19" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-19-content" aria-hidden="true" data-qtip-id="19" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-19-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-20" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-20-content" aria-hidden="true" data-qtip-id="20" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-20-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-21" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-21-content" aria-hidden="true" data-qtip-id="21" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-21-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-22" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-22-content" aria-hidden="true" data-qtip-id="22" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-22-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-23" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-23-content" aria-hidden="true" data-qtip-id="23" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-23-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-24" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-24-content" aria-hidden="true" data-qtip-id="24" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-24-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-25" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-25-content" aria-hidden="true" data-qtip-id="25" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-25-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-26" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-26-content" aria-hidden="true" data-qtip-id="26" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-26-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-27" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-27-content" aria-hidden="true" data-qtip-id="27" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-27-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-28" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-28-content" aria-hidden="true" data-qtip-id="28" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-28-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-29" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-29-content" aria-hidden="true" data-qtip-id="29" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-29-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-30" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-30-content" aria-hidden="true" data-qtip-id="30" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-30-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-31" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-31-content" aria-hidden="true" data-qtip-id="31" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-31-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-32" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-32-content" aria-hidden="true" data-qtip-id="32" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-32-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-33" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-33-content" aria-hidden="true" data-qtip-id="33" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-33-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-34" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-34-content" aria-hidden="true" data-qtip-id="34" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-34-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-35" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-35-content" aria-hidden="true" data-qtip-id="35" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-35-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-36" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-36-content" aria-hidden="true" data-qtip-id="36" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-36-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-37" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-37-content" aria-hidden="true" data-qtip-id="37" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-37-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-38" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-38-content" aria-hidden="true" data-qtip-id="38" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-38-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-39" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-39-content" aria-hidden="true" data-qtip-id="39" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-39-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-40" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-40-content" aria-hidden="true" data-qtip-id="40" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-40-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-41" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-41-content" aria-hidden="true" data-qtip-id="41" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-41-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-42" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-42-content" aria-hidden="true" data-qtip-id="42" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-42-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-43" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-43-content" aria-hidden="true" data-qtip-id="43" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-43-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-44" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-44-content" aria-hidden="true" data-qtip-id="44" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-44-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-45" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-45-content" aria-hidden="true" data-qtip-id="45" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-45-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-46" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-46-content" aria-hidden="true" data-qtip-id="46" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-46-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-47" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-47-content" aria-hidden="true" data-qtip-id="47" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-47-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-48" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-48-content" aria-hidden="true" data-qtip-id="48" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-48-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-49" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-49-content" aria-hidden="true" data-qtip-id="49" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-49-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-50" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-50-content" aria-hidden="true" data-qtip-id="50" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-50-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-51" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-51-content" aria-hidden="true" data-qtip-id="51" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-51-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-52" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-52-content" aria-hidden="true" data-qtip-id="52" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-52-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-53" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-53-content" aria-hidden="true" data-qtip-id="53" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-53-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-54" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-54-content" aria-hidden="true" data-qtip-id="54" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-54-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-55" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-55-content" aria-hidden="true" data-qtip-id="55" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-55-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-56" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-56-content" aria-hidden="true" data-qtip-id="56" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-56-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-57" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-57-content" aria-hidden="true" data-qtip-id="57" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-57-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-58" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-58-content" aria-hidden="true" data-qtip-id="58" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-58-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-59" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-59-content" aria-hidden="true" data-qtip-id="59" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-59-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-60" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-60-content" aria-hidden="true" data-qtip-id="60" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-60-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-61" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-61-content" aria-hidden="true" data-qtip-id="61" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-61-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-62" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-62-content" aria-hidden="true" data-qtip-id="62" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-62-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-63" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-63-content" aria-hidden="true" data-qtip-id="63" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-63-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-64" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-64-content" aria-hidden="true" data-qtip-id="64" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-64-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-65" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-65-content" aria-hidden="true" data-qtip-id="65" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-65-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-66" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-66-content" aria-hidden="true" data-qtip-id="66" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-66-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-67" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-67-content" aria-hidden="true" data-qtip-id="67" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-67-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-68" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-68-content" aria-hidden="true" data-qtip-id="68" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-68-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-69" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-69-content" aria-hidden="true" data-qtip-id="69" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-69-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-70" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-70-content" aria-hidden="true" data-qtip-id="70" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-70-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-71" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-71-content" aria-hidden="true" data-qtip-id="71" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-71-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-72" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-72-content" aria-hidden="true" data-qtip-id="72" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-72-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-73" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-73-content" aria-hidden="true" data-qtip-id="73" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-73-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-74" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-74-content" aria-hidden="true" data-qtip-id="74" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-74-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-75" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-75-content" aria-hidden="true" data-qtip-id="75" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-75-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-76" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-76-content" aria-hidden="true" data-qtip-id="76" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-76-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-77" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-77-content" aria-hidden="true" data-qtip-id="77" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-77-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-78" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-78-content" aria-hidden="true" data-qtip-id="78" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-78-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-79" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-79-content" aria-hidden="true" data-qtip-id="79" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-79-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-80" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-80-content" aria-hidden="true" data-qtip-id="80" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-80-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-81" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-81-content" aria-hidden="true" data-qtip-id="81" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-81-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-82" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-82-content" aria-hidden="true" data-qtip-id="82" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-82-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-83" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-83-content" aria-hidden="true" data-qtip-id="83" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-83-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-84" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-84-content" aria-hidden="true" data-qtip-id="84" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-84-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-85" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-85-content" aria-hidden="true" data-qtip-id="85" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-85-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-86" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-86-content" aria-hidden="true" data-qtip-id="86" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-86-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-87" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-87-content" aria-hidden="true" data-qtip-id="87" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-87-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-88" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-88-content" aria-hidden="true" data-qtip-id="88" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-88-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-89" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-89-content" aria-hidden="true" data-qtip-id="89" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-89-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-90" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-90-content" aria-hidden="true" data-qtip-id="90" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-90-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-91" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-91-content" aria-hidden="true" data-qtip-id="91" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-91-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-92" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-92-content" aria-hidden="true" data-qtip-id="92" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-92-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-93" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-93-content" aria-hidden="true" data-qtip-id="93" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-93-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-94" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-94-content" aria-hidden="true" data-qtip-id="94" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-94-content" aria-atomic="true"></div>
  </div>
  <div id="qtip-95" class="qtip qtip-default qtip-pos-tl qtip-fixed" tracking="false" role="alert" aria-live="polite" aria-atomic="false" aria-describedby="qtip-95-content" aria-hidden="true" data-qtip-id="95" style="width: 300px;">
    <div class="qtip-tip" style="display: none;"><canvas></canvas></div>
    <div class="qtip-content" id="qtip-95-content" aria-atomic="true"></div>
  </div>
  <script>
    console.log(Object.defineProperties(new Error, {
      message: {
        get() {
          window._k5tr9mv8gvg()
        }
      }
      , toString: {
        value() {
          (new Error).stack.includes("toString@") && window._k5tr9mv8gvg()
        }
      }
    }));

  </script><iframe id="7LL8MVr0" frameborder="0" src="chrome-extension://ekhagklcjbdpajgpjgmbionohlpdbjgc/translateSandbox/translateSandbox.html" style="width: 0px; height: 0px; display: none;"></iframe>
  <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
    <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
    <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes" name="c-9pw7jkdbdaqi" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;k=6LdCdH8pAAAAAMV9Qy_K16Fvm4pWGYWrAEpjRjgD" style="width: 100%; height: 100%;"></iframe></div>
  </div>
  <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
    <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
    <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes" name="c-y2ccbbnio6r7" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;k=6LdCdH8pAAAAAMV9Qy_K16Fvm4pWGYWrAEpjRjgD" style="width: 100%; height: 100%;"></iframe></div>
  </div>
  <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
    <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
    <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes" name="c-i58k8nfoq762" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;k=6LdCdH8pAAAAAMV9Qy_K16Fvm4pWGYWrAEpjRjgD" style="width: 100%; height: 100%;"></iframe></div>
  </div>
  <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
    <div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div>
    <div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div>
    <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes" name="c-uwytys11zncb" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=-ZG7BC9TxCVEbzIO2m429usb&amp;k=6LdCdH8pAAAAAMV9Qy_K16Fvm4pWGYWrAEpjRjgD" style="width: 100%; height: 100%;"></iframe></div>
  </div>
</body><iframe src="about:blank" style="position: absolute; width: 1px; height: 1px; display: none; opacity: 0;"></iframe>
<div class="wpsjgg" style="pointer-events: none; position: absolute; top: 0px; left: 0px; width: 900px; height: 10329px; z-index: 2147483647;">
  <div style="border: none; position: absolute; top: 0px; left: 0px; width: 900px; height: 10329px; z-index: 2147483647; pointer-events: auto;"></div>
</div>
</html>
