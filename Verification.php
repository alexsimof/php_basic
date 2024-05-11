<?php

trait Verification
{
    public function getTitle($title): string
    {
        if (!empty($title)) {
            return $this->title = $title;
        }
        throw new Exception("Title can't be empty");
    }

    public function getContent($content): string
    {
        if (!empty($content)) {
            return $this->content = $content;
        }
        throw new Exception("Content cannot be empty");
    }
}