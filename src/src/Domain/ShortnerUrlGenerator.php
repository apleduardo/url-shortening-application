<?php

namespace App\Domain;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ShortnerUrlGenerator
{
    private $params;

	public function __construct(
		ParameterBagInterface $params
	) {
		$this->params = $params;
	}

    public function build(String $urlShortner): \stdClass
    {
        $urlObject = new \stdClass();
		$urlObject->url = $this->params->get('base_url') . base64_encode($urlShortner);
        return $urlObject;
    }
}