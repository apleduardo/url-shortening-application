<?php
namespace App\GraphQL\Resolver;

use Overblog\GraphQLBundle\Definition\Argument;
use Overblog\GraphQLBundle\Definition\Resolver\AliasedInterface;
use Overblog\GraphQLBundle\Definition\Resolver\ResolverInterface;

class ShortnnerUrlResolver implements ResolverInterface, AliasedInterface
{
	public function resolve(Argument $argument)
	{   
        $data = ['test', 'ola'];
        return  (object)[
                'url' => $data[$argument['url']]
        ];
	}

	public static function getAliases() : array
	{
		return [
			'resolve' => 'ShortnnerUrl'
		];
	}
}