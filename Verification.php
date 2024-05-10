<?php

trait Verification
{
    public function getTitle(): string
    {
        if (strlen($this->title) < 4) {
            throw new Exception("Title must be at least 4 characters long");
        }
        return $this->title;
    }

    public function getContent(): string
    {
        if (empty($this->content)) {
            throw new Exception("Content cannot be empty");
        }
        return $this->content;
    }
}