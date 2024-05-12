<?php

class Blog
{
    use Verification;
    private string $title;
    private string $content;

    /**
     * @throws Exception
     */
    public function __construct(string $title, string $content)
    {
        $this->getTitle($title);
        $this->getContent($content);
    }

}