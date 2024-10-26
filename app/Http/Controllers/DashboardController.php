<?php

namespace App\Http\Controllers;

use App\Traits\AdsManager;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use AdsManager;

    public function index(Request $request) {
        $this->everyRefreshPage('on');
        $this->everyMinute('on');
        $this->staticAds('on');

        return view('welcome');
    }

    public function show(Request $request){
        $this->everyRefreshPage('off');
        $this->everyMinute('off');
        $this->staticAds('off');

        return view('pages.detail');
    }
}
