<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use App\Category;

use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function create()
    {
        return view('admin.createCategory');
    }

    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('job.index');
    }
}
