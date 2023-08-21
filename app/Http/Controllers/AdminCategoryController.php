<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        // if (auth()->guest() || auth()->user->username !== 'achmadfm') {
        //     abort(403); // menggunakan method guest()
        // }
        // if (!auth()->check() || auth()->user()->username !== 'achmadfm') {
        //     abort(403); // menggunakan method check()
        // }

        $this->authorize('admin');
        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(category $category)
    {
        //
    }

    public function edit(category $category)
    {
        //
    }

    public function update(Request $request, category $category)
    {
        //
    }

    public function destroy(category $category)
    {
        //
    }
}
