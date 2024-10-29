<?php

namespace App\Http\Controllers\Admin\ShortUrl;

use App\Http\Controllers\Controller;
use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ShortUrlController extends Controller
{
    public function index(Request $request){
        $datas = ShortUrl::query();

        if ($request->has('search')){
            $datas->where('short_url', 'like', '%'.$request->search.'%');
        }

        return view('admin.pages.short-url.index');
    }
}
