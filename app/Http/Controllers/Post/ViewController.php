<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Leshkens\LaravelReadTime\Facades\ReadTime;

class ViewController extends Controller
{
    public function __invoke(Post $post): View
    {
        $readTime = ReadTime::parse($post->content);
        $readTime = "{$readTime->number} {$readTime->unit} read time";

        return view('post.show', [
            'post' => $post,
            'readTime' => $readTime,
        ]);
    }
}
