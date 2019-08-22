<?php 
namespace App\Test\Application;

use Liip\FunctionalTestBundle\Test\WebTestCase;
use App\Domain\ValueObject\CommentUpsertedEvent;
use App\Application\AddCommentToDatastoreHandler;

class AddCommentToDatastoreHandlerTest extends WebTestCase 
{
    /** @test */
    public function itHandlersAComment()
    {
        $request = file_get_contents(__DIR__.'/AddCommentToDatastoreHandlerTest/request.json');
        $serializer = self::bootKernel()->getContainer()->get('jms_serializer');
        $event = $serializer->deserialize($request, CommentUpsertedEvent::class, 'json');
        $handler = new AddCommentToDatastoreHandler($serializer);
        $response = $handler->handle($event);
        $this->assertEquals('Oh my test', $response);
    }
    
}