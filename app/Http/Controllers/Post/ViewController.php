<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Pownall\ReadTime\ReadTime;

class ViewController extends Controller
{
    public function __invoke(Post $post): View
    {
        $readTime = (new ReadTime($post->content))->get($post->content);

        return view('post.show', [
            'post' => $post,
            'readTime' => $readTime,
        ]);
    }
}
