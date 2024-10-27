<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head')

  <style>
    /* Gaya untuk pop-up */
    .copy-popup {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        border-radius: 5px;
        font-size: 14px;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1000;
    }

    .copy-popup.show {
        display: block;
        opacity: 1;
    }
    </style>
</head>

<body>
  @include('layouts.sidebar')
  <div id="wrapper">
    @include('layouts.header')
    <div class="clearfix"></div>
    <div id="main-wrapper">
      <div class="container">
        @if(!$data)
            <div class="alert alert-danger" role="alert">
            Data not found!
            </div>
        @else
            <div id="main-wrapper" class="layout-page layout-page-detail layout-page-watchtv">
            <div id="ani_detail">
                <div class="ani_detail-stage">
                <div class="container">
                    <div class="anis-cover-wrap">
                    <div class="anis-cover" style="background-image: url(https://cdn.noitatnemucod.net/thumbnail/300x400/100/a41d2b49f816b8e0971957b7779d3e43.jpg)">
                    </div>
                    </div>
                    <div class="anis-watch-wrap">
                    <div class="anis-watch anis-watch-tv">
                        <div class="watch-player">
                        <div class="player-frame">
                            <div class="loading-relative loading-box" id="embed-loading">
                            <div class="loading">
                                <div class="span1"></div>
                                <div class="span2"></div>
                                <div class="span3"></div>
                            </div>
                            </div>
                            <iframe id="iframe-embed" src="{{ $data->path_src_vidio }}" frameborder="0" referrerpolicy="strict-origin" allow="autoplay; fullscreen; geolocation; display-capture; picture-in-picture" webkitallowfullscreen mozallowfullscreen></iframe>
                        </div>
                        </div>
                    </div>
                    <div class="anis-watch-detail">
                        <div class="anis-content">
                        <div class="anisc-poster">
                            <div class="film-poster">

                            <img src="{{ $data->path_thumbnail }}" class="film-poster-img" alt="Vermeil in Gold">
                            </div>
                        </div>
                        <div class="anisc-detail">
                            <h2 class="film-name">
                            <a href="#" class="text-white dynamic-name" title="Vermeil in Gold" data-jname="{{ $data->title }}">{{ $data->title }}</a>
                            </h2>
                            <div class="film-stats">
                            <div class="tick">
                                <span class="item">{{ $data->total_minute }}m</span>
                                <div class="clearfix"></div>
                            </div>
                            </div>
                            <div class="film-description m-hide">
                            <div class="text">
                                {{ $data->description }}
                            </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="share-buttons share-buttons-detail">
                <div class="container">
                <div class="share-buttons-block">
                    <div class="share-icon"></div>
                    <div class="sbb-title mr-3">
                        <span>Share Film</span>
                        <p class="mb-0">to your friends</p>
                        <div class="share-buttons-list d-flex" style="gap: 10px">
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('detail', $data->slug) }}" target="_blank" class="share-button share-facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ route('detail', $data->slug) }}" target="_blank" class="share-button share-twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('detail', $data->slug) }}" target="_blank" class="share-button share-linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://wa.me/?text={{ route('detail', $data->slug) }}" target="_blank" class="share-button share-whatsapp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://t.me/share/url?url={{ route('detail', $data->slug) }}" target="_blank" class="share-button share-telegram">
                                <i class="fab fa-telegram-plane"></i>
                            </a>
                            <a href="javascript:void(0);" onclick="copyLink()" class="share-button share-link">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                    {{-- shere buttons --}}
                    <div class="clearfix"></div>
                </div>
                </div>
            </div>
            </div>
        @endif
      </div>
    </div>

    <div id="copy-popup" class="copy-popup">Url has been copied!</div>

    @include('layouts.footer')

  </div>
  @include('layouts.pre-modal')
  @include('layouts.script')

  @include('components.ads.refresh-page-ads')
  @include('components.ads/static-ads')
  @include('components.ads/every-minute-ads')

  <script>
    function copyLink() {
        // Salin link ke clipboard
        navigator.clipboard.writeText("{{ route('detail', $data->slug) }}")
            .then(() => {
                // Tampilkan pop-up notifikasi
                const popup = document.getElementById("copy-popup");
                popup.classList.add("show");

                // Sembunyikan pop-up setelah 2 detik
                setTimeout(() => {
                    popup.classList.remove("show");
                }, 2000);
            })
            .catch(err => {
                console.error("Gagal menyalin link:", err);
            });
    }
    </script>
</body>

</html>
