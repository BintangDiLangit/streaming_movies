<?php

namespace App\Http\Controllers\Admin\Ads;

use App\Helpers\StoreHelper;
use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index()
    {
        $ads = Ads::first();
        return view('admin.pages.ads.edit', compact('ads'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'refresh_page_ads_status' => 'required|string|in:on,off',
            'refresh_page_ads_image_url' => 'nullable|file|image|mimes:png,jpg,jpeg',
            'refresh_page_ads_redirect_url' => 'required|string|url',

            'refresh_page_ads_status_2' => 'required|string|in:on,off',
            'refresh_page_ads_image_url_2' => 'nullable|file|image|mimes:png,jpg,jpeg',
            'refresh_page_ads_redirect_url_2' => 'required|string|url',

            'minute_ads_status' => 'required|string|in:on,off',
            'minute_ads_redirect_url' => 'required|string|url',
            'minute_ads_interval' => 'required|min:1',

            'static_ads_status' => 'required|string|in:on,off',
            'static_ads_image_url' => 'nullable|file|image|mimes:png,jpg,jpeg',
            'static_ads_redirect_url' => 'required|string|url',
        ]);

        $ads = Ads::first();
        if ($ads) {
            $ads->refresh_page_ads_image_url = $request->refresh_page_ads_image_url ? StoreHelper::store($request->file('refresh_page_ads_image_url'), 'ads') : $ads->refresh_page_ads_image_url;
            $ads->refresh_page_ads_redirect_url = $request->refresh_page_ads_redirect_url;
            $ads->refresh_page_ads_status = $request->refresh_page_ads_status;

            $ads->refresh_page_ads_image_url_2 = $request->refresh_page_ads_image_url_2 ? StoreHelper::store($request->file('refresh_page_ads_image_url_2'), 'ads') : $ads->refresh_page_ads_image_url_2;
            $ads->refresh_page_ads_redirect_url_2 = $request->refresh_page_ads_redirect_url_2;
            $ads->refresh_page_ads_status_2 = $request->refresh_page_ads_status_2;

            $ads->minute_ads_status = $request->minute_ads_status;
            $ads->minute_ads_redirect_url = $request->minute_ads_redirect_url;
            $ads->minute_ads_interval = $request->minute_ads_interval;

            $ads->static_ads_status = $request->static_ads_status;
            $ads->static_ads_image_url = $request->static_ads_image_url ? StoreHelper::store($request->file('static_ads_image_url'), 'ads') : $ads->static_ads_image_url;
            $ads->static_ads_redirect_url = $request->static_ads_redirect_url;
            $ads->save();
        } else {
            Ads::create([
                'refresh_page_ads_image_url' => $request->refresh_page_ads_image_url ? StoreHelper::store($request->file('refresh_page_ads_image_url'), 'ads') : null,
                'refresh_page_ads_redirect_url' => $request->refresh_page_ads_redirect_url,
                'refresh_page_ads_status' => $request->refresh_page_ads_status,

                'refresh_page_ads_image_url_2' => $request->refresh_page_ads_image_url_2 ? StoreHelper::store($request->file('refresh_page_ads_image_url_2'), 'ads') : null,
                'refresh_page_ads_redirect_url_2' => $request->refresh_page_ads_redirect_url_2,
                'refresh_page_ads_status_2' => $request->refresh_page_ads_status_2,

                'minute_ads_status' => $request->minute_ads_status,
                'minute_ads_redirect_url' => $request->minute_ads_redirect_url,
                'minute_ads_interval' => $request->minute_ads_interval,

                'static_ads_status' => $request->static_ads_status,
                'static_ads_image_url' => $request->static_ads_image_url ? StoreHelper::store($request->file('static_ads_image_url'), 'ads') : null,
                'static_ads_redirect_url' => $request->static_ads_redirect_url,
            ]);
        }

        return redirect()->back()->with('success', 'Ads updated successfully');
    }
}
