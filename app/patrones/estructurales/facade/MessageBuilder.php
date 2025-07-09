<?php

namespace App\patrones\estructurales\facade;

class MessageBuilder
{
    private $content;

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
