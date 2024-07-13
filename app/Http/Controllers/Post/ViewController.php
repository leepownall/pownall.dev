<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use Pownall\ReadTime\ReadTime;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\CommonMark\Node\Block\FencedCode;
use League\CommonMark\MarkdownConverter;
use Tempest\Highlight\CommonMark\CodeBlockRenderer;
use Tempest\Highlight\CommonMark\InlineCodeBlockRenderer;

class ViewController extends Controller
{
    public function __invoke(Post $post): View
    {
        $readTime = (new ReadTime($post->content))->get();

        $environment = new Environment();

        $environment
            ->addExtension(new CommonMarkCoreExtension())
            ->addRenderer(FencedCode::class, new CodeBlockRenderer())
            ->addRenderer(Code::class, new InlineCodeBlockRenderer());

        $markdown = new MarkdownConverter($environment);

        $content = $markdown->convert($post->content)->getContent();

        return view('post.show', [
            'post' => $post,
            'content' => $content,
            'readTime' => $readTime,
        ]);
    }
}
