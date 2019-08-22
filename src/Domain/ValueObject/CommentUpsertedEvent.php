<?php

namespace App\Domain\ValueObject;

class CommentUpsertedEvent
{
   private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }
}