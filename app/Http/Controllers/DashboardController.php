<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Traits\AdsManager;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    use AdsManager;

    public function index(Request $request) {
        $this->setAllStatus('off');

        $datas = Film::query();

        if ($request->has('search') && !empty($request->search)) {
            $datas->where('title', 'like', '%' . $request->search . '%');
        }

        $datas = $datas->orderBy('created_at', 'desc')->paginate(10)->withQueryString();

        return view('pages.home', compact('datas'));
    }

    public function show(Request $request, $slug){
        $this->setAllStatus('off');

        $data = Film::where('slug', $slug)->first();

        return view('pages.detail', compact('data'));
    }
}
