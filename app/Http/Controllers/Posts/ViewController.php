<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ViewController extends Controller
{
    public function __invoke(Request $request): View
    {
        $markdown = Storage::get("posts/{$request->slug}/index.md");

        return view('posts.view')->with('markdown', $markdown);
    }
}
