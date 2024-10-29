<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\ShortUrl;
use App\Traits\AdsManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    use AdsManager;

    public function index(Request $request) {
        $this->setAds();

        $datas = Film::query();

        if ($request->has('search') && !empty($request->search)) {
            $datas->where('title', 'like', '%' . $request->search . '%');
        }

        $datas = $datas->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        return view('pages.home', compact('datas'));
    }

    public function show(Request $request, $slug){
        $this->setAds();

        $data = Film::where('slug', $slug)->first();

        return view('pages.detail', compact('data'));
    }

    public function makeShortUrl(Request $request) {
        $validate = Validator::make($request->all(), [
            'code' => 'required|unique:short_urls,code',
            'url' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'code' => 400,
                'message' => $validate->errors()->first(),
                'data' => null
            ]);
        }

        $shortUrl = ShortUrl::create([
            'code' => $request->code,
            'url' => $request->url
        ]);

        return response()->json([
            'status' => true,
            'code' => 200,
            'message' => 'Short URL created successfully',
            'data' => $shortUrl
        ]);
    }

    public function shortUrlIndex($code){
        $shortUrl = ShortUrl::where('code', $code)->first();
        $shortUrl->hits += 1;
        $shortUrl->save();

        return redirect()->away($shortUrl->url);
    }
}
