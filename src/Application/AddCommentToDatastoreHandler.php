<?php

namespace App\Application;

use App\Domain\Entity\Comment;
use JMS\Serializer\SerializerInterface;
use App\Domain\ValueObject\CommentUpsertedEvent;


class AddCommentToDatastoreHandler
{

    private $serializer;
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function handle(CommentUpsertedEvent $event): bool
    {
        $data = $event->getData();
        $comment = $this->serializer->deserialize($this->serializer->serialize($data, 'json'),
          Comment::class,
          'json'
        );
        
    }
}