<?php

namespace App\Http\Controllers\Admin\Film;

use App\Helpers\StoreHelper;
use App\Http\Controllers\Controller;
use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        $datas = Film::query();

        if ($request->has('search')) {
            $datas->where('title', 'like', '%' . request('search') . '%');
        }

        $datas = $datas->orderBy('created_at', 'desc')->paginate(5)->withQueryString();
        return view('admin.pages.film.index', compact('datas'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'total_minute' => 'required',
            'path_src_vidio' => 'required',
            'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg|max:20480',
        ]);

        Film::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'total_minute' => $request->total_minute,
            'path_src_vidio' => $request->path_src_vidio,
            'path_thumbnail' => StoreHelper::store($request->file('thumbnail'), 'thumbnails'),
        ]);

        return redirect()->back()->with('success', 'Film created successfully');
    }

    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('admin.pages.film.edit', compact('film'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'total_minute' => 'required',
            'path_src_vidio' => 'required',
            'thumbnail' => 'nullable|file|image|mimes:jpeg,png,jpg|max:20480',
        ]);

        $dataUpdate = [
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'total_minute' => $request->total_minute,
            'path_src_vidio' => $request->path_src_vidio,
        ];

        if ($request->hasFile('thumbnail')) {
            $dataUpdate['path_thumbnail'] = StoreHelper::store($request->file('thumbnail'), 'thumbnails');
        }

        $film = Film::findOrFail($id);
        $film->update($dataUpdate);

        return redirect()->back()->with('success', 'Film updated successfully');
    }

    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect()->back()->with('success', 'Film deleted successfully');
    }
}
