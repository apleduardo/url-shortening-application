<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Psr\Log\LoggerInterface;
use App\Entity\ShortnerUrl;

class ShortnerController extends AbstractController
{
    /**
	 * @var EntityManager
	 */
	private $em;

	public function __construct(EntityManager $em, LoggerInterface $logger)
	{
		$this->em = $em;
        $this->logger = $logger;
	}

    /**
     * @Route("/", name="shortner_url")
     */
    public function redirectToUrl(Request $request)
    {
        try {
            $routeParameters = $request
            ->attributes
            ->get('_route_params');

            $shortnerUrl = $this->em->getRepository('App:ShortnerUrl')
                        ->findOneByHash(base64_decode($routeParameters['path']));

            if ($shortnerUrl instanceof ShortnerUrl) {
                return $this->redirect(
                    $shortnerUrl->getOriginalUrl()
                );
            }
        } catch (\Throwable $th) {

            $this->logger->error('An error occurred' . $th->getMessage());
            throw new \Exception('Something went wrong!');
        }
        throw $this->createNotFoundException('The shortner url not exist');
    }
}