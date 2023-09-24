<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use League\CommonMark\ConverterInterface;

class ViewController extends Controller
{
    public function __construct(private ConverterInterface $converter)
    {

    }

    public function __invoke(Post $post): View
    {
        return view('post.show', [
            'post' => $post,
        ]);
    }
}
