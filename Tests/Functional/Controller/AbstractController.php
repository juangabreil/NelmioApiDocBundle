<?php


namespace Nelmio\ApiDocBundle\Tests\Functional\Controller;
use OpenApi\Annotations as OA;
use Symfony\Component\Routing\Annotation\Route;

abstract class AbstractController
{
    /**
     * @OA\Response(
     *     response="200",
     *     description="Test"
     * )
     * @Route("/test/", methods={"GET"})
     */
    public function testAction()
    {
    }
}
