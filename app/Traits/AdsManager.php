<?php

namespace App\Traits;

trait AdsManager
{
    // Function untuk refresh page ads
    public function everyRefreshPage(string $status_refresh_page, string $url_image_refresh_page = '/assets/images/ads/web.png', string $url_redirect_refresh_page = 'https://s.shopee.co.id/5fX5f9LFcb?share_channel_code=2')
    {
        session([
            'refresh_page_ads' => [
                'status' => $status_refresh_page,
                'image_url' => $url_image_refresh_page,
                'redirect_url' => $url_redirect_refresh_page,
                'click_count' => 0, // Untuk melacak jumlah klik pada iklan (reset setiap refresh)
            ]
        ]);
    }

    // Function untuk setiap menit menampilkan ads
    public function everyMinute(string $status_every_minute, string $url_redirect_every_minute = 'https://s.shopee.co.id/5fX5f9LFcb?share_channel_code=2', int $total_every_minute = 1)
    {
        session([
            'minute_ads' => [
                'status' => $status_every_minute,
                'redirect_url' => $url_redirect_every_minute,
                'interval' => $total_every_minute,
                'last_shown' => now()->timestamp // Digunakan untuk melacak kapan iklan terakhir kali ditampilkan
            ]
        ]);
    }

    // Function untuk static ads
    public function staticAds(string $status_static_ads, string $url_image_static_ads = '/assets/images/ads/web.png', string $url_redirect_static_ads = 'https://s.shopee.co.id/5fX5f9LFcb?share_channel_code=2')
    {
        session([
            'static_ads' => [
                'status' => $status_static_ads,
                'image_url' => $url_image_static_ads,
                'redirect_url' => $url_redirect_static_ads
            ]
        ]);
    }

    public function setAllStatus(string $status) {
        $this->everyRefreshPage($status);
        $this->everyMinute($status);
        $this->staticAds($status);
    }
}
