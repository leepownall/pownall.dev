<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Leshkens\LaravelReadTime\Facades\ReadTime;

class ViewController extends Controller
{
    public function __invoke(Post $post): View
    {
        $readTime = ReadTime::parse($post->content);
        $unit = Str::plural($readTime->unit);
        $readTime = "{$readTime->number} {$unit}";

        return view('post.show', [
            'post' => $post,
            'readTime' => $readTime,
        ]);
    }
}
