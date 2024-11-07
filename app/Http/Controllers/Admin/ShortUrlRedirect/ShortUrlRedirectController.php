<?php

namespace App\Http\Controllers\Admin\ShortUrlRedirect;

use App\Http\Controllers\Controller;
use App\Models\ShortUrlRedirect;
use Illuminate\Http\Request;

class ShortUrlRedirectController extends Controller
{
    public function index(Request $request){
        $datas = ShortUrlRedirect::query();

        if ($request->has('search')){
            $datas->where('url', 'like', '%'.$request->search.'%');
        }

        $datas = $datas->orderBy('created_at', 'desc')->paginate(10)->withQueryString();
        return view('admin.pages.short-url-redirect.index', compact('datas'));
    }

    public function store(Request $request){
        $request->validate([
            'code' => 'required|unique:short_urls,code',
            'url' => 'required',
        ]);

        ShortUrlRedirect::create([
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

        ShortUrlRedirect::where('id', $request->id)->update([
            'code' => $request->code,
            'url' => $request->url,
        ]);

        return redirect()->back()->with('success', 'Success update short url');
    }

    public function destroy($id) {
        $shortUrl = ShortUrlRedirect::find($id);

        if (!$shortUrl){
            return redirect()->back()->with('errorr', 'ID not found');
        }

        $shortUrl->delete();

        return redirect()->back()->with('success', 'Success delete data');
    }

    public function switchStatus($id) {
        $shortUrl = ShortUrlRedirect::find($id);

        if (!$shortUrl){
            return redirect()->back()->with('errorr', 'ID not found');
        }

        $shortUrl->status = $shortUrl->status == 'active' ? 'inactive' : 'active';
        $shortUrl->save();

        return redirect()->back()->with('success', 'Success switch status');
    }
}
