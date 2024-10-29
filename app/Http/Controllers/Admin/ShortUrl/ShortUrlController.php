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

        $datas = $datas->orderBy('created_at', 'desc')->paginate(10)->withQueryString();
        return view('admin.pages.short-url.index', compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'code' => 'required|unique:short_urls,code',
            'url' => 'required',
        ]);

        ShortUrl::create([
            'code' => $request->code,
            'url' => $request->url,
        ]);

        return redirect()->back()->with('success', 'Success create short url');
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required|exists:short_urls,id',
            'code' => 'required|unique:short_urls,code,' . $request->id . ',id',
            'url' => 'required',
        ]);

        ShortUrl::where('id', $request->id)->update([
            'code' => $request->code,
            'url' => $request->url,
        ]);

        return redirect()->back()->with('success', 'Success update short url');
    }

    public function destroy($id) {
        $shortUrl = ShortUrl::find($id);

        if (!$shortUrl){
            return redirect()->back()->with('errorr', 'ID not found');
        }

        $shortUrl->delete();

        return redirect()->back()->with('success', 'Success delete data');
    }

    public function switchStatus($id) {
        $shortUrl = ShortUrl::find($id);

        if (!$shortUrl){
            return redirect()->back()->with('errorr', 'ID not found');
        }

        $shortUrl->status = $shortUrl->status == 'active' ? 'inactive' : 'active';
        $shortUrl->save();

        return redirect()->back()->with('success', 'Success switch status');
    }
}
