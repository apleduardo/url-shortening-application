<?php
namespace App\GraphQL\Mutation;

use Doctrine\ORM\EntityManager;
use OverBlog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\MutationInterface;
use App\Entity\ShortnerUrl as ShortnerUrlEntity;
use App\Domain\ShortnerUrlHashGenerator as UrlHashGenerator;
use App\Domain\ShortnerUrlGenerator as UrlGenerator;

class ShortnerUrlCreateMutation implements MutationInterface, AliasedInterface
{
	private $em;
	private $params;
	private $urlGenerator;

	public function __construct(
		EntityManager $em,
		UrlGenerator $urlGenerator
	) {
		$this->em = $em;
		$this->urlGenerator = $urlGenerator;
	}

	public function createShortner(Argument $args) : \stdClass
	{
		$input = $args['input'];

        $urlHashGenerator = new UrlHashGenerator();
        $urlHash = $urlHashGenerator->build($input['originalUrl']);

		$shortnerUrlEntity = $this->em->getRepository('App:ShortnerUrl')->findOneByHash($urlHash);

        if ($shortnerUrlEntity instanceof ShortnerUrlEntity) {
            return $this->urlGenerator->build($shortnerUrlEntity->getHash());
        }

		$shortnerUrlEntity = new ShortnerUrlEntity();
		$shortnerUrlEntity->setHash($urlHash);
		$shortnerUrlEntity->setOriginalUrl($input['originalUrl']);
        $shortnerUrlEntity->setCreateDate(new \DateTime('NOW'));
		$this->em->persist($shortnerUrlEntity);
		$this->em->flush();

		return $this->urlGenerator->build($urlHash);
	}

	public static function getAliases() : array
	{
		return [
			'createShortner' => 'create_shortner'
		];
	}
}