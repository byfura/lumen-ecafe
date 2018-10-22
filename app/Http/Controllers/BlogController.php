<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return response()->json(Blog::all());
    }

    public function view($id)
    {
        return response()->json(Blog::find($id));
    }

    public function create(Request $request)
    {
        $blog = Blog::create($request->all());
        return response()->json($blog, 201);
    }

    public function update($id, Request $request)
    {
        $blog = Blog::findOrFail($id);
        $blog->update($request->all());
        return response()->json($blog, 200);
    }

    public function delete($id)
    {
        Blog::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}