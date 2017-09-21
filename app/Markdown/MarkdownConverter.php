<?php

namespace App\Markdown;

use Illuminate\Support\HtmlString;
use League\CommonMark\Block\Element\Heading;
use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;
use League\CommonMark\Extras\SmartPunct\SmartPunctExtension;
use League\CommonMark\Extras\TwitterHandleAutolink\TwitterHandleAutolinkExtension;
use Webuni\CommonMark\TableExtension\TableExtension;
use AltThree\Emoji\EmojiExtension;


class MarkdownConverter
{
    public static function convert($markdown)
    {
        $environment = Environment::createCommonMarkEnvironment();
        $environment->addBlockRenderer(Heading::class, new HeadingRenderer());

        // ADD YOUR OWN EXTENSIONS HERE. For example:
        $environment->addExtension(new SmartPunctExtension());
        $environment->addExtension(new TwitterHandleAutolinkExtension());
        $environment->addExtension(new TableExtension());
        // $environment->addExtension(new EmojiExtension());

        // Define your configuration:
        $config = [];

        $parser = new DocParser($environment);
        $htmlRenderer = new HtmlRenderer($environment);

        $document = $parser->parse($markdown);

        return new HtmlString(
            $htmlRenderer->renderBlock($document)
        );
    }
}
