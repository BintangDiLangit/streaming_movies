<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $datas = User::query()->where('role_id', 2);

        if ($request->has('search')) {
            $datas->where('name', 'like', '%' . request('search') . '%');
        }

        $datas = $datas->orderBy('created_at', 'desc')->paginate(5)->withQueryString();
        return view('admin.pages.user.index', compact('datas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 2
        ]);

        return redirect()->back()->with('success', 'User has been created successfully.');
    }

    public function edit($id)
    {
        return view('admin.user.edit', ['id' => $id]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:users,id',
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $request->id . ',id',
            'password' => 'nullable|min:6',
        ]);

        $dataUpdate = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->password) {
            $dataUpdate['password'] = bcrypt($request->password);
        }

        User::where('id', $request->id)->update($dataUpdate);

        return redirect()->back()->with('success', 'User has been updated successfully.');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('success', 'User has been deleted successfully.');
    }
}
