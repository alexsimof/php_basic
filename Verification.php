<?php

trait Verification
{
    public function getTitle(): string
    {
        if (!empty($this->title)) {
            return $this->title;
        }
        throw new Exception("Title can't be empty");
    }

    public function getContent(): string
    {
        if (empty($this->content)) {
            return $this->content;
        }
        throw new Exception("Content cannot be empty");
    }
}